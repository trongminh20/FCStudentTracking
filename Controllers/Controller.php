<?php
class Controller{
    private $db;
    public function __construct(Database $db){
        $this->db = $db;
    }

    public function index($dr){
        if($dr[0] == 'v'){
            return "Views/".$dr.".php";
        } else if($dr[0] == 'c'){
            return "Controllers/".$dr.".php";
        }else if($dr[0] == 'm'){
            return "Models/".$dr.".php";
        }else{
            return "404.php";
        }
    }
}