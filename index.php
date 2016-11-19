<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
	echo $userRow['username'];
	exit;
}

if (isset($_POST['btn-login'])) {

	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);

	$email = $connection->real_escape_string($email);
	$password = $connection->real_escape_string($password);

	$query = $connection->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");
	$row=$query->fetch_array();

	$count = $query->num_rows; // if email/password are correct returns must be 1 row

	if (md5($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: home.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$connection->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Info -->
	<?php include "inc_meta.php";?>
	<title>Mad Libs CSC364 Final Project - Login</title>
	<!-- Header Scripts -->
	<?php include "inc_headerScripts.php";?>

</head>
<body>
	<!-- Menu navbar -->
	<?php include "inc_menu_placeholder.php";?>
	<div class="jumbotron">
	  <div class="container">
			<h1>Mad Libs</h1>
			<img src="assets/img/madlib_main.png" class="img-responsive" alt="Mad Lib main image" id="mainImage">
			<p>The world’s greatest word game is back with an all-new look! Fill in the blanks and be the funniest person in the room!</p>
	    <p>Originally a phrasal template word game where one player prompts others for a list of words to substitute for blanks in a story, before reading the – often comical or nonsensical – story aloud. The game was frequently played as a party game
	      or as a pastime.</p>
	    <p>The game was invented in the United States, and more than 110 million copies of Mad Libs books have been sold since the series was first published in 1958.</p>
	    <!-- <p><a class="btn btn-primary btn-lg" href="history.php" role="button">Learn more &raquo;</a></p> -->
			<div class="container">
				<form class="form-signin" method="post" id="login-form">
					<h2 class="form-signin-heading">Login</h2><hr />
					<?php
					if(isset($msg)){
						echo $msg;
					}
					?>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email address" name="email" required />
						<span id="check-e"></span>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" required />
					</div>
					<hr />
					<p>To access all of our great Mad Libs we ask that you register for a FREE account.
							Once registered you will have full access to the website.</p>
					<div class="form-group">
						<button type="submit" class="btn btn-success" name="btn-login" id="btn-login">
							<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In</button>
							<a href="register.php" class="btn btn-primary" >
								<span class="glyphicon glyphicon-user"></span> &nbsp; Register Here
							</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
