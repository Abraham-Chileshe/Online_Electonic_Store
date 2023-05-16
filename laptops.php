
<?php
	include "db/db.php";
	include "includes/data.php";
	$table = 'laptops'; //Section about Laptops
?>


<!DOCTYPE html>
<html>
<head>
	<title>MaxCity Merchandise | <?php echo ucwords($table); ?></title>
	<?php include "includes/meta_links.php"; ?>
</head>

<body>
<?php include "includes/header.php"; ?>

<div class="banner-top">
	<div class="container">
		<h3 ><?php echo ucwords($table); ?></h3>
		<h4><a href="index.php">Home</a><label>/ PCs /</label><?php echo $table; ?></h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--content-->
	<div class="product">
		<div class="container">
			<div style="margin-top:-3em" class="spec ">
				<h3>Products</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class=" cson-w3l agileinf">
				<?php 
					product_section("laptops");
				?>
			<div class="clearfix"></div>
			 </div>
		</div>
	</div><Br/><Br/>

	<?php
	if($bool){
	?>
		<section class="mt-4 container">
			<div style="margin-top:-3em" class="spec ">
				<h3>Add new Laptop</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>

			<div class="container">
				<div  class="about">
					<div class="col-md-6 about-left">
					<h3 id="update">New Laptop</h3>
						<?php 
							$folder = "laptops";
							$dbtable = "laptops";
							include "includes/add_new_item.php";
						?>
					</div>
					<div class="col-md-6 about-right" style=" margin-top:5em">
						<img src="images/wallpaper.jpg" width="100%"/>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</section>
	<?php
	}
	?><br/>

<?php include "includes/footer.php"; ?>

	<script type="text/javascript">
		$(document).ready(function() {
							
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		<script src="js/bootstrap.js"></script>

	