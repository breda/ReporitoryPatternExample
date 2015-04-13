<?php namespace App\DataPersisters;

use App\Models\Event;

class InMemoryDataPersister implements DataPersister
{

  /**
   * Data
   *
   * @var SplObjectStorage
   */
  protected $data;
  
  /**
   * The Constructor
   *
   * @return void
   */
  public function __construct() {
    $this->data = new SplObjectStorage();
  };
  
  /**
   * Store an event
   * 
   * @param  $event Event
   * @return void
   */
  public function persist(Event $event) {
    $this->data->attach($event);
  }
  
  /**
   * Delets a stored event
   * 
   * @param  $event   Event
   * @return bool
   */
  public function retrieve(Event $event) {
    $this->data->detach($event);
  }
  
  /**
   * Get all stored data
   *
   * @return array    Array of data
   */
  public function all() {
    $data = array();
    
    foreach($this->data as $event){
      array_push($data, $event);
    }
    
    return $data;
  }
  
  /**
   * Check if an event exists in data storage.
   *
   * @param  $event Event
   * @return bool
   */
  public function has(Event $event) {
    return $this->data->contains($event) ? true : false;
  }
  
}