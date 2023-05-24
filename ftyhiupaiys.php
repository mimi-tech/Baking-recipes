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

<!DOCTYPE>
<html lang="en">
  <head>
   <meta charset="UTF-8">
	<title> Free Best Baking Recipes of all time</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		
		<link rel="shortcut icon" href="img/fav.png">
		
		<meta name="author" content="yummyhomes Nigeria">
		
		<meta name="description" content="Over 300 Free best baking recipes of all time">
		<meta name="robots" content="index, follow">
		
		<meta name="keywords" content="recipes,cake,pudding,cheesecake,quick bread,muffins,cupcakes,healthy desserts,french desserts,pies,tarts, online baking,free baking,baking tutorial,owerri,imo state,Nigeria,ingredients,baking measurement conversion, free, Best, Baking, of all time">
		
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <script src="../bootstrap/js/bootstrap.min.js"></script>
     
       <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        
  </head>
  <body oncontextmenu="return false">
  <div class="se-pre-con"></div>

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
					<h2 class="title">Reset Password dhd</h2>
     
     
      
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
       
        
   		
<script>
			
            $(document).ready(function(){
                LoadData(0);
            });
        function LoadData(pagenum){
            $.post('testing?p='+pagenum, function(reponse){
                $('#results').html(reponse);
            });
        }
        </script>

  </body>
</html>
                