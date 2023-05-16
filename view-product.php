
<?php
	include "db/db.php";
	include "includes/data.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>MaxCity Merchandise | View Product</title>
	<?php include "includes/meta_links.php"; ?>
</head>
<body>
<?php
	include "includes/header.php";
	$id = mysqli_real_escape_string($con, $_GET['id']);
	$table = mysqli_real_escape_string($con, $_GET['t']);

	if($id == NULL || $table == NULL){
		echo '<meta http-equiv="refresh" content="0;url=index.php" />';
	}

	if($table == "phones"){ //IF THE PRODUCT IS A PHONE
	$get_phone = mysqli_query($con,"SELECT * FROM $table where ID ='$id' order by ID desc LIMIT 4 ");
		$num_phone_rows = mysqli_num_rows($get_phone);
		while($rows = mysqli_fetch_array($get_phone)){
			$ID = $rows['ID'];
			$name = $rows['name'];
			$price = $rows['price'];
			$img = $rows['img'];
			$latest = $rows['latest'];
			$desc = $rows['description'];
			$ram = $rows['RAM'];
			$memo = $rows['Memory'];

			echo'
			<div class="kic-top" >
				<div class="container ">
					<div class="kic ">
						<div style="margin-top:-3em" class="spec ">
							<h3>View</h3>
							<div class="ser-t">
								<b></b>
								<span><i></i></span>
								<b class="line"></b>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3-card-2 w3-white kic-top1">
						<a href="single.html">
							<center><img src="'.$img.'" style="max-width:20em; margin-top:2em" class="img-responsive" alt=""></center>
						</a><br/><br/>
						<div class="add w3-black">
							<div style="padding-top:1em; padding-bottom:1em">
								<a class="btn btn-danger my-cart-btn my-cart-b " href="index.php">Home</a>
							</div>
						</div><br/>
					</div>
					<div class="col-md-6 w3-card-2 kic-top1">
						
						<center><h2 style="margin-top:1em; font-family:gg" id="darkname">'.$name.'</h2></center>
						<p style="text-align:center; margin-top:1em; width:700px; max-width:95%" id="darkname">'.$desc.'</p><br/>
						<h5 style="margin-left:1em; margin-top:1em" id="darkname"><b>RAM:</b> '.$ram.' GB</h5>
						<h5 style="margin-left:1em; margin-top:0.2em" id="darkname"><b>Memory:</b> '.$memo.' GB</h5>
						<center><h4 style="color:green; margin-left:1em; margin-top:2em; margin-bottom:12em"><b>Price:</b> K '.$price.'</h4></center>
					</div>
					
				</div>
			</div>';
			include ("includes/reserve.php");
		}
	}elseif($table == "laptops"){ //IF THE PRODUCT IS A LAPTOP
		$get_phone = mysqli_query($con,"SELECT * FROM $table where ID ='$id' order by ID desc LIMIT 4 ");
			$num_phone_rows = mysqli_num_rows($get_phone);
			while($rows = mysqli_fetch_array($get_phone)){
				$ID = $rows['ID'];
				$name = $rows['name'];
				$price = $rows['price'];
				$img = $rows['img'];
				$desc = $rows['description'];
				//$ram = $rows['RAM'];
				//$memo = $rows['Memory'];
	
				echo'
				<div class="kic-top" >
					<div class="container ">
						<div class="kic ">
							<div style="margin-top:-3em" class="spec ">
								<h3>View</h3>
								<div class="ser-t">
									<b></b>
									<span><i></i></span>
									<b class="line"></b>
								</div>
							</div>
						</div>
						<div class="col-md-6 w3-card-2 w3-white kic-top1">
							<a href="single.html">
								<center><img src="'.$img.'" style="max-width:20em; margin-top:4em" class="img-responsive" alt=""></center>
							</a><br/><br/>
							<div class="add w3-black">
								<div style="padding-top:1em; padding-bottom:1em">
									<a class="btn btn-danger my-cart-btn my-cart-b " href="index.php">Home</a>
								</div>
							</div><br/>
						</div>
						<div class="col-md-6  kic-top1">
							
							<center><h2 style="margin-top:1em; font-family:gg" id="darkname">'.$name.'</h2></center>
							<p style="text-align:center; margin-top:1em; width:700px; max-width:95%" id="darkname">'.$desc.'</p><br/>
							<center><h4 style="color:green; margin-left:1em; margin-top:2em; margin-bottom:12em"><b>Price:</b> K '.$price.'</h4></center>
						</div>
						
					</div>
				</div>';
				include ("includes/reserve.php");
			}
		}elseif($table == "iwatches"){ //IF THE PRODUCT IS A IWATCHES
				$get_phone = mysqli_query($con,"SELECT * FROM $table where ID ='$id' order by ID desc LIMIT 4 ");
					$num_phone_rows = mysqli_num_rows($get_phone);
					while($rows = mysqli_fetch_array($get_phone)){
						$ID = $rows['ID'];
						$name = $rows['name'];
						$price = $rows['price'];
						$img = $rows['img'];
						//$latest = $rows['latest'];
						$desc = $rows['description'];
						//$ram = $rows['RAM'];
						//$memo = $rows['Memory'];
			
						echo'
						<div class="kic-top" >
							<div class="container ">
								<div class="kic ">
									<div style="margin-top:-3em" class="spec ">
										<h3>View</h3>
										<div class="ser-t">
											<b></b>
											<span><i></i></span>
											<b class="line"></b>
										</div>
									</div>
								</div>
								<div class="col-md-6 w3-card-2 w3-white kic-top1">
									<a href="single.html">
										<center><img src="'.$img.'" style="max-width:20em; margin-top:4em" class="img-responsive" alt=""></center>
									</a><br/><br/>
									<div class="add w3-black">
										<div style="padding-top:1em; padding-bottom:1em">
											<a class="btn btn-danger my-cart-btn my-cart-b " href="index.php">Home</a>
										</div>
									</div><br/>
								</div>
								<div class="col-md-6  kic-top1">
									
									<center><h2 style="margin-top:1em; font-family:gg" id="darkname">'.$name.'</h2></center>
									<p style="text-align:center; margin-top:1em; width:700px; max-width:95%" id="darkname">'.$desc.'</p><br/>
									<center><h4 style="color:green; margin-left:1em; margin-top:2em; margin-bottom:12em"><b>Price:</b> K '.$price.'</h4></center>
								</div>
								
							</div>
						</div>';
						include ("includes/reserve.php");
					}
				}elseif($table == "gaming"){ //IF THE PRODUCT IS A IWATCHES
					$get_phone = mysqli_query($con,"SELECT * FROM $table where ID ='$id' order by ID desc LIMIT 4 ");
						$num_phone_rows = mysqli_num_rows($get_phone);
						while($rows = mysqli_fetch_array($get_phone)){
							$ID = $rows['ID'];
							$name = $rows['name'];
							$price = $rows['price'];
							$img = $rows['img'];
							//$latest = $rows['latest'];
							$desc = $rows['description'];
							//$ram = $rows['RAM'];
							//$memo = $rows['Memory'];
				
							echo'
							<div class="kic-top" >
								<div class="container ">
									<div class="kic ">
										<div style="margin-top:-3em" class="spec ">
											<h3>View</h3>
											<div class="ser-t">
												<b></b>
												<span><i></i></span>
												<b class="line"></b>
											</div>
										</div>
									</div>
									<div class="col-md-6 w3-card-2 w3-white kic-top1">
										<a href="single.html">
											<center><img src="'.$img.'" style="max-width:20em; margin-top:4em" class="img-responsive" alt=""></center>
										</a><br/><br/>
										<div class="add w3-black">
											<div style="padding-top:1em; padding-bottom:1em">
												<a class="btn btn-danger my-cart-btn my-cart-b " href="index.php">Home</a>
											</div>
										</div><br/>
									</div>
									<div class="col-md-6  kic-top1">
										
										<center><h2 style="margin-top:1em; font-family:gg" id="darkname">'.$name.'</h2></center>
										<p style="text-align:center; margin-top:1em; width:700px; max-width:95%" id="darkname">'.$desc.'</p><br/>
										<center><h4 style="color:green; margin-left:1em; margin-top:2em; margin-bottom:12em"><b>Price:</b> K '.$price.'</h4></center>
									</div>
									
								</div>
							</div>';
							include ("includes/reserve.php");
						}
					}elseif($table == "iphone_batteries"){ //IF THE PRODUCT IS A IWATCHES
							$get_phone = mysqli_query($con,"SELECT * FROM $table where ID ='$id' order by ID desc LIMIT 4 ");
								$num_phone_rows = mysqli_num_rows($get_phone);
								while($rows = mysqli_fetch_array($get_phone)){
									$ID = $rows['ID'];
									$name = $rows['name'];
									$price = $rows['price'];
									$img = $rows['img'];
									//$latest = $rows['latest'];
									$desc = $rows['description'];
									//$ram = $rows['RAM'];
									//$memo = $rows['Memory'];
						
									echo'
									<div class="kic-top" >
										<div class="container ">
											<div class="kic ">
												<div style="margin-top:-3em" class="spec ">
													<h3>View</h3>
													<div class="ser-t">
														<b></b>
														<span><i></i></span>
														<b class="line"></b>
													</div>
												</div>
											</div>
											<div class="col-md-6 w3-card-2 w3-white kic-top1">
												<a href="single.html">
													<center><img src="'.$img.'" style="max-width:20em; margin-top:4em" class="img-responsive" alt=""></center>
												</a><br/><br/>
												<div class="add w3-black">
													<div style="padding-top:1em; padding-bottom:1em">
														<a class="btn btn-danger my-cart-btn my-cart-b " href="index.php">Home</a>
													</div>
												</div><br/>
											</div>
											<div class="col-md-6  kic-top1">
												
												<center><h2 style="margin-top:1em; font-family:gg" id="darkname">'.$name.'</h2></center>
												<p style="text-align:center; margin-top:1em; width:700px; max-width:95%" id="darkname">'.$desc.'</p><br/>
												<center><h4 style="color:green; margin-left:1em; margin-top:2em; margin-bottom:12em"><b>Price:</b> K '.$price.'</h4></center>
											</div>
											
										</div>
									</div>';
									include ("includes/reserve.php");
								}
							}elseif($table == "airpods"){ //IF THE PRODUCT IS A AIRPODS
								$get_phone = mysqli_query($con,"SELECT * FROM $table where ID ='$id' order by ID desc LIMIT 4 ");
									$num_phone_rows = mysqli_num_rows($get_phone);
									while($rows = mysqli_fetch_array($get_phone)){
										$ID = $rows['ID'];
										$name = $rows['name'];
										$price = $rows['price'];
										$img = $rows['img'];
										//$latest = $rows['latest'];
										//$desc = $rows['description'];
										//$ram = $rows['RAM'];
										//$memo = $rows['Memory'];
							
										echo'
										<div class="kic-top" >
											<div class="container ">
												<div class="kic ">
													<div style="margin-top:-3em" class="spec ">
														<h3>View</h3>
														<div class="ser-t">
															<b></b>
															<span><i></i></span>
															<b class="line"></b>
														</div>
													</div>
												</div>
												<div class="col-md-6 w3-card-2 w3-white kic-top1">
													<a href="single.html">
														<center><img src="'.$img.'" style="max-width:20em; margin-top:4em" class="img-responsive" alt=""></center>
													</a><br/><br/>
													<div class="add w3-black">
														<div style="padding-top:1em; padding-bottom:1em">
															<a class="btn btn-danger my-cart-btn my-cart-b " href="index.php">Home</a>
														</div>
													</div><br/>
												</div>
												<div class="col-md-6  kic-top1">
													
													<center><h2 style="margin-top:1em; font-family:gg" id="darkname">'.$name.'</h2></center>
													<p style="text-align:center; margin-top:1em; width:700px; max-width:95%">....</p><br/>
													<center><h4 style="color:green; margin-left:1em; margin-top:2em; margin-bottom:12em"><b>Price:</b> K '.$price.'</h4></center>
												</div>
												
											</div>
										</div>';
										include ("includes/reserve.php");
									}
								}elseif($table == "cameras"){ //IF THE PRODUCT IS A CAMERAS
									$get_phone = mysqli_query($con,"SELECT * FROM $table where ID ='$id' order by ID desc LIMIT 4 ");
										$num_phone_rows = mysqli_num_rows($get_phone);
										while($rows = mysqli_fetch_array($get_phone)){
											$ID = $rows['ID'];
											$name = $rows['name'];
											$price = $rows['price'];
											$img = $rows['img'];
											//$latest = $rows['latest'];
											//$desc = $rows['description'];
											//$ram = $rows['RAM'];
											//$memo = $rows['Memory'];
								
											echo'
											<div class="kic-top" >
												<div class="container ">
													<div class="kic ">
														<div style="margin-top:-3em" class="spec ">
															<h3>View</h3>
															<div class="ser-t">
																<b></b>
																<span><i></i></span>
																<b class="line"></b>
															</div>
														</div>
													</div>
													<div class="col-md-6 w3-card-2 w3-white kic-top1">
														<a href="single.html">
															<center><img src="'.$img.'" style="max-width:20em; margin-top:4em" class="img-responsive" alt=""></center>
														</a><br/><br/>
														<div class="add w3-black">
															<div style="padding-top:1em; padding-bottom:1em">
																<a class="btn btn-danger my-cart-btn my-cart-b " href="index.php">Home</a>
															</div>
														</div><br/>
													</div>
													<div class="col-md-6  kic-top1">
														
														<center><h2 style="margin-top:1em; font-family:gg" id="darkname">'.$name.'</h2></center>
														<p style="text-align:center; margin-top:1em; width:700px; max-width:95%">....</p><br/>
														<center><h4 style="color:green; margin-left:1em; margin-top:2em; margin-bottom:12em"><b>Price:</b> K '.$price.'</h4></center>
													</div>
													
												</div>
											</div>';
											include ("includes/reserve.php");
										}
									}elseif($table == "assessories"){ //IF THE PRODUCT IS A ASSESSORIES
										$get_phone = mysqli_query($con,"SELECT * FROM $table where ID ='$id' order by ID desc LIMIT 4 ");
											$num_phone_rows = mysqli_num_rows($get_phone);
											while($rows = mysqli_fetch_array($get_phone)){
												$ID = $rows['ID'];
												$name = $rows['name'];
												$price = $rows['price'];
												$img = $rows['img'];
												//$latest = $rows['latest'];
												//$desc = $rows['description'];
												//$ram = $rows['RAM'];
												//$memo = $rows['Memory'];
									
												echo'
												<div class="kic-top" >
													<div class="container ">
														<div class="kic ">
															<div style="margin-top:-3em" class="spec ">
																<h3>View</h3>
																<div class="ser-t">
																	<b></b>
																	<span><i></i></span>
																	<b class="line"></b>
																</div>
															</div>
														</div>
														<div class="col-md-6 w3-card-2 w3-white kic-top1">
															<a href="single.html">
																<center><img src="'.$img.'" style="max-width:20em; margin-top:4em" class="img-responsive" alt=""></center>
															</a><br/><br/>
															<div class="add w3-black">
																<div style="padding-top:1em; padding-bottom:1em">
																	<a class="btn btn-danger my-cart-btn my-cart-b " href="index.php">Home</a>
																</div>
															</div><br/>
														</div>
														<div class="col-md-6  kic-top1">
															
															<center><h2 style="margin-top:1em; font-family:gg" id="darkname">'.$name.'</h2></center>
															<p style="text-align:center; margin-top:1em; width:700px; max-width:95%">....</p><br/>
															<center><h4 style="color:green; margin-left:1em; margin-top:2em; margin-bottom:12em"><b>Price:</b> K '.$price.'</h4></center>
														</div>
														
													</div>
												</div>';

												include ("includes/reserve.php");
											}
							
		}

	
?>
		<br/><br/>

<!--footer-->
<?php include "includes/footer.php"; ?>
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
<!-- //for bootstrap working -->

</body>
</html>