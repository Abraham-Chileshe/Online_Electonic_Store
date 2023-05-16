<?php
include "../db/session.php";

    $updator = "UPDATE messages SET new='0'";
    $result = mysqli_query($con,$updator);
  	echo '<meta http-equiv="refresh" content="0;url=../messages.php" />';

?>