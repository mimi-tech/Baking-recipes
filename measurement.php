

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
		<meta charset="UTF-8">
	<title> Free Best Baking Recipes &amp; conversions</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		
		<link rel="shortcut icon" href="img/fav.png">
		
		<meta name="author" content="yummyhomes Nigeria">
		
		<meta name="description" content="Over 300 Free best baking recipes of all time|mearsurement & conversions">
		<meta name="robots" content="index, follow">
		
		<meta name="keywords" content="recipes,cake,pudding,cheesecake,quick bread,muffins,cupcakes,healthy desserts,french desserts,pies,tarts, online baking,free baking,baking tutorial,owerri,imo state,Nigeria,ingredients,baking measurement conversion, free, Best, Baking, of all time">
		

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
						
							
							<h1 class="text-white">
								Metric Conversions				
							</h1>	
							<p class="text-white link-nav"><a href="index?<?php echo getName($n);?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="rpeiesr?<?php echo getName($n);?>"> Recipes</a></p>
						</div>	
					</div>
				</div>
			</section>
			<p><br /></p>
			<section>
				<div class="container">
				
				<table class="table table-bordered wptable">
  <thead>
    <tr>
      <th>Ingredient</th>
      <th>Measurement in Grams</th>
      <th>Equivalence in Cups (US)</th>
      <th>Approximately</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">All Purpose Flour</th>
      <td>200 grams</td>
      <td>1.60 cups</td>
      <td>1.5 cups + 2 Tbspn</td>
    </tr>
    <tr>
      <th scope="row">Butter</th>
      <td>200 grams</td>
      <td>0.88 cup</td>
      <td>3/4th cup + 2 Tbspn</td>
    </tr>
    <tr>
      <th scope="row">Cake Flour</th>
      <td>200 grams</td>
      <td>1.46 cups unsifted</td>
      <td>1.5 cupst</td>
    </tr>
    <tr>
      <th scope="row">Granulated Sugar</th>
      <td>200 grams</td>
      <td>1 cup</td>
      <td>1 cup</td>
    </tr>
     <tr>
      <th scope="row">Brown Sugar</th>
      <td>200 grams</td>
      <td>0.91 cup packed </td>
      <td>1 cup minus 1 Tbspn </td>
    </tr>
     <tr>
      <th scope="row">Ground Almonds</th>
      <td>200 grams</td>
      <td>0.88 cup packed </td>
      <td>3/4th cup + 2 Tbspn </td>
    </tr>
     <tr>
      <th scope="row">Flaked Coconut</th>
      <td>200 grams</td>
      <td>2.60 cups</td>
      <td>2.5 cups + 1 Tbspn </td>
    </tr> <tr>
      <th scope="row">Unsweetened Cocoa Powder</th>
      <td>200 grams</td>
      <td>2.33 cups</td>
       <td>2.5 cups – 2 Tbspn </td>
    </tr>
  </tbody>
</table>
				</div>
			</section>
			
			<section>
				<div class="container">
				<div>
					
					
					<p class="jkprocedure">Butter Measurements</p>
				</div>
				
						<table class="table table-bordered wptable">
  <thead>
    <tr>
      <th>Cups</th>
      <th>Sticks</th>
      <th>Pounds</th>
      <th>	Tablespoons</th>
      <th>Grams</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>1/4</td>
      <td>1/2</td>
      <td>1/8</td>
      <td>4</td>
      <td>55 g</td>
      
    </tr>
    <tr>
      <td>1</td>
       <td>1</td>
      <td>1/4</td>
      <td>8</td>
      <td>112 g</td>
    </tr>
    <tr>
      <td>1/3</td>
      <td >1/2+1 &amp; 1/3 tbspns</td>
      <td>n/a</td>
      <td>5 &amp; 1/3</td>
      <td>75 g</td>
    </tr>
    <tr>
    <td>2/3</td>
      <td >1 + 2 &amp; 2/3 tbspns</td>
      <td>n/a</td>
      <td>10 &amp; 2/3</td>
      <td>150 g</td>
    </tr>
     <tr>
     <td>3/4</td>
      <td>	1 &amp; 1/2</td>
      <td>3/8 </td>
      <td>12 </td>
      <td>170 g</td>
    </tr>
     <tr>
       <td>1</td>
      <td>	2</td>
      <td>1/2</td>
      <td>16 </td>
      <td>225 g</td>
    </tr>
     <tr>
       <td>2</td>
      <td>4</td>
      <td>1</td>
      <td>32 </td>
      <td>450 g</td>
    </tr> 
  </tbody>
