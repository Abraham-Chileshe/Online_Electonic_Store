<?php
	include "db/db.php";
	include "includes/data.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>MaxCity Merchandise | Inbox :: Messages</title>
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
		<h3 >Inbox<span id="msg2" class="h3 w3-text-green"></span> </h3>
		<h4><a href="index.html">Home</a><label>/</label>Messages</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<span id="msg2" class="w3-text-green"></span>

<!-- General Settings -->
	<div class="about-w3 ">

		<div class="container">
		<div  class="about gen">
			<h3>View Messages</h3>
			
	<?php

		$get_reserves = mysqli_query($con,"SELECT * FROM messages order by ID desc ");
    	$num_phone_rows = mysqli_num_rows($get_reserves);
    
		if($num_phone_rows != NULL){
			while($rows = mysqli_fetch_array($get_reserves)){
				$ID = $rows['ID'];
				$cname = mysqli_real_escape_string($con,$rows['name']);
				$cemail = mysqli_real_escape_string($con,$rows['email']);
				$cmsg = mysqli_real_escape_string($con,$rows['message']);
				$date= mysqli_real_escape_string($con,$rows['date']);
				

            echo'
				<div style= "margin-top:2em" class="col-md-4 ">
                    <div class="col-m w3-card-2">								
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="" style="font-family:gg" id="darkname">'.$cname.'</a></h6>	
								<p style="margin-top:0.6em"><span class="w3-text-red">'.$date.'</span></p>	
								<p style="margin-top:0.6em"><span><a class="w3-text-blue href="mailto:'.$cemail.'">'.$cemail.'</a></span></p>						
                            </div>
                            <div class="mid-2">
								<p style="margin-top:1em; margin-bottom:1em">'.$cmsg.'</p>
							</div>
						</div>
							
                                <div style="margin-top:2em" class="block">
                                  <a href="functions/delete.php?id='.$ID.'&&t=messages" class="w3-btn w3-red" style="border-radius:6px">Remove</a>
                                </div>
                                <div class="clearfix"></div>
                    </div>
				</div>';
        }
    }else{
        echo "<div class='h2 w3-text-red text-center' style='font-family:gt;'>No content Available</div>";
    }
	?>
	</div>
		</div>
			<div class="clearfix"> </div>
		</div>
	</div><br/><br/>
	<!--//General Settings-->

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