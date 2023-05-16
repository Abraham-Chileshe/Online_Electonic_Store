<?php
$about = mysqli_query($con,"SELECT * FROM about where ID=1");
$value = mysqli_fetch_assoc($about);

$abt = mysqli_real_escape_string($con,$value['About']);
$gmail = mysqli_real_escape_string($con,$value['email']);
$contact = mysqli_real_escape_string($con,$value['contact']);
$addr = mysqli_real_escape_string($con,$value['Address']); 
$year = mysqli_real_escape_string($con,$value['year']);
$motto = mysqli_real_escape_string($con,$value['motto']);
$cdesc = mysqli_real_escape_string($con,$value['company_description']);
$cmotto = mysqli_real_escape_string($con,$value['company_motto']);
$cvision = mysqli_real_escape_string($con,$value['company_vision']);
$theme = mysqli_real_escape_string($con,$value['theme']);

function latest($table,$folder){
    require("db/db.php");
    $bool= (isset($_SESSION['mcmuser'])&&$_SESSION['user_Id']!="");
    
    $get_phone = mysqli_query($con,"SELECT * FROM $table order by ID desc LIMIT 4 ");
    $num_phone_rows = mysqli_num_rows($get_phone);
    
    if($num_phone_rows != NULL){
        while($rows = mysqli_fetch_array($get_phone)){
            $ID = $rows['ID'];
            $name = mysqli_real_escape_string($con,$rows['name']);
            $price = mysqli_real_escape_string($con,$rows['price']);
            $img = mysqli_real_escape_string($con,$rows['img']);
            $latest = mysqli_real_escape_string($con,$rows['latest']);

            echo'
                <div class="col-md-3  m-wthree">
                    <div class="col-m w3-card-2">								
                        <a href=".$img.'.$img.'" target="_blank"  class="offer-img">
                            <img src="'.$img.'" style="min-height:6em; max-height:10em" class="img-responsive" alt="">
                            <div class="offer"><p><span>'.$latest.'</span></p></div>
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="" style="font-family:gg" id="darkname">'.$name.'</a></h6>							
                            </div>
                            <div class="mid-2">
                                <p ><em class="w3-text-green item_price"><b>K'.$price.'</b></em></p>
                                <div class="block">
                                    <a href="view-product.php?id='.$ID.'&&t='.$table.'" class="w3-btn" style="border-radius:6px">View</a>';
                                    if($bool){
                                        echo '<a href="functions/delete.php?id='.$ID.'&&t='.$table.'" class="w3-btn w3-red" style="border-radius:6px">delete</a>';
                                    }
                                    echo'
                                    </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">';
                         
                            if($bool!=True){
                               
                                echo '<a href="view-product.php?id='.$ID.'&&t='.$table.'" class="w3-hover-red btn btn-danger my-cart-btn my-cart-b ">Reserve</a>';
                            }
                      
                            echo '          
                            </div>									
                        </div>
                    </div>
                </div>';
        }
    }else{
        echo "<div class='h2 w3-text-red text-center' style='font-family:gt;'>No content Available</div>";
    }
}

function product_section($table){
    require("db/db.php");
    $bool= (isset($_SESSION['mcmuser'])&&$_SESSION['user_Id']!="");
    
    $get_phone = mysqli_query($con,"SELECT * FROM $table order by ID desc");
				$num_phone_rows = mysqli_num_rows($get_phone);
				
				if($num_phone_rows != NULL){
					while($rows = mysqli_fetch_array($get_phone)){
						$ID = $rows['ID'];
						$name = mysqli_real_escape_string($con,$rows['name']);
						$price = mysqli_real_escape_string($con,$rows['price']);
						$img = mysqli_real_escape_string($con,$rows['img']);
						$latest = mysqli_real_escape_string($con,$rows['latest']);

						?>  
                           
							<div style="margin-top:1em" class="col-lg-3 col-md-3">
								<div class="col-m w3-card-2">								
									<a href="<?php echo$img; ?>" target="_blank" >
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
												<a href="view-product.php?id=<?php echo$ID;?>&&t=<?php echo$table;?>" class="w3-btn" style="border-radius:6px">View</a>
                                                <?php
                                                    if($bool){
                                                        echo '<a href="functions/delete.php?id='.$ID.'&&t='.$table.'" class="w3-btn w3-red" style="border-radius:6px">delete</a>';
                                                    }
                                                ?>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
                                            <?php
                                            if($bool!=True){
											   
                                                echo '<a href="view-product.php?id='.$ID.'&&t='.$table.'" class="w3-hover-red btn btn-danger my-cart-btn my-cart-b ">Reserve</a>';
                            
                                            }
                                            ?>
                                        </div>									
									</div>
								</div>
							</div>
                         
                        <?php
					}
				}else{
					echo "<div class='h2 w3-text-red text-center' style='font-family:gt;'>No content Available</div>";
				}
}

?>