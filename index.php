<?php
require "./vendor/autoload.php";

use App\EventScheduler;
// Models
use App\Models\Event;
// Repositories 
use App\Repositories\Events\MySQLEventsRepository;
use App\Repositories\Events\MongoEventsRepository;
use App\Repositories\Events\InMemoryEventsRepository;
// Data Persisters
use App\DataPersisters\MySQLDataPersister;
use App\DataPersisters\MongoDBDataPersister;
use App\DataPersisters\InMemoryDataPersister;


// When using a MySQL Database
$eventScheduler = new EventScheduler(new MySQLEventsRepository(new MySQLDataPersister));
$eventScheduler->save(new Event("BSides", "ESI", "April 17"));
$eventScheduler->save(new Event("Algeria Web 2.0", "Somewhere", "This Year"));


// When using a MongoDB database
$eventScheduler = new EventScheduler(new MongoEventsRepository(new MongoDBDataPersister));
$eventScheduler->save(new Event("BSides", "ESI", "April 17"));
$eventScheduler->save(new Event("Algeria Web 2.0", "Somewhere", "This Year"));


// InMemory implementation... 
// This implementation uses SplObjectStorage which is not a persistence utility.
// This would make sence as a in-memory persister if it used SQLite instead. But just for 
// testing purposes, and for clarity. SplObjectStorage is used.
$eventScheduler = new EventScheduler(new InMemoryEventsRepository(new InMemoryDataPersister));
$eventScheduler->save(new Event("BSides", "ESI", "April 17"));
$eventScheduler->save(new Event("Algeria Web 2.0", "Somewhere", "This Year"));
