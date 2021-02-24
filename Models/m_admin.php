<?php
class Admin extends User{
    private $role;

    public function __construct(){
        parent::__construct();
    }

    public function Admin($id, $username, $password, $email, $phoneNumber, $department){
        parent::User($id, $username, $password, $email, $phoneNumber, $department);
        $this->role = 1;
    }


    function get_role()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function set_role($role)
    {
        $this->role = $role;
    }

    function to_array()
    {
        return [
            'id'=>$this->get_id(),
            'username' => $this->get_username(),
            'password' => $this->get_password(),
            'email' => $this->get_email(),
            'phone' => $this->get_phone_number(),
            'department' => $this->get_department(),
            'admin' => $this->get_role()
        ];
    }
}