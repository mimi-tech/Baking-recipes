
<?php  
session_start(); 

include 'core/confi.php';
if(!isset($_SESSION["uids"]))
{
 header("location:ulogf.php?/njk@JK5yhjg55%HJV%YUJKnsuyikbbbikHHYG9U88987787R568II8O7PP8gubmkjhj&HGHGJ7uyg/hjkjg");
}
?> 

<?php

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


session_start();  
if(!isset($_SESSION["uids"]))
{
$log = "Login";
}else{
	$logs =  $_SESSION['name'];
}

?> 	
	
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		
		<link rel="shortcut icon" href="img/fav.png">
		
		<meta name="author" content="yummyhomes Nigeria">
		
		<meta name="description" content="Over 300 Free best baking recipes of all time">
		<meta name="robots" content="index, follow">
		
		<meta name="keywords" content="recipes,cake,pudding,cheesecake,quick bread,muffins,cupcakes,healthy desserts,french desserts,pies,tarts, online baking,free baking,baking tutorial,owerri,imo state,Nigeria,ingredients,baking measurement conversion, free, Best, Baking, of all time">
		
		<meta charset="UTF-8">
		
		<title> Free Best Baking Recipes of all time</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link href="lib/animate/animate.min.css" rel="stylesheet">

			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="usass/ustylesc.css">
		</head>
		<body oncontextmenu="return false;">
		
	 <div class="se-pre-con"></div>
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row align-items-center">
				  			
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
								<a class="btns" >+2348053907916</a>
				  				<a class="btns" >support@yummyhomes.co</a>		
				  					
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="index"><img src="img/logo.png" alt="" title="" /></a>		
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li class="menu-active"><a href="index?1d=p9076 3l7b e7218&<?php echo getName($n); ?>">Home</a></li>
							  <li><a href="#abts">About</a></li>
							  <li><a href="mairepueins.php?1d=p9 076 3l7b e7218&<?php echo getName($n); ?>">Recipies</a></li>
							  <li><a href="rpeiesr.php?1d=p9 076 3l7b e7218&<?php echo getName($n); ?>">Baking Terms</a></li>					  			          	          
							  <li><a href="contact?/1d=p 9076 3l7b e7218&<?php echo getName($n); ?>">Contact</a></li>
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
       
			 <button type="submit" name="submit"> <span class="lnr lnr-magnifier  input-icon js-btn-calendar hidden" id="#home"></span></button>
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
			
			
			<section class="menu-list-area section-gap">
				<div class="container">
					<div class="row wow fadeInUp" data-wow-delay="0.2s">
					
						<div class="menu-cat mx-auto">
						<div class="col-lg-12">
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
						 
						 
						   <li class="nav-item">
						     
							    <a class="nav-link" id="pills-all-tab" data-toggle="pill" href="#all" role="tab" aria-controls="pills-all" aria-selected="false">All</a>
							   
							  </li>
							
							  <li class="nav-item">
						    
							    <a class="nav-link active" id="pizza-tab" data-toggle="pill" href="#pizza" role="tab" aria-controls="pizza" aria-selected="true">Cakes</a>
								 
							  </li>
							   <li class="nav-item">
							    <a class="nav-link" id="pills-pudding-tab" data-toggle="pill" href="#pills-pudding" role="tab" aria-controls="pills-pudding" aria-selected="false">Puddings</a>
							  </li>					  					  
									
							   
							  <li class="nav-item">
							    <a class="nav-link" id="pills-Basic-tab" data-toggle="pill" href="#pills-Basic" role="tab" aria-controls="pills-Basic" aria-selected="false">Basics</a>
							  </li>	
								
							
								
						   
							  
								
						 <li class="nav-item">
							    <a class="nav-link" id="pills-cookie-tab" data-toggle="pill" href="#pills-cookie" role="tab" aria-controls="pills-cookie" aria-selected="false">Cookies</a>
							  </li>
							
							  <li class="nav-item">
							    <a class="nav-link" id="pills-burger-tab" data-toggle="pill" href="#pills-burger" role="tab" aria-controls="pills-burger" aria-selected="false">Pies &amp; Tarts</a>
							  </li>
								
							  <li class="nav-item">
							    <a class="nav-link" id="pills-bread-tab" data-toggle="pill" href="#pills-bread" role="tab" aria-controls="pills-bread" aria-selected="false">Muffins &amp; Cupcakes</a>
							  </li>
							   
							 
								 <li class="nav-item">
							    <a class="nav-link" id="pills-cheese-tab" data-toggle="pill" href="#pills-cheese" role="tab" aria-controls="pills-cheese" aria-selected="false">Cheesecakes</a>
							  </li>		
							  
							  <li class="nav-item">
							    <a class="nav-link" id="pills-chicken-tab" data-toggle="pill" href="#pills-chicken" role="tab" aria-controls="pills-chicken" aria-selected="false">Quick Breads</a>
							  </li>	
								
						   
							   <li class="nav-item">
							    <a class="nav-link" id="pills-dough-tab" data-toggle="pill" href="#pills-dough" role="tab" aria-controls="pills-dough" aria-selected="false">Yeasted Dough</a>
							  </li>
								
							  
							  
							   <li class="nav-item">
							    <a class="nav-link" id="pills-desert-tab" data-toggle="pill" href="#pills-desert" role="tab" aria-controls="pills-desert" aria-selected="false">Healthy Desserts</a>
							  </li>	
								
							   
							   <li class="nav-item">
							    <a class="nav-link" id="pills-french-tab" data-toggle="pill" href="#pills-french" role="tab" aria-controls="pills-french" aria-selected="false">French Desserts</a>
							  </li>		
								
							   
							 
								
							  
							</ul>
							</div>							
						</div>
						
					</div>
					<div id="pills-tabContent" class="tab-content absolute">
				<div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
						<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-12 row d-flex">
								
								<div class="col-lg-6 col-md-6">
									<h4>Equipments</h4>
									<li>Baking pans</li>
									<li>Mixer</li>
									<li>Whisk</li>
									<li>Spatulas and wooden spoons</li>
									<li>Food processor</li>
									<li>Measuring spoons and cups</li>
									<li>Mixing bowls</li>
									<li>Baking paper or parchment paper</li>
								</div>
								<div class="col-lg-6 col-md-6">
								<h4>Ingredients</h4>
									<li>Butter</li>
									<li>Milk</li>
									<li>Flour</li>
									<li>Baking powder</li>
									<li>Baking soda</li>
									<li>Yeast</li>
									<li>Sugar</li>
									<li>Cocoa powder</li>
									<li>Eggs</li>
									<li>Gelatin</li>
									<li>Nuts</li>
									<li>Salt</li>
									<li>Spices</li>
								</div>
							</div>
					</div><br />
						
						
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-12 row d-flex">
									
									
								<div class="col-sm-4">
								<h4>Cake</h4>
									<?php
						$sql="SELECT * FROM cake";
                        $c = mysqli_query($conn,$sql);
									?>
									<?php while($row = mysqli_fetch_assoc($c)):?>
						
									<li><a href="search?details=<?php echo $row["id"]; echo getName($n);?>"><?php echo $row["title"];?></a></li>
									
						<?php endwhile;?>
								</div>
								
								
								<div class="col-sm-4">
								<h4>Cupcakes</h4>
									<?php
						$sql="SELECT * FROM cupcake";
                        $c = mysqli_query($conn,$sql);
									?>
									<?php while($row = mysqli_fetch_assoc($c)):?>
						
									<li><a href="search?details_cupcake=<?php echo $row["id"];  echo getName($n);?>"><?php echo $row["title"];?></a></li>
						<?php endwhile;?>
						<br />
							<h4>French Desserts</h4>
								<hr />
									<?php
						$sql="SELECT * FROM french_desert";
                        $c = mysqli_query($conn,$sql);
									?>
									<?php while($row = mysqli_fetch_assoc($c)):?>
						
									<li><a href="search?details_french=<?php echo $row["id"];  echo getName($n);?>"><?php echo $row["title"];?></a></li>
						<?php endwhile;?>
								</div>
								
								<div class="col-sm-4">
								<h4>Cheesecakes</h4>
									<?php
						$sql="SELECT * FROM cheese";
                        $c = mysqli_query($conn,$sql);
									?>
									<?php while($row = mysqli_fetch_assoc($c)):?>
						
									<li><a href="search?details_cheese=<?php echo $row["id"];  echo getName($n);?>"><?php echo $row["title"];?></a></li>
						<?php endwhile;?>
						<br />
							<h4>Cookies</h4>
								<hr />
									<?php
						$sql="SELECT * FROM cookies";
                        $c = mysqli_query($conn,$sql);
									?>
									<?php while($row = mysqli_fetch_assoc($c)):?>
						
									<li><a href="search?details_cookies=<?php echo $row["id"];  echo getName($n);?>"><?php echo $row["title"];?></a></li>
						<?php endwhile;?>
						<br />
							<h4>Puddings</h4>
								<hr />
									<?php
						$sql="SELECT * FROM pudding";
                        $c = mysqli_query($conn,$sql);
									?>
									<?php while($row = mysqli_fetch_assoc($c)):?>
						
									<li><a href="search?details_pudding=<?php echo $row["id"];  echo getName($n);?>"><?php echo $row["title"];?></a></li>
						<?php endwhile;?>
								</div>
								</div>
							
								
								<br />
								<div class="col-lg-12 row d-flex">
								
									<div class="col-sm-4">
								<h4>Pies &amp; Tarts</h4>
									<?php
						$sql="SELECT * FROM pies";
                        $c = mysqli_query($conn,$sql);
									?>
									<?php while($row = mysqli_fetch_assoc($c)):?>
						
									<li><a href="search?details_pies=<?php echo $row["id"];  echo getName($n);?>"><?php echo $row["title"];?></a></li>
						<?php endwhile;?>
						<br />
							<h4>Yeasted Dough</h4>
								<hr />
									<?php
						$sql="SELECT * FROM dough";
                        $c = mysqli_query($conn,$sql);
									?>
									<?php while($row = mysqli_fetch_assoc($c)):?>
						
									<li><a href="search?details_dough=<?php echo $row["id"];  echo getName($n);?>"><?php echo $row["title"];?></a></li>
						<?php endwhile;?>
						<br />
							<h4>Basic</h4>
								<hr />
									<?php
						$sql="SELECT * FROM basic";
                        $c = mysqli_query($conn,$sql);
									?>
									<?php while($row = mysqli_fetch_assoc($c)):?>
						
									<li><a href="search?basic=<?php echo $row["id"];  echo getName($n);?>"><?php echo $row["title"];?></a></li>
						<?php endwhile;?>
								</div>	
									
										
							
								<div class="col-sm-4">
								<h4>Quick Bread</h4>
									<?php
						$sql="SELECT * FROM bread";
                        $c = mysqli_query($conn,$sql);
									?>
									<?php while($row = mysqli_fetch_assoc($c)):?>
						
									<li><a href="search?details_bread=<?php echo $row["id"];  echo getName($n);?>"><?php echo $row["title"];?></a></li>
						<?php endwhile;?>
								</div>
								
								<div class="col-sm-4">
								<h4>Healthy Desserts</h4>
								<hr />
									<?php
						$sql="SELECT * FROM desserts";
                        $c = mysqli_query($conn,$sql);
									?>
									<?php while($row = mysqli_fetch_assoc($c)):?>
						
									<li><a href="search?details_dessert=<?php echo $row["id"];  echo getName($n);?>"><?php echo $row["title"];?></a></li>
						<?php endwhile;?>
							
							
								</div>
								</div>
									
								
								
						</div>
					</div>			
						
						
						<div class="tab-pane fade show active" id="pizza" role="tabpanel" aria-labelledby="pizza-tab">
							<div id="results"></div>																				
						</div>
						 <div class="tab-pane fade" id="pills-bread" role="tabpanel" aria-labelledby="pills-bread-tab">
							<div id="cupcakeresults"></div>
						 </div>
						 
						 <div class="tab-pane fade" id="pills-cookie" role="tabpanel" aria-labelledby="pills-cookie-tab">
							<div id="cookiesresults"></div>
							
						 </div>
						 
						  <div class="tab-pane fade" id="pills-cheese" role="tabpanel" aria-labelledby="pills-cheese-tab">
						<div id="cheeseresults"></div>			
						  </div>
						 
						  <div class="tab-pane fade" id="pills-burger" role="tabpanel" aria-labelledby="pills-burger-tab">
							<div id="piesresults"></div>	
						  </div>
						  <div class="tab-pane fade" id="pills-chicken" role="tabpanel" aria-labelledby="pills-chicken-tab">
						<div id="breadresults"></div>			
						  </div>
						  
						  <div class="tab-pane fade" id="pills-dough" role="tabpanel" aria-labelledby="pills-dough-tab">
						<div id="doughresults"></div>			
						  </div>
						   <div class="tab-pane fade" id="pills-desert" role="tabpanel" aria-labelledby="pills-desert-tab">
						<div id="desertresults"></div>			
						  </div>
						  
						   <div class="tab-pane fade" id="pills-french" role="tabpanel" aria-labelledby="pills-french-tab">
						<div id="frenchresults"></div>			
						  </div>
						  
						   <div class="tab-pane fade" id="pills-pudding" role="tabpanel" aria-labelledby="pills-pudding-tab">
						<div id="puddingresults"></div>			
						  </div>
						  
						  <div class="tab-pane fade" id="pills-Basic" role="tabpanel" aria-labelledby="pills-Basic-tab">
						<div id="basicresults"></div>			
						  </div>
						  
						  
						</div>	
					</div>
					
			</section>
				
			<section class="footer-area section-gap" id="abts" >
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
								 <div class="display-errors" style="display: none"></div>
								<h6>Newsletter</h6>
								
								 <div class="single">
								<form action="mairepueins?<?php echo  getName($n);?>" method="post" class="form-inline" autocomplete="off">
									
                                          <div class="input-group">
                                         
										<input class="form-control"  placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required type="email" id="subemail">
			                            	 <button class="btns" type="submit" id="submits">Subscribe</button>
        
									</div>
										
									</form>
									
                                        
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
			
			
			<!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
 
  <script src="lib/wow/wow.min.js"></script>
  
  <script src="js/mains.js"></script>
 
  <script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>			
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>							
				
			<script src="js/main.js"></script>	
			
			 
			
		<script>
			
	$(document).ready(function(){
		LoadData(0);
	});
