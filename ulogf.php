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


if( isset($_POST['submit'] ) ){ 


 include('core/confi.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);

$pwd= mysqli_real_escape_string($conn, $_POST['password']);

    
    if(empty($email) || empty($pwd)) {
       $error = true;
   $Error = "Please fill all the fields.";
    }else{
         
        $sql = "SELECT * FROM user_info WHERE email = '$email' AND success = 1";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        
        if($resultCheck < 1) {
           $loginError = "<span style='color:red;'>No such user in database.Try again.</span>";
        }else{
            if($row = mysqli_fetch_assoc($result)) {
                
                
                $hashedPwdCheck = password_verify($pwd, $row['password']);
                if($hashedPwdCheck == false ) {
           $loginError = "<span style='color:red;'>wrong email or password combination.Try again.</span>";
                    
                }elseif ($hashedPwdCheck == true){
                    
                
                    
                    //login the user here
                    $_SESSION['uids'] = $row['user_id'];
                     $_SESSION['name'] = $row['name'];
                    
                    header("Location: mairepueins.php?s/v=sdnhu/id=546iyu&Hi kjl&ujhgdr &0977 9897hujiAGFHGV7K KUYVHMJH&HK HBGVNHN& UJHYGJU HJ4GHFV JHjhfgjfj h098778 77685&765676&jg jhfy567uhkjhJHKGJVFH");
                   
                 ini_set(‘display_errors’, 0);   
        exit();
                 $Token = bin2hex(openssl_random_pseudo_bytes(40));      
                
                }
            }
        }
    
}
    
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
<center>
      <h2><?php echo $sucMSG;?></h2>
  </center>
  
     <div class="signup-form">
   
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
   
       <div class="wrapper wrapper--w960">
       <center>
      	 <img src="img/logo.png" alt="" title="" />	
      </center><br />
			<div class="card card-2">
				<div class="card-heading">
					
				</div>
				<div class="card-body">
					<h2 class="title">Login</h2>
     
     
         <span class="text-success"><?php echo $errMSG;?></span>
  <span class="text-warning"><?php echo $errMSGS;?></span>
       <span class="text-warning"><?php echo $errTyp;?></span>
         <p class="statusMsg"></p>
          <form action="ulogf<?php echo $Token;?>" method="post" autocomplete="off">
            <div class="input-group"> 
          <input type="text" id="inputEmail" placeholder="Email" class="nput--style-2" name="email"  >
        
         <div class="input-group-addon ">
       
        <span class="fas fa-eye field-icon  input-icon js-btn-calendar hidden"></span>
      </div>     
			  </div>
           <span class="text-danger" style="text-align:center;"><?php echo $Error; ?></span>
           
           
            <div class="input-group" id="show_hide_password">
          <input type="password" id="password-field" placeholder="Password" class="input--style-2" name="password">
          <div class="input-group-addon">
       
        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password input-icon js-btn-calendar"></span>
      </div>
    </div><br />
        
              
           <?php echo $loginError; 
			 
			  ?><br />
         
          <!-- <small><a href="ftyhiupaiys?<?php echo getName($n);  ?>">Forgot password.</a></small> -->
          <small>Don't have account? <a href="uregf">Signup</a></small>
           <div class="p-t-30">
			    <button type="submit"  class="btn btn--radius btn--green" name="submit" >Login</button>
			  </div>
           </form>
       </div>
		   </div>
		</div>
		 </div>
</div>
         
           

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      
      
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    
    
    <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
      
 
  <script>
 
    $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
	  
	   
      </script>
      
      
      <script>
   
    $("body").on('click', '.toggle-passwords', function() {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $("#pass_log_id");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }

});
      </script>
      
      <script>
$(window).load(function() {
		
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
      
      
    </body>
</html>
   
      