<?php
  include "../db/session.php";

    $id = $_GET['id'];
    $dbtable = $_GET['t'];

    if($dbtable != 'reserves' && $dbtable != 'messages'){
        $dele = mysqli_query($con, "SELECT * FROM $dbtable where ID = '$id'");
        while($row = mysqli_fetch_array($dele)){
        $file = $row["img"];
        $path = "../".$file;
        unlink($path);
        }
    }

    //deleting Known and redirecting
    mysqli_query($con,"DELETE FROM $dbtable WHERE ID='$id'");
    //deleting Known and redirecting


                                             
    if($dbtable == "phones")
        echo " <meta http-equiv='refresh' content='0;url=../iphones.php' />";
    elseif($dbtable == "iwatches")
        echo " <meta http-equiv='refresh' content='0;url=../iwatches.php' />";
    elseif($dbtable == "iphone_batteries")
        echo " <meta http-equiv='refresh' content='0;url=../iBattery.php' />";
    elseif($dbtable == "airpods")
        echo " <meta http-equiv='refresh' content='0;url=../airpods.php' />";
    elseif($dbtable == "laptops")
        echo " <meta http-equiv='refresh' content='0;url=../laptops.php' />";

    elseif($dbtable == "gaming")
        echo " <meta http-equiv='refresh' content='0;url=../gaming.php' />";

    elseif($dbtable == "cameras")
        echo " <meta http-equiv='refresh' content='0;url=../cameras.php' />";

    elseif($dbtable == "assessories")
        echo " <meta http-equiv='refresh' content='0;url=../assessories.php' />";
    elseif($dbtable == "reserves")
      echo " <meta http-equiv='refresh' content='0;url=../admin_reserved.php' />";
    elseif($dbtable == "messages")
      echo " <meta http-equiv='refresh' content='0;url=../messages.php' />";
    else{
        echo " <meta http-equiv='refresh' content='0;url=../index.php' />";
    }
?> 
