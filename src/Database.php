<?php


class Database
{
    private $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    function create_records($table, $data){

    }

    function read_all_records($table){
        $sqlQuery = "SELECT * FROM $table";
        $stm = $this->db->prepare($sqlQuery);
        try{
            $success = $stm->execute();
        }catch(PDOException $e){
            return $e->errorInfo;
        }
        $row = $stm -> fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    function get_by_id(){}

    function get_rows(){}


}