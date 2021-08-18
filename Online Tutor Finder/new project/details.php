<?php
session_start();
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="SStyle.css">

</head>

<body>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
		<a href="#" class="navbar-brand"> ONLINE TUTOR FINDER </a>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a href="NewsFeed.php" class="nav-link "> NEWS FEED </a></li>
			<li class="nav-item"><a href="Search.php" class="nav-link "> SEARCH </a></li>
			<li class="nav-item"><a href="post.php" class="nav-link "> POST </a></li>
			<li class="nav-item"><a href="notification.php" class="nav-link "> NOTIFICATION </a></li>
			<!-- <li class="nav-item"><a href="profile.php" class="nav-link "> PROFILE </a></li> -->
			<li class="nav-item"><a href="logout.php" class="nav-link "> LOGOUT </a></li>




		</ul>


	</nav>    
       
    
    
    <?php
    include( 'control/database_connection.php');
        $id = $_GET['id'];
		$q = "SELECT * FROM `registration` WHERE `id` = $id";
		$query = mysqli_query($conn,$q);

		while($res = mysqli_fetch_array($query)){
	?>
    <section class="Search_holder1 d-flex justify-content-center align-items-center">
		<form class="Search_form p-5" action="#" method="POST">
        <!-- <form action="" class="inner" style="width: 300px"> -->
            <table>
                <tr>
                    <h1><label for="">User Information</label></h1>
                </tr>
            </table>
            <table>    
                <tr>
                    <th align="left"><Label>Name</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['userName']; ?></Label></th>
                </tr>
                <tr>
                    <th align="left"><Label>Email</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['email']; ?></Label></th>
                </tr>
                <tr>
                    <th align="left"><Label>Phone No</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['phoneNumbe']; ?></Label></th>
                </tr>
                <tr>
                    <th align="left"><Label>User Type</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['userType']; ?></Label></th>
                </tr>
                <tr>
                    <th align="left"><Label>Gender</Label></th>
                    <th align="left"><Label>:&nbsp;&nbsp;</Label></th>
                    <th align="left"><Label><?php echo $res['gender']; ?></Label></th>
                </tr>

            </table>
            

        </form>
        </section>
    
    <?php 
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</body>
</html>