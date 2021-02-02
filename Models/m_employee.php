<?php
/* Changes need to be done:
 * Add explanation comment that I mentioned in style_guide
 * TODO:
 * - add constructor
 * - add position of Employee
 * - add getter and setter functions if needed
 * - add toArray functino
*/
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

    //this is not what we expected
    function to_array()
    {
        return $this->data;
    }
}
