<?php


class Database
{
    private $pdo;

    /**
     * Create new connection to Database by using PDO
     * Database constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    /**
     * getting all records that existing in one table
     * @param $table
     * @return false|array
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
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Insert one record into existing table in database
     * @param $table
     * @param $data as an Array that we got from toArray()
     * @return false|string
     */
    function create_record($table, $data){
        $cols = array_keys($data);
        $colInTable = implode(',', $cols);
        $binding = ":".implode(',:', $cols);

        $query = "INSERT INTO $table($colInTable) VALUES ($binding)";

        $stm = $this->pdo->prepare($query);

        $stm = $this->bind_data($stm, $data);

        $status = $stm ->execute();
        // Returns the ID of the last inserted row or sequence value
        return ($status) ? $this->pdo->lastInsertId() : false;
    }

    /**
     * delete one specific row from existing table
     * @param $table
     * @param $id
     * @return void
     */
    function delete($table, $id){
        $query = "DELETE FROM ".$table." WHERE id = ?";
        $stm = $this->pdo->prepare($query);
        try{
            $stm -> execute([$id]);
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
    /**
     * binding data -> sql query
     * @param $sql
     * @param $data
     * @return mixed
     */
    private function bind_data($sql , $data){
        $stm = $sql;
        foreach($data as $k => $v){
            $stm->bindValue(':'.$k, $v);
        }
        return $stm;
    }
}