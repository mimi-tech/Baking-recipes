<?php
//send_mail.php
include '../core/confi.php';
if(isset($_POST['email_data']))
{

	
	$sql = "SELECT * FROM contact";
	$popularItems = array();
    
	$re = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_assoc($re)){
			

    $Pitem = array();
    $Pitem = array(
                        'email' => $row['email']
                       
                        );
                        $popularItems[] = $Pitem;
		}
 
	$output = '';
	
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
$mail->setFrom('testmetesting45@gmail.com', 'Chilee project');
 foreach($popularItems as $Pitem){     
$mail->addAddress($Pitem['email'], 'mimi');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('testmetesting45@gmail.com');
	$mail->AddEmbeddedImage('logo.PNG', 'logoimg', 'logo.PNG');

	$body = '<h3 style="border:solid 4px #d5daeb; width:80%;"><center> <b style="font-size:30px;">Welcome to <em style="color: green;">Nummy Foods</em>!</b>  <br /> <img src=\'cid:logoimg\' /></center> Thank you for your patronge . Your skill acquisation is our priority. <br /><br />Please Click On the link to verify your email <br /> <br /> <br /> <br /></h3>';
	
$mail->Subject = 'NummyFoods Subscription';


$mail->Body    =  $body;

$mail->AltBody = strip_tags($body);

		$result = $mail->Send();						

		if($result["code"] == '400')
		{
			$output .= html_entity_decode($result['full_error']);
		}
 }
	
	if($output == '')
	{
		echo 'ok';
	}
	else
	{
		echo $output;
	}
}

?>
