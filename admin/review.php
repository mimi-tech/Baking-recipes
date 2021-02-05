
     
   <?php
//require_once $_SERVER['DOCUMENT_ROOT'].'/chilee/core/init.php';

include '../core/confi.php';

include '../core/init.php';

include 'includes/head.php';
include 'includes/navigation.php';
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $db->query("DELETE FROM review WHERE id='$id'");
    header("Location: review.php");
}


if(isset($_POST['add'])){ 
  
   $name = mysqli_real_escape_string($conn, $_POST['name']); 
   $comment = mysqli_real_escape_string($conn, $_POST['comment']); 
   
			
	 $insertsql = "INSERT INTO `yummy`.`review` ( `name`, `comment`) VALUES ('$name', '$comment')";
		
		 $run_query = mysqli_query($conn,$insertsql);
		if($run_query){
			$mss = "Added successfully";
		}
}
	
	
  ?> 
  <?php 

$sql = "SELECT * FROM review";
$presult = $db->query($sql);

    

?>
<?php
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $db->query( "DELETE FROM review WHERE id= '$id' ");
    header("Location: review.php");
}
        
    
	
  ?>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<div class="tbl">

<div class="col-sm-2"></div>
<div class="col-sm-8">
	<h1 class="yellow">Review</h1> 
	<a  class="btn btn-success"id="add-product-btn">Add Review</a><div class="clearfix"></div>

</div>
<br />
<table class="container" id="dataTables-example">
    <thead>
        <th><h1>Action</h1></th>
        <th><h1>name</h1></th>
          <th><h1>Comment</h1></th>          
                
         
   
    </thead>
    <tbody>
        <?php while($product = mysqli_fetch_assoc($presult)): 
       
        ?>
        <tr>
        <td>
        <a href="editreview.php?edit=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
       <a class="delete_review btn btn-xs btn-default" href="review?delete=<?php echo $product['id'];?>">
<span class="glyphicon glyphicon-remove"></span>
</a>     
        </td> 
        <td><?php echo $product['name']; ?></td> 
       
       <td><?php echo $product['comment']; ?></td> 
       
          
       
         
        </tr>
        <?php endwhile; ?>
    </tbody>
    
</table>
</div>

 
 <div class="row">
 	<div class="col-sm-2"></div>
 	<div class="col-sm-8 ">
 	
  <form action="review" method="post" enctype="multipart/form-data" id="pro-form" style="display:none;" autocomplete="off" class="prod-form">
     <h1>Add Reviews</h1>
     <h3><?php echo $mss;?></h3>
      <div class="form-group col-sm-5">
          <label for="title">Name:</label>
		  <input name="name" class="form-control" id="title" value="<?php echo $title; ?>">
      </div>
      
         <div class="form-group col-sm-5">
            <label for="color">Comment*:</label>
        
				<textarea id="color" name="comment" class="form-control" rows="5"><?php echo $direction ;?></textarea>
        </div>
          <div class="form-group col-sm-3">
            <a href="review.php" class="btn btn-danger" role="button">Cancel</a>
            <button type="submit" class="btn btn-success" name="add">Add Review </button>
      </div><div class="clearfix"></div>
		</form>
 	</div>
 </div>
   
   
  
<?php  include 'includes/footer.php'; ?>


     