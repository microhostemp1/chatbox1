<?php

include_once '../config/database.php';
include_once '../model/message.php';
 

$database = new Database();
$db = $database->connect();

$user = new message($db);

$user->user_name = isset($_POST['user_name']) ? $_POST['user_name'] : die();
$user->msg= isset($_POST['msg']) ? $_POST['msg'] : die();

$stmt = $user->chatMessage();
if($stmt){
    $user_arr=array(
        "status" => true,
        "message" => "Successfully insert"
    );     
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Not Insert into Table",
    );
}
//for print out
//print_r(json_encode($user_arr));

?>