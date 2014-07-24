<?php

require_once '../models/user.model.php';

session_start();

class Login{

	public static $error = '';

	public static function display_error(){
		return self::$error;
	}
	public static function log_in($user_type){
		$_SESSION['logged_in_'.$user_type]=true;
	}

	public static function log_out(){
		$_SESSION['logged_in_admin']=false;
		$_SESSION['logged_in_user']=false;
		$_SESSION['cart']=array();
	}

	public static function kickout(){
		if($_SESSION['logged_in_admin']==false){
			header('location: index.php');
			exit;
		}
	}

	public static function kickout_nonuser(){
		if(($_SESSION['logged_in_user'] || $_SESSION['logged_in_admin']) == false){
			header('location: index.php');
			exit;
		}
	}

	public static function is_logged_in(){
		return $_SESSION['logged_in'];
	}

	public static function sign_in(){
		$user  = new User('tb_users');
		$admin = new User('tb_admin');

		$user->username=$_POST['signin_username'];
		$user->password=$_POST['signin_password'];

		$admin->username=$_POST['signin_username'];
		$admin->password=$_POST['signin_password'];

		if($admin->authenticate()){
			self::log_in('admin');
			header('location: admin.php');
			exit;
		}else if($user->authenticate()){
			self::log_in('user');
		}else{
			self::$error = 'Incorrect Username or Password';
		}
	}

	public static function register(){
		$user = new User('tb_users');

		if($_POST['register_password'] == $_POST['register_confirm_password'] && strlen($_POST['register_username']) >= 4 && strlen($_POST['register_password']) >= 4){

			$user->username=$_POST['register_username'];
			$user->password=$_POST['register_password'];

			$user->user_save();
			if ($user->user_save()){
				self::log_in('user');
			}
		}		
	}
}