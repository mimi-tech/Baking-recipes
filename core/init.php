
<?php

// $db = mysqli_connect('localhost','root','root','yummy');
// if(mysqli_connect_errno()){
//     echo 'database connection failed with the following errors: '.mysqli_connect_error();
//     die();
// }


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


