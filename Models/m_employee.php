<?php

class Employee extends User
{

    private $role;
    private $department;

    public function __construct($username, $password, $email, $phoneNumber, $department)
    {
        parent::__construct($username, $password, $email, $phoneNumber);
        $this->department = $department;
        $this->role = 0;
    }
    function set_department($dep){
        $this->department = $dep;
    }
    function get_department()
    {
        return $this->department;
    }

    function get_role()
    {
        return $this->role;
    }

    function to_array()
    {
        return [
            'username' => $this->get_username(),
            'password' => $this->get_password(),
            'email' => $this->get_email(),
            'phone' => $this->get_phone_number(),
            'department' => $this->get_department(),
            'admin' => $this->get_role()
        ];
    }
}