<?php

include '../core/confi.php';

include '../core/init.php';

include 'includes/head.php';
include 'includes/navigation.php';

?>

<?php

        
    $edit_id = ($_GET['edit']);
        $sql = ("SELECT * FROM review WHERE id = '$edit_id'");
        $run_query = mysqli_query($conn,$sql);
                                         
        while($row = mysqli_fetch_assoc($run_query)){  
		$name = $row["name"];
         $comment = $row["comment"];         
	    
			
			if(isset($_POST['edit'])){
				 $name = mysqli_real_escape_string($conn, $_POST['name']); 
   $comment = mysqli_real_escape_string($conn, $_POST['comment']); 
  	
		
		$edit_query = "UPDATE review SET name = '$name', comment = '$comment' WHERE id = '$edit_id'";
		 $result = mysqli_query($conn,$edit_query);
		if($result){
		header("Location:review.php");
		}else{
			 //something went wrong
            //echo "Error:" . $edit_query . "<br>" . mysqli_error($conn);
			
		}
				
				
	}
	}
	
	
	
  ?> 
    <p><br /></p>
   <p><br /></p>
    <p><br /></p>
  <div class="col-sm-2"></div>
 	<div class="col-sm-8 ">
 
  <h2 class="tx-red"><?php echo ((isset($_GET['edit']))?'Edit':'Add A New'); ?> product</h2>
  <form action="editreview?<?php echo ((isset($_GET['edit']))?'edit='.$edit_id:'add=1'); ?>" method="post" enctype="multipart/form-data" class="edit-form">
      <div class="form-group col-sm-5">
          <label for="title">Name*:</label>
		  <input name="name" class="form-control" id="title" value="<?php echo $name; ?>">
      </div>
      
     
     
     
      
        <div class="form-group col-sm-5">
            <label for="price">Comment*:</label>
        
			<textarea name="comment" class="form-control" rows="5"><?php echo $comment;?></textarea>
        </div>
         
            <div class="form-group col-sm-3">
            <a href="review.php" class="btn btn-danger" role="button">Cancel</a>
            <button type="submit" class="btn btn-success" name="edit">Edit Product </button>
      </div>
      <div class="clearfix"></div>
  </form>
   
</div>
   
<?php include 'includes/footer.php';?>