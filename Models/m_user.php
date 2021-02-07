<?php
class User{
    private $username;
    private $password;
    private $email;
    private $phoneNumber;

    public function __construct($username, $password, $email= "", $phoneNumber=""){
        $this->username = $username;
        $this->password = SHA1($password);
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
            'username'=>$this->get_username(),
            'password'=> $this->get_password(),
            'email' => $this->get_email(),
            'phone'=> $this->get_phone_number()
        ];
    }

}