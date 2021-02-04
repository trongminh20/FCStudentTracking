<?php
class Admin extends User{

    public function __construct($username, $password, $email, $phoneNumber){
        parent::__construct($username, $password, $email, $phoneNumber);
    }

    public function create_account (){

    }

    public function delete_account(){}

    public function reset_password(){}

}