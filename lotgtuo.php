<?php
session_start();
unset($_SESSION["uids"]);


header("location:index.php?success=1");
?>