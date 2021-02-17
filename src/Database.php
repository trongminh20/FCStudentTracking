<?php


class Database
{
    private $pdo;

    /**
     * Create new connection to Database by using PDO
     * Database constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * getting all records that existing in one table
     * @param $table
     * @return false|array
     */
    public function select_multiple($table)
    {
        $query = "SELECT * FROM " . $table;
        $stm = $this->pdo->prepare($query);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * get one record from a existing table with specific ID
     * @param $table
     * @param $id
     * @return array
     */
    public function select_by_id($table, $id)
    {
        $query = "SELECT * FROM $table WHERE id = ?";
        $stm = $this->pdo->prepare($query);
        $stm->execute([$id]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * check if the user existed
     * @param $username
     * @param $password
     * @return int
     */
    public function log_in($username, $password){
        $query = "SELECT username, password FROM Employees WHERE username = ? AND password = ?";
        $stm = $this->pdo->prepare($query);
        $stm->execute([$username, $password]);
        return $stm->rowCount();
    }
    public function select_user($username)
    {
        $query = "SELECT id, username, phone, email, Department, admin FROM Employees WHERE username = ?";
        $stm = $this->pdo->prepare($query);
        $stm->execute([$username]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Insert one record into existing table in database
     * @param $table
     * @param $data as an Array that we got from toArray()
     * @return false|string
     */
    function insert($table, $data)
    {
        //key from array
        $fields = array_keys($data);
        //values from array
        $vals = array_values($data);
        //name of columns
        $cols = implode(",", $fields);
        //values string
        $marks = "";
        for ($i = 0; $i < count($fields); $i++) {
            $marks .= "?,";
        }
        $query = "INSERT INTO $table($cols) VALUES (" . rtrim($marks, ",") . ")";

        $stm = $this->pdo->prepare($query);

        $stm->execute($vals);
    }

    /**
     * Update a row with specific ID in existing table
     * @param $table
     * @param $data
     * @param $id
     * @return string
     */
    function update($table, $data, $id)
    {
        $fields = array_keys($data);
        $vals = array_values($data);
        $bind = "";
        for ($i = 0; $i < count($fields); $i++) {
            $bind .= $fields[$i] . " = ?,";
        }
        $query = "UPDATE $table SET " . rtrim($bind, ",") . " WHERE id = $id ";
        $stm = $this->pdo->prepare($query);
        $stm->execute($vals);
    }

    /**
     * delete one specific row from existing table
     * @param $table
     * @param $id
     * @return void
     */
    function delete($table, $id)
    {
        $query = "DELETE FROM " . $table . " WHERE id = ?";
        $stm = $this->pdo->prepare($query);

        $stm->execute([$id]);

    }

    /**
     * this function used for testing only
     * @return string
     */
    function print_out()
    {
        return "this is database";
    }

}