<?php

require_once'../libraries/config.class.php';

class Product_collection{

	public $items = array();
	public $featured = array();
	private $db;

	public function __construct($id = false){
		$this->db= new Database(
			Config:: $hostname,
			Config:: $username,
			Config:: $password,
			Config:: $database
			);

		$this->db
			->select('*')
			->from('tb_products')
			->where('deleted', '0')
			->order_by('name', 'ASC');

		if($id){
			$this->db->where_and('category_id', $id);
		}
			
		$this->items = $this->db->get();

		$this->featured = $this->db
			->select('*')
			->from('tb_products')
			->where_and('deleted', '0')
			->get();
	}
}