

<?php
include 'core/confi.php';

$errorMSG = "";
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$message = mysqli_real_escape_string($conn, $_POST['message']);
 $number = "/^[0-9]+$/"; 
/* EMAIL */
if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)){
    $errorMSG .= "<p class='text-danger'>Please fill all fileds</p>";
} else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errorMSG .= "<p class='text-danger'>Invalid email format</p>";
	
}else if(!(strlen($phone) == 11)) {    
      
    $errorMSG .= "<p class='text-danger'>Mobile Number is incomplete</p>"; 

}else if(!preg_match($number,$phone)){
       
    $errorMSG .= "<p class='text-danger'>Invalid Mobile Number</p>";
  
}else{ 
	   
   $sql = "INSERT INTO user_message (id, name,email, phone, subject, message, date_added)VALUES (NULL, '$name' ,'$email', '$phone', '$subject', '$message', CURRENT_TIMESTAMP)";
        
        $run_query = mysqli_query($conn, $sql);
        if($run_query){
      $msg = '<p class="text-success">message sent successful</p>';
			echo json_encode(['code'=>200, 'msg'=>$msg]);
	exit;
  
   
        
    }
   }
   
   
 

echo json_encode(['code'=>404, 'msg'=>$errorMSG]);


?>