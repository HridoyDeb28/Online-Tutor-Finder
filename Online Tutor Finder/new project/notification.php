<?php
session_start();
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Notification</title>
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
    <section class="Notication_holder1 d-flex justify-content-center align-items-center">
		<form class="Notication_form p-5" action="#" method="POST">

    <!-- <form action="#" class="inner"> -->
        <table>
            <tr>
                <th>
                    <h1 align="left" style="margin: 10px;font-size:150%"><label for="">Notification</label></h1>
                </th>
            </tr>
            <tr>
        </table>

        <table>
            <tr>

                <?php
                include 'control/database_connection.php';
                $id = $_SESSION['id'];
                $q = "SELECT * FROM `notification` WHERE `userId` = $id AND `approve` = 0";
                $query = mysqli_query($conn, $q);
                if ($query->num_rows > 0) {
                    $q = "SELECT notification.nid, registration.id, registration.userName FROM notification JOIN registration on notification.reqId=registration.id WHERE `userId`=$id AND notification.approve = 0";
                    $query = mysqli_query($conn, $q);
                    while ($res = mysqli_fetch_array($query)) {
                ?>
                        <td>
                            <label for=""> <?php echo $res['userName'] ?> has sent you a request </label>
                            </th>

                        </td>
                        <td>
                        <th align="left"><button> <a style="color:black;" href="details.php?id=<?php echo $res['id']; ?>"> Details </a> </button></th>
                        <td>
                        <th align="left"><button> <a style="color:black;" href="control/acceptReq.php?id=<?php echo $res['nid']; ?>"> Accept </a> </button></th>
                        </td>
                        <td>
                        <th align="left"><button> <a style="color:black;" href="control/rejectReq.php?id=<?php echo $res['nid']; ?>"> Reject </a> </button></th>
                        </td>
            </tr>
    <?php
                    }
                }
    ?>

    <br>

        </table>

        <?php
        $id = $_SESSION['id'];
        $q = "SELECT * FROM `notification` WHERE `reqId` = $id AND `approve` != 0";
        $query = mysqli_query($conn, $q);
        if ($query->num_rows > 0) {
            $q = "SELECT notification.nid, notification.approve, registration.id, registration.userName FROM notification JOIN registration on notification.userId=registration.id WHERE `reqId`=$id AND notification.approve != 0";
            $query = mysqli_query($conn, $q);
            while ($res = mysqli_fetch_array($query)) {
                $approve = $res['approve'];
                if ($approve == 1) {
        ?>
                    <td>
                        <label for=""> <?php echo $res['userName'] ?> has accepted your request </label>
                    </td>
                    <th align="left"><button> <a style="color:black;" href="details.php?id=<?php echo $res['id']; ?>"> Details </a> </button></th>
                    <br>


                <?php
                } else if ($approve == 2) {

                ?>
                    <td>
                        <label for=""> <?php echo $res['userName'] ?> has rejected your request </label> <br>
                    </td>
        <?php
                }
            }
        }
        ?>



    </form>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>