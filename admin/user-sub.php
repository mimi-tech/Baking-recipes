			<?php 
include '../core/confi.php';
include 'includes/head.php';
include 'includes/navigation.php';?>
			
	
				 <div class="row">
                   <div class="col-sm-2"></div>
                    <div class="col-lg-8 col-md-12">
                      
                        <h1 class="page-header">
                           sales Analysis
                            <?php
                            $curdate=date("Y-m-d");
                            echo $curdate;    
                            ?>
                            
                            <span><?php echo $mss;?></span>
						</h1>
							   <div id="page-wrapper" >
            <div id="page-inner">
			
				<?php
							
								$fsql = "SELECT * FROM `contact`";
								$fre = mysqli_query($conn,$fsql);
								$f =0;
								while($row=mysqli_fetch_array($fre) )
								{
										$f = $f + 1;
								
								}
						
								?> 
				 <button class="btn btn-primary" type="button">
												 Followers  <span class="badge"><?php echo $f ; ?></span>
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
                                          
                                          <th>#</th>
                                            
                                            <th>Email</th>
											<th>Follow Start</th>
                                            <th>Permission status</th>
                                            <th>Approval status</th>
                                             <th>Remove</th>
                                             <th>Remove</th>
                                             <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          
                                          <?php


$eid = $_GET['eid'];
$approval ="Approved";
$napproval="Not Approved";

$view="select * from contact where id = '$eid' ";
$re = mysqli_query($conn,$view);
while ($row=mysqli_fetch_array($re))
{
	$id =$row['approval'];

}

if($id=="Not Approved")
{
	$sql ="UPDATE `contact` SET `approval`= '$approval' WHERE id = '$eid' ";
	if(mysqli_query($conn,$sql))
	{
		
		//header("Location: user-sub");
	}
}
else {
$sql ="UPDATE `contact` SET `approval`= '$napproval' WHERE id = '$eid' ";
	if(mysqli_query($conn,$sql))
	{
		
		//header("Location: user-sub");
	}



}
?>
                                         
                                         
                                         
  <?php

$id=$_GET['did'];

$view="DELETE FROM `contact` WHERE id ='$id' ";

	$re = mysqli_query($conn,$view);
	



?>                                       
                                          
                                          
                                           
									<?php
                                       
									$csql = "select * from contact";
									$cre = mysqli_query($conn,$csql);
									while($crow=mysqli_fetch_array($cre) )
									{	
										$nums++;
										$id = $crow['id'];
										$email = $crow['email'];
											echo'<tr>
												<th>'.$crow['id'].'</th>
												
												<th>'.$crow['email'].' </th>
												<th>'.$crow['cdate'].' </th>
												<th>'.$crow['approval'].'</th>
                                                <td><a href=user-sub?eid='.$id .' <button class="btn btn-primary"> <i class="fa fa-edit" ></i> Permission</button></td>
													<td><a href=newsletterdel.php?did='.$id .' <button class="btn btn-danger"> <i class="fa fa-edit" ></i> Delete</button></td>
													
						<td>
							<input type="checkbox" name="single_select" class="single_select" data-email="'.$crow["email"].'" data-name="'.$crow["cdate"].'" />
						</td>
													<td>
					                                   <button type="button" name="email_button" class="btn btn-info btn-xs email_button" id="'.$nums++.'" data-email="'.$crow["email"].'" data-name="'.$crow["cdate"].'" data-action="single">Send Single</button>
						                            </td>
												</tr>';
										
									
									}
									?>
                                    
                    <!--End Advanced Tables -->
									</tbody>
								</table>
                </div>
            </div>
						</div>
					</div>
				</div>
				</div>
								   </div>
               
                <!-- /. ROW  -->
            
                </div>
					 </div>
							
						
						
							
						<?php include 'includes/footer.php';?>
						
					
				
			