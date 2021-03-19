<?php
class User{
    private $id;
    private $username;
    private $password;
    private $email;
    private $phoneNumber;
    private $department;
    private $officeNumber;

    /**
     * default constructor with no parameters
     * User constructor.
     */
    public function __construct(){}

    /**
     * Defined constructer with parameters
     * @param $id
     * @param $username
     * @param $password
     * @param string $email
     * @param string $phoneNumber
     */
    public function User($id, $username, $password, $email= "", $phoneNumber="", $department, $officeNumber){
        $this->id = $id;
        $this->username = $username;
        $this->password = SHA1($password);
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->department = $department;
        $this->officeNumber = $officeNumber;
    }

    /**
     * @return mixed
     */
    public function get_department()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function set_department($department)
    {
        $this->department = $department;
    }

    function get_id(){
        return $this->id;
    }

    function get_username(){
        return $this->username;
    }

    function set_password($password){
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

    /**
     * @param mixed $officeNumber
     */
    public function set_office_number($officeNumber)
    {
        $this->officeNumber = $officeNumber;
    }

    /**
     * @return mixed
     */
    public function get_office_number()
    {
        return $this->officeNumber;
    }

    /**this function is used for testing
     * @return string
     */
    function print_out(){
        return "this is from user";
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

     /**
     * return an array that store the data of a users
     * in format [key => values]
     * @return array
     */
//    function to_array(){
//        return [
//            'id' =>$this->get_id(),
//            'username'=>$this->get_username(),
//            'password'=> $this->get_password(),
//            'email' => $this->get_email(),
//            'phone'=> $this->get_phone_number(),
//            'department' => $this->get_department(),
//            'office_number' => $this->get_office_number()
//        ];
//    }
}