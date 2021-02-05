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
    
    
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    <li><a href="/bakers/admin/products?1d=99077e7218&<?php echo getName($n); ?>">Cake</a><span class="hover"></span></li>
    <li><a href="/bakers/admin/cookies?1d=uyuygve7218&<?php echo getName($n); ?>">Cookies</a><span class="hover"></span></li>
     <li><a href="/bakers/admin/cupcake?/1d=k9nujhj77e7218&<?php echo getName($n); ?>"> Cupcakes</a><span class="hover"></span></li>
      <li><a href="/bakers/admin/pies?1d=o0kkjhj77e7nbh 2&<?php echo getName($n); ?>">Pies &amp;Tarts</a><span class="hover"></span></li>
		<li><a href="/bakers/admin/dessert?1d=9907h 7kje7218&<?php echo getName($n); ?>">Healthy Desserts</a><span class="hover"></span></li>
       <li><a href="/bakers/admin/pudding?1d=/9907h 7kje7218&<?php echo getName($n); ?>">Pudding</a><span class="hover"></span></li>
        <li><a href="/bakers/admin/bread?1d=/9907h 7kje7218&<?php echo getName($n); ?>">Quick Bread</a><span class="hover"></span></li>
        <li><a href="/bakers/admin/dough?1d=/9907h 7kje7218&<?php echo getName($n); ?>">Yeasted Dough</a><span class="hover"></span></li>
         <li><a href="/bakers/admin/basic?1d=/9907h 7kje7218&<?php echo getName($n); ?>">Basic</a><span class="hover"></span></li>
         <li><a href="/bakers/admin/cheesecake.php?1d=/9907h 7kje7218&<?php echo getName($n); ?>">CheeseCake</a><span class="hover"></span></li>
          <li><a href="/bakers/admin/frenchdesert?1d=/9907h 7kje7218&<?php echo getName($n); ?>">French Dessert</a><span class="hover"></span></li>
        
            <li><a href="/bakers/admin/user-contact?1d=lkl;l mj9077e7218&<?php echo getName($n); ?>">User Contact</a></li>
           <li><a href="/bakers/admin/user-sub?1d=9kjiuj e7218&<?php echo getName($n); ?>">Subscribers</a></li>
           <li><a href="/bakers/admin/review?1d=lklj 077e7218&<?php echo getName($n); ?>">Reviews</a></li>
           
<li><a href="/bakers/admin/analysis?1d=lklj 077e7218&<?php echo getName($n); ?>">Analysis</a></li>
           
	 
      <li><a href="/bakers/admin/user-setting?1d=oi98j 77e7218&<?php echo getName($n); ?>">user Setting</a></li>
    </ul>
		
  </div>
  </div>
</nav>

    
    
     <?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:login.php");
}
?> 
 