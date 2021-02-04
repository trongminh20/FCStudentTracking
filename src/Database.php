<?php


class Database
{
    private $pdo;

    /**Create new connection to Database by using PDO
     * Database constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    /**
     * getting all records that existing in one table
     * @param $table
     * @return mixed array
     */
    public function get_records($table){
        $query = "SELECT * FROM ".$table;
        $stm = $this->db->prepare($query);
        $stm->execute();
        return $stm;
    }

    /**
     * get one record from a existing table with specific ID
     * @param $table
     * @param $id
     * @return array
     */
    public function get_by_id($table, $id){
        $query = "SELECT * FROM $table WHERE id = ?";
        $stm = $this->db->prepare($query);
        $stm ->execute([$id]);
        return $stm ->fetch(PDO::FETCH_ASSOC);
    }

    function create_records($table, $data){

    }

}