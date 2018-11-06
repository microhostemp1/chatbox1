<?php

include_once '../config/database.php';
include_once '../model/user.php';
 

$database = new Database();
$db = $database->connect();

$user = new user($db);

$user->username = isset($_POST['username']) ? $_POST['username'] : die();
$user->password = md5(isset($_POST['password']) ? $_POST['password'] : die());

$stmt = $user->login();
if($stmt->rowCount() > 0){

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Login!",
        "id" => $row['id'],
        "username" => $row['username']
    );
    session_start();
    $_SESSION['username']=$user_arr['username'];
    echo "<script> window.location.assign('../index.php'); </script>"; 
    exit();        
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
    session_start();
    $_SESSION['message']=$user_arr['message'];
    echo "<script> window.location.assign('../login.php'); </script>"; 
}

?>