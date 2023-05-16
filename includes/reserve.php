

<?php
	if($bool != true){ ?>
<section class="mt-4 container">
			<div style="margin-top:5em" class="spec ">
				<h3>Reserve Phone</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>

			<div class="container" style="margin-top:-4em">
				<div  class="about">
					<div class="col-md-6 about-left">
					<h3 id="update">Your Details</h3>
						<?php 
							include "includes/reserve_form.php";
						?>
					</div>
					<div class="col-md-6 about-right" style=" margin-top:5em">
						<img src="images/wallpaper.jpg" width="100%"/>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</section>
	<?php } ?>