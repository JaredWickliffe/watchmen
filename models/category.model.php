<?php

require_once'../libraries/config.class.php';

class Category{

	private $properties = array();
	private $db;
	public $table = 'tb_categories';

	public function __construct($id = false){
		$this->db= new Database(
			Config:: $hostname,
			Config:: $username,
			Config:: $password,
			Config:: $database
			);

		if($id) $this->load($id);

	}

	public function load($id){

		$this->properties = $this->db
			->select('*')
			->from($this->table)
			->where('id', $id)
			->get_one();
	}

	public function __set($var, $val){
		$this->properties[$var] = $val;
	}

	public function __get($var){
		if(isset($this->properties[$var])){
			return $this->properties[$var];
		}else{
			return false;
		}
	}

	public function save(){
		if($this->name != ''){

			$this->db
				->set(array(
					'name' => $this->name,
					'deleted' => $this->deleted
				))
				->where('id', $this->id)
				->update('tb_categories');
		}
	}

	public function create(){
		$this->db
			->set(array(
				'name' => $this->name,
				'deleted' => $this->deleted
			))
			->insert('tb_categories');
	}

	public function delete(){
		$this->deleted = 1;
		$this->save();
	}
}