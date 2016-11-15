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

    <title>Mad Libs CSC364 Final Project - Michael Bay</title>
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
						<img src="assets/img/bay.png" class="img-responsive" align="right" alt="Michael Bay" width="300" height="242">
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
