<?php

require_once'../libraries/config.class.php';

class Product{

	private $properties = array();
	private $db;
	public $table = 'tb_products';

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

	public function create(){
		$this->db
			->set(array(
				'name'        => $this->name,
				'deleted'     => $this->deleted,
				'description' => $this->description,
				'price'       => $this->price,
				'mass'        => $this->mass,
				'image'       => $this->image,
				'featured'	  => $this->featured,
				'thumb'	      => $this->thumb,
				'xpos'        => $this->xpos,
				'ypos'        => $this->ypos,
				'category_id' => $this->category_id
			))
			->insert('tb_products');
	}

	public function save(){
		if($this->name != ''){

			$this->db
				->set(array(
				'name'        => $this->name,
				'deleted'     => $this->deleted,
				'description' => $this->description,
				'price'       => $this->price,
				'mass'        => $this->mass,
				'image'       => $this->image,
				'featured'	  => $this->featured,
				'thumb'	      => $this->thumb,
				'xpos'        => $this->xpos,
				'ypos'        => $this->ypos,
				'category_id' => $this->category_id
			))
				->where('id', $this->id)
				->update('tb_products');
		}
	}
}