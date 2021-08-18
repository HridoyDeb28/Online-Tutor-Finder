<?php
    include './database_connection.php';
    session_start();
    $id = $_GET['id'];
    $reqId = $_SESSION['id'];
    $userId = "";

    $q = "SELECT * FROM `notification` WHERE `postId` = $id";
    $query = mysqli_query($conn,$q);

    if ($query->num_rows > 0) {   
        $_SESSION['apply'] = "duplicate";
        header('Location: ../NewsFeed.php');
    }
    else{
        $q = "SELECT `userIdFk` FROM `posts` WHERE `id` = $id";
		$query = mysqli_query($conn,$q);
		while($res = mysqli_fetch_array($query)){
            $userId = $res['userIdFk'];
        }
    
        $q = "INSERT INTO `notification`(`postId`, `userId`, `reqId`, `approve`) VALUES ($id,$userId,$reqId,0)";
        $query = mysqli_query($conn,$q);
        $_SESSION['apply'] = "success";
        header('Location: ../NewsFeed.php');
    }
    header('Location: ../NewsFeed.php');
?>