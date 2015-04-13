<?php namespace App\DataPersisters;

interface DataPersister {

	/**
	 * Persist data
	 * @param  mixed $data
	 * @return bool
	 */
	public function persist($data);

	/**
	 * Retrive data.
	 * @param  mixed $data
	 * @return mixed
	 */
	public function retrieve($data);

	/**
	 * Data exists ?
	 * @param  mixed  $data
	 * @return bool
	 */
	public function has($data);

	/**
	 * Get all persisted data.
	 * 
	 * @return array
	 */
	public function all();

}
?>