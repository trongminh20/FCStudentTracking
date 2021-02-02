<?php
class User{
    private $username;
    private $password;
    private $email;
    private $phoneNumber;

    public function __construct($username, $password, $email= "", $phoneNumber=""){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }

    function get_username(){
        return $this->username;
    }

    function change_password($password){
        $this->password = $password;
    }

    function get_email(){
        return $this->email;
    }
    function change_email($email){
        $this->email = $email;
    }

    function get_phone_number(){
        return $this->phoneNumber;
    }

    function change_phone_number($pNumber){
        $this->phoneNumber = $pNumber;
    }

    function toArray(){
        return [
            'username'=>$this->username,
            'password'=> $this->password,
            'email' => $this->email,
            'phone_number'=> $this->phoneNumber
        ];
    }

}