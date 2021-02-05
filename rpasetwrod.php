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
if(isset($_GET["email"])  && isset($_GET["note"])){
    
    //connect to my database
  // $connection = new mysqli("localhost", "root", "root", "chile");
    include 'core/confi.php'
    $email = $conn->real_escape_string($_GET["email"]);
    $note = $conn->real_escape_string($_GET["note"]);
    
    $data = $conn->query("SELECT user_id FROM user_info WHERE email='$email' AND note='$note'");
    if($data->num_rows > 0){
        
       ?> 
        
        <div class="signup-form">
   
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
   
       <div class="wrapper wrapper--w960">
			<div class="card card-2">
				<div class="card-heading">
				
				</div>
				<div class="card-body">
					<h2 class="title">Reset Password</h2>
     
     
               
          <form method="post" action="rpasetwrod" autocomplete="off">
               
          <input type="hidden" name="id" value="<?php echo $uid; ?>"  /> 
          
           
          
          <input type="hidden" name="email" value="<?php echo $email; ?>" />
                 
             
                  <br><br>
                  
             <div class="input-group">
           <input type="password" name="new_password" placeholder="New password" required class="input--style-2" id="password-field" placeholder="Password"  />
           <div class="input-group-addon">
       
        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password input-icon js-btn-calendar"></span>
      </div>
			  </div>
          <span class="text-danger"><?php echo $n_passError; ?></span>
                  
              <div class="input-group">
          <input type="password" name="confirm_password" class="input--style-2"  placeholder="confirm password" id="pass_log_id" required/>
           <div class="input-group-addon">
       
        <span toggle="#pass_log_id" class="fa fa-fw fa-eye field-icon toggle-passwords input-icon js-btn-calendar"></span>
      </div>
			  </div>
          <span class="text-danger"><?php echo $c_passError; ?></span>
              <div class="p-t-30">
              <button type="submit" name="change_password"  class="btn btn--radius btn--green btn-lg" >Submit</button>
                  </div>
              
</form>
</div>
		   </div>
		</div>
			</div>
			
</div>             
<?php
    }else{
        $error = true;
        $error = "Incorect Url : ";
        
    }
    
}
if(isset($_POST["change_password"])){
     $conn = new mysqli("localhost", "root", "root", "yummy");
	
	

    $n_pass =mysqli_real_escape_string($conn, $_POST['new_password']);
    $c_pass = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
	
	$uppercase = preg_match('@[A-Z]@', $n_pass);
 $lowercase = preg_match('@[a-z]@', $n_pass);
 $number    = preg_match('@[0-9]@', $n_pass);
 $specialChars = preg_match('@[^\w]@', $n_pass);
	
 if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
	   $error = true;
    $error = 'Password should be at least 8 characters , one upper case , one number &amp;  special character.';
  
        
     
    }else{
        if($n_pass == $c_pass){
        
        
        $hashedpass = password_hash($n_pass, PASSWORD_DEFAULT);  
        $conn->query("UPDATE user_info SET password ='$hashedpass', note='' WHERE email = '$email'");
      
   echo  "Password changed successfully, you may <a href='ulogf.php?success= getName($n);'>Login </a> Now";
        
    }else{
        $error = true;
   $error = "Password does not match.";
       
    }

}
}
?>


<?php include 'includes/head.php'?>
 
		  
		  <div class="se-pre-con"></div>
<?php echo $error;?>
<?php include 'includes/footer.php'?>


<script>
$(window).load(function() {
		
		$(".se-pre-con").fadeOut("slow");;
	});
</script>