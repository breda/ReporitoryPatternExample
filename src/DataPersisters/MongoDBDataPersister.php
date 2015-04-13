<?php namespace App\DataPersisters;

class MongoDBDataPersister implements DataPersister
{

	/**
	 * Persist data
	 * @param  mixed $data
	 * @return bool
	 */
	public function persist($data) {
		// some MongoDB logic
	}

	/**
	 * Retrive data.
	 * @param  mixed $data
	 * @return mixed
	 */
	public function retrieve($data) {
		// some MongoDB logic
	}

	/**
	 * Data exists ?
	 * @param  mixed  $data
	 * @return bool
	 */
	public function has($data) {
		// some MongoDB logic
	}

	/**
	 * Get all persisted data.
	 * 
	 * @return array
	 */
	public function all() {
		// some MongoDB logic
	}

}