<?php

/**
* 
*/
class QueryBuilder 
{
	protected $pdo;
	
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
	}
}