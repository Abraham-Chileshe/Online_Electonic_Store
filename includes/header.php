
<?php include "db/session.php"; ?>
<div class="header ">

		<div class="container " >
			
			<div class="logo" style="margin-top:2em">
				<h1 class="w3-text-white"><a href="index.php"><div class="title" style="font-family:'gg'; margin-bottom:0.5em">Yo<font class="w3-text-red">u</font>r Website Name</div><span class=" mt-2 w3-text-red"><?php echo$motto; ?></span></a></h1>
			</div>
			
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="https://web.facebook.com/MaxCityMerchandise" target="_blank" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="tel:<?php echo$contact;?>" class="icon twitter" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i><span></span></a></li>
					<li><a href="mailto:<?php echo$gmail;?>" class="icon pinterest" target="_blank"><i class="fa fa-envelope w3-text-red w3-text-hover-white" aria-hidden="true"></i><span></span></a></li>
					</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Phones<b class="caret"></b></span></a>
								
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-6">
											<ul class="multi-column-dropdown">		
												<li><a href="iphones.php"><i class="fa fa-angle-right" aria-hidden="true"></i>iPhone</a></li>
												<li><a href="iwatches.php"><i class="fa fa-angle-right" aria-hidden="true"></i>iWatch</a></li>							
												<li><a href="iBattery.php"><i class="fa fa-angle-right" aria-hidden="true"></i>iPhone Batteries</a></li>							
												<li><a href="airpods.php"><i class="fa fa-angle-right" aria-hidden="true"></i>AirPod Pouches</a></li>
												
											</ul>
										
										</div>
										<div class="col-sm-6 ">
											<a href=""><img src="images/phones.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>

							<li class="dropdown">
							
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Laptops/Gaming <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-6">
											<ul class="multi-column-dropdown">
												<li><a href="laptops.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Laptops </a></li>
												<li><a href="gaming.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Console/Pads</a></li>
												<li><a href="cameras.php"><i class="fa fa-angle-right" aria-hidden="true"></i>HD Cameras</a></li>
											</ul>
											
										</div>
										<div class="col-sm-6">
											<a href=""><img src="images/game.jpg" class="img-responsive" alt="Gaming Console and Pads"></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Assessories<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi2">
									<div class="row">
										<div class="col-sm-6">
											<ul class="multi-column-dropdown">
												<li><a href="assessories.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Assessories</a></li>
											</ul>
										
										</div>
										
										<div class="col-sm-6">
											<a href=""><img src="images/assessories.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							<li><a href="about.php" class="hyper"> <span>About</span></a></li>

							<?php
								$num_reserves= mysqli_query($con,"SELECT * FROM reserves where new='yes'");
								$numres = mysqli_num_rows($num_reserves);

								$num_msg= mysqli_query($con,"SELECT * FROM messages where new='yes'");
								$mesres = mysqli_num_rows($num_msg);

								if($bool){

									if($numres == NULL)
										echo '<li><a href="admin_reserved.php" class="hyper"> <span>Reserves</span></a></li>';
									else
										echo '<li><a href="functions/neutral_reserves.php" class="hyper w3-text-orange "> <span><span class="fa fa-bell"></span> Reserves ['.$numres.']</span></a></li>';

									if($mesres == NULL)
										echo '<li><a href="messages.php" class="hyper"> <span>Inbox</span></a></li>';
									else
										echo '<li><a href="functions/neutral_msg.php" class="hyper w3-text-green "> <span><span class="fa fa-envelope"></span> Inbox ['.$mesres.']</span></a></li>';

									echo '<li><a href="settings.php" class="hyper"><b> <span>Settings</span></b></a></li>';
									
									
								}
							?>
						</ul>
					</div>
					</nav>
					 <div class="cart" >

					


					<?php

						
						if($bool){
							echo "<span id='darkname'>".$admin_ID."</span>";
							echo '<a href="login/logout.php" id="darkname"> <span class="fa fa-sign-out w3-hover-text-white w3-hover-black" style="margin-left:1em; padding:5px 5px 5px 6px; border-radius:50% 0 50% 0;"><span class="badge badge-notify my-cart-badge"></span></span></a>';
						}else{
							echo '<a href="login/index.php" id="darkname"> <span class="fa fa-user w3-hover-text-white w3-hover-black" style="padding:5px 5px 5px 6px; border-radius:50% 0 50% 0;"><span class="badge badge-notify my-cart-badge"></span></span></a>';
						}


					?>
					
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>