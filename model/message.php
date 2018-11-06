<?php
class message{
 
    private $conn;
    private $table_name = "chatbox";
 
    public $user_name;
    public $msg;
 
    public function __construct($db){
        $this->conn = $db;
    }
    public function chatMessage(){
        $query = "INSERT INTO  ".$this->table_name." (`user_name`, `msg`)
                   VALUES('$this->user_name','$this->msg')";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}