</table>
		
				</div>
			</section>
			
			
			<section>
				<div class="container">
				<p>	<span class="jkprocedure">All Purpose Flour, Icing or Powdered Sugar</span><br /></p><table class="wptable rowstyle-alt table table-bordered" id="wptable-10" cellspacing="1"><thead><tr><th class="sortable" style="width:100px" align="left">Cup</th><th class="sortable" style="width:100px" align="left">Grams</th></tr></thead><tr><td style="width:100px" align="left">1/8 cup</td><td style="width:100px" align="left">15 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1/4 cup</td><td style="width:100px" align="left">30 grams</td></tr><tr><td style="width:100px" align="left">1/3 cup</td><td style="width:100px" align="left">40 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/8 cup</td><td style="width:100px" align="left">45 grams</td></tr><tr><td style="width:100px" align="left">1/2 cup</td><td style="width:100px" align="left">60 grams</td></tr><tr class="alt"><td style="width:100px" align="left">5/8 cup</td><td style="width:100px" align="left">70 grams</td></tr><tr><td style="width:100px" align="left">2/3 cup</td><td style="width:100px" align="left">75 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/4 cup</td><td style="width:100px" align="left">85 grams</td></tr><tr><td style="width:100px" align="left">7/8 cup</td><td style="width:100px" align="left">100 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1 cup</td><td style="width:100px" align="left">110 grams</td></tr></table><p></p><div class="newline"></div><p><a name="cake-flour"></a><br />
				</div>
			</section>
			
			<section>
				<div class="container">
					<p><span class="jkprocedure">Cake Flour</span><br /></p><table class=" table table-bordered wptable rowstyle-alt" id="wptable-14" cellspacing="1"><thead><tr><th class="sortable" style="width:100px" align="left">Cup</th><th class="sortable" style="width:100px" align="left">Grams</th></tr></thead><tr><td style="width:100px" align="left">1/8 cup</td><td style="width:100px" align="left">10 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1/4 cup</td><td style="width:100px" align="left">20 grams</td></tr><tr><td style="width:100px" align="left">1/3 cup</td><td style="width:100px" align="left">25 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/8 cup</td><td style="width:100px" align="left">30 grams</td></tr><tr><td style="width:100px" align="left">1/2 cup</td><td style="width:100px" align="left">50 grams</td></tr><tr class="alt"><td style="width:100px" align="left">5/8 cup</td><td style="width:100px" align="left">60 grams</td></tr><tr><td style="width:100px" align="left">2/3 cup</td><td style="width:100px" align="left">65 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/4 cup</td><td style="width:100px" align="left">70 grams</td></tr><tr><td style="width:100px" align="left">7/8 cup</td><td style="width:100px" align="left">85 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1 cup</td><td style="width:100px" align="left">95 grams</td></tr></table><p></p><div class="newline"></div><div class="content_mobile_hint"></div><div class="content_desktop_hint"></div><p><a name="granulated-sugar"></a><br />
				</div>
			</section>
			
			<section>
				<div class="container">
					<p><span class="jkprocedure">Granulated Sugar</span><br /></p><table class=" table table-bordered wptable rowstyle-alt" id="wptable-11" cellspacing="1"><thead><tr><th class="sortable" style="width:100px" align="left">Cup</th><th class="sortable" style="width:100px" align="left">Grams</th></tr></thead><tr><td style="width:100px" align="left">1/8 cup</td><td style="width:100px" align="left">30 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1/4 cup</td><td style="width:100px" align="left">55 grams</td></tr><tr><td style="width:100px" align="left">1/3 cup</td><td style="width:100px" align="left">75 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/8 cup</td><td style="width:100px" align="left">85 grams</td></tr><tr><td style="width:100px" align="left">1/2 cup</td><td style="width:100px" align="left">115 grams</td></tr><tr class="alt"><td style="width:100px" align="left">5/8 cup</td><td style="width:100px" align="left">140 grams</td></tr><tr><td style="width:100px" align="left">2/3 cup</td><td style="width:100px" align="left">150 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/4 cup</td><td style="width:100px" align="left">170 grams</td></tr><tr><td style="width:100px" align="left">7/8 cup</td><td style="width:100px" align="left">200 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1 cup</td><td style="width:100px" align="left">225 grams</td></tr></table><p></p><div class="newline"></div><p><a name="brown-sugar"></a><br />
				</div>
			</section>
			
			<section>
				<div class="container">
					<p><span class="jkprocedure">Brown Sugar</span><br /></p><table class=" table table-bordered wptable rowstyle-alt" id="wptable-12" cellspacing="1"><thead><tr><th class="sortable" style="width:100px" align="left">Cup</th><th class="sortable" style="width:100px" align="left">Grams</th></tr></thead><tr><td style="width:100px" align="left">1/8 cup</td><td style="width:100px" align="left">25 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1/4 cup</td><td style="width:100px" align="left">50 grams</td></tr><tr><td style="width:100px" align="left">1/3 cup</td><td style="width:100px" align="left">65 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/8 cup</td><td style="width:100px" align="left">75 grams</td></tr><tr><td style="width:100px" align="left">1/2 cup</td><td style="width:100px" align="left">100 grams</td></tr><tr class="alt"><td style="width:100px" align="left">5/8 cup</td><td style="width:100px" align="left">125 grams</td></tr><tr><td style="width:100px" align="left">2/3 cup</td><td style="width:100px" align="left">135 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/4 cup</td><td style="width:100px" align="left">150 grams</td></tr><tr><td style="width:100px" align="left">7/8 cup</td><td style="width:100px" align="left">175 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1 cup</td><td style="width:100px" align="left">200 grams</td></tr></table><p></p><div class="newline"></div><p><a name="sliced-almonds"></a><br />
				</div>
			</section>
			
			
			<section>
				<div class="container">
					<p><span class="jkprocedure">Sliced Almonds</span><br /></p><table class=" table table-bordered wptable rowstyle-alt" id="wptable-15" cellspacing="1"><thead><tr><th class="sortable" style="width:100px" align="left">Cup</th><th class="sortable" style="width:100px" align="left">Grams</th></tr></thead><tr><td style="width:100px" align="left">1/8 cup</td><td style="width:100px" align="left">10 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1/4 cup</td><td style="width:100px" align="left">20 grams</td></tr><tr><td style="width:100px" align="left">1/3 cup</td><td style="width:100px" align="left">25 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/8 cup</td><td style="width:100px" align="left">30 grams</td></tr><tr><td style="width:100px" align="left">1/2 cup</td><td style="width:100px" align="left">40 grams</td></tr><tr class="alt"><td style="width:100px" align="left">5/8 cup</td><td style="width:100px" align="left">50 grams</td></tr><tr><td style="width:100px" align="left">2/3 cup</td><td style="width:100px" align="left">55 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/4 cup</td><td style="width:100px" align="left">60 grams</td></tr><tr><td style="width:100px" align="left">7/8 cup</td><td style="width:100px" align="left">70 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1 cup</td><td style="width:100px" align="left">80 grams</td></tr></table><p></p><div class="newline"></div><p><a name="ground-almonds"></a><br />
				</div>
			</section>
			
			
			<section>
				<div class="container">
					<p><span class="jkprocedure">Ground Almonds</span><br /></p><table class="  table table-bordered wptable rowstyle-alt" id="wptable-16" cellspacing="1"><thead><tr><th class="sortable" style="width:100px" align="left">Cup</th><th class="sortable" style="width:100px" align="left">Grams</th></tr></thead><tr><td style="width:100px" align="left">1/8 cup</td><td style="width:100px" align="left">25 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1/4 cup</td><td style="width:100px" align="left">50 grams</td></tr><tr><td style="width:100px" align="left">1/3 cup</td><td style="width:100px" align="left">65 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/8 cup</td><td style="width:100px" align="left">75 grams</td></tr><tr><td style="width:100px" align="left">1/2 cup</td><td style="width:100px" align="left">100 grams</td></tr><tr class="alt"><td style="width:100px" align="left">5/8 cup</td><td style="width:100px" align="left">125 grams</td></tr><tr><td style="width:100px" align="left">2/3 cup</td><td style="width:100px" align="left">135 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/4 cup</td><td style="width:100px" align="left">150 grams</td></tr><tr><td style="width:100px" align="left">7/8 cup</td><td style="width:100px" align="left">175 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1 cup</td><td style="width:100px" align="left">200 grams</td></tr></table><p></p><div class="newline"></div><p><a name="flaked-coconut"></a><br />
