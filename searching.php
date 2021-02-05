

<?php
include 'core/confi.php';
session_start(); 

include 'core/confi.php';
if(!isset($_SESSION["uids"]))
{
 header("location:ulogf.php?/njk @JK5yhjg55%HJV%YUJKnsuyikbbbikHHYG9U88987787R568II8O7PP8gubmkjhj&HGHGJ7uyg/hjkjg");
}
if(!isset($_POST['search'])){
    header("Location: index.php");
	
}

$n=100; 
function getName($n) { 
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	$randomString = ''; 

	for ($i = 0; $i < $n; $i++) { 
		$index = rand(0, strlen($characters) - 1); 
		$randomString .= $characters[$index]; 
	} 

	return $randomString; 
} 


?>

<?php

 $_SESSION['search'] = $_POST['search'];  
 $sql="SELECT * FROM cake WHERE title LIKE '%".$_SESSION['search']."%' AND featured = 1";
 $c = mysqli_query($conn,$sql);

 $_SESSION['search'] = $_POST['search'];  
 $sql="SELECT * FROM bread WHERE title LIKE '%".$_SESSION['search']."%' AND featured = 1";
 $b = mysqli_query($conn,$sql);


 $_SESSION['search'] = $_POST['search'];  
 $sql="SELECT * FROM cookies WHERE title LIKE '%".$_SESSION['search']."%' AND featured = 1";
 $co = mysqli_query($conn,$sql);

 $_SESSION['search'] = $_POST['search'];  
 $sql="SELECT * FROM cupcake WHERE title LIKE '%".$_SESSION['search']."%' AND featured = 1";
 $cu = mysqli_query($conn,$sql);

 $_SESSION['search'] = $_POST['search'];  
 $sql="SELECT * FROM pies WHERE title LIKE '%".$_SESSION['search']."%' AND featured = 1";
 $pi = mysqli_query($conn,$sql);

 $_SESSION['search'] = $_POST['search'];  
 $sql="SELECT * FROM desserts WHERE title LIKE '%".$_SESSION['search']."%' AND featured = 1";
 $d = mysqli_query($conn,$sql);

 $_SESSION['search'] = $_POST['search'];  
 $sql="SELECT * FROM french_desert WHERE title LIKE '%".$_SESSION['search']."%' AND featured = 1";
 $f = mysqli_query($conn,$sql);

 $_SESSION['search'] = $_POST['search'];  
 $sql="SELECT * FROM chesse WHERE title LIKE '%".$_SESSION['search']."%' AND featured = 1";
 $ch = mysqli_query($conn,$sql);

 $_SESSION['search'] = $_POST['search'];  
 $sql="SELECT * FROM dough WHERE title LIKE '%".$_SESSION['search']."%' AND featured = 1";
 $do = mysqli_query($conn,$sql);

 $_SESSION['search'] = $_POST['search'];  
 $sql="SELECT * FROM basic WHERE title LIKE '%".$_SESSION['search']."%' AND featured = 1";
 $ba = mysqli_query($conn,$sql);

 $_SESSION['search'] = $_POST['search'];  
 $sql="SELECT * FROM pudding WHERE title LIKE '%".$_SESSION['search']."%' AND featured = 1";
 $pu = mysqli_query($conn,$sql);

