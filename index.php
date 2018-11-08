<?php 
require_once('config/database.php');
session_start();
if(!isset($_SESSION['username']))
{
   header("location:login.php");
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rest Api Chatbox</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Raleway|Roboto|Oswald:400:300" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/animated.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/chat.css">
<script src="jquery-3.3.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container" style="padding-left:580px;padding-top:12px;">
       <form method="POST" action="user/logout.php" role="logout">
                 <button type="submit" class="btn btn-default btn-sm" name='logout'>
                  <span class="glyphicon glyphicon-log-out"></span> Log out</button>
        </form>    
</div>

<div class="col-sm-3 col-sm-offset-4 frame" style='margin-top:-8px;' id=''>
            <ul id="scrollme" stye="width:100%;overflow-y:scroll;">
            <?php 
             $conn = new PDO("mysql:host=localhost;dbname=chatbox",'root');
             $stmt = $conn->prepare("select * from chatbox order by created");
             $stmt->execute();
             if($stmt->rowCount() > 0)
             {
                 while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                 {
                     if($_SESSION['username']==$row['user_name']){
             ?>
            <li style="width:100%" id="innerScroll">
                        <div class="msj macro">
                        <div class="avatar"><img class="img-circle" style="width:100%;" src="img/unknown.png" /></div>
                            <div class="text text-l" id=""> 
                                <p> <?php echo $row['msg']; ?></p>
                                <p><small><?php echo date('H:i', strtotime($row['created']));?></small></p> 
                            </div> 
                        </div> 
                </li>
                     <?php } 
                     else
                     {
                        ?>
                <li style="width:100%; color:white;" id="">
                
                        <div class="msj-rta macro">
                            <div class="text text-r">
                                <p> <?php echo $row['msg']; ?></p>
                                <p><small><?php echo date('H:i', strtotime($row['created']));?></small></p>
                            </div>
                        <div class="avatar" style="padding:0px 0px 0px 10px !important">
                        <img class="img-circle" style="width:100%;" src="img/unknown.png" /></div>                               
                  </li>
           <?php 
                 }}}?>
            </ul>
<div>
            <form role='insert'>
            <input type='hidden' class="mytext" name='user_name' id='user_name' value="<?php echo $_SESSION['username'] ?>"/>
                <div class="msj-rta macro" style='margin-right:30px;margin-bottom:-40px;'>                        
                    <div class="text text-r" style="background:whitesmoke !important;">
                        <input class="mytext" placeholder="Type a message" name='msg' id='msg'/>
                    </div> 
                </div>
                <div style="padding-left:240px;margin-bottom:20px;">
                 <button type="submit" class="login-button" id='submit'><i class="fa fa-chevron-right"></i></button>
                </div> 
            </form>               
            </div>
        </div>   
</body>
    <script>
$(document).ready(function(){
$("#submit").click(function(){
var user_name = $("#user_name").val();
var msg = $("#msg").val();
if(msg==''||msg=='')
{
alert("Please Fill All Fields");
}
else
{
$.ajax({
type: "POST",
url: "user/chatInsert.php",
data: 'user_name='+user_name+'&msg='+msg,
cache: false,
success: function(result){
    setTimeout(function(){
           location.reload();
      }, 2000); 
}
});
}
return false;
});
});
</script>
<script>
    var ele = document.getElementById('scrollme');
    var inele = document.getElementById('innerScroll');
    var height = inele.offsetHeight;
    ele.scrollTop = height;
</script>

    </html>
