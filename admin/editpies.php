<?php

include '../core/confi.php';

include '../core/init.php';

include 'includes/head.php';
include 'includes/navigation.php';

?>

<?php

        
    $edit_id = ($_GET['edit']);
        $sql = ("SELECT * FROM pies WHERE id = '$edit_id'");
        $run_query = mysqli_query($conn,$sql);
                                         
        while($row = mysqli_fetch_assoc($run_query)){  
		$title = $row["title"];
         $duration = $row["duration"];         
	     $serving = $row['serving'];								
         $ingredient = $row['ingredient'];
		 $frosting = $row['frosting'];
		 $direction = $row['direction'];
		 $nutrition = $row['nutrition'];
	 $saved_image = (($row['image']!= '')?$row['image']:'');
			
			if(isset($_POST['edit'])){
				 $title = mysqli_real_escape_string($conn, $_POST['title']); 
   $duration = mysqli_real_escape_string($conn, $_POST['duration']); 
   $ingredient = mysqli_real_escape_string($conn, $_POST['ingredient']);  
   $frosting = mysqli_real_escape_string($conn, $_POST['frosting']);
	$direction = mysqli_real_escape_string($conn, $_POST['direction']);
	$nutrition = mysqli_real_escape_string($conn, $_POST['nutrition']);
	$serving = mysqli_real_escape_string($conn, $_POST['serving']);
	$file = mysqli_real_escape_string($conn, $_POST['file']);
				
		
		$edit_query = "UPDATE pies SET title = '$title', duration = '$duration', ingredient = '$ingredient', frosting = '$frosting', direction = '$direction', nutrition = '$nutrition', serving = '$serving' WHERE id = '$edit_id'";
		 $result = mysqli_query($conn,$edit_query);
		if($result){
		header("Location:pies.php");
		}
				
				
	}
	}
	
	
	
  ?> 
    <p><br /></p>
  <style>
	body{
		background-color:#1F2739;
	}
</style>	
  <div class="col-sm-2"></div>
 	<div class="col-sm-8 ">
 
  <h2 class="tx-red"><?php echo ((isset($_GET['edit']))?'Edit':'Add A New'); ?> product</h2><hr>
  <form action="editpies?<?php echo ((isset($_GET['edit']))?'edit='.$edit_id:'add=1'); ?>" method="post" enctype="multipart/form-data" autocomplete="off" class="edit-form">
      <div class="form-group col-sm-4">
          <label for="title">Title*:</label>
		  <input name="title" class="form-control" id="title" value="<?php echo $title; ?>">
      </div>
      
     
     
     
      
        <div class="form-group col-sm-4">
            <label for="price">Duration*:</label>
        
			<input name="duration" class="form-control" value="<?php echo $duration;?>">
        </div>
          
            <div class="form-group col-sm-4">
                <label for="serving">Serving</label>
                <input name="serving" class="form-control" value="<?php echo $serving; ?>">
            </div>
            
            
            
            
            
           
            <div class="form-group col-sm-3">
            <label for="list_price">Ingredient*:</label>
        
				<textarea id="list_price" name="ingredient" class="form-control" rows="15"><?php echo $ingredient ;?></textarea>
        </div>
           
           
            <div class="form-group col-sm-3">
            <label for="brand_name">Frosting*:</label>
        
				<textarea id="brand_name" type="text" name="frosting" class="form-control" rows="5"><?php echo $frosting;?></textarea>
        </div>
           
           
            <div class="form-group col-sm-3">
            <label for="color">direction*:</label>
        
				<textarea id="color" name="direction" class="form-control" rows="15"><?php echo $direction ;?></textarea>
        </div>
            
         
            
            <div class="form-group col-sm-3">
                <label for="description">Nutrition</label>
                <textarea id="description" name="nutrition" class="form-control" rows="5"><?php echo $nutrition; ?></textarea>
            </div>
            
            
           
            
         
            
            <div class="form-group col-sm-3">
            <a href="pies.php" class="btn btn-danger" role="button">Cancel</a>
             <button type="submit" class="btn btn-success" name="edit">Edit Product </button>
      </div><div class="clearfix"></div>
  </form>
</div>
   
   
  


<?php include 'includes/footer.php';?>