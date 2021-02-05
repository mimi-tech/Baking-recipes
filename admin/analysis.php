  
<?php
//require_once $_SERVER['DOCUMENT_ROOT'].'/chilee/core/init.php';

include '../core/confi.php';

include '../core/init.php';

include 'includes/head.php';
include 'includes/navigation.php';
?>
<p><br /></p>
 
  
<?php
 
$n = date('n');

$d = date('d');

$y = date('Y');
$m = date('F');
$currentWeekNumber = date('W');
 $date=date("Y-m-d");

$unixTimestamp = strtotime($date);

$dayOfWeek = date("l", $unixTimestamp);
?>


<?php
                                        $yesterday = $d - 1;
                
										$sql = "SELECT * FROM user_info WHERE day = '$yesterday' AND year = '$y'";
										$run_query = mysqli_query($conn,$sql);
                                          $count = mysqli_num_rows($run_query);
                                          
                                          
									?>


<?php
										
                                       $ly = $y - 1;
                
										$sql = "SELECT * FROM user_info WHERE year = '$ly'";
										$run_query = mysqli_query($conn,$sql);
                                          $county = mysqli_num_rows($run_query);
                                          
                                          
									?>

<?php
										
                                       
                
										$sql = "SELECT * FROM user_info WHERE year = '$y'";
										$run_query = mysqli_query($conn,$sql);
                                          $countyr = mysqli_num_rows($run_query);
                                          
                                          
									?>

<?php
										
                                      
                
										$sql = "SELECT * FROM user_info WHERE month = '$n' And year = '$y'";
										$run_query = mysqli_query($conn,$sql);
                                          $countm = mysqli_num_rows($run_query);
                                         
									?>


<?php
									
                                      $last_month = $n - 1;
                
										$sql = "SELECT * FROM user_info WHERE month = '$last_month' ";
										$run_query = mysqli_query($conn,$sql);
                                          $countlm = mysqli_num_rows($run_query);
                                         
									?>




<?php
										
                                        
										$sql = "SELECT * FROM user_info WHERE wk_number = '$currentWeekNumber' AND year = '$y'";
										$run_query = mysqli_query($conn,$sql);
                                          $countw = mysqli_num_rows($run_query);
                                          
                                                 
                                                 ?>
                                                 
  <?php
