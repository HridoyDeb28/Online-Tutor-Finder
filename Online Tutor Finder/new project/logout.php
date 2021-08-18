
<?php

session_start();


unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['email']);
unset($_SESSION['result']);
//unset($_SESSION['status']);
session_destroy();   
header("Location: login.php"); 




?>