<?php

class Model{
    protected $db;

    public function __construct(){
        $this->db = Database::connect_to_db();
    }
}