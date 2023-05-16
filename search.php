<?php
	include "db/db.php";
	include "includes/data.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>MaxCity Merchandise | Searches</title>
	<?php include "includes/meta_links.php"; ?>

</head>
<body>
<?php 
include "includes/header.php";
?>

    <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Searches<span id="msg2" class="h3 w3-text-green"></span> </h3>
		<h4><a href="index.html">Home</a><label>/</label>searches</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<span id="msg2" class="w3-text-green"></span>

<!-- General Settings -->
	<div class="about-w3 ">

		<div class="container">
		<div  class="about gen">
			
	<?php

		$search =$_POST['search'];
		$table_cont = "name,latest,price,img,tname,ID";

		$getresult= mysqli_query($con,"
		SELECT $table_cont FROM phones 
		WHERE name like '%".$_POST['search']."%' 
		UNION ALL
		SELECT $table_cont FROM iwatches
		WHERE name like '%".$_POST['search']."%'
		UNION ALL
		SELECT $table_cont FROM laptops
		WHERE name like '%".$_POST['search']."%'
		UNION ALL
		SELECT $table_cont FROM cameras
		WHERE name like '%".$_POST['search']."%'
		UNION ALL
		SELECT $table_cont FROM gaming
		WHERE name like '%".$_POST['search']."%'
		UNION ALL
		SELECT $table_cont FROM airpods
		WHERE name like '%".$_POST['search']."%'
		UNION ALL
		SELECT $table_cont FROM assessories
		WHERE name like '%".$_POST['search']."%'
		UNION ALL
		SELECT $table_cont FROM iphone_batteries
		WHERE name like '%".$_POST['search']."%'
		
		" );
		$numsearch = mysqli_num_rows($getresult);

		//displaying number of searches
		if($numsearch>1)
			echo '<center><div style="margin-top:1em" id="darkname" class="h4 font-weight-bold text-uppercase mb-1">'.$numsearch.' results for "'.$search.'" found</div></center>';
		else
			echo '<center><div style="margin-top:1em" id="darkname" class="h4 font-weight-bold text-uppercase mb-1">'.$numsearch.' result for "'.$search.'" found</div></center>';
		//displaying number of searches


		if($numsearch != NULL){
			while($rows = mysqli_fetch_array($getresult)){
				extract($rows);

				?>  
				   
					<div style="margin-top:1em" class="col-lg-3 col-md-3">
						<div class="col-m w3-card-2">								
							<a href="" target="_blank" >
								<div class="">
								<center><img src="<?php echo$img; ?>" style="min-height:6em; max-height:10em" class="img-responsive offer-img" alt=""/></center>
								<div class="offer" style="margin-right:2em; margin-top:2em"><p><span><?php echo$latest; ?></span></p></div>
								</div>
							</a>
							<div class="mid-1">
								<div class="women">
									<h6 ><a href="" style="font-family:gg;" id="darkname"><?php echo$name;?></a></h6>							
								</div>
								<div class="mid-2">
									<p ><em class="w3-text-green item_price"><b>K<?php echo$price;?></b></em></p>
									<div class="block">
										<a href="view-product.php?id=<?php echo$ID;?>&&t=<?php echo$tname;?>" class="w3-btn" style="border-radius:6px">View</a>
										<?php
											if($bool){
												echo '<a href="functions/delete.php?id='.$ID.'&&t='.$tname.'" class="w3-btn w3-red" style="border-radius:6px">delete</a>';
											}
										?>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="add">
									<?php
									if($bool!=True){
									   
										echo '<a href="view-product.php?id='.$ID.'&&t='.$tname.'" class="w3-hover-red btn btn-danger my-cart-btn my-cart-b ">Reserve</a>';
					
									}
									?>
								</div>									
							</div>
						</div>
					</div>
				 
				<?php
			}}
		
    
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