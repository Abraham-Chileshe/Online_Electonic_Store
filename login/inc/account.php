<?php
$password = hash('whirlpool', $password);
$add = mysqli_query($con,"INSERT INTO accounts(email,password,username)VALUE('$email','$password','$code')");
    if($add == True){?>
        <script>
            $(document).ready(function(){
                $("#message").text("Account Registered");
                $("#message").addClass("w3-text-green");
        });
        </script><?php
    }else{
        echo mysqli_error($con);
    }
?>