function LoadData(pagenum){
	 
	$.post('testing?p='+pagenum, function(reponse){
		 $('#results').fadeOut('slow',function(){
           
			 $('#results').html(reponse).toggle('slow');
                });
		
	});
}
</script>
		
		
		<script>
			
	$(document).ready(function(){
		LoadDatacc(0);
	});
function LoadDatacc(pagenumcc){
	$.post('cupcake?p='+pagenumcc, function(reponsecc){
		
		 $('#cupcakeresults').fadeOut('slow',function(){
           
			 $('#cupcakeresults').html(reponsecc).toggle('slow');
                });
		
	});
}
</script>
		
			<script>
			
	$(document).ready(function(){
		LoadDatap(0);
	});
function LoadDatap(pagenump){
	$.post('pies?p='+pagenump, function(reponsep){
		
	 $('#piesresults').fadeOut('slow',function(){
           
			 $('#piesresults').html(reponsep).toggle('slow');
                });	
		//$('#piesresults').html(reponsep);
	});
}
</script>
	
				<script>
			
	$(document).ready(function(){
		LoadDatab(0);
	});
function LoadDatab(pagenumb){
	$.post('bread?p='+pagenumb, function(reponseb){
		//$('#breadresults').html(reponseb);
		$('#breadresults').fadeOut('slow',function(){
           
			 $('#breadresults').html(reponseb).toggle('slow');
                });	
	});
}
</script>
				
							
	<script>
			
	$(document).ready(function(){
		LoadDatacookies(0);
	});
