<?php
session_start();
class logout
{
   public function logoutuser()
  {
    if(isset($_POST['logout']))
    {
      session_unset();  
      session_destroy(); 
      echo "<script> window.location.assign('../login.php'); </script>"; 
    }
  }
}
$logout = new logout();
$logout->logoutuser();