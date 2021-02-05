<?php
include 'core/confi.php';
$q1 = mysqli_query($conn, "SELECT * FROM review");
 $count = mysqli_num_rows($q1);


$rowsperpage = 1;
$page = $_REQUEST['p'];

if($page == 0 or $page == ''){
	$page = 1;
}

$page = $page - 1;
$p = $page * $rowsperpage;

$sql = "SELECT * FROM review ORDER BY RAND() LIMIT ".$p.", ".$rowsperpage;
$run_query = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_array($run_query)):
					$name = mysqli_real_escape_string($conn,$row['name']);
					$comment = mysqli_real_escape_string($conn,$row['comment']);
					
					$comment = htmlentities($row['comment'], ENT_QUOTES, "UTF-8");
					
					//$comment = str_replace("\r\n","<li>", $comment);
					


$limit = $count/$rowsperpage;
$limit = ceil($limit);
	
for($i=1;$i<=$limit; $i++){

	if($i==$_REQUEST['p']) {
		
	}
}
?>




<div class="col-lg-2">
	<p><i class="fas fa-user" style=" color: wheat;"> <?php echo $name;?> says</i>
				
				</p>
</div>
					<div class="col-lg-10">
						<p><?php echo $comment;?></p>
					
					</div>
					<?php endwhile;?>
					
					
	
		<div class="col-sm-12">
		<center>		
	<?php

 $check = $p + $rowsperpage;
if($count > $check ){

$next_page = $_REQUEST['p'] + 1;
echo '	<i class="fas fa-arrow-right" style="cursor:pointer; color: wheat; float:right; margin-left:10px; font-size:18px;" onclick="LoadDatareview('.$next_page.')"></i>';
		

}
			
if($_REQUEST['p'] > 1){ 
$prev_page =  $_REQUEST['p'] - 1;
echo ' <i class="fas fa-arrow-left" style="cursor:pointer; color: wheat; float:right; font-size:18px;" onclick="LoadDatareview('.$prev_page.')"></i>';
	
}			
?>
			</center>
			