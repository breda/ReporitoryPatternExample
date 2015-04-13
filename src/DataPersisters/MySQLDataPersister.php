<?php namespace App\DataPersisters;

class MySQLDataPersister implements DataPersister
{

	/**
	 * Persist data
	 * @param  mixed $data
	 * @return bool
	 */
	public function persist($data) {
		// some MySQL logic
	}

	/**
	 * Retrive data.
	 * @param  mixed $data
	 * @return mixed
	 */
	public function retrieve($data) {
		// some MySQL logic
	}

	/**
	 * Data exists ?
	 * @param  mixed  $data
	 * @return bool
	 */
	public function has($data) {
		// some MySQL logic
	}

	/**
	 * Get all persisted data.
	 * 
	 * @return array
	 */
	public function all() {
		// some MySQL logic
	}

}