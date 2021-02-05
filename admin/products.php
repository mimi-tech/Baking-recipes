
   
<?php
//require_once $_SERVER['DOCUMENT_ROOT'].'/chilee/core/init.php';

include '../core/confi.php';

include '../core/init.php';

include 'includes/head.php';
include 'includes/navigation.php';
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $db->query("UPDATE cake SET deleted = 1 WHERE id = '$id'");
    header("Location: products.php");
}


if(isset($_POST['add'])){ 
  
   $title = mysqli_real_escape_string($conn, $_POST['title']); 
   $duration = mysqli_real_escape_string($conn, $_POST['duration']); 
   $ingredient = mysqli_real_escape_string($conn, $_POST['ingredient']);  
   $frosting = mysqli_real_escape_string($conn, $_POST['frosting']);
	$direction = mysqli_real_escape_string($conn, $_POST['direction']);
	$nutrition = mysqli_real_escape_string($conn, $_POST['nutrition']);
	$serving = mysqli_real_escape_string($conn, $_POST['serving']);
	$file = mysqli_real_escape_string($conn, $_POST['file']);
	
	
			
	 $insertsql = "INSERT INTO `yummy`.`cake` ( `title`, `duration`, `ingredient`, `frosting`, `direction`, `nutrition`, `serving`) VALUES ('$title', '$duration', '$ingredient', '$frosting', '$direction', '$nutrition',  '$serving')";
		
		 $run_query = mysqli_query($conn,$insertsql);
		if($run_query){
			header("Location:products.php");
		}
}
	
	
  ?> 
  
  
  
  <?php 

$sql = "SELECT * FROM cake WHERE deleted = 0 ";
$presult = $db->query($sql);
if(isset($_GET['featured'])){
    $id = (int)$_GET['id'];
    $featured = (int)$_GET['featured'];
    $featuredsql = "UPDATE cake SET featured = '$featured' WHERE id = '$id'";
    $db->query($featuredsql);
    header("Location: products.php");
}
    

?>


<div class="tbl">

<div class="col-sm-2"></div>
<div class="col-sm-8">
	<h1 class="yellow">Cake Products <span>Cake</span></h1> 
	<a  class="btn btn-success"id="add-product-btn">Add product</a><div class="clearfix"></div>

</div>
<br />
<table class="container" id="dataTables-example">
    <thead>
        <th><h1>Action</h1></th>
        <th><h1>Products</h1></th>    
                
    <th><h1>Featured</h1></th>            
   
    </thead>
    <tbody>
        <?php while($product = mysqli_fetch_assoc($presult)): 
       
        ?>
        <tr>
        <td>
        <a href="editproduct.php?edit=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
       <a class="delete_employee btn btn-xs btn-default" data-emp-id="<?php echo $product['id']; ?>" href="javascript:void(0)">
<span class="glyphicon glyphicon-remove"></span>
</a>     
        </td> 
        <td><?php echo $product['title']; ?></td> 
       
        <td>
            <a href="products.php?featured=<?php echo (($product['featured'] == 0)?'1':'0'); ?>&id=<?=$product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-<?php echo (($product['featured']==1)?'minus':'plus'); ?>"> </span></a>&nbsp; <?php echo (($product['featured'] == 1)?'Featured Product': '');?>    
        </td> 
          
       
         
        </tr>
        <?php endwhile; ?>
    </tbody>
    
</table>
</div>

 
 <div class="row">
 	<div class="col-sm-2"></div>
 	<div class="col-sm-8 ">
 	
  <form action="products" method="post" enctype="multipart/form-data" id="pro-form" style="display:none;" autocomplete="off" class="prod-form">
     <h1>Add cake product</h1>
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
        
				<textarea id="list_price" name="ingredient" class="form-control" rows="5"><?php echo $ingredient ;?></textarea>
        </div>
           
           
            <div class="form-group col-sm-3">
            <label for="brand_name">Frosting*:</label>
        
				<textarea id="brand_name" type="text" name="frosting" class="form-control" rows="5"><?php echo $frosting;?></textarea>
        </div>
           
           
            <div class="form-group col-sm-3">
            <label for="color">direction*:</label>
        
				<textarea id="color" name="direction" class="form-control" rows="5"><?php echo $direction ;?></textarea>
        </div>
            
         
            
            <div class="form-group col-sm-3">
                <label for="description">Nutrition</label>
                <textarea id="description" name="nutrition" class="form-control" rows="5"><?php echo $nutrition; ?></textarea>
            </div>
                  
           
            
         
            
            <div class="form-group col-sm-3">
            <a href="products.php" class="btn btn-danger" role="button">Cancel</a>
				<button type="submit" class="btn btn-success" name="add">Add Product </button>
      </div><div class="clearfix"></div>
  </form>
   	
 	</div>
 </div>
   
   
  
<?php  include 'includes/footer.php'; ?>


     