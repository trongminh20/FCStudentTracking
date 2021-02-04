<?php
class Controller{
    private $db;
    public function __construct(Database $db){
        $this->db = $db;
    }

    public function index($dr){
        $action = filter_input(INPUT_POST,$dr, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if($action[0] == 'v'){
            return "Views/".$action.".php";
        } else if($action[0] == 'c'){
            return "Controllers/".$action.".php";
        }else if($action[0] == 'm'){
            return "Models/".$action.".php";
        }else{
            return "404.php";
        }
    }

}