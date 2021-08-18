<?php
session_start();
?>

<?php
      if (!isset($_SESSION['email']) ) { 

    
        header("Location: login.php");
        exit(); 
      }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>News Feed</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

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

	<!-- <input type="text" class="Search_holder" id="livesearch" type="text" name="username" placeholder="Username"> -->

	<?php
	include 'control/database_connection.php';
		$q = "SELECT * FROM `posts` ORDER BY `id` DESC";
		$query = mysqli_query($conn,$q);

		while($res = mysqli_fetch_array($query)){
			if($_SESSION['status'] == $res['status'] && $_SESSION['status']!=3 ){
				continue;
			}
			elseif($_SESSION['status']==2 && $res['status']==0){
				continue;
			}
			else{
			
	?>
  <!-- <input type="text" class="Search_holder" id="livesearch" type="text" name="username" placeholder="Username"> -->
	<section class="Search_holder d-flex justify-content-center align-items-center">
	<!-- <input type="text" class="Search_holder" id="livesearch" type="text" name="username" placeholder="Username"> -->
		<form class="Search_form p-3" action="#" method="POST">

		<!-- <input type="text" class="Search_holder" id="livesearch" type="text" name="username" placeholder="Username"> -->
		<!-- <table id ="newsfeed"> -->
			<?php
				if($res['status']==0){
			?>
			<tr>
				<th align="left"> <h3>Student</h3> </th>
			</tr>
			<?php
				}
			?>
			<?php
				if($res['status']==1){
			?>
			<tr>
				<th align="left"> <h3>Teacher</h3> </th>
			</tr>

			<?php
				}
			?>

<?php
				if($res['status']==2){
			?>
			<tr>
				<th align="left"> <h3>Parent</h3> </th>
			</tr>

			<?php
				}
			?>


			<?php
				if($res['status']==3){
			?>
			<tr>
				<th align="left"> <h1>Admin Dashboard</h1> </th>
			</tr>

			<?php
				}
			?>
			<?php
				if($res['status']==3){
			?>
			<tr>
				<th align="left"> <h3><?php echo $res['userType'] ?></h3> </th>
			</tr>

			<?php
				}
			?>
			
			<tr>
				<th align="left"> Name </th>
				<th align="left">:&nbsp;</th>
				<th align="left"><?php echo $res['name'] ?></th>
			</tr>
			<br>

			<tr>
				<th align="left"> Subject </th>
				<th align="left">:&nbsp;</th>
				<th align="left"><?php echo $res['subject'] ?></th>
			</tr>
			<br>

			<tr>
				<th align="left"> Class</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"> <?php echo $res['class'] ?> </th>
			</tr>
			<br>

			<tr>
				<th align="left"> Medium</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"> <?php echo $res['medium'] ?> </th>
			</tr>
			<br>

			<tr>
				<th align="left">Salary</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"><?php echo $res['lowSal'] ." To ". $res['highSal']; ?> </th>
			</tr>
			<br>

			<tr>
				<th align="left">Location</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"> <?php echo $res['location'] ?> </th>
			</tr>
			<br>


			<tr>
				<th align="left"> Preferred Institution</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"> <?php echo $res['institution'] ?> </th>
			</tr>
			<br>


			<tr>
				<th align="left"> Deadline</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"> <?php echo $res['deadline'] ?> </th>
			</tr>
			<br>


			<th align="left"><button> <a href="control/apply.php?id=<?php echo $res['id']; ?>"> Apply Now </a> </button></th>
			<!-- </table> -->

		</form>

	</section>

	<?php
			}
		}
	?>

<!-- <script>
        $(document).ready(function(){
            $("#livesearch").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#newsfeed th").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script> -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>