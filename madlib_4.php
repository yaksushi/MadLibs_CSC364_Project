<!-- Check Session -->
<?php include "inc_session.php";?>

<!-- Header -->
<?php
ob_start();
include("inc_header.php");
$buffer=ob_get_contents();
ob_end_clean();

$site = "Mad Libs CSC364 Final Project - "; //Site title
$pageTitle = "Michael Bay";  //Specific page title
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
						<h2 id="madlib4" name="madlibTitle">Michael Bay</h2>
						<table id="inputTable">
								<tr>
										<td>
												<P>Man's Name: <input type="text" required id="varA"></p>
												<P>Occupation: <input type="text" required id="varB"></p>
												<P>Noun: <input type="text" required id="varC"></p>
												<P>Noun: <input type="text" required id="varD"></p>
												<P>Noun: <input type="text" required id="varE"></p>
												<P>Shape: <input type="text" required id="varF"></p>
												<P>Man's Name: <input type="text" id="varG"></p>
												<P>Verb: <input type="text" required id="varH"></p>
												<P>Woman's Name: <input type="text" required id="varI"></p>
												<P>Body Part: <input type="text" required id="varJ"></p>
										</td>
										<td>
												<P>Verb: <input type="text" required id="varK"></p>
												<P>Noun: <input type="text" required id="varL"></p>
												<P>Noun: <input type="text" required id="varM"></p>
												<P>Restaurant Name: <input type="text" required id="varN"></p>
												<P>Historic Monument: <input type="text" required id="varO"></p>
												<P>Verb: <input type="text" required id="varP"></p>
												<P>Noun: <input type="text" required id="varQ"></p>
												<P>Verb: <input type="text" required id="varR"></p>
												<P>Noun: <input type="text" required id="varS"></p>
												<P>Adjective: <input type="text" required id="varT"></p>
												<!-- below input types hidden so variables are present -->
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
						<h1>Michael Bay</h1>
						<img src="assets/img/bay.png" class="img-responsive" alt="Michael Bay" id="mainImage">
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

      <!-- Footer Scripts -->
			<?php include "inc_footerScripts.php";?>
		</body>

		</html>
