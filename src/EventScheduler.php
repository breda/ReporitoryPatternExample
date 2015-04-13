<?php namespace App;

use App\Repositories\Events\EventsRepository;
use App\Models\Event;

/**
 * This class just handles events... 
 */
class EventScheduler {
  
  /**
   * The events repository
   * 
   * @var EventsRepository
   */
  protected $events;
  
  /**
   * The Constructor
   * 
   * @param  $events EventsRepository
   * @return void
   */
  public function __construct(EventsRepository $events) {
    $this->events = $events;
  }
  
  /**
   * Save an event
   * 
   * @param  $event Event The event objtct to be saved.
   * @return void
   */
  public function save(Event $event) {
    $this->events->store($event);
  }
  
  // Other event scheduling stuff...

}
