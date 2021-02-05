

<?php
session_start();


if( isset($_POST['submit'] ) ){ 


 include('../core/confi.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);

$pwd= mysqli_real_escape_string($conn, $_POST['password']);
 $Token = bin2hex(openssl_random_pseudo_bytes(40));  
    //error handler
    //check if input are empty
    if(empty($email) || empty($pwd)) {
       $error = true;
   $Error = "Please fill all the fields.";
    }else{
         
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        
        if($resultCheck < 1) {
           $loginError = "<span style='color:red;'>No such user in database.Try again.</span>";
        }else{
            if($row = mysqli_fetch_assoc($result)) {
                //dehashing the password
                
                $hashedPwdCheck = password_verify($pwd, $row['password']);
                if($hashedPwdCheck == false ) {
           $loginError = "<span style='color:red;'>wrong email or password combination.Try again.</span>";
                    
                }elseif ($hashedPwdCheck == true){
                   
                    //login the user here
                    $_SESSION['user'] = $row['user_id'];
					 $sqlu = "UPDATE user SET last_login = CURRENT_TIMESTAMP WHERE email = '$email'";
					$resultu = mysqli_query($conn, $sqlu);
					if($resultu){
						
					
                    header("Location:products.php?suc = $Token");
              
        exit();
                 
					}
                
                }
            }
        }
    
}
    
}

?>


<?php include 'includes/head.php';?>
<div class="form-cover">
<form class="log-forms" method="post" action="login?<?php echo $Token;?>" autocomplete="off">
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <?php echo $loginError;?>
  <input type="email" class="login-email" autofocus="false" required="true" placeholder="Email" name="email"/>
  <input type="password" class="login-pass" required="true" placeholder="Password" name="password" />
  <input type="submit" name="submit" value="Login" class="log-sub" />
</form>
</div>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>        

<?php include 'includes/footer.php'?>