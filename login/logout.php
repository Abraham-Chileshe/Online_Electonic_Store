<?php
  session_start();
  include "../db/db.php";
  $user = $_SESSION['mcmuser'];
  
  if($_SESSION['mcmuser'] != ""){
     session_destroy();
     echo '<meta http-equiv="refresh" content="0;url=index.php" />';
  }

  