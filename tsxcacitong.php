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

if(empty($_SESSION['email']) || empty($_SESSION['pass']) || empty($_SESSION['fName']) ) {
header("Location: index.php");	
	
}else{ 

include 'core/confi.php';
$email = $_SESSION['email'];
   $Token = bin2hex(openssl_random_pseudo_bytes(40));  
    
$n = date('n');

$d = date('d');

$y = date('Y');
$m = date('F');
$currentWeekNumber = date('W');
 $date=date("Y-m-d");

$unixTimestamp = strtotime($date);

$dayOfWeek = date("l", $unixTimestamp);
   
$sql = "SELECT * FROM user_info WHERE email = '".$_SESSION['email']."' AND success = 1";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        
        if($resultCheck > 0) {
           $mss = "<span style='color:green;'> Registered successfully Please Login</span>";
        }else{
$query = "INSERT INTO user_info(user_id, email, password, year, day, month, name, token, wk_number, date_added,success) VALUES(Null,'".$_SESSION['email']."', '".$_SESSION['pass']."','$y', '$d', '$n', '".$_SESSION['fName']."', '$Token', '$currentWeekNumber', CURRENT_TIMESTAMP, '1')";
      
       $res = mysqli_query( $conn, $query);
  
    
   if ($res) {
	   
	    
     require 'class/class.phpmailer.php';
        require 'PHPMailerAutoload.php';
 	

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               

$mail->isSMTP();                                     
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                               
$mail->Username = 'testmetesting45@gmail.com';                 
$mail->Password = 'kelvinmiriam';                           
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;                                    
$mail->isHTML(true); 
$mail->setFrom('testmetesting45@gmail.com', 'YummyHomes');
$mail->addAddress($_SESSION['email'], $_SESSION['fName']);     
$mail->addReplyTo('testmetesting45@gmail.com');
$mail->AddEmbeddedImage('logo.PNG', 'logoimg', 'logo.PNG');
	   $body = '<img src=\'cid:logoimg\' /> <h3 style="width:80%;"> Thank You <span style="color: #7a2b00; font-size:18px;">'.$_SESSION['fName'].'! </span>  <p> Your payment has been confirmed </p> <p> Kindly login and enjoy over 300 best baking recipe of all time.</p></h3>';
	   
                                

$mail->Subject = 'YummyHomes Payment Confirmation';
$mail->Body = $body;

$mail->AltBody = strip_tags($body);

if(!$mail->send()) {
  $mss = 'Registered successfully';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
 $mss = "Registered successfully, Please Login";  
}
 
    }
}
}
?>

<?php
session_start();


if( isset($_POST['submit'] ) ){ 


 include('core/confi.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);

$pwd= mysqli_real_escape_string($conn, $_POST['password']);
 $Token = bin2hex(openssl_random_pseudo_bytes(40));      
    
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
                    
                    header("Location: mairepueins.php?s/us= $Token&H876 jhfy567uhkjhJHKGJVFH");
                   
                 ini_set(‘display_errors’, 0);   
        exit();
                
                
                }
            }
        }
    
}
    
}

?>


<?php include 'includes/head.php';?>

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
				 <span style="color:green"><?php echo $mss;?></span>
					<h2 class="title">Login</h2>
     
     
        
  
         <p class="statusMsg"></p>
          <form action="tsxcacitong?<?php echo $Token;?>" method="post" autocomplete="off">
            <div class="input-group"> 
          <input type="text" id="inputEmail" placeholder="Email" class="nput--style-2" name="email"  >
        
         <div class="input-group-addon ">
       
        <span class="fa fa-fw fa-eye field-icon  input-icon js-btn-calendar hidden"></span>
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
         
          <small><a href="ftyhiupaiys?<?php echo getName($n);?>">Forgot password.</a></small>
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
         
   
    
      <?php include 'includes/footer.php';?>