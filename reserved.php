
<?php
	include "db/db.php";
	include "includes/data.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>MaxCity Merchandise | Reserved</title>
	<?php include "includes/meta_links.php"; ?>
</head>
<body>
<?php include "includes/header.php"; ?>

<div class="banner-top">
	<div class="container">
		<h3 >Reserved</h3>
		<h4><a href="index.php">Home</a><label>/ Product/</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--content-->
	<div class="product">
		<div class="container">
			<div style="margin-top:-3em" class="spec ">
				<h3>Successful</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class=" con-w3l agileinf">
					<center><p  id="darkname" >You Product has been added to the reserve list. The admins have been notified about your product and will contact you as soon as possible on how you can make you payments and collect your product. If you need to talk to them now. use click the link below</p></center>
					<br/><center><a class="w3-btn w3-purple w3-hover-black mt-2" href="tel:<?php echo$contact; ?>">Call now: <?php echo $contact; ?></a></center>
			<div class="clearfix"></div>
			 </div>
		</div>
	</div><br/><br/>
	

<?php include "includes/footer.php"; ?>


	<script type="text/javascript">
		$(document).ready(function() {
							
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		<script src="js/bootstrap.js"></script>

	