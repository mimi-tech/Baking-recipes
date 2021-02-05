<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:login.php");
}
?> 
<?php  
session_start();  

ob_start();
?> 

<?php include 'includes/head.php';
include 'includes/navigation.php';?>
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           ADMINISTRATOR accounts
                        </h1>
                    </div>
                </div> 
                 
                                 
            <?php
						include('../core/confi.php');
						$sql = "SELECT * FROM `user`";
						$re = mysqli_query($conn,$sql)
				?>
                
            <div class="row">
               <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
											<th>User name</th>
                                            
                                             <th>Joined date</th>
                                              <th>last login</th>
											<th>Update</th>
											<th>Remove</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											$us = $row['email'];
											
                                            $jd = $row['date_added'];
                                            $ll = $row['last_login'];
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
													<td>*</td>
													<td>".$us."</td>
													
													<td>".$jd."</td>
                                                    <td>".$ll."</td>
													<td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
															 Update 
													</button></td>
													<td><a href=usersettingdel.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete</button></td>
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>*</td>
													<td>".$us."</td>
													
													<td>".$jd."</td>
                                                    <td>".$ll."</td>
													<td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
                              Update 
                            </button></td>
													<td><a href=usersettingdel.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete</button></td>
												</tr>";
											
											}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
					<div class="panel-body">
                            <button class="btn btn-lg btn" data-toggle="modal" data-target="#myModal1" id="button-edit">
															Add New Admin
													</button>
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Add the User name and Password</h4>
                                        </div>
										<form method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Add new User name</label>
                                            <input name="newus" type="email" class="form-control" placeholder="Enter User name">
											</div>
										</div>
										<div class="modal-body">
                                            <div class="form-group">
                                            <label>New Password</label>
                                            <input name="newps" type="password" class="form-control" placeholder="Enter Password">
											</div>
                                        </div>
										
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											
                                           <input type="submit" name="in" value="Add" class="btn btn-primary">
										  </form>
										   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
						if(isset($_POST['in']))
						{
							$newus = $_POST['newus'];
							$newps = $_POST['newps'];
							//$password = 'password';
                             $hashed = password_hash($newps, PASSWORD_DEFAULT);
							$newsql ="Insert into user (email,password,date_added) values ('$newus','$hashed', CURRENT_TIMESTAMP)";
							if(mysqli_query($conn,$newsql))
							{
							echo' <script language="javascript" type="text/javascript"> alert("User name and password Added") </script>';
							
						
							}
						header("Location: user-setting.php");
						}
						?>
						
					<div class="panel-body">
                            
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Change the User name and Password</h4>
                                        </div>
										<form method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Change User name</label>
                                            <input name="usname" value="<?php echo $us; ?>" class="form-control" placeholder="Enter User name">
											</div>
										</div>
										<div class="modal-body">
                                            <div class="form-group">
                                            <label>Change Password</label>
                                            <input name="pasd" value="<?php echo $ps; ?>" class="form-control" placeholder="Enter Password">
											</div>
                                        </div>
										
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											
                                           <input type="submit" name="up" value="Update" class="btn btn-primary">
										  
										   
                                        </div>
										</form>
                                    </div>
									</div>
                                </div>
                            </div>
                        </div>
				</div>
				</div>
			
               
                <!-- /. ROW  -->
                <?php 
				if(isset($_POST['up']))
				{
					$usname = $_POST['usname'];
					$passwr = $_POST['pasd'];
					 $hashed = password_hash($passwr, PASSWORD_DEFAULT);
					$upsql = "UPDATE `user` SET `email`='$usname',`password`='$hashed' WHERE id = '$id'";
					if(mysqli_query($conn,$upsql))
					{
					echo' <script language="javascript" type="text/javascript"> alert("User name and password update") </script>';
					
				
					}
				
				header("Location: user-setting.php");
				
				}
				ob_end_flush();
				
				
				
				
				?>
                                
              <?php include 'includes/footer.php';?>