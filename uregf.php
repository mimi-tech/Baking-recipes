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
 ob_start();
 session_start();

 
 include('core/confi.php');

 $error = false;

 if ( isset($_POST['btn-signup']) ) {
  
  // clean user inputs to prevent sql injections
  $fName = trim($_POST['fName']);
  $fName = strip_tags($fName);
  $fName = htmlspecialchars($fName);
     
  
     
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
     
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

  $confirmpass = trim($_POST['confirmpass']);
  $confirmpass = strip_tags($confirmpass);
  $confirmpass = htmlspecialchars($confirmpass);
$Token = bin2hex(openssl_random_pseudo_bytes(40));      
    
	 
  if (empty($fName)) {
   $error = true;
   $fnameError = "Please enter your first name.";
  } else if (strlen($fName) < 3) {
   $error = true;
   $fNameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/", $fName)) {
   $error = true;
   $fNameError = "Name must contain alphabets and space.";
  }
     
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT *  FROM user_info WHERE email='$email'";
   $result = mysqli_query($conn, $query);
   $count = mysqli_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
}
  }
     
    if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
  
  if (empty($confirmpass)){
   $error = true;
   $confirmPassError = "Please re-enter your password.";
  } else if($pass != $confirmpass){
	   $error = true;
        $confirmpassError = "passwords does not match";
  
     
    }else{ 
  
   $hashedpass = password_hash($pass, PASSWORD_DEFAULT);  
   $Token = bin2hex(openssl_random_pseudo_bytes(40));  
    
   $n = date('n');
   
   $d = date('d');
   
   $y = date('Y');
   $m = date('F');
   $currentWeekNumber = date('W');
    $date=date("Y-m-d");
   
   $unixTimestamp = strtotime($date);
   
   $dayOfWeek = date("l", $unixTimestamp);
   
   $query = "INSERT INTO user_info(user_id, email, password, year, day, month, name, token, wk_number, date_added,success) VALUES(Null,'$email', '$hashedpass','$y', '$d', '$n', '$fName', '$Token', '$currentWeekNumber', CURRENT_TIMESTAMP, '1')";
      
   $res = mysqli_query( $conn, $query);


if ($res) {
  header("Location: ulogf.php?s/v=sdnhu/id=546iyu&Hi kjl&ujhgdr &0977 9897hujiAGFHGV7K KUYVHMJH&HK HBGVNHN& UJHYGJU HJ4GHFV JHjhfgjfj h098778 77685&765676&jg jhfy567uhkjhJHKGJVFH");

exit();
}

   }
  
  
   if( !$error ) {
//   $btn = "<span style='color:green;'> <em>Thank You!</em>  Please click on <b>Pay Now</b> to make your payment <a class='btn btn--radius btn--green'>Pay Now</a></span>";
//	
	   header("Location: tsxcacitong?s/us= $Token&sdkj 589W kfc");
	   
	    $_SESSION['fName'] = $fName;
 
  $_SESSION['email'] = $email;
	 $_SESSION['pass'] = $hashedpass; 
	   
	   
        
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
	
<b style="color:green;"><?php echo $mss;?></b>
       <span class="text-success"><?php echo $errMSG;?></span>
  <span class="text-warning"><?php echo $errMSGS;?></span>
       <span class="text-warning"><?php echo $errTyp;?></span>
				</div>
				<div class="card-body">
				<?php echo $btn;?>
					<h2 class="title">Register</h2>
      
        <form action="uregf" method="post" autocomplete="off" class="signin-form">
            
  
    <div class="row row-space">
     <div class="col-6">
      <div class="input-group">
        <input type="text" name="fName" placeholder=" Name" required class="input--style-2" />
         <div class="input-group-addon ">
       
        <span class="fas fa-user field-icon  input-icon js-btn-calendar hidden"></span>
      </div>    
               
                     
      </div>
       <span class="text-danger"><?php echo $fnameError; ?></span>
		</div>
      
       <div class="col-6">
       <div class="input-group">
        <input type="text" name="email"  placeholder=" Email"  required class="input--style-2"/>
          <div class="input-group-addon ">
       
        <span class="fas fa-envelope field-icon  input-icon js-btn-calendar hidden"></span>
      </div>     
      </div>
      <span class="text-danger" ><?php echo $emailError; ?></span>
		</div>
			</div>      
            
    <div class="row row-space">
     
       <div class="col-6">
     
           
           <div class="input-group">
            <input type="password" name="pass"  placeholder=" Password"  required class="input--style-2" id="password-field" /> 
              <div class="input-group-addon">
       
        <span toggle="#password-field" class="fas fa-eye-slash field-icon toggle-password input-icon js-btn-calendar"></span>
      </div>
                 
        </div>
           <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
             <div class="col-6">
       <div class="input-group">
        <input type="password" name="confirmpass" placeholder="confirm Password" required class="input--style-2"  id="pass_log_id"  />
        
         <div class="input-group-addon">
       
        <span  toggle="#pass_log_id" class="fas fa-eye-slash field-icon toggle-passwords input-icon js-btn-calendar"></span>
      </div>
        
      </div>
       <span class="text-danger" ><?php echo $confirmpassError; ?></span>
			  </div>
            </div>
           
          
            
           
           	  	   	   	   	 
            	<div class="p-t-30">
					<a href="tsxcacitong?<?php echo getName($n);?>"> <button type="submit" class="btn btn--radius btn--green" name="btn-signup">Next</button></a>
              
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
   
      
      
 
  
     
  
  
   
  
   
