<?php


session_start();

class Cart{

	public static function add_product($id, $amount){

		self::create_cart();

		if(isset($_SESSION['cart'][$id])){

			$_SESSION['cart'][$id]+= intval($amount);
			if ($_SESSION['cart'][$id] > 100){
				
				$_SESSION['cart'][$id] = 100;
			}
		}else{

			$_SESSION['cart'][$id]= intval($amount);
		}

		
	}

	public static function get_total(){
		self::create_cart();

		$amount = 0;

		foreach ($_SESSION['cart'] as $quantity) {
			$amount += 1;
		}
		return $amount;
	}

	public static function remove_product($id){
		unset($_SESSION['cart'][$id]);
	}

	public static function create_cart(){

		if(isset($_SESSION['cart'])==false){
			$_SESSION['cart'] = array();
		}
	}

	public static function set_quantity($id, $amount){
		self::create_cart();

		$_SESSION['cart'][$id]= intval($amount);
	}



}