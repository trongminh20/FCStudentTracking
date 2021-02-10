<?php
class Student{
	private $id;
	private $progID;
	private $name;
	private $phone;
	private $email;
	private $address;
	private $domOrInt;
	private $note;
	private $status;

	public function __construct($id, $prID, $name, $phone, $email, $address, $dOrI, $note, $status ){
		$this -> id 	= $id;
		$this -> progID = $prID;
		$this -> name 	= $name;
		$this -> phone 	= $phone; 
		$this -> email 	= $email;
		$this -> note 	= $note;
		$this -> address  	= $address;
		$this -> domOrInt 	= $dOrI;
		$this -> status 	= $status;
	}

	function get_id(){
		return $this -> id;
	}
	function get_prog_id(){
		return $this -> progID;
	}
	function get_name(){
		return $this -> name;
	}
	function get_email(){
		return $this -> email;
	}
	function get_address(){
		return $this -> address;
	}
	function get_dOrI(){
		return $this -> domOrInt;
	}
	function get_note(){
		return $this -> note;
	}
	function get_status(){
		return $this -> status;
	}

	public function to_ar
		return [
		 'id' => $this -> get_id(),
		 'prog_ID' => $this -> get_prog_id(),
		 'name ' => $this -> get_name(),	
		 'phone' => $this -> get_phone(),	 
		 'email' => $this -> get_email(),	
		 'address' => $this -> get_address(),
		 'dom_Or_Int' => $this -> get_dOrI(),
		 'Enroll_note' => $this -> get_note(),
		 'admin_status' => $this -> get_status()
		];
	}

}