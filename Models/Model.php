<?php

class Model{
    private $db;

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

    function select_user( $username){
        return $this->db->select_user($username);
    }

    /**
     * @param $table
     * @param $unsetCols is a column that does not show
     * @return array|false
     */
    function select_data($table, $unsetCols=""){
        $data = $this->db->select_multiple($table);
        if($unsetCols != "") {
            for ($i = 0; $i < count($data); $i++) {
                foreach ($data[$i] as $k => $v) {
                    if ($k == $unsetCols) {
                        unset($data[$i][$unsetCols]);
                    }
                }
            }
        }
        return $data;
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
    function delete($table, $col, $val){
        $this->db->delete($table, $col, $val);
    }

    /**
     * reset user password as newPass
     * @param $id
     * @param $newPass
     */
    function reset_password($id, $newPass){
        $this->db->update("Employees",$newPass, $id);
    }

    /**
     * adding request into table admin, lets admin know if any request existing
     * @param $user
     */
    function request_reset_password(Request $request){
        $this->db->insert('requests',$request->to_array());
    }

    /**
     * @param $table
     * @param $id
     * @param $data is an array including current SESSION INFO
     */
    function change_password($table, $data, $id){
        $this->db->update($table,$data, $id);
    }

    /**
     * use for form display
     * get type of each field in pair key = >value
     * @param $table
     * @return array
     */
    function get_type($table){
        $listTypes = $this->get_type_of_cols($table);
        $type = array();
        foreach($listTypes as $lt){
            $type += [$lt['Field'] => $lt['Type']];
        }
        return $type;
    }

    /**
     * get type of columns of a table from database
     * @param $table
     * @return array
     */
    private function get_type_of_cols($table){
        return $this->db->get_type($table);
    }
}