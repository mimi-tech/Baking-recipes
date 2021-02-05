<?php
session_start();
if(isset($_POST["forgotPass"])){
    //connect to my database
   //$connection = new mysqli("localhost", "root", "root", "yummy");
    include 'core/confi.php';
    $email = $conn->real_escape_string($_POST["email"]);
    $data = $conn->query("SELECT user_id FROM user_info WHERE email = '$email'");
	
    if($data->num_rows > 0){
     
         $random_note = time().rand(50000,100000);
         $random_note = str_shuffle($random_note);
        $url = "http://domain.com/rpasetwrod?note=$random_note&email=$email";
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

$mail->setFrom('testmetesting45@gmail.com', 'YummyHomes');
$mail->addAddress($email,$email);    
             
$mail->addReplyTo('testmetesting45@gmail.com');

$mail->isHTML(true);                                 
$mail->AddEmbeddedImage('logo.PNG', 'logoimg', 'logo.PNG');
		
	   $body = '<img src=\'cid:logoimg\' /> <h3 style=" width:80%;"><p> Please Click On the link to Reset your email</p> '.$url.'</h3>';
	   
                                

$mail->Subject = 'YummyHomes Reset Email';
$mail->Body = $body;

$mail->AltBody = strip_tags($body);

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $conn->query("UPDATE user_info SET note='$random_note' WHERE email= '$email'");
        $error = true;
        $Error = "please check your email, we have sent you a reset link";
}
        
        
        
    }else{
        $error = true;
   $Error = "Your email address does not exit.";
    }
    
    
}


?>
<?php include 'includes/head.php'?>
      
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
					<h2 class="title">Reset Password</h2>
     
     
      
        <b style="color:green;"><?php echo $Error; ?></b> 
      
        
      <form action="ftyhiupaiys" method="post" autocomplete="off">  
     
          <div class="input-group"> 
        <input type="text" id="fname" name="email"  placeholder=" Email Address.."  required  class="input--style-2" />
         <div class="input-group-addon ">
       
        <span class="fa fa-fw fa-eye field-icon  input-icon js-btn-calendar hidden"></span>
      </div>     
		  </div>
         <div class="p-t-30">
          <button type="submit" class="btn btn--radius btn--green btn-lg" name="forgotPass"  >Submit</button>
		  </div>
     
    
          
          
     
          
         
      </form>
		</div>
		   </div>
        </div>
        </div>
</div>
       
        
          
 <?php include 'includes/footer.php'?>