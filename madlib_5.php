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

    <title>Mad Libs CSC364 Final Project - Ice Cube</title>
    <!-- image sources: http://www.madlibs.com/books/
                        http://www.adamzyglis.com/
                        http://www.original-political-cartoon.com/cartoon-gallery/artists/mahony-francis-william-1905-1982/
    -->
		<!-- Header Scripts -->
	  <?php include "inc_headerScripts.php";?>

</head>

<body onload="hideOutput()">
	<!-- Menu navbar -->
	<?php include "inc_menu.php";?>

	<!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
      <div class="container">
          <div id="inputSection">
              <h2 id="madlib5" name="madlibTitle">Ice Cube</h2>
              <table id="inputTable">
                  <tr>
                      <td>
                          <P>Location: <input type="text" required id="varA"></p>
                          <P>Famous Person: <input type="text" required id="varB"></p>
                          <P>Adjective: <input type="text" required id="varC"></p>
                          <P>Sound: <input type="text" required id="varD"></p>
                          <P>Animal: <input type="text" required id="varE"></p>
                          <P>Animal: <input type="text" required id="varF"></p>
                          <P>Animal: <input type="text" id="varG"></p>
                          <P>Verb: <input type="text" required id="varH"></p>
                          <P>Type of Person: <input type="text" required id="varI"></p>
                          <P>Noun: <input type="text" required id="varJ"></p>
                          <P>Verb: <input type="text" required id="varK"></p>
                          <P>Store: <input type="text" required id="varL"></p>
                          <P>Race of People: <input type="text" required id="varM"></p>
                      </td>
                      <td>
                          <P>Alright/Terrible: <input type="text" required id="varN"></p>
                          <P>Famous Woman: <input type="text" required id="varO"></p>
                          <P>Verb: <input type="text" required id="varP"></p>
                          <P>Group of People: <input type="text" required id="varQ"></p>
                          <P>Place: <input type="text" required id="varR"></p>
                          <P>Game: <input type="text" required id="varS"></p>
                          <P>Setting: <input type="text" required id="varT"></p>
                          <P>Verb ending in ed: <input type="text" required id="varU"></p>
                          <P>Accomplishment: <input type="text" required id="varV"></p>
                          <P>Plural Noun: <input type="text" required id="varW"></p>
                          <P>Unsuccessful Athlete: <input type="text" required id="varX"></p>
                          <P>Adjective: <input type="text" required id="varY"></p>
                      </td>
                  </tr>
              </table>
              <input type="button" id="submit" value="Submit Words" onclick="dumpMadlib()">
              <input type="button" id="clear" value="Clear Words" onclick="clearText()">
          </div>
          <div id="outputSection">
              <h1>Ice Cube</h1>
              <img src="assets/img/icecube.png" class="img-responsive" align="right" alt="Ice Cube" width="300" height="242">
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
