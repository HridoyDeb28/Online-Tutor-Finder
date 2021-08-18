
<?php
session_start();
$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

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
			<li class="nav-item"><a href="#" class="nav-link "> NOTIFICATION </a></li>
			<li class="nav-item"><a href="profile.php" class="nav-link "> PROFILE </a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link "> LOGOUT </a></li>




		</ul>


	</nav>

    <?php
	include 'database_connection.php';
		$q = "SELECT * FROM `registration` WHERE `id` = $id";
		$query = mysqli_query($conn,$q);

		while($res = mysqli_fetch_array($query)){
	?>


	 <section class="Profile_holder1 d-flex justify-content-center align-items-center">
		 <form class="Profile_form p-5" action="database_connection.php" method="POST">  

    <!-- <form style="width: 380px" action="database_connection.php" method="POST" class="inner" enctype="multipart/form-data"> -->
	
                <h1 style="margin-bottom: 10px;"><label for="">User Profile</label></h1>
          
    <table>
        <tr>
            <th >
                    <?php
                        if(isset($res['image'])){
                    ?>
                    <img align="center" style="border-radius: 50%;" src="<?php echo $res['image']; ?>" width="150px" height="150px" align="center" id="ProfileDisplay">                 
                    <?php
                        }
                        else{
                    ?>
                    <img align="right" style="border-radius: 50%;" src="placeholder.png" width="150px" height="150px" align="center" id="ProfileDisplay">
                    <?php
                        }
                    ?>
                </th>
        </tr>
    </table>
    <table> 
        <tr>
            <th align="right">
                <input type="file" name="photo" id="">
            </th>
        </tr>
        <tr>
            <th>
            <input type="text" name="txtName" id="Name" value="<?php echo $res['name']; ?>">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" name="txtEmail" id="txtEmail" value="<?php echo $res['email']; ?>">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" name="txtPhoneNo" id="phone Number" value="<?php echo $res['contact']; ?>" >
            </th>
        </tr>
        <tr>
            <th align="left">
                <label for="">Gender : &nbsp;</label>
                <?php
                    if($res['gender'] == "male"){
                ?>
                <input type="radio" name="gender" id="" value="male" checked>
                <label for="">Male</label>
                <input type="radio" name="gender" id="" value="female">
                <label for="">Female</label>
                <?php
                    }
                    else{
                ?>
                <input type="radio" name="gender" id="" value="male" >
                <label for="">Male</label>
                <input type="radio" name="gender" id="" value="female" checked>
                <label for="">Female</label>
                <?php
                    }
                ?>
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" name="txtAddress" id="address" placeholder="Enter your address" value="<?php echo $res['address']; ?>">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" name="txtInstitution" id="institution" placeholder="Enter your institution" value="<?php echo $res['institution']; ?>">
            </th>
        </tr>
        <tr>            
            <th align="center"><button type="submit" name="submit">Update</button></th>
        </tr>
        <tr>
            <th> <span > <?php if(isset($_SESSION['result'])) { echo $_SESSION['result']; } unset($_SESSION['result']); ?></span> </th>
        </tr>
     <!-- </> 
	</form> -->
    <?php 
        }
    ?>
            
	<script src="js/script.js"> </script> 

        
			
		</form>
	</section>




	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>