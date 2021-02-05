<?php
include 'core/confi.php';
$q1 = mysqli_query($conn, "SELECT * FROM pies");
 $count = mysqli_num_rows($q1);


$rowsperpage = 1;
$page = $_REQUEST['p'];

if($page == 0 or $page == ''){
	$page = 1;
}

$page = $page - 1;
$p = $page * $rowsperpage;

$sql = "SELECT * FROM pies LIMIT ".$p.", ".$rowsperpage;
$run_query = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_array($run_query)):
					$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);



$limit = $count/$rowsperpage;
$limit = ceil($limit);
	
for($i=1;$i<=$limit; $i++){

	if($i==$_REQUEST['p']) {
		
	}
}
?>




<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-12 row d-flex">
								
								<div class="col-sm-3">
								<h4><?php echo $row["title"];?></h4>
									<p><?php echo $row["serving"];?></p>
									<p>
									
									<p><?php echo $row["duration"];?></p><br />
									
									<h6>Nutrition</h6>
									<p><?php echo $nutrition;?></p>
									<p>
									
								</div>
								
								
								<div class="col-sm-4">
									<h4>Ingredients:</h4>
									
									<?php echo $ingredient;?>	

									
								</div>
								
								
								
								<div class="col-sm-5">
									<h4>Directions:</h4>
									<p>
									<?php echo $direction;?>	
									</p>
								</div>
								
								</div>
						
					
					
					<div class="col-sm-12">
		<center>		
	<?php
if($_REQUEST['p'] > 1){ 
$prev_page =  $_REQUEST['p'] - 1;
echo '<button class="fancy-button medium rounded carrot-back" style="cursor:pointer;" onclick="LoadDatap('.$prev_page.')"> <i class="fas fa-arrow-left"></i> Back<span ></span></button>';
	
}
 $check = $p + $rowsperpage;
if($count > $check ){

$next_page = $_REQUEST['p'] + 1;
echo '<button class="fancy-button medium rounded carrot horizontal"  onclick="LoadDatap('.$next_page.')" style="cursor:pointer";>  Next<span 
 class="icon">	<i class="fas fa-arrow-right"></i></span></button>';
		

}
?>
			</center>
			</div>
</div>

