<?php namespace App\Models;

class Event
{
	
	/**
	 * The name of the event.
	 * 
	 * @var string
	 */
	protected $name;

	/**
	 * The place where the event is held.
	 * 	
	 * @var String
	 */
	protected $place;

	/**
	 * The date of the event.
	 * 
	 * @var string
	 */
	protected $date;

	/**
	 * The constructor.
	 * 
	 * @param string $name  
	 * @param string $place 
	 * @param string $date
	 */
	function __construct($name, $place, $date)
	{
		$this->setName($name);
		$this->setPlace($place);
		$this->setDate($date);
	}

	/**
	 * Name getter
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Name setter.
	 * 
	 * @param  string $name
	 * @return void
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * Place getter
	 * @return string
	 */
	public function getPlace()
	{
		return $this->place;
	}

	/**
	 * Place setter.
	 * 
	 * @param  string $place
	 * @return void
	 */
	public function setPlace($place)
	{
		$this->place = $place;
	}

	/**
	 * Date getter
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * Date setter.
	 * 
	 * @param  string $date
	 * @return void
	 */
	public function setDate($date)
	{
		$this->date = $date;
	}
}