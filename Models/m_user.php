<?php
class User{
    private $id;
    private $username;
    private $password;
    private $email;
    private $department;
    private $phoneNumber;
    private $admin;

    /**
     * default constructor with no parameters
     * User constructor.
     */
    public function __construct(){}

    /**
     * @param mixed $department
     */
    public function set_department($department)
    {
        $this->department = $department;
    }

    /**
     * @param mixed $admin
     */
    public function set_admin($admin)
    {
        $this->admin = $admin;
    }

    /**
     * @return mixed
     */
    public function get_department()
    {
        return $this->department;
    }

    /**
     * @return mixed
     */
    public function get_admin()
    {
        return $this->admin;
    }

    /**
     * Defined constructer with parameters
     * @param $id
     * @param $username
     * @param $password
     * @param string $email
     * @param string $phoneNumber
     */
    public function User($id, $username, $password,$department, $email= "", $phoneNumber=""){
        $this->id = $id;
        $this->username = $username;
        $this->password = SHA1($password);
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this -> department = $department;
        $this->admin = 0;

    }

    function get_id(){
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function set_id($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $username
     */
    public function set_username($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $email
     */
    public function set_email($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function set_phone_number($phoneNumber)
    {
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
    function get_password(){
        return $this->password;
    }
    function change_phone_number($pNumber){
        $this->phoneNumber = $pNumber;
    }

    /**this function is used for testing
     * @return string
     */
    function print_out(){
        return "this is from user";
    }

    /**
     * return an array that store the data of a users
     * in format [key => values]
     * @return array
     */
    function to_array(){
        return [
            'id' =>$this->get_id(),
            'username'=>$this->get_username(),
            'password'=> $this->get_password(),
            'email' => $this->get_email(),
            'Department'=>$this->get_department(),
            'phone'=> $this->get_phone_number(),
            'admin'=>$this->get_department()
        ];
    }

}