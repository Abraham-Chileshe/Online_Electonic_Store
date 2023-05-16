<?php
	Include "db/db.php";
	include "includes/data.php";	
?>

<!DOCTYPE html>
<html>
<head>
	<title>MaxCity Merchandise | Home</title>
	<?php include "includes/meta_links.php"; ?>
	
</head>
<body>
<?php include "includes/header.php"; ?>
  <!---->
<div style="background-image: url('images/wallpaper.jpg'); background-size:cover">
	<div  style="background-color:rgba(0,0,0,0.5);">
    <div class="container">
		<div class="banner-info">
			<h3 style="font-family:'gt'; width:600px; max-width:90%; text-shadow:1px 2px 5px black; opacity:80%">We Sell <font style="color:#C70039;">Quality</font> and <font style="color:#C70039;">Affordable</font> Phone Laptops and Other Items </h3>	
			<div class="search-form">
				<form action="search.php" method="post">
					<input type="text" placeholder="Search...keyword, e.g dell, acer, iphone x..." name="search">
					<input type="submit" value=" " >
				</form>
			</div>		
		</div>	
    </div>
	</div>
</div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>Latests</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					  <li class="active"><a href="#tab1" data-toggle="tab">Phones</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">Laptops</a></li> 
					  <li class=""><a href="#tab3" data-toggle="tab">Gaming</a></li>  
					  <li class=""><a href="#tab4" data-toggle="tab">Assessories</a></li>
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">

				<!--LATEST PHONES-->
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
							<?php
								latest("phones","phones");  //p1 = tablename; p2 = foldername
							?>
							<div class="clearfix"></div>
							<div style="margin-top:2em">
								<center><a href="iphones.php" style="padding:9px 12px; border-radius: 50% 0 50% 0; text-decoration:none; font-family:gt; font-size:16px" class="w3-card-2 w3-text-red w3-hover-black">View More ...</a></center>
							</div>
						 </div>
					</div>
				<!--// LATEST PHONES-->

					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							<?php
								latest("laptops","laptops"); //p1 = tablename; p2 = foldername;
							?>
							<div class="clearfix"></div>
							<div style="margin-top:2em">
								<center><a href="laptops.php" style="padding:9px 12px; border-radius: 50% 0 50% 0; text-decoration:none; font-family:gt; font-size:16px" class="w3-card-2 w3-text-red w3-hover-black">View More ...</a></center>
							</div>
						 </div>	  
					</div>
					<div class="tab-pane  text-style" id="tab3">
						<div class=" con-w3l">
							<?php
								latest("gaming","gaming"); //p1 = tablename; p2 = foldername;
							?>
							<div class="clearfix"></div>
							<div style="margin-top:2em">
								<center><a href="gaming.php" style="padding:9px 12px; border-radius: 50% 0 50% 0; text-decoration:none; font-family:gt; font-size:16px" class="w3-card-2 w3-text-red w3-hover-black">View More ...</a></center>
							</div>
						 </div>		  
					</div>
					<div class="tab-pane text-style" id="tab4">
							<div class=" con-w3l">
							<?php
								latest("assessories","assessories"); //p1 = tablename; p2 = foldername;
							?>
							<div class="clearfix"></div>
							<div style="margin-top:2em">
								<center><a href="assessories.php" style="padding:9px 12px; border-radius: 50% 0 50% 0; text-decoration:none; font-family:gt; font-size:16px" class="w3-card-2 w3-text-red w3-hover-black">View More ...</a></center>
							</div>
						 </div>
					</div>
				</div>
			</div>
		
	</div>
	</div>
	</div>

<!--content-->
<div class="content-mid">
	<div class="container">
		
		<div class="col-md-4 m-w3ls">
			<div class="col-md1">
				<a href="">
					<img src="images/banner.jpg" class="img-responsive img" alt="">
					<div class="big-sa" style="background-color:rgba(0,0,0,0.8);">
						<div style="padding-top:2em; padding-bottom:2em">
							<h6>New Collections</h6>
							<h3>Season<span>ing </span></h3>
							<p>New things in sock, reserve your phones and assessories </p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls1">
			<div class="col-md ">
				<a href="iphones.php">
					<img src="images/co.jpg" class="img-responsive img" alt="">
					<div class="big-sale">
						<div class="big-sale1">
							<h3>Big <span>Sale</span></h3>
							<p>What version of iPhone are you looking for? </p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls">
			<div class="col-md2 ">
				<a href="assessories.php">
					<img src="images/co2.jpg" class="img-responsive img1" alt="">
					<div class="big-sale2">
						<h3>Access<span>ories</span></h3>
						<p>Harddrives, USB cables, Pouches, Right Light </p>		
					</div>
				</a>
			</div>
			<div class="col-md3 ">
				<a href="gaming.php">
					<img src="images/co3.jpg" class="img-responsive img1" alt="">
					<div class="big-sale3">
						<h3 class="w3-text-black">Gam<span>ing</span></h3>
						<p>Get Consoles and Gaming Pads</p>
					</div>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--content-->

  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="kitchen.html"> <img class="first-slide" src="images/ba.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="care.html"> <img class="second-slide " src="images/ba1.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="hold.html"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div>
<!-- /.carousel -->

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>Contact</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
		<div class=" contact-w3">	
			<div class="col-md-5 contact-right"><br />
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7958462.429237813!2d23.35257991992327!3d-13.101214848964107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940f4a5fcfc0b71%3A0xf19ff9ac7e583e45!2sZambia!5e0!3m2!1sen!2sru!4v1644293465846!5m2!1sen!2sru" style="border:0"></iframe>
				
			</div>
			<div class="col-md-7 contact-left">
			
				<ul class="contact-list">
					<li> <i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $addr; ?></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo$gmail; ?>"><?php echo $gmail; ?></a></li>
					<li> <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo$contact; ?>"><?php echo $contact; ?></a></li>
				</ul>
				<div id="container">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<div class="resp-tabs-container hor_1">
							<div>
								<form action="#" method="post">
									<input type="text" name="Name" placeholder="Name" required="">
									<input type="email" name="Email" placeholder="Email" required="">
									<textarea name="Message" placeholder ="Message"  required></textarea>
									<input type="submit" name="sub" value="Submit" >
								</form>
							</div>
							<div>
							<style>
								::placeholder{
									color:grey;
									opacity:1;
								}
							</style>
							<?php
								if(isset($_POST['sub'])){
									$name = ucwords(strtolower(mysqli_real_escape_string($con,$_POST['Name'])));
									$email = ucwords(strtolower(mysqli_real_escape_string($con,$_POST['Email'])));
									$msg = ucwords(strtolower(mysqli_real_escape_string($con,$_POST['Message'])));

									date_default_timezone_set("Africa/Lusaka");
									$datetime=date("l, M-d-Y, G:i ");   

									$sql = "INSERT INTO messages(name,email,message,date,new)VALUES('$name','$email','$msg','$datetime','yes')";
									$result=mysqli_query($con,$sql);

									if($result)
										echo '<meta http-equiv="refresh" content="0;url=message_sent.php" />';
							}


							?>
								
							</div>
							<div>
								
							</div>
						</div>
					</div>
				</div>
				
				<!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {
					//Horizontal Tab
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab
					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', // The tab groups identifier
						activetab_bg: '#fff', // background color for active tabs in this group
						inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
						active_border_color: '#c1c1c1', // border color for active tabs heads in this group
						active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
					});

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
				
			</div>
			
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //contact -->

<?php include "includes/footer.php" ; ?>

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

  
  <!-- product -->
			
</body>
</html>