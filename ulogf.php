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
         
          <small><a href="ftyhiupaiys?<?php echo getName($n);  ?>">Forgot password.</a></small>
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
         
           

<?php include 'includes/footer.php'?>