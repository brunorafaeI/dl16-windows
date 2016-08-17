<?php 
namespace app\database;
use app\database\Conexion;

Class DB extends Conexion {
	private $select = NULL;
	private $from 	= NULL;
	private $where	= NULL;
	private $join;
	private $order	= NULL;

	public function select(){
		$selects = func_get_args();
		if(count($selects) > 0):
			$this->select = implode(",", $selects);
		endif;
		return $this;
	}

	public function from(){
		$froms = func_get_args();
		if(count($froms) > 0):
			$this->from = implode(",", $froms);
		endif;
		return $this;
	}

	public function where($field, $value){
		$this->where = $field.' '.$value;
		return $this;
	}

	public function join($table, $join){
		if(func_num_args() != 2):
			trigger_error('Le méthode JOIN a besoin de deux paramètres');
		endif;
		//$this->join = ['table' => $table, 'join' => $join];
		//return $this->join;
		$this->join[$table] = $join;
		//dump($this->join);
		return $this;
	}

	public function order($field, $order){
		$this->order = $field.' '.$order;
		return $this;

	}

	public function queryBuilder(){
		$query = 'SELECT ';

		if(is_null($this->select)):
			$query .= '*';
		endif;
		$query .= $this->select .' FROM ';

		if(is_null($this->from)):
			$this->from = 'auteur';
		endif;
		$query .= $this->from;

		if(!is_null($this->join)):
			//dump($this->join);
			foreach($this->join as $table => $join):
				$query .= ' INNER JOIN '.$table.' ON '.$join;
			endforeach;
		endif;

		return $query;
	}

	public function lister(){
		$pdo = parent::getDB();
		$result = $pdo->prepare(self::queryBuilder());
		$result->execute();
		return $result->fetchAll();
	}


	
}//fin class.
