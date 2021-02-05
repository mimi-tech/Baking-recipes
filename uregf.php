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
 
 <?php include 'includes/head.php';?>
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
					<h2 class="title">Sign Up</h2>
      
        <form action="uregf" method="post" autocomplete="off" class="signin-form">
            
  
    <div class="row row-space">
     <div class="col-2">
      <div class="input-group">
        <input type="text" name="fName" placeholder=" Name" required class="input--style-2" />
         <div class="input-group-addon ">
       
        <span class="fa fa-fw fa-eye field-icon  input-icon js-btn-calendar hidden"></span>
      </div>    
               
                     
      </div>
       <span class="text-danger"><?php echo $fnameError; ?></span>
		</div>
      
       <div class="col-2">
       <div class="input-group">
        <input type="text" name="email"  placeholder=" Email"  required class="input--style-2"/>
          <div class="input-group-addon ">
       
        <span class="fa fa-fw fa-eye field-icon  input-icon js-btn-calendar hidden"></span>
      </div>     
      </div>
      <span class="text-danger" ><?php echo $emailError; ?></span>
		</div>
			</div>      
            
    <div class="row row-space">
     
       <div class="col-2">
     
           
           <div class="input-group">
            <input type="password" name="pass"  placeholder=" Password"  required class="input--style-2" id="password-field" /> 
              <div class="input-group-addon">
       
        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password input-icon js-btn-calendar"></span>
      </div>
                 
        </div>
           <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
             <div class="col-2">
       <div class="input-group">
        <input type="password" name="confirmpass" placeholder="confirm Password" required class="input--style-2"  id="pass_log_id"  />
        
         <div class="input-group-addon">
       
        <span  toggle="#pass_log_id" class="fa fa-fw fa-eye field-icon toggle-passwords input-icon js-btn-calendar"></span>
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
    
  
      
      
        
     

 
  <?php include 'includes/footer.php';?>
      
 
  
     
  
  
   
  
   
