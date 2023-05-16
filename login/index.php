<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Online Programming Courses | Login</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="Author" content="Abraham Chileshe"/>
	<meta name="description" content="Online Programming Courses for Web developers" />
	<meta name="theme" content=""/>
	<meta name="keywords" charset="Online Programming Course, HTML, CSS, Python, Javascript, Jquery, C++"/>

    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/w3.css" type="text/css" media="all"/>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	
	<script src="js/Password.js" type="Text/Javascript"></script>
    <script src="js/jquery.js"></script>
</head>
<body>
	
<div class="message warning w3-card-4 ">
<div style="margin-top:-2em" class="inset">
	<div class="login-head">
		<h1>MaxCity :: Admins</h1>		
	</div>
	<form method="post">
		<li><input type="text" class="text" placeholder="admin Id" name="user" required><a href="#" class=" icon user"></a></li>
		<div class="clear"> </div>

		<li><input type="password" placeholder="Password" name="Password" id="Pwd" required> <a href="#" onclick="Pass()" class="icon lock"></a></li>
		<div class="clear"> </div>
		<p id="message"></p>
		<div class="submit">
			<input type="submit" name="in" onclick="myFunction()" value="Sign in" >
		
			<div class="clear">  </div>	
		</div>
		<br/><br/>
        <a href="../index.php">Home</a>
				
		</form>
		</div>					
	</div>
	</div>
	<div class="clear"> </div>


</body>
</html>

<?php 
    session_start();
    include "../db/db.php";

    if (isset($_SESSION['mcmuser'])&&$_SESSION['user_Id']!=""){
        echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
    }
    
  

    if(isset($_POST["in"])){
        $user = $_POST["user"];
        $password = $_POST["Password"];

        //Variable Filter
        $user = mysqli_real_escape_string($con,$user);
        $user = strtolower($user);
        $password =  mysqli_real_escape_string($con,$password);
        $password = hash('whirlpool',$password);

        //Get accounts from Db
        $get_details = mysqli_query($con,"SELECT * FROM admin where ID='123'");
        $row = mysqli_fetch_assoc($get_details);

        $db_admin = $row['admin'];
        $db_admin = mysqli_real_escape_string($con,$db_admin);
        $db_admin = strtolower($db_admin);
        $db_pass = hash('whirlpool',$row['password']);

        if($db_admin == $user && $db_pass == $password ){

            $_SESSION['mcmuser'] = $user;
            $_SESSION['user_Id'] =  123;

            echo '
                <script>
                    $(document).ready(function(){
                        $("#message").text("Logged in Successfully");
                        $("#message").fadeIn(4000);
                        $("#message").fadeOut(10000);
                        $("#message").addClass("w3-text-green");
                    });	
                </script>';  

            echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
        }else{
            echo '
            <script>
                $(document).ready(function(){
                    $("#message").text("Failed to Login");
                    $("#message").fadeIn(4000);
                    $("#message").fadeOut(10000);
                    $("#message").addClass("w3-text-red");
                });	
            </script>';
        }


        //Get accounts from Db
      









    }