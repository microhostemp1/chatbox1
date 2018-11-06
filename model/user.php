<?php
class user{
 
    private $conn;
    private $table_name = "users";
 
    public $id;
    public $username;
    public $password;
    public $created;
 
    public function __construct($db){
        $this->conn = $db;
    }
    public function login(){
        $query = "SELECT
                    `id`, `username`, `password`, `created`
                FROM
                    " . $this->table_name . " 
                WHERE
                    username='".$this->username."' AND password='".$this->password."'";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;

    }
}