<!-- Check Session -->
<?php include "inc_session.php";?>

<!-- Header -->
<?php
ob_start();
include("inc_header.php");
$buffer=ob_get_contents();
ob_end_clean();

$site = "Mad Libs CSC364 Final Project - "; //Site title
$pageTitle = "The Walmart Difference";  //Specific page title
$title = $site . $pageTitle; //Combine site and page title
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer); //replace title tag with page specific title

echo $buffer;
?>

<body onload="hideOutput()">
	<!-- Menu navbar -->
	<?php include "inc_menu.php";?>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
				<div id="inputSection">
						<h2 id="madlib1" name="madlibTitle">The Walmart Difference</h2>
						<table id="inputTable">
								<tr>
										<td>
												<P>Verb: <input type="text" required id="varA"></p>
												<P>Adjective: <input type="text" required id="varB"></p>
												<P>Product (plural): <input type="text" required id="varC"></p>
												<P>Adjective: <input type="text" required id="varD"></p>
												<P>Verb enging in "ing": <input type="text" required id="varE"></p>
												<P>Verb: <input type="text" required id="varF"></p>
												<P>Number: <input type="number" id="varG" value="15"></p>
												<P>Adjective: <input type="text" required id="varH"></p>
										</td>
										<td>
												<P>Product (plural): <input type="text" required id="varI"></p>
												<P>Product (plural): <input type="text" required id="varJ"></p>
												<P>Product (plural): <input type="text" required id="varK"></p>
												<P>Relative (plural): <input type="text" required id="varL"></p>
												<P>Adjective: <input type="text" required id="varM"></p>
												<P>Adjective: <input type="text" required id="varN"></p>
												<P>Product (plural): <input type="text" required id="varO"></p>
												<P>A speed: <input type="text" required id="varP"></p>
												<!-- below input types hidden so variables are present -->
												<input type="hidden" required id="varQ">
												<input type="hidden" required id="varR">
												<input type="hidden" required id="varS">
												<input type="hidden" required id="varT">
												<input type="hidden" required id="varU">
												<input type="hidden" required id="varV">
												<input type="hidden" required id="varW">
												<input type="hidden" required id="varX">
												<input type="hidden" required id="varY">
										</td>
								</tr>
						</table>
						<input type="button" id="submit" value="Submit Words" onclick="dumpMadlib()">
						<input type="button" id="clear" value="Clear Words" onclick="clearText()">
				</div>
				<div id="outputSection">
						<h1>The Walmart Difference</h1>
						<img src="assets/img/walmart.png" class="img-responsive" alt="Walmart" id="mainImage">
						<p id="madlib"></p>
						<input type="button" id="reset" value="Reset Madlib" onclick="resetMadlib()">
				</div>
		</div>
  </div>

	<div class="container">
		<!-- 3 Columns Bottom Content -->
		<?php include "inc_bottomContent.php";?>

		<!-- Footer -->
		<?php include "inc_footer.php";?>
	</div>
	<!-- /container -->

	<!-- Footer Scripts-->
	<?php include "inc_footerScripts.php";?>
</body>

</html>
