<?php
session_start();
include_once ('./database_connection.php');

if(isset($_POST['submit']))
{
  $userNamne=$_POST['username'];
  $password=$_POST['password'];

  $q = "SELECT * FROM `registration` WHERE email='$userNamne' and password='$password'";

  $query = mysqli_query($conn, $q);

  if($query->num_rows > 0){
    $_SESSION["email"] = $userNamne;
    $q = "SELECT `id`, `status` FROM `registration` WHERE `email` = '$userNamne'";
    $query = mysqli_query($conn,$q);
    while($res = mysqli_fetch_array($query)){
        $_SESSION['id'] = $res['id'];
        $_SESSION['status'] = $res['status'];
        $_SESSION['email'] = $userNamne;
    }

    header("location: ../NewsFeed.php");
  }
  else{
      echo "Invalid email or password";
      header("location: ../login.php");
  }

}
if(empty($_POST["checkbox"]))
    {
    setcookie("username","");
    setcookie("password","");
    }
    else
    {
        setcookie ("username",$_POST["username"],time()+ 100);
        setcookie ("password",$_POST["password"],time()+ 100);
    } 


?>