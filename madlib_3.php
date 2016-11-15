<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="Mad Libs CSC364" content="">
    <meta name="Mark Watanabe" content="">
    <link rel="icon" href="assets/favicon.ico">

    <title>Mad Libs CSC364 Final Project - Light My Fire</title>
    <!-- image sources: http://www.madlibs.com/books/
                        http://www.adamzyglis.com/
                        http://www.original-political-cartoon.com/cartoon-gallery/artists/mahony-francis-william-1905-1982/
    -->
		<!-- Header Scripts -->
	  <?php include "_headerScripts.php";?>

</head>

<body onload="hideOutput()">
	<!-- Menu navbar -->
	<?php include "_menu.php";?>

	<!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
		<div class="container">
				<div id="inputSection">
						<h2 id="madlib3" name="madlibTitle">Light My Fire</h2>
						<table id="inputTable">
								<tr>
										<td>
												<P>Part of the body (plural): <input type="text" required id="varA"></p>
												<P>Adjective: <input type="text" required id="varB"></p>
												<P>Adjective: <input type="text" required id="varC"></p>
												<P>Adjective: <input type="text" required id="varD"></p>
												<P>A place: <input type="text" required id="varE"></p>
												<P>Animal: <input type="text" required id="varF"></p>
												<P>Noun: <input type="text" required id="varG"></p>
												<P>Adjective: <input type="text" required id="varH"></p>
										</td>
										<td>
												<P>Part of the body: <input type="text" required id="varI"></p>
												<P>Adjective: <input type="text" required id="varJ"></p>
												<P>Adverb: <input type="text" required id="varK"></p>
												<P>Exclamation: <input type="text" required id="varL"></p>
												<P>Adjective: <input type="text" required id="varM"></p>
												<P>Adverb: <input type="text" required id="varN"></p>
												<P>Person in room: <input type="text" required id="varO"></p>
												<P>Noun: <input type="text" required id="varP"></p>
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
						<h1>Light My Fire</h1>
						<img src="assets/img/caveman.png" class="img-responsive" align="right" alt="Light My Fire" width="300" height="242">
						<p id="madlib"></p>
						<input type="button" id="reset" value="Reset Madlib" onclick="resetMadlib()">
				</div>
		</div>
	</div>

	<div class="container">
		<!-- 3 Columns Bottom Content -->
		<?php include "_bottomContent.php";?>

		<!-- Footer -->
		<?php include "_footer.php";?>
	</div>
	<!-- /container -->

	<!-- Footer -->
	<?php include "_footerScripts.php";?>
</body>

</html>
