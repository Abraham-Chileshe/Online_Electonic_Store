                    <form method="POST" style="margin-top:1em" action="" enctype="multipart/form-data">
						<input type="text" class="w3-input" name="cust_name" placeholder="Your Name" value="" style="background-color:whitesmoke; width:400px; max-width:98%; margin-top:1em" required/>
						<input type="email" class="w3-input" name="cust_email" placeholder="email" value="" style="background-color:whitesmoke; width:400px; max-width:98%; margin-top:1em" required/>
						<input type="text" class="w3-input" name="cust_phone" placeholder="phone number" value="" style="background-color:whitesmoke; width:400px; max-width:98%; margin-top:1em" required/>
                        <textarea name="cust_desc" placeholder="Anything you want to say" style="background-color:whitesmoke; width:400px; height:120px; max-width:98%; margin-top:1em"></textarea>
						<br/><Br/>
						<input type="submit" name="addprod" class="w3-form mt-1 w3-btn w3-green w3-hover-black" value="Add item">
					</form>
					<?php
						if(isset($_POST['addprod'])){
							$cust_name = ucwords(strtolower(mysqli_real_escape_string($con,$_POST['cust_name'])));
                            $cust_email =mysqli_real_escape_string($con, $_POST['cust_email']);
							$cust_phone = $_POST['cust_phone'];
							$cust_desc =  ucwords(strtolower(mysqli_real_escape_string($con,$_POST['cust_desc'])));
							$desc = mysqli_real_escape_string($con, $desc);
							date_default_timezone_set("Africa/Lusaka");
 							$datetime=date("l, M-d-Y, G:i ");   

                            $sql = "INSERT INTO reserves(cname,cemail,cphone,cdescription,Proname,proprice,prodescription,date,new,img)VALUES('$cust_name','$cust_email','$cust_phone','$cust_desc','$name',' $price',' $desc','$datetime','yes','$img')";
                            $result=mysqli_query($con,$sql);

                            if($result){
                                echo '<meta http-equiv="refresh" content="0;url=reserved.php" />';;
                            }else{
                                echo mysqli_error($con);
                            }
                            
                            
						}
					?><Br/>
					
					<style>
						::placeholder{
							color:grey;
							opacity:1;
						}
					</style>
					