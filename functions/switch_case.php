<?php                                    
                                    
    if($dbtable == "phones")
        echo " <meta http-equiv='refresh' content='0;url=iphones.php' />";
    elseif($dbtable == "iwatches")
        echo " <meta http-equiv='refresh' content='0;url=iwatches.php' />";
    elseif($dbtable == "iphone_batteries")
        echo " <meta http-equiv='refresh' content='0;url=iBattery.php' />";
    elseif($dbtable == "airpods")
        echo " <meta http-equiv='refresh' content='0;url=airpods.php' />";
    elseif($dbtable == "laptops")
        echo " <meta http-equiv='refresh' content='0;url=laptops.php' />";

    elseif($dbtable == "gaming")
        echo " <meta http-equiv='refresh' content='0;url=gaming.php' />";

    elseif($dbtable == "cameras")
        echo " <meta http-equiv='refresh' content='0;url=cameras.php' />";
    
    elseif($dbtable == "assessories")
        echo " <meta http-equiv='refresh' content='0;url=assessories.php' />";
    else{
        echo " <meta http-equiv='refresh' content='0;url=index.php' />";
    }
    
                                    
?>