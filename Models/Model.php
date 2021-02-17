<?php

class Model{
    protected $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

     /**
     * to check if the username existed
     * @param $user
     * @param $pass
     * @return int
     */
    function sign_in($user, $pass){
        return $this->db->log_in($user, $pass);
    }

    function select_user($username){
        return $this->db->select_user($username);
    }
    function select_data($table){
        return $this->db->select_multiple($table);
    }
    /**
     * Function create user for admin
     * @param $table
     * @param User $user
     */
    function create_user($table, User $user){
        $data = $user->to_array();
        $this->db->insert($table,$data);
    }

    /**
     * Function delete user for admin
     * @param $table
     * @param $id
     */
    function delete_user($table, $id){
        $this->db->delete($table, $id);
    }
    function reset_password($username){

    }
    /**
     * adding request into table admin, lets admin know if any request existing
     * @param $user
     */
    function request_reset_password(Request $request){
        $this->db->insert('Requests',$request->to_array());
    }

}