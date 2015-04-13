<?php namespace App\Repositories\Events;

interface EventsRepository {
  
  /**
   * Store an event
   * 
   * @param  $event Event
   * @return void
   */
  public function store(Event $event);
  
  /**
   * Delets a stored event
   * 
   * @param  $event   Event
   * @return bool
   */
  public function delete(Event $event);
  
  /**
   * Get all stored events
   *
   * @return array    Array of Events
   */
  public function all();
  
  /**
   * Check if an event exists in data storage.
   *
   * @param  $event Event
   * @return bool
   */
  public function exists(Event $event);
  
}

?>