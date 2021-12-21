<?php
// $server = "localhost";
// $username = "root";
// $password = "root";
// $db       = "yummy";

// //create a connection
// $conn = mysqli_connect ( $server, $username, $password, $db );

//     //check connection
    
//     if(!$conn ){
//         die( "connection failed: " . mysqli_connect_error() );
//     }else{ 

//         //echo "Connected successfully";
//     }

$cleared_url  = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server  = $cleardb_url["host"];
$cleardb_username  = $cleardb_url["user"];
$cleardb_password  = $cleardb_url["pass"];

$cleardb_db  = substr($cleardb_url["path"], 1);
 
 
$active_group = 'default';
$query_builder = TRUE;
 
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
if(!$conn ){
    die( "connection failed: " . mysqli_connect_error() );
}else{
    //echo "Connected successfully";
}


?>
