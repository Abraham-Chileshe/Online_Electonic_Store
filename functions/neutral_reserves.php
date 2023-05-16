<?php
include "../db/session.php";

    $updator = "UPDATE reserves SET new='0'";
    $result = mysqli_query($con,$updator);
  	echo '<meta http-equiv="refresh" content="0;url=../admin_reserved.php" />';

?>