function LoadDatacookies(pagenumcookies){
	$.post('cookies?p='+pagenumcookies, function(reponsecookies){
		//$('#cookiesresults').html(reponsecookies);
		$('#cookiesresults').fadeOut('slow',function(){
           
			 $('#cookiesresults').html(reponsecookies).toggle('slow');
                });	
	});
}
</script>												
		
			
	<script>
			
	$(document).ready(function(){
		LoadDatad(0);
	});
function LoadDatad(pagenumd){
	$.post('desert?p='+pagenumd, function(reponsed){
		//$('#desertresults').html(reponsed);
		$('#desertresults').fadeOut('slow',function(){
           
			 $('#desertresults').html(reponsed).toggle('slow');
                });	
	});
}
</script>

<script>
			
	$(document).ready(function(){
		LoadDatapu(0);
	});
function LoadDatapu(pagenumpu){
	$.post('pudding?p='+pagenumpu, function(reponsepu){
		//$('#puddingresults').html(reponsepu);
		$('#puddingresults').fadeOut('slow',function(){
           
			 $('#puddingresults').html(reponsepu).toggle('slow');
                });	
	});
}
</script>
	
		
<script>
			
	$(document).ready(function(){
		LoadDataba(0);
	});
function LoadDataba(pagenumba){
	$.post('basic?p='+pagenumba, function(reponseba){
		//$('#basicresults').html(reponseba);
		$('#basicresults').fadeOut('slow',function(){
           
			 $('#basicresults').html(reponseba).toggle('slow');
                });	
	});
}
</script>	
																
<script>
			
	$(document).ready(function(){
		LoadDatach(0);
	});
function LoadDatach(pagenumch){
	$.post('cheesecake?p='+pagenumch, function(reponsech){
		//$('#cheeseresults').html(reponsech);
		$('#cheeseresults').fadeOut('slow',function(){
           
			 $('#cheeseresults').html(reponsech).toggle('slow');
                });	
	});
}
</script>																														
		<script>
			
	$(document).ready(function(){
		LoadDatado(0);
	});
function LoadDatado(pagenumdo){
	$.post('dough?p='+pagenumdo, function(reponsedo){
		//$('#doughresults').html(reponsedo);
		$('#doughresults').fadeOut('slow',function(){
           
			 $('#doughresults').html(reponsedo).toggle('slow');
                });	
	});
}
</script>		
	
<script>
			
	$(document).ready(function(){
		LoadDatafrench(0);
	});
function LoadDatafrench(pagenumfrench){
	$.post('french?p='+pagenumfrench, function(reponsefrench){
		//$('#doughresults').html(reponsedo);
		$('#frenchresults').fadeOut('slow',function(){
           
			 $('#frenchresults').html(reponsefrench).toggle('slow');
                });	
	});
}
</script>																				
																																														
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