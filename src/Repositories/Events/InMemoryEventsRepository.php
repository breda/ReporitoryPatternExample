<?php namespace App\Repositories\Events;

use App\DataPersisters\DataPersister;
use App\Models\Event;

class InMemoryEventsRepository implements EventsRepository {

  /**
   * InMemory data persister
   * @var InMemoryDataPersister
   */
  protected $persister;  

  /**
   * The Constructor.
   * @param DataPersister $persister
   */
  public function __construct(DataPersister $persister)
  {
    $this->persister = $persister;
  }

  /**
   * Store an event
   * 
   * @param  $event Event
   * @return void
   */
  public function store(Event $event) {
    $this->persister->persist($event);
  }
  
  /**
   * Delets a stored event
   * 
   * @param  $event   Event
   * @return bool
   */
  public function delete(Event $event) {
    $this->persister->retrieve($event);
  }
  
  /**
   * Get all stored events
   *
   * @return array    Array of Events
   */
  public function all() {
    return $this->persister->all();
  }
  
  /**
   * Check if an event exists in data storage.
   *
   * @param  $event Event
   * @return bool
   */
  public function exists(Event $event) {
    return $this->persister->has($event);
  }

}

?>