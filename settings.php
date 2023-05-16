<?php
	include "db/db.php";
	include "includes/data.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>MaxCity Merchandise | Settings</title>
	<?php include "includes/meta_links.php"; ?>

</head>
<body>
<?php 
include "includes/header.php";
if($bool == false){
	echo '<meta http-equiv="refresh" content="0;url=index.php" />';
}
?>

    <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Settings<span id="msg2" class="h3 w3-text-green"></span> </h3>
		<h4><a href="index.html">Home</a><label>/</label>settings</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<span id="msg2" class="w3-text-green"></span>

<!-- General Settings -->
	<div class="about-w3 ">

		<div class="container">
		<div  class="about gen">
			<h3>General Settings</h3>
				<?php include "includes/general_settings.php"; ?>
		</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//General Settings-->
	
	<!--Account Settings-->
	<div class="about-w3 " style="background-color:whitesmoke">

		<div class="container">
		<div  class="about">
			<h3>Account Settings</h3>

			<div class="col-md-6 about-left">
                <form method="POST" style="margin-top:4em" action="">
					<input type="text" class="w3-input" name="admin_f" value="<?php echo$admin_ID;?>" style="background-color:whitesmoke; width:400px; max-width:98%;" required/>
					<input type="submit" name="adminbtn" class="mt-1 w3-btn w3-red w3-hover-black" value="Change">
				</form>
				<?php
					if(isset($_POST['adminbtn'])){
						$new= $_POST['admin_f'];
						$user = mysqli_real_escape_string($con,$new);
						$user = strtolower($new);

						$updator = "UPDATE admin SET admin='$user' WHERE ID=123";
						$result = mysqli_query($con,$updator);
						if(true){
							$_SESSION["mcmuser"] = $user;
						}
						echo '<meta http-equiv="refresh" content="0;url=settings.php" />';
					}

				?>

				<style>
					::placeholder{
						color:black;
						opacity:1;
					}
				</style>
				
				<form method="POST" id="form1" style="margin-top:4em" >
					<input type="text" class="w3-input" name="oldpass" placeholder="Old password" style="background-color:whitesmoke; width:400px; max-width:98%;" required/><br/>
					<input type="text" class="w3-input" name="newpass" placeholder="New password" style="background-color:whitesmoke; width:400px; max-width:98%;" required/><br/>
					<input type="submit" name="passbtn" class="mt-1 w3-btn w3-red w3-hover-black" value="Change">
					<p id="msg" class="w3-text-red"></p>
				</form>
				<?php
					$get_pass = mysqli_query($con,"SELECT * FROM admin where admin='$admin_ID'");
					$pp = mysqli_fetch_assoc($get_pass);
					$dbpass = $pp['password'];

					$len = strlen($dbpass);
					$shadow = str_repeat("*",$len);

					if(isset($_POST['passbtn'])){
						$dbpass_filtered = mysqli_real_escape_string($con,$dbpass);
						$old =mysqli_real_escape_string($con,$_POST['oldpass']);
						$new =mysqli_real_escape_string($con,$_POST['newpass']);
						
						if($dbpass_filtered == $old){
							$updator = "UPDATE admin SET password='$new' WHERE ID='$id'";
							$result = mysqli_query($con,$updator);
							if(true){
								echo ' 
									<script>
										$(document).ready(function(){
											$("#msg2").text(" - Password Updated");
											$("#msg2").fadeIn(3000);
											$("#msg2").fadeOut(20000);
										});
									</script>	
									
									';
							}

						}else{
							echo ' 
							<script>
								$(document).ready(function(){
									$("#msg").text("Old password entered is incorrect");
									$("#msg").fadeIn(3000);
									$("#msg").fadeIn(20000);
								});
							</script>	
							
							';

						}
						
						
						

						
						//
					}

				?>
			</div>
			<div class="col-md-6 about-right">
					<h3>Admin ID: <b><?php echo $admin_ID; ?></b></h3>
					<h3 style="margin-top:0.5em">Password: <b><?php echo $shadow; ?></b></h3>
			</div>
		</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//Account Settings-->
<!--advantages--> 


	</div>
	<!-- // Terms of use -->
<?php include "Includes/footer.php"; ?>

<!-- //footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>

</body>
</html>