?>

			<!DOCTYPE html>
			<html lang="zxx" class="no-js">
	<head>
	<meta charset="UTF-8">
	<title> Free Best Baking Recipes of all time</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		
		<link rel="shortcut icon" href="img/fav.png">
		
		<meta name="author" content="yummyhomes Nigeria">
		
		<meta name="description" content="Over 300 Free best baking recipes of all time">
		<meta name="robots" content="index, follow">
		
		<meta name="keywords" content="recipes,cake,pudding,cheesecake,quick bread,muffins,cupcakes,healthy desserts,french desserts,pies,tarts, online baking,free baking,baking tutorial,owerri,imo state,Nigeria,ingredients,baking measurement conversion, free, Best, Baking, of all time">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
				<link rel="stylesheet" href="usass/ustylesc.css">
		</head>
		<body oncontextmenu="return false;">	
		  
		  
	 <div class="se-pre-con"></div>
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row align-items-center">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
					      				  					
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
								<a class="btns">+2348053907916</a>
				  				<a class="btns">support@yummyhomes.co</a>		
				  				
				  					
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>		
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li class="menu-active"><a href="index?1d=p9076 3l7b e7218&<?php echo getName($n); ?>">Home</a></li>
							  <li><a href="#abts">About</a></li>
							  <li><a href="mairepueins.php?1d=p9076 3l7b e7218&<?php echo getName($n); ?>">Recipes</a></li>
							  <li><a href="rpeiesr.php?1d=p9 076 3l7b e7218&<?php echo getName($n); ?>">Baking Terms</a></li>
							  <li><a href="contact?1d=p9076 3l7b e7218&<?php echo getName($n); ?>">Contact</a></li>
							  <li><span class="lnr lnr-user" style="color:#7a2b00; font-weight:bold;"><a href=""><?php echo $logs;?></a></span></li>
							  <li><a href="ulogf?1d=p9076 3l7b e7218&<?php echo getName($n); ?>"><?php echo $log;?></a></li>
							  <li><a href="lotgtuo.php?1d=i jkk l7e7218&<?php echo getName($n); ?>">Logout</a></li>
							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
						<center>
						
						<div class="col-lg-8">
						
<div class="se12">
   
          <form action="searching?<?php echo getName($n);?>" method="post" autocomplete="off">
            <div class="input-group"> 
          <input type="text" id="inputEmail" placeholder="Type to search..." class="nput--style-2" name="search"  >
        
         <div class="input-group-addon ">
       
			 <button type="submit" name="submit"> <span class="lnr lnr-magnifier  input-icon js-btn-calendar hidden"></span></button>
      </div>     
			  </div>
					</form>
					
							</div>

							</div>
							</center>
							
							<h1 class="text-white">
								Best Baking Recipes				
							</h1>	
							<p class="text-white link-nav"><a href="index?<?php echo getName($n);?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="mairepueins"> Recipes</a></p>
						</div>	
					</div>
				</div>
			</section>
			
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						
						
						<?php
						 while($row = mysqli_fetch_array($c)):
         
            $title = $row["title"];
            $duration = $row["duration"];
             $ingredient = $row["ingredient"];
             $direction = $row["direction"];
           $nutrition = $row["nutrition"];
            $serving = $row["serving"];
			
			
			$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);
	
							
						?>
						<div class="col-sm-3">
							<h4><?php echo $title;?></h4><br />
							<p><?php echo $serving;?></p>
							<p><?php echo $duration;?></p>
							<h4>Nutrition</h4>
							<?php echo $nutrition;?>
						</div>
							<div class="col-sm-4">
							<h4>Ingredient</h4><br />
								<?php echo $ingredient;?>
							</div>
							<div class="col-sm-5">
							<h4>Direction</h4><br>
							<p><?php echo $direction;?></p>
							</div>
							
						<?php endwhile;?>
						
<!--  	cupcake-->
				
				<?php
						 while($row = mysqli_fetch_array($cu)):
         
            $title = $row["title"];
            $duration = $row["duration"];
             $ingredient = $row["ingredient"];
             $direction = $row["direction"];
           $nutrition = $row["nutrition"];
            $serving = $row["serving"];
			
			
			$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);
	
							
						?>
						<div class="col-sm-3">
							<h4><?php echo $title;?></h4><br />
							<p><?php echo $serving;?></p>
							<p><?php echo $duration;?></p>
							<h4>Nutrition</h4>
							<?php echo $nutrition;?>
						</div>
							<div class="col-sm-4">
							<h4>Ingredient</h4><br />
								<?php echo $ingredient;?>
							</div>
							<div class="col-sm-5">
							<h4>Direction</h4><br>
							<p><?php echo $direction;?></p>
							</div>
							
						<?php endwhile;?>
						
