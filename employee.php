<?php

class Employee extends User
{
    private $data;
    /*
    inherited from User
    function __construct($phoneNumber, $email, $username, $password)
    {
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }
    */

    function add_data($NewData)
    {
        array_push($data, $NewData);
    }

    function update_data($oldData, $NewData)
    {
        for ($i = 0; $i < count($this->data); $i++) {
            if($this->data[$i] == $oldData) {
                $this->data[$i] = $NewData;
            }
        }
    }

    function delete_data($oldData)
    {
        for ($i = 0; $i < count($this->data); $i++) {
            if($this->data[$i] == $oldData) {
                unset($this->data[$i]);
            }
        }
    }

    function to_array()
    {
        return $this->data;
    }
}