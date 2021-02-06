<?php
class Controller{
    private $db;
    public function __construct(Database $db){
        $this->db = $db;
    }

    public function index($dr){
        $action = $dr[0];

        switch ($action){
            case 'v':
                return "Views/".$dr.".php";
            case 'c':
                return "Controllers/".$dr.".php";
            case 'm':
                return "Models/".$dr.".php";
            default:
                return "404.php";
        }
    }


    function create_user($table, User $u){
        $data = $u->to_array();
        $this->db->insert($table,$data);
    }
}