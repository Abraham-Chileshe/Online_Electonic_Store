                    <form method="POST" style="margin-top:1em" action="" enctype="multipart/form-data">
						<input type="text" class="w3-input" name="pro_name" placeholder="Product name" value="" style="background-color:whitesmoke; width:400px; max-width:98%; margin-top:1em" required/>
						<input type="number" class="w3-input" name="pro_price" placeholder="Price" value="" style="background-color:whitesmoke; width:400px; max-width:98%; margin-top:1em" required/>
						<input type="text" class="w3-input" name="pro_status" placeholder="status" value="" style="background-color:whitesmoke; width:400px; max-width:98%; margin-top:1em" required/>
						
						<?php if($dbtable == "phones"){ ?>
						
						<input type="number" class="w3-input" name="pro_ram" placeholder="RAM Size" value="" style="background-color:whitesmoke; width:400px; max-width:98%; margin-top:1em" required/>
						<input type="number" class="w3-input" name="pro_storage" placeholder="Internal Storage Size" value="" style="background-color:whitesmoke; width:400px; max-width:98%; margin-top:1em" required/>
						
						<?php } ?>

						<input  type="file" name="file" id="imgpost" accept=".jpg,.png" size="50" style="background-color:whitesmoke; width:400px; max-width:98%; margin-top:1em" required />
						<textarea name="pro_desc" placeholder="Phone descrition/details" style="background-color:whitesmoke; width:400px; height:120px; max-width:98%; margin-top:1em" required></textarea>
						<br/><Br/>
						<input type="submit" name="addprod" class="w3-form mt-1 w3-btn w3-green w3-hover-black" value="Add item">
					</form>
					<?php
						if(isset($_POST['addprod'])){
							$pro_name = ucwords(strtolower(mysqli_real_escape_string($con,$_POST['pro_name'])));
                            $pro_price =  mysqli_real_escape_string($con,$_POST['pro_price']);
							$pro_status =  ucwords(strtolower(mysqli_real_escape_string($con,$_POST['pro_status'])));
							$pro_desc =  ucwords(strtolower(mysqli_real_escape_string($con,$_POST['pro_desc'])));
                           
							
							$file_name= $_FILES['file']['name'];
							$file_type= $_FILES['file']['type'];
							$file_size= $_FILES['file']['size'];
							$file_tem_Loc= $_FILES['file']['tmp_name'];
							$file_store= "images/".$folder."/".$file_name;
					
							$file_transfer = move_uploaded_file($file_tem_Loc,$file_store);
							 
							if($file_transfer == True){
                                if($dbtable == "phones"){
                                    $pro_storage = $_POST['pro_storage'];
							        $pro_ram = $_POST['pro_ram'];
                                    $sql = "INSERT INTO $dbtable(name,price,latest,description,img,RAM,Memory,tname)VALUES('$pro_name','$pro_price','$pro_status','$pro_desc','$file_store','$pro_ram','$pro_storage','$dbtable')";
                                    $result=mysqli_query($con,$sql);
                                }else{
                                    $sql = "INSERT INTO $dbtable(name,price,latest,description,img,tname)VALUES('$pro_name','$pro_price','$pro_status','$pro_desc','$file_store','$dbtable')";
                                    $result=mysqli_query($con,$sql);
                                }

								if($result == True){
									echo "
                                    <script>
                                        $(document).ready(function(){
                                            $('#update').text('Product Added');
                                            $('#update').addClass('w3-text-green');
                                            $('#update').fadeIn(3000);
                                        }); 

                                    </script>";

                                  include "functions/switch_case.php";

								}else{
                                    echo "
                                    <script>
                                        $(document).ready(function(){
                                            $('#update').text('Failed to Add Product');
                                            $('#update').addClass('w3-text-red');
                                            $('#update').fadeIn(3000);
                                        }); 

                                    </script>"; 
                                }
									
							}else{
								echo "Failed to Transfer the File";
							}
						}
					?>
					
					<style>
						::placeholder{
							color:grey;
							opacity:1;
						}
					</style>
					