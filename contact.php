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


if ( isset($_GET['success']) && $_GET['success'] == 1)
{
    
        
     $sucMSG = "You have been logged out successfully"; 
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
							  <li><a href="rpeiesr.php?1d=p9076 3l7b e7218&<?php echo getName($n); ?>">Baking terms</a></li>
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
							<h1 class="text-white">
								Contact Us				
							</h1>	
							<p class="text-white link-nav"><a href="index">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact"> Contact Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								
								
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="fas fa-phone"></span>
								</div>
								<div class="contact-details  wow fadeInLeft" data-wow-delay="0.2s">
									<h5 style=" margin-left:5px;">+2348053907916</h5>
									
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="fas fa-envelope"></span>
								</div>
								<div class="contact-details  wow fadeInRight" data-wow-delay="0.4s">
									<h5 style=" margin-left:5px;">support@yummyhomes.co</h5>
									
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
						<div class="display-errors" style="display: none"></div>
							<form class="form-area" action="contact?<?php echo  getName($n);?>" method="post" autocomplete="off">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input id="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control wow fadeInUp" data-wow-delay="0.2s" required="" type="text">
									
										<input id="email" placeholder="Email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control  wow fadeInUp" data-wow-delay="0.4s" required="" type="email">

									    <input id="phone" placeholder=" Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" class="common-input mb-20 form-control wow fadeInUp" data-wow-delay="0.6s" required="" type="tel">
									
									
										<input id="subject" placeholder=" subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control  wow fadeInUp" data-wow-delay="0.8s" required="" type="text">
										
										
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control  wow fadeInUp" data-wow-delay="1s" id="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
									</div>
									
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary  wow fadeInUp" data-wow-delay="0.8s" style="float: right;" id="submitContact">Send Message</button>											
									</div>
								</div>
							</form>	
						</div>
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
								<div class="display-error" style="display: none">
                                        </div>
								 <div class="single">
								<form action="menu?<?php echo  getName($n);?>" method="post" class="form-inline" autocomplete="off">
									
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
                    $(".display-error").html("<p>"+data.msg+"</p>");
                    $(".display-error").css("display","block");
                } else {
                    $(".display-error").html("<p>"+data.msg+"</p>");
                    $(".display-error").css("display","block");
                }
            }
        });


      });
  });

    
			
			</script>		
			
			
			
			<script>
			
			
  $(document).ready(function() {


      $('#submitContact').click(function(e){
        e.preventDefault();

		var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
		var subject = $("#subject").val();
		var message = $("#message").val();  

        $.ajax({
            type: "POST",
            url: "contact-message",
            dataType: "json",
            data: {name:name,email:email,phone:phone,subject:subject,message:message},
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