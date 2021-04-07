<?php
class Form{

	public function __construct($formAttributes, $formName=""){
	    echo "<h1>".$formName."</h1>";
		echo "<form ".$this->setup($formAttributes).">";
	}


	public function add_input($inputAttributes){
		echo "<input ".$this->setup($inputAttributes).">";
	}

	public function add_textarea($inputAttributes){
		echo "<textarea ".$this->setup($inputAttributes)."></textarea>";
	}

	public function add_selection($attributes, $options){
		echo "<select ".$this -> setup($attributes).">";
		foreach($options as $op=>$val):
			echo "<option value='".$op."'>".$val."</option>";
		endforeach;
		echo "</select>";
	}

	public function add_label($attributes, $l){
		echo "<label ".$this->setup($attributes).">".$l."</label>";
	}

	public function add_fieldset($attributes){
		echo "<fieldset " . $this->setup($attributes).">";

	}

	public function end_fieldset(){
		echo "</fieldset>";
	}

	public function add_legend($attributes, $val){
		echo "<legend ".$this->setup($attributes).">".$val."</legend>";
	}
	public function end_form(){
		echo "</form>";
	}

	private function setup($attributes){
		$setting = "";

		foreach($attributes as $key => $value){
			$setting .= $key ."= '".$value."'";
		}

		return $setting;
	}

}