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

 //Get Heroku ClearDB connection information

// mysql://baff4a58b0fc48:a613abb0@us-cdbr-east-05.cleardb.net/heroku_09b6ad19617c363?reconnect=true

//  $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
//  $cleardb_server   = $cleardb_url["host"];
//  $cleardb_username = $cleardb_url["user"];
//  $cleardb_password = $cleardb_url["pass"];
//  $cleardb_db       = substr($cleardb_url["path"],1);
 
 
//  $active_group = 'default';
//  $query_builder = TRUE;
 
//  $db['default'] = array(
//      'dsn'    => '',
//      'hostname' => $cleardb_server,
//      'username' => $cleardb_username,
//      'password' => $cleardb_password,
//      'database' => $cleardb_db,
//      'dbdriver' => 'mysqli',
//      'dbprefix' => '',
//      'pconnect' => FALSE,
//      'db_debug' => (ENVIRONMENT !== 'production'),
//      'cache_on' => FALSE,
//      'cachedir' => '',
//      'char_set' => 'utf8',
//      'dbcollat' => 'utf8_general_ci',
//      'swap_pre' => '',
//      'encrypt' => FALSE,
//      'compress' => FALSE,
//      'stricton' => FALSE,
//      'failover' => array(),
//      'save_queries' => TRUE
 
//  )

?>