<!--						chessecake-->
				
				<?php
						 while($row = mysqli_fetch_array($ch)):
         
            $title = $row["title"];
            $duration = $row["duration"];
             $ingredient = $row["ingredient"];
             $direction = $row["direction"];
           $nutrition = $row["nutrition"];
            $serving = $row["serving"];
			
			
			$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);
	
							
						?>
						<div class="col-sm-3">
							<h4><?php echo $title;?></h4><br />
							<p><?php echo $serving;?></p>
							<p><?php echo $duration;?></p>
							<h4>Nutrition</h4>
							<?php echo $nutrition;?>
						</div>
							<div class="col-sm-4">
							<h4>Ingredient</h4><br />
								<?php echo $ingredient;?>
							</div>
							<div class="col-sm-5">
							<h4>Direction</h4><br>
							<p><?php echo $direction;?></p>
							</div>
							
						<?php endwhile;?>
						
<!--					bread-->
						<?php
						 while($row = mysqli_fetch_array($b)):
         
            $title = $row["title"];
            $duration = $row["duration"];
             $ingredient = $row["ingredient"];
             $direction = $row["direction"];
           $nutrition = $row["nutrition"];
            $serving = $row["serving"];
			
			
			$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);
	
							
						?>
						<div class="col-sm-3">
							<h4><?php echo $title;?></h4><br />
							<p><?php echo $serving;?></p>
							<p><?php echo $duration;?></p>
							<h4>Nutrition</h4>
							<?php echo $nutrition;?>
						</div>
							<div class="col-sm-4">
							<h4>Ingredient</h4><br />
								<?php echo $ingredient;?>
							</div>
							<div class="col-sm-5">
							<h4>Direction</h4><br>
							<p><?php echo $direction;?></p>
							</div>
							
						<?php endwhile;?>
						
<!--						pies-->
				
				<?php
						 while($row = mysqli_fetch_array($pi)):
         
            $title = $row["title"];
            $duration = $row["duration"];
             $ingredient = $row["ingredient"];
             $direction = $row["direction"];
           $nutrition = $row["nutrition"];
            $serving = $row["serving"];
			
			
			$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);
	
							
						?>
						<div class="col-sm-3">
							<h4><?php echo $title;?></h4><br />
							<p><?php echo $serving;?></p>
							<p><?php echo $duration;?></p>
							<h4>Nutrition</h4>
							<?php echo $nutrition;?>
						</div>
							<div class="col-sm-4">
							<h4>Ingredient</h4><br />
								<?php echo $ingredient;?>
							</div>
							<div class="col-sm-5">
							<h4>Direction</h4><br>
							<p><?php echo $direction;?></p>
							</div>
							
						<?php endwhile;?>
						
<!--						pudding-->
										
										<?php
						 while($row = mysqli_fetch_array($pu)):
         
            $title = $row["title"];
            $duration = $row["duration"];
             $ingredient = $row["ingredient"];
             $direction = $row["direction"];
           $nutrition = $row["nutrition"];
            $serving = $row["serving"];
			
			
			$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);
	
							
						?>
						<div class="col-sm-3">
							<h4><?php echo $title;?></h4><br />
							<p><?php echo $serving;?></p>
							<p><?php echo $duration;?></p>
							<h4>Nutrition</h4>
							<?php echo $nutrition;?>
						</div>
							<div class="col-sm-4">
							<h4>Ingredient</h4><br />
								<?php echo $ingredient;?>
							</div>
							<div class="col-sm-5">
							<h4>Direction</h4><br>
							<p><?php echo $direction;?></p>
							</div>
							
						<?php endwhile;?>

									
