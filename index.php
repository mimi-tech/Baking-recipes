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


?> 
	<?php  
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
	<title> Free Best Baking Recipes of all time</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		
		<link rel="shortcut icon" href="img/fav.png">
		
		<meta name="author" content="yummyhomes Nigeria">
		
		<meta name="description" content="Over 300 Free best baking recipes of all time">
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
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="usass/ustylesc.css">
			<link href="lib/animate/animate.min.css" rel="stylesheet">

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
			    		<a href="index?1d=p90/id=ly h73l7e7218&<?php echo getName($n); ?>"><img src="img/logo.png" alt="" title="" /></a>		
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li class="menu-active"><a href="index?1d=p90 p jnh763l7e7218&<?php echo getName($n); ?>">Home</a></li>
							  <li><a href="#abts">About</a></li>
							  <li><a href="mairepueins?1d=olb90763l7e7218&<?php echo getName($n); ?>">Recipies</a></li>
							 <li><a href="rpeiesr?1d=870 &9l/0763l7e&<?php echo getName($n); ?>">Baking Terms</a></li>
							 
							  <li><a href="contact?1d=p90lyh73l7e7218&<?php echo getName($n); ?>">Contact</a></li>
								<li><span class="lnr lnr-user" style="color:#7a2b00; font-weight:bold;"><a href=""><?php echo $logs;?></a></span></li>

							  <li><a href="ulogf?1d=p9076 3l7b e7218&<?php echo getName($n); ?>"><?php echo $log;?></a></li>
							  <li><a href="lotgtuo.php?1d=i jkk l7e7218&<?php echo getName($n); ?>">Logout</a></li>
							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex justify-content-center align-items-center">
						<div class="banner-content col-lg-10 col-md-12 justify-content-center">
						
							<h6 class="text-uppercase wow fadeInLeft" data-wow-delay="0.4s">Baking is an art, we bake with our heart ❤</h6>
							<h1>
								Best Baking Recipes			
							</h1>
							<p class="text-white mx-auto  wow fadeInLeft" data-wow-delay="0.8s">
								 Over 300 best baking recipes of all time   | Cakes |   Pies &amp; Tarts | Healthy Desert  |   French Desert | Cookies |  Quick Bread | Puddings | Mulffins &amp; Cupcakes | Yeasted Dough | Cheesecakes | Basics
							</p>
							<a href="#43R4TRFG5jhfvbk,6654TYHvjyhmhhn28j bvhjhxc" class="primary-btn squire text-uppercase mt-10 fadeBgColor" data-wow-delay="0.4s">Check our recipes</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row">
						<div class="text-wrapper col-lg-9">
							
							<h1 class="wow fadeInUp" data-wow-delay="0.2s">
								Baking is a part motitvation&#44; dedication&#44; passion &amp; a touch of talent
							</h1>
							
							<p class="wow fadeInUp" data-wow-delay="0.4s">
								But beyond these big words&#44; the truth is that everyone can bake something with the right recipe&#46; And from the <b>over 300 recipes</b>&#44; you 'll surely find something to fit your taste &amp; impress your clients&#44; family &amp; friends&#46; Just keep in mind that it's not as hard as it may sound &amp; focus on the final result&#46; You 're a baker&#33; You 're an amazing baker&#33; Don't ever let anyone tell you otherwise&#33;
							</p>
							<a class="primary-btn squire wow fadeInUp" data-wow-delay="0.6s" href="#">Get Started Now</a>						
						</div>
					</div>
				</div>	
				<img class="about-img" data-wow-delay="0.4s" src="img/diyimages/bannana-bread.jpg" alt="banana bread">
			</section>
			<!-- End home-about Area -->

		
			<!-- Start item-category Area -->
			<section class="item-category-area section-gap" id="43R4TRFG5jhfvbk,6654TYHvjyhmhhn28j bvhjhxc">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-80 header-text text-center wow fadeInUp" data-wow-delay="0.2s">
							<h1 class="pb-10">Best baking recipes</h1>
							<p>
								Will surely fit your taste and entice your family.
							</p>
							<span>New to baking? Check <a href="rpeiesr?<?php echo getName($n);?>">Recipe terms &amp; Do It Yourself</a></span>
						</div>
					</div>
					
					<?php
					include 'core/confi.php';
					$sql = "SELECT * FROM cake WHERE id = 28";
					$result_query = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($result_query)){
						$id = $row["id"];
					}
					?>								
					<div class="row">
						<div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
							<div class="single-cat-item">
								<div class="thumb">
								
									<a href="swhocke.php?1d=8877e788&<?php echo getName($n); ?>"><img  src="img/diyimages/bakingpix/cakes1.jpg" alt="cake"class="img-fluid"></a>
								</div>	
								<a href="swhocke.php"><h4>Cake &amp; Mulffins &amp; Cupcakes</h4></a>
								
							</div>
						</div>
						<div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
							<div class="single-cat-item">
								<div class="thumb">
									<a href="shwckoieos?1d=99077e7218&<?php echo getName($n); ?>"><img  src="img/diyimages/bakingpix/cookies2.jpg" alt="cookies"  class="img-fluid"></a>
								</div>	
								<a href="shwckoieos.php"><h4>Cookies</h4></a>
								
							</div>
						</div>
						<div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
							<div class="single-cat-item">
								<div class="thumb">
									<a href="shpetase?1d=p90763l7e7218&<?php echo getName($n); ?>" ><img class="img-fluid" src="img/diyimages/bakingpix/pies%20and%20tarts1.jpg" alt="Pies"></a>
								</div>	
								<a href="shpetase"><h4>Puddings</h4></a>
								
							</div>
						</div>
						<div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="0.4s">
							<div class="single-cat-item">
								<div class="thumb">
									<a href="sdtrserst?1d=kl06763lik658&<?php echo getName($n); ?>" ><img  src="img/diyimages/bakingpix/french%20d2.jpg" alt="french dessert"class="img-fluid"></a>
								</div>	
								<a href="sdtrserst.php"><h4>French Desserts</h4></a>
								
							</div>
						</div>	
                       <div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="0.4s">
							<div class="single-cat-item">
								<div class="thumb">
									<a href="lahtlyserdsst?1d=kl06763lik658&<?php echo getName($n); ?>" ><img class="img-fluid" src="img/diyimages/bakingpix/healthy%20d.jpg" alt="healthy dessert"></a>
								</div>	
								<a href="lahtlyserdsst.php"><h4>Healthy Desserts</h4></a>
								
							</div>
						</div>								
																																								                          <div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="0.4s">
							<div class="single-cat-item">
								<div class="thumb">
									<a href="uickqraed?1d=kl06763lik658&<?php echo getName($n); ?>" ><img class="img-fluid" src="img/diyimages/bakingpix/quick%20bread1.jpg" alt=""></a>
								</div>	
								<a href="uickqraed.php"><h4>Quick Bread</h4></a>
								
							</div>
						</div>			
						<a class="primary-btn mx-auto mt-80 wow fadeInUp" data-wow-delay="0.8s" href="#kuji8987ouyhjikkJGFCNXFj,kjhcghm  hil uyrfted,viewj" style="font-size:1.2em;">View all recipes</a>
					</div>
				</div>	
			</section>
			<!-- End item-category Area -->

			<!-- Start about-video Area -->
			<section class="about-video-area section-gap" id="kuji8987ouyhjikkJGFCNXFj,kjhcghm  hil uyrfted,viewj">
				<div class="container">			
					<div class="row align-items-center">
						<div class="col-lg-6  wow fadeInLeft" data-wow-delay="0.2s">
						
							<h6 class="text-uppercase"> For Baking Metric Conversions&#44; click <a href="measurement?<?php echo getName($n);?>">Here</a> </h6>
							<br />
							<h1>
								We’ve made it easy for you <br> 
							</h1>
							<p>
								<span style="font-size:1.2em; color:#7a2b00 ;"> over 300 best baking recipes @ &#35;1000 only</span>
							</p>
							<p>
								 Best baking recipes of all time   | Cakes |   Pies &amp; Tarts | Healthy Desert  |   French Desert | Cookies |  Quick Bread | Puddings | Mulffins &amp; Cupcakes | Yeasted Dough | Cheesecakes | Basics
							</p>
							<a class="primary-btn squire started" href="uregf.php1d=iyh6763likc 8&<?php echo getName($n); ?>" style="font-size:1.2em;">Get started</a>
							
							
						</div>
						<div class="col-lg-6">
							<img  src="img/diyimages/bakingpix/orange-pie_new.jpg" alt="folding"  class=" wow fadeInRight img-fluid orange-pie" data-wow-delay="0.2s">
							
						</div>
						
					</div>
				</div>	
			</section>
				
				
					<!-- Start review Area -->
			<section class="review-area section-gap relative " >
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-9 pb-40 header-text text-center wow fadeInUp" data-wow-delay="0.2s">
							<h1 class="pb-10 text-white"> Client’s Review</h1>
							
							
							<p id="reviewresults"></p>	
						</div>
					</div>					
					
				</div>	
			</section>
			<!-- End review Area -->			
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
									<span class="fas fa-phone" ></span>
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
								<form action="index?<?php echo  getName($n);?>" method="post" class="form-inline" autocomplete="off">
									
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
			
	$(document).ready(function(){
		LoadDatareview(0);
	});
function LoadDatareview(pagenumreview){
	$.post('reviews?p='+pagenumreview, function(reponsereview){
		
		$('#reviewresults').fadeOut('slow',function(){
           
			 $('#reviewresults').html(reponsereview).fadeIn('slow');
                });	
	});
}
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