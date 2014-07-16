<?php

class Form{

	public function open($action = '', $method = 'post', $extras = ''){
		$html = "<form action='$action' method='$method' $extras>";
		return $html;
	}

	public function legend($value){
		$html = "<legend>$value</legend>";
		return $html;
	}

	public function close(){
		return '</form>';
	}

	public function input($type, $name, $value = '', $extras = ''){
		$html = "<input type='$type' id='$name' name='$name' value='$value' $extras>";
		return $html;
	}

	public function label($for, $text){
		$html = "<label for='$for'>$text</label>";
		return $html;
	}

	public function textarea($name, $value = ''){
		$html = "<textarea id='$name' name='$name'>$value</textarea>";
		return $html;
	}

	public function options($values){
		$html = '';
		foreach($values as $value => $text){
			$html .= "<option value='$value'>$text</option>";
		}
		return $html;
	}

	public function select($name, $values){
		$html = "<select name='$name' id='$name'>";
		$html .= self::options($values);
		$html .= '</select>';
		return $html;
	}

	public function file($name = 'file'){
		$html = self::input('file', $name.'[]');
		return $html;
	}

	public function submit($text = 'Submit'){
		$html = "<input type='submit' value='$text'>";
		return $html;
	}
}