<!--									healthy desert-->
									<?php
						 while($row = mysqli_fetch_array($d)):
         
            $title = $row["title"];
            $duration = $row["duration"];
             $ingredient = $row["ingredient"];
             $direction = $row["direction"];
           $nutrition = $row["nutrition"];
            $serving = $row["serving"];
			
			
			$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);
	
							
						?>
						<div class="col-sm-3">
							<h4><?php echo $title;?></h4><br />
							<p><?php echo $serving;?></p>
							<p><?php echo $duration;?></p>
							<h4>Nutrition</h4>
							<?php echo $nutrition;?>
						</div>
							<div class="col-sm-4">
							<h4>Ingredient</h4><br />
								<?php echo $ingredient;?>
							</div>
							<div class="col-sm-5">
							<h4>Direction</h4><br>
							<p><?php echo $direction;?></p>
							</div>
							
						<?php endwhile;?>
									
<!--									french dessert-->
									
									<?php
						 while($row = mysqli_fetch_array($f)):
         
            $title = $row["title"];
            $duration = $row["duration"];
             $ingredient = $row["ingredient"];
             $direction = $row["direction"];
           $nutrition = $row["nutrition"];
            $serving = $row["serving"];
			
			
			$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);
	
							
						?>
						<div class="col-sm-3">
							<h4><?php echo $title;?></h4><br />
							<p><?php echo $serving;?></p>
							<p><?php echo $duration;?></p>
							<h4>Nutrition</h4>
							<?php echo $nutrition;?>
						</div>
							<div class="col-sm-4">
							<h4>Ingredient</h4><br />
								<?php echo $ingredient;?>
							</div>
							<div class="col-sm-5">
							<h4>Direction</h4><br>
							<p><?php echo $direction;?></p>
							</div>
							
						<?php endwhile;?>
									
<!--									dough-->
									
									<?php
						 while($row = mysqli_fetch_array($do)):
         
            $title = $row["title"];
            $duration = $row["duration"];
             $ingredient = $row["ingredient"];
             $direction = $row["direction"];
           $nutrition = $row["nutrition"];
            $serving = $row["serving"];
			
			
			$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);
	
							
						?>
						<div class="col-sm-3">
							<h4><?php echo $title;?></h4><br />
							<p><?php echo $serving;?></p>
							<p><?php echo $duration;?></p>
							<h4>Nutrition</h4>
							<?php echo $nutrition;?>
						</div>
							<div class="col-sm-4">
							<h4>Ingredient</h4><br />
								<?php echo $ingredient;?>
							</div>
							<div class="col-sm-5">
							<h4>Direction</h4><br>
							<p><?php echo $direction;?></p>
							</div>
							
						<?php endwhile;?>
									
<!--									basic-->
									<?php
						 while($row = mysqli_fetch_array($ba)):
         
            $title = $row["title"];
            $duration = $row["duration"];
             $ingredient = $row["ingredient"];
             $direction = $row["direction"];
           $nutrition = $row["nutrition"];
            $serving = $row["serving"];
			
			
			$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);
	
							
						?>
						<div class="col-sm-3">
							<h4><?php echo $title;?></h4><br />
							<p><?php echo $serving;?></p>
							<p><?php echo $duration;?></p>
							<h4>Nutrition</h4>
							<?php echo $nutrition;?>
						</div>
							<div class="col-sm-4">
							<h4>Ingredient</h4><br />
								<?php echo $ingredient;?>
							</div>
							<div class="col-sm-5">
							<h4>Direction</h4><br>
							<p><?php echo $direction;?></p>
							</div>
							
						<?php endwhile;?>
									
