<?php

class Model
{
    /**
     * @var Database
     */
    private $db;

    /**
     * Model constructor.
     * @param Database $db
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    /**
     * to check if the username existed
     * @param $user
     * @param $pass
     * @return int
     */
    function sign_in($user, $pass)
    {
        return $this->db->log_in($user, $pass);
    }


    /**
     * return data for function display_as_table in view
     * @param $table
     * @param $unsetCols is list of columns that does not show
     * @return array|false
     */
    function select_displayed_data($table, $unsetCols)
    {
        $data = $this->db->select_multiple($table);

        for ($i = 0; $i < count($data); $i++) {
            foreach ($data[$i] as $k => $v) {
                foreach ($unsetCols as $c) {
                    if ($k == $c) {
                        unset($data[$i][$c]);
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
    function create_user($table, User $user)
    {
        $data = $user->to_array();
        $this->db->insert_single_row($table, $data);
    }

    /**
     * @param $table is the table need to be inserted
     * @param $arr is an array with key => value
     */
    function add_user_info($table, $arr){
        $this->db->insert_single_row($table, $arr);
    }
    /**
     * Function delete user for admin
     * @param $table
     * @param $id
     */

    function select_user($username)
    {
        return $this->db->select('employees',['username'=>$username]);
    }

    /**
     * @param $table
     * @param $col
     * @param $val
     */
    function delete($table, $col, $val)
    {
        $this->db->delete($table, $col, $val);
    }

    /**
     * adding request into table admin, lets admin know if any request existing
     * @param $user
     */
    function request_reset_password(Request $request)
    {
        $this->db->insert_single_row('requests', $request->to_array());
    }

    /**
     * @param $table
     * @param $id
     * @param $data is an array including current SESSION INFO
     */
    function change_info($table, $data, $id)
    {
        $this->db->update($table, $data, $id);
    }

    /**
     * use for form display
     * get type of each field in pair key = >value
     * @param $table
     * @return array
     */
    function get_type($table)
    {
        $listTypes = $this->get_type_of_cols($table);
        $type = array();
        foreach ($listTypes as $lt) {
            $type += [$lt['Field'] => $lt['Type']];
        }
        return $type;
    }


    /**
     * get type of columns of a table from database
     * @param $table
     * @return array
     */
    private function get_type_of_cols($table)
    {
        return $this->db->get_type($table);
    }

    /**
     * search on table students with ID or Username
     * @param $keyword is a string
     * @return mixed
     */
    function search_student($keyword)
    {
        if ($keyword[0] == '@') {
            $username = ltrim($keyword, '@');
            $keyword = ['name' => $username];
        } else if ($keyword[0] == '#') {
            $id = ltrim($keyword, '#');
            $keyword = ['id' => $id];
        }else if($keyword[0] == '!'){
            $prog = ltrim($keyword,'!');
            $keyword = ['prog_id' => $prog];
        }
        return $this->db->select('students', $keyword);
    }

    /**
     * @param $table
     * @param $data is an array [columns => value]
     * @return mixed
     */
    function select($table, $data){
        return $this->db->select($table, $data);
    }

    /**
     * @param $table
     * @param $data
     */
    function insert($table, $data){
        $this->db->insert_single_row($table, $data);
    }
}