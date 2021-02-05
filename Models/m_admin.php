<?php
class Admin extends User{
    private $department;

    public function __construct($username, $password, $email, $phoneNumber, $department){
        parent::__construct($username, $password, $email, $phoneNumber);
        $this->department = $department;
    }

    public function create_account (){
    }

    public function delete_account(){}

    public function reset_password(){}

}