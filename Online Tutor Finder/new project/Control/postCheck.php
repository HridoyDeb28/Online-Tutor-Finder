<?php
session_start();
include ('./database_connection.php');
if(isset($_POST['submit']))
{
  
	$medium = $_POST['medium'];
	$class = $_POST['class'];
	$location = $_POST['location'];
	$salRangeLow = $_POST['salRangeLow'];
	$salRangeHigh = $_POST['salRangeHigh'];
	$prefIns = $_POST['prefIns'];
	$prefTime = $_POST['prefTime'];
	$deadLine = $_POST['deadLine'];
	$prefSubject = "";
    $userid = $_SESSION['id'];
    $status = "";
    $name = "";
	
    if(!empty($_POST['prefSub'])) {
        foreach($_POST['prefSub'] as $check) {
            $prefSubject .= $check . ", "; 
        }
    }

    $q = "SELECT * FROM `registration` WHERE `id`=$userid";
	$query = mysqli_query($conn,$q);

	while($res = mysqli_fetch_array($query)){
        $name = $res['userName'];
        $status = $res['status'];
    }

	$q = "INSERT INTO `posts`(`medium`, `subject`, `class`, `location`, `lowSal`, `highSal`, `institution`, `preftime`, `deadline`, `userIdFk`, `name`, `status`) VALUES ('$medium','$prefSubject','$class','$location','$salRangeLow','$salRangeHigh','$prefIns','$prefTime','$deadLine','$userid','$name','$status')";
    
    $query = mysqli_query($conn,$q);
    if($query){
        $_SESSION['result'] = 1;
    }
    else{
        $_SESSION['result'] = 0;
    }
    

    header('Location: ../post.php');
}

// $stmt =$conn->prepare("insert into registration(userName,password,email,phoneNumber,gender,userTypee) valuse(?,?,?,?,?,?)");
//      $stmt->bind_param($userNamne, $password, $email, $phoneNumbe, $gender, $userType);

//      $stmt->execute();
//      echo "registration successful";
//      $stmt->close();
//      $conn ->close();
?>