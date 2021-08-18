<?php
include ('./database_connection.php');

 $userNamne=$_POST['userName'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $phoneNumber=$_POST['phoneNumber'];
 $gender=$_POST['gender'];
 $userType=$_POST['userTypee'];


 

 $stmt =$conn->prepare("insert into registration(userName,password,email,phoneNumber,gender,userTypee) valuse(?,?,?,?,?,?)");
     $stmt->bind_param($userNamne, $password, $email, $phoneNumbe, $gender, $userType);

     $stmt->execute();
     echo "registration successful";
     $stmt->close();
     $conn ->close();

?>