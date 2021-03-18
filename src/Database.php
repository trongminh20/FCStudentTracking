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
     * getting data type of all cols in a database table
     * @param $table
     * @return array
     */
    public function get_type($table)
    {
        $query = "DESC $table";
        $stm = $this->pdo->prepare($query);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
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
     * check if the user existed
     * @param $username
     * @param $password
     * @return int
     */
    public function log_in($username, $password)
    {
        $query = "SELECT username, password FROM employees WHERE username = ? AND password = ?";
        $stm = $this->pdo->prepare($query);
        $stm->execute([$username, $password]);
        return $stm->rowCount();
    }

    function select_count($table)
    {
        $query = "SELECT DISTINCT COUNT(*) FROM $table";
        $stm = $this->pdo->prepare($query);
        $res = $stm->execute();
        return $res;
    }

    /**
     * Insert one record into existing table in database
     * @param $table
     * @param $data as an Array that we got from toArray()
     * @return false|string
     */
    function insert_single_row($table, $data)
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
     * @param $table is the table that we want to update data
     * @param $data is an array including all cols and changed data of $table
     * @param $id is row identify
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
        try {
            $stm->execute($vals);
        } catch (PDOException $e) {
            echo $e->errorInfo;
        }
    }

    /**
     * delete one specific row from existing table
     * @param $table
     * @param $id
     * @return void
     */
    function delete($table, $col, $val)
    {
        $query = "DELETE FROM " . $table . " WHERE $col = ?";
        $stm = $this->pdo->prepare($query);
        $stm->execute([$val]);
    }

    /**
     * select single rows
     * @param $table
     * @param $data is formatted as [column name => value]
     * @return mixed
     */
    function select($table, $data)
    {
        if ($data == NULL) {
            $query = "SELECT * FROM " . $table;
            $stm = $this->pdo->prepare($query);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $cols = array_keys($data);
            $vals = array_values($data);
            $marks = "";
            for ($i = 0; $i < count($data); $i++) {
                $marks .= $cols[$i] . " = ?";
            }
            $query = "SELECT * FROM $table WHERE " . $marks;
            $stm = $this->pdo->prepare($query);
            $stm->execute($vals);
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }
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