$sql = "SELECT * FROM user_info";
$run_query = mysqli_query($conn,$sql);
$counto = mysqli_num_rows($run_query);
?>                                               

                <div class="row">
                   <div class="col-sm-2"></div>
                    <div class="col-lg-8 col-md-12">
                       
                       
                       
                       
                       
                        <h1 class="page-header">
                           sales Analysis
                            <?php
                            $curdate=date("Y-m-d");
                            echo $curdate;    
                            ?>
						</h1>

                         
                    
                          
                            <div class="customer-analysis">
                            
                      
						<div class="customer" >
                            <div class='col-sm-3'>
                                <div class='panel text-center no-boder bg-color-blue'>
                                    <div class='panel-body'>
                                        <p class="sales">Total Customer Count</p>
                                        <i class='fa fa-users fa-3x pull-left'></i>
                                        <h3 class="pull-right">
                                            <?php echo $counto; ?>
                                            
                                        </h3>
                                    </div>

                                </div>
                            </div>
           
                
                    <div>
                     
                            <div class='col-sm-3'>
                                <div class='panel text-center no-boder bg-color-blue'>
                                    <div class='panel-body'>
                                        <p class="sales">Yesterday Count</p>
                                        <i class='fa fa-users fa-3x pull-left'></i>
                                        <h3 class="pull-right">
                                            <?php echo $count; ?>
                                            
                                        </h3>
                                    </div>

                                </div>
                            </div>



                            <div class='col-sm-3'>
                                <div class='panel text-center no-boder bg-color-brown'>
                                    <div class='panel-body'>
                                        <p class="sales">
                                            <?php echo $y;?> Customer Count</p>
                                        <i class='fa fa-users fa-3x pull-left'></i>
                                        <h3 class="pull-right">
                                            <?php echo $countyr; ?>
                                             <?php echo $msg; ?>
                                        </h3>
                                    </div>

                                </div>
                            </div>

                            <div class='col-sm-3'>
                                <div class='panel text-center no-boder bg-color-green'>
                                    <div class='panel-body'>
                                        <p class="sales">
                                            <?php echo $m;?> Customer Count</p>
                                        <i class='fa fa-users fa-3x pull-left'></i>
                                        <h3 class="pull-right">
                                            <?php echo $countm; ?>
                                             <?php echo $msg; ?>
                                        </h3>
                                    </div>

                                </div>
                            </div>

                            <div class='col-sm-3'>
                                <div class='panel text-center no-boder bg-color-red'>
                                    <div class='panel-body'>
                                        <p class="sales">
                                            <?php echo $currentWeekNumber;?> Week Customer Count</p>
                                        <i class='fa fa-users fa-3x pull-left'></i>
                                        <h3 class="pull-right">
                                            <?php echo $countw; ?>
                                             <?php echo $msg; ?>
                                        </h3>
                                    </div>

                                </div>
                            </div>

                            <div class='col-sm-3'>
                                <div class='panel text-center no-boder bg-color-ash'>
                                    <div class='panel-body'>
                                        <p class="sales">Last year Customer Count</p>
                                        <i class='fa fa-users fa-3x pull-left'></i>
                                        <h3 class="pull-right">
                                            <?php echo $county; ?>
                                            <?php echo $msg; ?>
                                        </h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                        
                        <?php
										include ('db.php');
                                        
										$sql = "SELECT * FROM user_info WHERE date_added = '$curdate'";
										$run_query = mysqli_query($conn,$sql);
                                          $countt = mysqli_num_rows($run_query);
                                          if($countt > 0){
                                              
                                          }
                                                 ?>
                                                 
                        <div class="row">
                            <div class='col-sm-3'>
                                <div class='panel text-center no-boder bg-color-blue'>
                                    <div class='panel-body'>
                                        <p class="sales">Today's Customer Count</p>
                                        <i class='fa fa-users fa-3x pull-left'></i>
                                        <h3 class="pull-right">
                                            <?php echo $countt; ?>
                                            
                                        </h3>
                                    </div>

                                </div>
                            </div>

                        </div>
               
                

						</div>
							
							
<!--subcribers-->
				
							
<!--	Contact tab-->
						<div class="contact" style="display:none;">
						 <div id="page-wrapper" >
            <div id="page-inner">
			
				<?php
							
								$fsql = "SELECT * FROM `user_message`";
								$fre = mysqli_query($conn,$fsql);
								$f =0;
								while($row=mysqli_fetch_array($fre) )
								{
										$f = $f + 1;
								
								}
						
								?> 
				 <button class="btn btn-primary" type="button">
												 Users Message  <span class="badge"><?php echo $f ; ?></span>
											</button>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                           
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                          
                                          <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email</th>
											<th>Mobile Number</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                           
									<?php
                                       
									$csql = "select * from user_message";
									$cre = mysqli_query($conn,$csql);
									while($crow=mysqli_fetch_array($cre) )
									{	
										$id = $crow['id'];
											echo"<tr>
												<th>".$crow['id']."</th>
												<th>".$crow['name']." </th>
												<th>".$crow['email']." </th>
												<th>".$crow['phone']." </th>
												<th>".$crow['subject']."</th>
												<th>".$crow['message']."</th>
                                               
												</tr>";
										
									
									}
									?>
						
							
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				</div>
							 </div>
								</div>
						</div>
						
						
						</div>
							
					 <div class="col-sm-2"></div>
</div>
					</div>


   

  <?php include 'includes/footer.php';?>