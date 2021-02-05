<?php 
include '../core/confi.php';
include 'includes/head.php';
include 'includes/navigation.php';?>
			
					  <div class="row">
                   <div class="col-sm-2"></div>
                    <div class="col-lg-8 col-md-12">
                      
                        <h1 class="page-header">
                           Customers View
                            <?php
                            $curdate=date("Y-m-d");
                            echo $curdate;    
                            ?>
						</h1>

					 <div class="contact">
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
                                            <th>Details</th>
                                            
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
												 <td><href='user-contact?oid=".$id ."' class='btn btn-sm' id='button-edit' data-toggle='modal' data-target='#myModal' id='button-edit'>Details</a></td>
                                               
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
</div>
					
					 <?php
            	$tsql = "SELECT * FROM user_message WHERE id = $id";
									$tre = mysqli_query($conn,$tsql);
									while($trow=mysqli_fetch_array($tre)){ 
										$name = $trow['name'];
                                      $sub = $trow['subject'];
                                       $mesg = $trow['message']; 
									}
                                    ?>
					  <div class="panel-body">
                           
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><?php echo $name;?></h4>
                                        </div>
										<form method="post" action="user-contact">
                                       
										<div class="modal-body">
                                            <div class="form-group">
                                            <label>Subject</label>
												<textarea class="form-control" rows="3"><?php echo $sub;?></textarea>
											</div>
                                        </div>
										<div class="modal-body">
										<div class="form-group">
										  <label for="comment">Message</label>
										  <textarea  class="form-control" rows="5"><?php echo $mesg;?></textarea>
										</div>
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											
                                         
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
					
					
						<?php include 'includes/footer.php';?>