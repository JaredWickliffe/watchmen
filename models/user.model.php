<?php

require_once '../libraries/model.class.php';
require_once '../libraries/hash.class.php';

class User extends Model{

	# For finding the user id from username and password inputs
	public function authenticate(){

		# Get the salt
		$user = $this->db
			->select('*')
			->from($this->table)
			->where('username', $this->data['username'])
			->get_one();
		
		# If the query returns a result (i.e. a user exists with that username and password combination)
		if(Hash::check($this->data['password'],$user['password'])){
			# Get this user's id and return true
			$this->data = $user;
			return true;
		}else{
			return false;
		}	
	}

	public function user_save(){
	# If this id is 0, then no user has already been loaded
	if($this->id == 0){
		$success = $this->db
			->set(array(
				'username' => $this->username,
				'password' => Hash::make($this->password)
			))
			->insert('tb_users');
		$this->id=$this->db->last_insert_id;
	}else{
		$success = $this->db
			->set(array(
				'username' => $this->username,
				'password' => Hash::make($this->password)
			))
			->where('id', $this->id)
			->update('tb_users');
	}

	return $success;
	}
}