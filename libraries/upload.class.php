<?php

class Upload{

	public static function to_folder($folder){

		$file   = $_FILES['file']['name'][0];
		$tmp    = $_FILES['file']['tmp_name'][0];
		$error  = $_FILES['file']['error'][0];

		# If there is no error
		if($error == 0){
			move_uploaded_file($tmp, $folder.$file);
			return $folder.$file;
		}else if($error == 1 || $error == 2){
			# 1 = file size exceeds server limit; 2 = file size exceeds HTML form limit
			echo 'The file you are attempting to upload is too large';
			return false;
		}else if($error == 3){
			# 3 = File was only partially uploaded
			echo 'The file you are attempting to upload is incomplete';
			return false;
		}else if($error == 4){
			# 4 = No file uploaded
			echo 'No file uploaded';
			return false;
		}else{
			# 6, 7, 8 are all server side errors (5 does not exist)
			echo 'Unknown error';
			return false;
		}
	}

	public static function call_filenames(){
		$html = '';

		foreach(self::$filenames as $path){
			$html .= "<a href='$path'><img src='$path' alt='$path'></a>";
		}

		return $html;
	}

}