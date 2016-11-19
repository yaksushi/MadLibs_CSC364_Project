<!-- Check Session -->
<?php include "inc_session.php";?>

<!-- Header -->
<?php
ob_start();
include("inc_header.php");
$buffer=ob_get_contents();
ob_end_clean();

$site = "Mad Libs CSC364 Final Project - "; //Site title
$pageTitle = "Home";  //Specific page title
$title = $site . $pageTitle; //Combine site and page title
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer); //replace title tag with page specific title

echo $buffer;
?>

<body>
	<!-- Menu navbar -->
	<?php include "inc_menu.php";?>
	<!-- Main jumbotron for a home page -->
	<?php include "inc_fpJumbotron.php";?>

	<div class="container">
		<!-- 3 Columns Bottom Content -->
		<?php include "inc_bottomContent.php";?>

		<!-- Footer -->
		<?php include "inc_footer.php";?>
	</div>
	<!-- /container -->

	<!-- Footer -->
	<?php include "inc_footerScripts.php";?>

</body>

</html>
