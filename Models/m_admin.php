<?php
class Admin extends User{
    private $department;
    private $role;
    public function __construct($username, $password, $email, $phoneNumber, $department){
        parent::__construct($username, $password, $email, $phoneNumber);
        $this->department = $department;
        $this->role = 1;
    }

    function get_department()
    {
        return $this->department;

    }

    function set_department($department){
        $this->department = $department;
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