<span class="jkprocedure">Flaked Coconut</span><br /></p><table class="  table table-bordered wptable rowstyle-alt" id="wptable-17" cellspacing="1"><thead><tr><th class="sortable" style="width:100px" align="left">Cup</th><th class="sortable" style="width:100px" align="left">Grams</th></tr></thead><tr><td style="width:100px" align="left">1/8 cup</td><td style="width:100px" align="left">10 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1/4 cup</td><td style="width:100px" align="left">20 grams</td></tr><tr><td style="width:100px" align="left">1/3 cup</td><td style="width:100px" align="left">25 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/8 cup</td><td style="width:100px" align="left">30 grams</td></tr><tr><td style="width:100px" align="left">1/2 cup</td><td style="width:100px" align="left">40 grams</td></tr><tr class="alt"><td style="width:100px" align="left">5/8 cup</td><td style="width:100px" align="left">45 grams</td></tr><tr><td style="width:100px" align="left">2/3 cup</td><td style="width:100px" align="left">50 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/4 cup</td><td style="width:100px" align="left">60 grams</td></tr><tr><td style="width:100px" align="left">7/8 cup</td><td style="width:100px" align="left">65 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1 cup</td><td style="width:100px" align="left">75 grams</td></tr></table><p></p><div class="newline"></div><p><a name="grated-coconut"></a><br />
<span class="jkprocedure">Grated Coconut</span><br /></p><table class="  table table-bordered wptable rowstyle-alt" id="wptable-18" cellspacing="1"><thead><tr><th class="sortable" style="width:100px" align="left">Cup</th><th class="sortable" style="width:100px" align="left">Grams</th></tr></thead><tr><td style="width:100px" align="left">1/8 cup</td><td style="width:100px" align="left">10 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1/4 cup</td><td style="width:100px" align="left">25 grams</td></tr><tr><td style="width:100px" align="left">1/3 cup</td><td style="width:100px" align="left">35 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/8 cup</td><td style="width:100px" align="left">40 grams</td></tr><tr><td style="width:100px" align="left">1/2 cup</td><td style="width:100px" align="left">50 grams</td></tr><tr class="alt"><td style="width:100px" align="left">5/8 cup</td><td style="width:100px" align="left">60 grams</td></tr><tr><td style="width:100px" align="left">2/3 cup</td><td style="width:100px" align="left">65 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/4 cup</td><td style="width:100px" align="left">75 grams</td></tr><tr><td style="width:100px" align="left">7/8 cup</td><td style="width:100px" align="left">85 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1 cup</td><td style="width:100px" align="left">100 grams</td></tr></table><p></p><div class="newline"></div><div class="content_mobile_hint"></div><div class="content_desktop_hint"></div><p><a name="cocoa-powder"></a><br />
<span class="jkprocedure">Unsweetened Cocoa Powder</span><br /></p><table class="  table table-bordered wptable rowstyle-alt" id="wptable-13" cellspacing="1"><thead><tr><th class="sortable" style="width:100px" align="left">Cup</th><th class="sortable" style="width:100px" align="left">Grams</th></tr></thead><tr><td style="width:100px" align="left">1/8 cup</td><td style="width:100px" align="left">15 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1/4 cup</td><td style="width:100px" align="left">30 grams</td></tr><tr><td style="width:100px" align="left">1/3 cup</td><td style="width:100px" align="left">40 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/8 cup</td><td style="width:100px" align="left">45 grams</td></tr><tr><td style="width:100px" align="left">1/2 cup</td><td style="width:100px" align="left">60 grams</td></tr><tr class="alt"><td style="width:100px" align="left">5/8 cup</td><td style="width:100px" align="left">70 grams</td></tr><tr><td style="width:100px" align="left">2/3 cup</td><td style="width:100px" align="left">75 grams</td></tr><tr class="alt"><td style="width:100px" align="left">3/4 cup</td><td style="width:100px" align="left">85 grams</td></tr><tr><td style="width:100px" align="left">7/8 cup</td><td style="width:100px" align="left">100 grams</td></tr><tr class="alt"><td style="width:100px" align="left">1 cup</td><td style="width:100px" align="left">125 grams</td></tr></table><p></p><div class="newline"></div><p><span class="jkprocedure">Baking Measurements</span><br /></p><table class="  table table-bordered wptable rowstyle-alt" id="wptable-4" cellspacing="1"><thead><tr><th class="sortable" style="width:200px" align="left">If a recipe calls for this amount</th><th class="sortable" style="width:300px" align="left">You can also measure it this way</th></tr></thead><tr><td style="width:200px" align="left">Dash</td><td style="width:300px" align="left">2 or 3 drops (liquid) or less than 1/8 teaspoon (dry)</td></tr><tr class="alt"><td style="width:200px" align="left">1 tablespoon</td><td style="width:300px" align="left">3 teaspoons or 1/2 ounce</td></tr><tr><td style="width:200px" align="left">2 tablespoons</td><td style="width:300px" align="left">1 ounce</td></tr><tr class="alt"><td style="width:200px" align="left">1/4 cup</td><td style="width:300px" align="left">4 tablespoons or 2 ounces</td></tr><tr><td style="width:200px" align="left">1/3 cup</td><td style="width:300px" align="left">5 tablespoons plus 1 teaspoon</td></tr><tr class="alt"><td style="width:200px" align="left">1/2 cup</td><td style="width:300px" align="left">8 tablespoons or 4 ounces</td></tr><tr><td style="width:200px" align="left">3/4 cup</td><td style="width:300px" align="left">12 tablespoons or 6 ounces</td></tr><tr class="alt"><td style="width:200px" align="left">1 cup</td><td style="width:300px" align="left">16 tablespoons or 8 ounces</td></tr><tr><td style="width:200px" align="left">1 pint</td><td style="width:300px" align="left">2 cups or 16 ounces or 1 pound</td></tr><tr class="alt"><td style="width:200px" align="left">1 quart</td><td style="width:300px" align="left">4 cups or 2 pints</td></tr><tr><td style="width:200px" align="left">1 gallon</td><td style="width:300px" align="left">4 quarts</td></tr><tr class="alt"><td style="width:200px" align="left">1 pound</td><td style="width:300px" align="left">16 ounces</td></tr></table><p></p><div class="newline"></div><p><span class="jkprocedure">Volume Measurements</span><br /></p><table class="  table table-bordered wptable rowstyle-alt" id="wptable-6" cellspacing="1"><thead><tr><th class="sortable" style="width:200px" align="left">US Units</th><th class="sortable" style="width:120px" align="left">Canadian Units</th><th class="sortable" style="width:150px" align="left">Australian Units</th></tr></thead><tr><td style="width:200px" align="left">1/4 teaspoon</td><td style="width:120px" align="left">1 ml</td><td style="width:150px" align="left">1 ml</td></tr><tr class="alt"><td style="width:200px" align="left">1/2 teaspoon</td><td style="width:120px" align="left">2 ml</td><td style="width:150px" align="left">2 ml</td></tr><tr><td style="width:200px" align="left">1 teaspoon</td><td style="width:120px" align="left">5 ml</td><td style="width:150px" align="left">5 ml</td></tr><tr class="alt"><td style="width:200px" align="left">1 tablespoon</td><td style="width:120px" align="left">15 ml</td><td style="width:150px" align="left">20 ml</td></tr><tr><td style="width:200px" align="left">1/4 cup</td><td style="width:120px" align="left">50 ml</td><td style="width:150px" align="left">60 ml</td></tr><tr class="alt"><td style="width:200px" align="left">1/3 cup</td><td style="width:120px" align="left">75 ml</td><td style="width:150px" align="left">80 ml</td></tr><tr><td style="width:200px" align="left">1/2 cup</td><td style="width:120px" align="left">125 ml</td><td style="width:150px" align="left">125 ml</td></tr><tr class="alt"><td style="width:200px" align="left">2/3 cup</td><td style="width:120px" align="left">150 ml</td><td style="width:150px" align="left">170 ml</td></tr><tr><td style="width:200px" align="left">3/4 cup</td><td style="width:120px" align="left">175 ml</td><td style="width:150px" align="left">190 ml</td></tr><tr class="alt"><td style="width:200px" align="left">1 cup</td><td style="width:120px" align="left">250 ml</td><td style="width:150px" align="left">250 ml</td></tr><tr><td style="width:200px" align="left">1 quart</td><td style="width:120px" align="left">1 liter</td><td style="width:150px" align="left">1 liter</td></tr><tr class="alt"><td style="width:200px" align="left">1 and 1/2 quarts</td><td style="width:120px" align="left">1.5 liters</td><td style="width:150px" align="left">1.5 liters</td></tr><tr><td style="width:200px" align="left">2 quarts</td><td style="width:120px" align="left">2 liters</td><td style="width:150px" align="left">2 liters</td></tr><tr class="alt"><td style="width:200px" align="left">2 and 1/2 quarts</td><td style="width:120px" align="left">2.5 liters</td><td style="width:150px" align="left">2.5 liters</td></tr><tr><td style="width:200px" align="left">3 quarts</td><td style="width:120px" align="left">3 liters</td><td style="width:150px" align="left">3 liters</td></tr><tr class="alt"><td style="width:200px" align="left">4 quarts</td><td style="width:120px" align="left">4 liters</td><td style="width:150px" align="left">4 liters</td></tr></table><p></p><div class="newline"></div><p><span class="jkprocedure">Weight Measurements</span><br /></p><table class="  table table-bordered wptable rowstyle-alt" id="wptable-7" cellspacing="1"><thead><tr><th class="sortable" style="width:200px" align="left">US Units</th><th class="sortable" style="width:120px" align="left">Canadian Metric</th><th class="sortable" style="width:150px" align="left">Australian Metric</th></tr></thead><tr><td style="width:200px" align="left">1 ounce</td><td style="width:120px" align="left">30 grams</td><td style="width:150px" align="left">30 grams</td></tr><tr class="alt"><td style="width:200px" align="left">2 ounces</td><td style="width:120px" align="left">55 grams</td><td style="width:150px" align="left">60 grams</td></tr><tr><td style="width:200px" align="left">3 ounces</td><td style="width:120px" align="left">85 grams</td><td style="width:150px" align="left">90 grams</td></tr><tr class="alt"><td style="width:200px" align="left">4 ounces (1/4 pound)</td><td style="width:120px" align="left">115 grams</td><td style="width:150px" align="left">125 grams</td></tr><tr><td style="width:200px" align="left">8 ounces (1/2 pound)</td><td style="width:120px" align="left">225 grams</td><td style="width:150px" align="left">225 grams</td></tr><tr class="alt"><td style="width:200px" align="left">16 ounces (1 pound)</td><td style="width:120px" align="left">455 grams</td><td style="width:150px" align="left">500 grams (1/2 kilogram)</td></tr></table><p></p><div class="newline"></div><div class="content_mobile_hint"></div><div class="content_desktop_hint"></div><p><span class="jkprocedure">Temperature Conversions</span><br /></p><table class="  table table-bordered wptable rowstyle-alt" id="wptable-8" cellspacing="1"><thead><tr><th class="sortable" style="width:100px" align="left">Farenheit</th><th class="sortable" style="width:100px" align="left">Celsius</th></tr></thead><tr><td style="width:100px" align="left">32</td><td style="width:100px" align="left">0</td></tr><tr class="alt"><td style="width:100px" align="left">212</td><td style="width:100px" align="left">100</td></tr><tr><td style="width:100px" align="left">250</td><td style="width:100px" align="left">120</td></tr><tr class="alt"><td style="width:100px" align="left">275</td><td style="width:100px" align="left">140</td></tr><tr><td style="width:100px" align="left">300</td><td style="width:100px" align="left">150</td></tr><tr class="alt"><td style="width:100px" align="left">325</td><td style="width:100px" align="left">160</td></tr><tr><td style="width:100px" align="left">350</td><td style="width:100px" align="left">180</td></tr><tr class="alt"><td style="width:100px" align="left">375</td><td style="width:100px" align="left">190</td></tr><tr><td style="width:100px" align="left">400</td><td style="width:100px" align="left">200</td></tr><tr class="alt"><td style="width:100px" align="left">425</td><td style="width:100px" align="left">220</td></tr><tr><td style="width:100px" align="left">450</td><td style="width:100px" align="left">230</td></tr><tr class="alt"><td style="width:100px" align="left">475</td><td style="width:100px" align="left">240</td></tr><tr><td style="width:100px" align="left">500</td><td style="width:100px" align="left">260</td></tr></table><p></p><div class="newline"></div>
				</div>
			</section>
			
			
			<section>
				<div class="container">
					
					
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