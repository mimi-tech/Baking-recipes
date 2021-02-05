
<?php

$db = mysqli_connect('localhost','root','root','yummy');
if(mysqli_connect_errno()){
    echo 'database connection failed with the following errors: '.mysqli_connect_error();
    die();
}



