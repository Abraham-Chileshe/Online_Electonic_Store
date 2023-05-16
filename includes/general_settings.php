            <div class="col-md-6 about-left">
                <form method="POST" style="margin-top:4em" action="">
					<input type="text" class="w3-input" name="about" value="<?php echo$abt; ?>" style="width:400px; max-width:98%;" required/>
					<input type="submit" name="abtbtn" class="mt-1 w3-btn w3-green" value="Change">
				</form>
				<?php
					if(isset($_POST['abtbtn'])){
						$new= $_POST['about'];
						$updator = "UPDATE about SET About='$new' WHERE ID=1";
						$result = mysqli_query($con,$updator);
						echo '<meta http-equiv="refresh" content="0;url=settings.php" />';
					}

				?>

				<form method="POST" style="margin-top:3em" action="">
					<input type="text" class="w3-input" name="new_mtto" value="<?php echo$motto; ?>" style="width:400px; max-width:98%;" required/>
					<input type="submit" name="mtto" class="mt-1 w3-btn w3-green" value="Change">
				</form>
				<?php
					if(isset($_POST['mtto'])){
						$new_motto = $_POST['new_mtto'];
						$updator = "UPDATE about SET motto='$new_motto' WHERE ID=1";
						$result = mysqli_query($con,$updator);
						echo '<meta http-equiv="refresh" content="0;url=settings.php" />';
					}

				?>

				<form method="POST" style="margin-top:3em" action="">
					<input type="email" class="w3-input" name="email" value="<?php echo$gmail; ?>" style="width:400px; max-width:98%;" required/>
					<input type="submit" name="emailbtn" class="mt-1 w3-btn w3-green" value="Change">
				</form>
				<?php
					if(isset($_POST['emailbtn'])){
						$new= $_POST['email'];
						$updator = "UPDATE about SET email='$new' WHERE ID=1";
						$result = mysqli_query($con,$updator);
						echo '<meta http-equiv="refresh" content="0;url=settings.php" />';
					}

				?>
					<div style="margin-top:3em">
					<?php

					if($theme != 'dark'){ ?>
					<form method="POST" action="">
					<button class="w3-btn w3-black w3-text-white w3-hover-text-black w3-hover-white rounded" style="border:none;" name="sub"> Dark theme</button>
					</form>
					<?php }else{?>
					<form method="POST" action="">
						<button class="w3-btn w3-white w3-text-black w3-hover-text-white w3-hover-black" style="border:none;" name="sub2"> Light theme</button>
					</form>
					<?php }
					?>
					</div>

				
			</div>
			<div class="col-md-6 about-right">
				<form method="POST" style="margin-top:4em" action="">
					<input type="text" class="w3-input" name="address" value="<?php echo$addr; ?>" style="width:400px; max-width:98%;" required/>
					<input type="submit" name="addressbtn" class="mt-1 w3-btn w3-green" value="Change">
				</form>
				<?php
					if(isset($_POST['addressbtn'])){
						$new= $_POST['address'];
						$updator = "UPDATE about SET Address='$new' WHERE ID=1";
						$result = mysqli_query($con,$updator);
						echo '<meta http-equiv="refresh" content="0;url=settings.php" />';
					}

				?>

				<form method="POST" style="margin-top:3em" action="">
					<input type="text" class="w3-input" name="mobile" value="<?php echo$contact; ?>" style="width:400px; max-width:98%;" required/>
					<input type="submit" name="mobilebtn" class="mt-1 w3-btn w3-green" value="Change">
				</form>
				<?php
					if(isset($_POST['mobilebtn'])){
						$new= $_POST['mobile'];
						$updator = "UPDATE about SET contact='$new' WHERE ID=1";
						$result = mysqli_query($con,$updator);
						echo '<meta http-equiv="refresh" content="0;url=settings.php" />';
					}

				?>

				<form method="POST" style="margin-top:3em" action="">
					<input type="text" class="w3-input" name="year" value="<?php echo$year; ?>" style="width:400px; max-width:98%;" required/>
					<input type="submit" name="yearbtn" class="mt-1 w3-btn w3-green" value="Change">
				</form>
				<?php
					if(isset($_POST['yearbtn'])){
						$new= $_POST['year'];
						$updator = "UPDATE about SET year='$new' WHERE ID=1";
						$result = mysqli_query($con,$updator);
						echo '<meta http-equiv="refresh" content="0;url=settings.php" />';
					}

				?>

				

				<?php
				if(isset($_POST['sub'])){
					$updator = "UPDATE about SET theme='dark' WHERE ID='1'";
					$result = mysqli_query($con,$updator);
					echo '<meta http-equiv="refresh" content="0;url=settings.php" />';
				}

				if(isset($_POST['sub2'])){
					$updator = "UPDATE about SET theme='light' WHERE ID='1'";
					$result = mysqli_query($con,$updator);
					echo '<meta http-equiv="refresh" content="0;url=settings.php" />';
				}
				?>
							