<!--									cookies-->
									
									<?php
						 while($row = mysqli_fetch_array($co)):
         
            $title = $row["title"];
            $duration = $row["duration"];
             $ingredient = $row["ingredient"];
             $direction = $row["direction"];
           $nutrition = $row["nutrition"];
            $serving = $row["serving"];
			
			
			$ingredient = mysqli_real_escape_string($conn,$row['ingredient']);
					$direction = mysqli_real_escape_string($conn,$row['direction']);
					$nutrition = mysqli_real_escape_string($conn,$row['nutrition']);
					
					$ingredient = htmlentities($row['ingredient'], ENT_QUOTES, "UTF-8");
					$direction = htmlentities($row['direction'], ENT_QUOTES, "UTF-8");
					$nutrition = htmlentities($row['nutrition'], ENT_QUOTES, "UTF-8");
					
					$ingredient = str_replace("\r\n","<li>", $ingredient);
					$direction = str_replace("\r\n","<br />", $direction);
					$nutrition = str_replace("\r\n","<li>", $nutrition);
	
							
						?>
						<div class="col-sm-3">
							<h4><?php echo $title;?></h4><br />
							<p><?php echo $serving;?></p>
							<p><?php echo $duration;?></p>
							<h4>Nutrition</h4>
							<?php echo $nutrition;?>
						</div>
							<div class="col-sm-4">
							<h4>Ingredient</h4><br />
								<?php echo $ingredient;?>
							</div>
							<div class="col-sm-5">
							<h4>Direction</h4><br>
							<p><?php echo $direction;?></p>
							</div>
							
						<?php endwhile;?>
										</div>
					
				</div>
					
			</section>
				
			<section class="footer-area section-gap" id="abts">
				<div class="container">
					<div class="row">
					<div class="col-sm-6 d-flex flex-column address-wrap">
							<h6>About Us</h6>
							<p>
									@yummyhomes we make baking an art
								</p>	
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="fas fa-phone"></span>
								</div>
								<div class="contact-details">
									<p style="color:white; margin-left:5px;">+2340853907916</p>
								
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="fas fa-envelope"></span>
								</div>
								<div class="contact-details">
									<p style="color:white; margin-left:5px;">support@yummyhomes.co</p>
									
								</div>
							</div>														
						</div>
					
					
						
						<div class="col-sm-6 ">
							<div class="single-footer-widget">
							
								<h6>Newsletter</h6>
								
								 <div class="single">
								<form action="menu?<?php echo  getName($n);?>" method="post" class="form-inline" autocomplete="off">
									
                                          <div class="input-group">
										<input class="form-control"  placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required type="email" id="subemail">
			                            	 <button class="btns" type="submit" id="submits">Subscribe</button>
        
									</div>
										
									</form>
									<div class="display-errors" style="display: none">
                                        </div>
							</div>
							</div>
						</div>						
						
									
					</div><br /><br /><br /><br />
					<hr style=" display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;">
					<center>
					<p> &copy;2019 Terms & Conditions | Privacy Policy | Site Map</p>
					</center>
				</div>
				
			</section>	
			
				

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>			
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			
				<script>
			
			
  $(document).ready(function() {


      $('#submits').click(function(e){
        e.preventDefault();


       
        var email = $("#subemail").val();
        

        $.ajax({
            type: "POST",
            url: "subscribe",
            dataType: "json",
            data: {email:email},
            success : function(data){
                if (data.code == "200"){
                    $(".display-errors").html("<p>"+data.msg+"</p>");
                    $(".display-errors").css("display","block");
                } else {
                    $(".display-errors").html("<p>"+data.msg+"</p>");
                    $(".display-errors").css("display","block");
                }
            }
        });


      });
  });

    
			
			</script>		
			
			<script>
   $(window).load(function() {
		
		$(".se-pre-con").fadeOut("slow");;
	});
			</script>		
			
			
			<script>
	
	  document.onkeydown=function(e){
		  if(event.keyCode == 123){
			  return false;
		  }
		  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
			  return false;
		  }
		  
		  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
			  return false;
		  }
		  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
			  return false;
		  }
	  }
	  </script>
	  
			
		</body>
	</html>