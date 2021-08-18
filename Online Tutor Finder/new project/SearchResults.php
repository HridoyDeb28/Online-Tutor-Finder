<?php
if (isset($_POST['submit'])) {
	$subject = $_POST['subject'];
	$medium = $_POST['medium'];
	$class = $_POST['class'];
	$salRangeLow = $_POST['salRangeLow'];
	$salRangeHigh = $_POST['salRangeHigh'];
	$location = $_POST['location'];
	$institution = $_POST['institution'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Results </title>
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
			<li class="nav-item"><a href="#" class="nav-link "> NOTIFICATION </a></li>
			<li class="nav-item"><a href="profile.php" class="nav-link "> PROFILE </a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link "> LOGOUT </a></li>




		</ul>


	</nav>

<!-- </body> -->

<?php
include 'control/database_connection.php';
$q = "SELECT * FROM `posts` WHERE `subject` LIKE '%$subject%' and `medium` like '%$medium%' and `class` like '%$class%' and `location` like '%$location%' and `institution` like '%$institution%' and `lowSal` >= $salRangeLow and `highSal` <= $salRangeHigh";
$query = mysqli_query($conn, $q);

while ($res = mysqli_fetch_array($query)) {
?>
	<section class="Search_holder2 d-flex justify-content-center align-items-center">
		<form class="newsfeed-form p-5" action="#" newsfeed-form method="POST">

			<!-- <form  action="#" method="POST" class="newsfeed-form"> -->
			<table>
				<tr>
					<th align="left" style="margin: 10px;font-size:150%"><label for="">Student</label>

					</th>
				</tr>
				<tr>
			</table>
			</br>
			<table>
				<tr>
					<th align="left"> Subject </th>
					<th align="left">: &nbsp; &nbsp</th>
					<th align="left"><?php echo $res['subject'] ?></th>
				</tr>
				<tr>
					<th align="left"> Class

					</th>
					<th align="left">: &nbsp; &nbsp;</th>
					<th align="left"> <?php echo $res['class'] ?> </th>
				</tr>
				<tr>
					<th align="left"> Medium
					</th>
					<th align="left">: &nbsp; &nbsp;</th>
					<th align="left"><?php echo $res['medium'] ?></th>
				</tr>
				<tr>
					<th align="left"> Salary

					</th>
					<th align="left">: &nbsp; &nbsp;</th>
					<th align="left"><?php echo $res['lowSal'] . " To " . $res['highSal']; ?></th>
				</tr>
				<tr>
					<th align="left"> Location
					</th>
					<th align="left">: &nbsp; &nbsp;</th>
					<th align="left"><?php echo $res['location'] ?></th>
				</tr>
				<tr>
					<th align="left"> Preferred Institution &nbsp;
					</th>
					<th align="left">: &nbsp; &nbsp;</th>
					<th align="left"><?php echo $res['institution'] ?></th>
				</tr>
				<tr>
					<th align="left"> Deadline
					</th>
					<th align="left">: &nbsp; &nbsp;</th>
					<th align="left"><?php echo $res['deadline'] ?></th>
				</tr>
			</table>
			</br>
			<table>

				<tr>
					<th align="left"><button> <a style="color:Black" href="control/apply.php?id=<?php echo $res['id']; ?>"> Apply Now </a> </button></th>
				</tr>

			</table>
		</form>
	</section>


<?php
}
?>

<script type="text/javascript" src="login.js"> </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>