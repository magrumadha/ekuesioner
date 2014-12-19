<?php
class crud extends PDO {
	private $engine;
	private $host;
	private $database;
	private $user;
	private $pass;
	private $result;

	public function __construct() {
		require "config.db.php";
		$this -> engine = 'mysql';
		$this -> host = $dbhost;
		$this -> dbname = $dbname;
		$this -> dbuser = $dbuser;
		$this -> dbpass = $dbpass;
		$dns = $this -> engine . ':dbname=' . $this -> dbname . ";host=" . $this -> dbhost;
		parent::__construct($dns, $this -> dbuser, $this -> dbpass);
	}

	/*
	 * Insert values into the table
	 */
	public function insert($table, $rows = null) {
		$command = 'INSERT INTO ' . $table;
		$row = null;
		$value = null;
		$nn = null;
		foreach ($rows as $key => $nilainya) {
			$row .= "," . $key;
			$value .= ", :" . $key;
			//$nn .= ",".$nilainya;
		}

		$command .= "(" . substr($row, 1) . ")";
		$command .= "VALUES(" . substr($value, 1) . ")";

		//echo $command;
		//echo $nn;
		$stmt = parent::prepare($command);
		$stmt -> execute($rows);
		$rowcount = $stmt -> rowCount();
		return $rowcount;
	}

	/*
	 * Delete records from the database.
	 */
	public function delete($tabel, $where = null) {
		$command = 'DELETE FROM ' . $tabel;

		$list = Array();
		$parameter = null;
		foreach ($where as $key => $value) {
			$list[] = "$key = :$key";
			$parameter .= ', ":' . $key . '":"' . $value . '"';
		}
		$command .= ' WHERE ' . implode(' AND ', $list);

		$json = "{" . substr($parameter, 1) . "}";
		$param = json_decode($json, true);

		$query = parent::prepare($command);
		$query -> execute($param);
		$rowcount = $query -> rowCount();
		return $rowcount;
	}

	/*
	 * Uddate Record
	 */
	public function update($tabel, $fild = null, $where = null) {
		$update = 'UPDATE ' . $tabel . ' SET ';
		$set = null;
		$value = null;
		foreach ($fild as $key => $values) {
			$set .= ', ' . $key . ' = :' . $key;
			$value .= ', ":' . $key . '":"' . $values . '"';
		}
		$update .= substr(trim($set), 1);
		$json = '{' . substr($value, 1) . '}';
		$param = json_decode($json, true);

		if ($where != null) {
			$update .= ' WHERE ' . $where;
		}

		$query = parent::prepare($update);
		$query -> execute($param);
		$rowcount = $query -> rowCount();
		return $rowcount;
	}

	/*
	 * Selects information from the database.
	 */
	public function select($table, $rows, $where = null, $order = null, $limit = null) {
		$command = 'SELECT ' . $rows . ' FROM ' . $table;
		if ($where != null)
			$command .= ' WHERE ' . $where;
		if ($order != null)
			$command .= ' ORDER BY ' . $order;
		if ($limit != null)
			$command .= ' LIMIT ' . $limit;

		$query = parent::prepare($command);
		$query -> execute();
		return $query -> fetchAll(PDO::FETCH_ASSOC);
		/*

		 $posts = array();
		 while($row = $query->fetch(PDO::FETCH_ASSOC))
		 {
		 $posts[] = $row;
		 }
		 return $this->result = json_encode(array('post'=>$posts));
		 */
	}

	public function select2($table, $rows, $where = null, $order = null, $limit = null) {
		$command = 'SELECT ' . $rows . ' FROM ' . $table;
		if ($where != null)
			$command .= ' WHERE ' . $where;
		if ($order != null)
			$command .= ' ORDER BY ' . $order;
		if ($limit != null)
			$command .= ' LIMIT ' . $limit;

		$query = parent::prepare($command);
		$query -> execute();
		return $query;
		/*

		 $posts = array();
		 while($row = $query->fetch(PDO::FETCH_ASSOC))
		 {
		 $posts[] = $row;
		 }
		 return $this->result = json_encode(array('post'=>$posts));
		 */
	}

	/*
	 * Returns the result set
	 */
}
?>