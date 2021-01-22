<?php
class User extends Model{

    private $username;
    private $password;
    private $email;
    private $phoneNumber;

    public function __construct($username, $password, $email="", $phoneNumber=""){
//        parent::__construct();
        $this->username = $username;
        $this->password = SHA1($password);
        $this->email = $email;
        $this->phoneNumber= $phoneNumber;

    }

    function get_username(){}

    function change_password(){}

    function get_email(){}

    function get_phone_number(){}

    function update_email(){}

    function update_phone_number(){}

    
}