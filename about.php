<?php
	include "db/db.php";
	include "includes/data.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>MaxCity Merchandise | About</title>
	<?php include "includes/meta_links.php"; ?>

</head>
<body>
<?php include "includes/header.php"; ?>

    <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >About</h3>
		<h4><a href="index.html">Home</a><label>/</label>About</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- faqs -->
	<div class="about-w3 ">

			<!--about-->
			<div class="container">
		<div  class="about">
		<div class="spec ">
				<h3>About</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			
			<div class="col-md-4 about-right">
			<img class="img-responsive" src="images/ab.jpg" alt="">
			</div>
			<div class="col-md-4 about-left">
				<center><p><?php echo$cdesc; ?></p></center>
			</div>
			<div class="col-md-4 about-right">
			<img class="img-responsive" src="images/ab1.jpg" alt="">
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//about-->
	
	<!--work-experience-->
	<div class="">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3>Our Store</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 w3-card-2 "> 
						<h5> Motto</h5>
						<p><?php echo$cmotto; ?></p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class="w3-card-2 work-w31"> 
						<h5> Vision</h5>
						<p><?php echo$cvision; ?></p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span> 2017</span>
			</div>
			<div class="work-info"> 
				<div class="clearfix"> </div>
				<span><?php echo$year;?></span>
			</div>
			
			
		</div><br /><br/><br/><br/><br/>
	</div>
	<!--//work-experience-->
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