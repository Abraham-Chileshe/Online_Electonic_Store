<?php
  session_start();
  include "db.php";
 
  if (isset($_SESSION['mcmuser'])&&$_SESSION['user_Id']!=""){
    $id = $_SESSION['user_Id'];
    $admin_ID = $_SESSION['mcmuser'];
  }

  $bool= (isset($_SESSION['mcmuser'])&&$_SESSION['user_Id']!="");

  
  

 
    

?>