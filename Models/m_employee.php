<?php

class Employee extends User
{

    private $role;


    public function __construct()
    {
    }

    public function Employee($id,$username, $password, $email, $phoneNumber, $department)
    {
        parent::User($id, $username, $password, $email, $phoneNumber, $department);
        $this->role = 0;
    }
    /**
     * @param mixed $role
     */
    function set_role($role)
    {
        $this->role = $role;
    }

    function get_role()
    {
        return $this->role;
    }

    function to_array()
    {
        return [
            'id' =>$this->get_id(),
            'username' => $this->get_username(),
            'password' => $this->get_password(),
            'email' => $this->get_email(),
            'phone' => $this->get_phone_number(),
            'department' => $this->get_department(),
            'admin' => $this->get_role()
        ];
    }
}