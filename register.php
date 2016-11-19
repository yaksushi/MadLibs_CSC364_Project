<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);

	$uname = $connection->real_escape_string($uname);
	$email = $connection->real_escape_string($email);
	$upass = $connection->real_escape_string($upass);

	$hashed_password = md5($upass, PASSWORD_DEFAULT);

	$check_email = $connection->query("SELECT email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;

	if ($count==0) {
		$query = "INSERT INTO tbl_users(username,email,password) VALUES('$uname','$email','$hashed_password')";
		if ($connection->query($query)) {
			$msg = "<div class='alert alert-success'>
			<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Congragulation you have successfully registered!<br />
			Please return to the <a href='index.php'>Login Page to sign in.</a></div>";
		}else {
			$msg = "<div class='alert alert-danger'>
			<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !</div>";
		}
	} else {
		$msg = "<div class='alert alert-danger'>
		<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !</div>";
	}
	$connection->close();
}
?>

<!-- Header -->
<?php
ob_start();
include("inc_header.php");
$buffer=ob_get_contents();
ob_end_clean();

$site = "Mad Libs CSC364 Final Project - "; //Site title
$pageTitle = "Register";  //Specific page title
$title = $site . $pageTitle; //Combine site and page title
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer); //replace title tag with page specific title

echo $buffer;
?>

<body>
	<!-- Menu navbar -->
	<?php include "inc_menu_placeholder.php";?>
	<div class="jumbotron">
		<div class="container">
			<h1>Mad Libs</h1>
			<img src="assets/img/madlib_main.png" class="img-responsive" alt="Mad Lib main image"  id="mainImage">
			<p>The world’s greatest word game is back with an all-new look! Fill in the blanks and be the funniest person in the room!</p>
	    <p>Originally a phrasal template word game where one player prompts others for a list of words to substitute for blanks in a story, before reading the – often comical or nonsensical – story aloud. The game was frequently played as a party game
	      or as a pastime.</p>
	    <p>The game was invented in the United States, and more than 110 million copies of Mad Libs books have been sold since the series was first published in 1958.</p>
	    <!-- <p><a class="btn btn-primary btn-lg" href="history.php" role="button">Learn more &raquo;</a></p> -->
			<div class="container">
				<form class="form-signin" method="post" id="register-form">
					<h2 class="form-signin-heading">Register</h2><hr />
					<?php
						if (isset($msg)) {
							echo $msg;
						}
						?>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" name="username" required  />
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email address" name="email" required  />
						<span id="check-e"></span>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" required  />
					</div>
					<hr />
					<div class="form-group">
						<button type="submit" class="btn btn-success"name="btn-signup">
							<span class="glyphicon glyphicon-user"></span> &nbsp; Register
						</button>
						<a href="index.php" class="btn btn-primary" id="loginButton">
							<span class="glyphicon glyphicon-log-in" ></span> &nbsp; Sign In To An Existing Account
						</a>
					</div>
				</form>
			</div>
  	</div>
	</div>
</body>
</html>
