<?php

class Model{
    protected $db;

    public function __construct(Database $db){
        $this->db = $db;
    }
}