<!-- Check Session -->
<?php include "inc_session.php";?>

<!-- Header -->
<?php
ob_start();
include("inc_header.php");
$buffer=ob_get_contents();
ob_end_clean();

$site = "Mad Libs CSC364 Final Project - "; //Site title
$pageTitle = "The Farmer";  //Specific page title
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
            <h2 id="madlib2" name="madlibTitle">The Farmer</h2>
            <table id="inputTable">
                <tr>
                    <td>
                        <P>Plant (plural): <input type="text" required id="varA"></p>
                        <P>Verb (ending in ing): <input type="text" required id="varB"></p>
                        <P>Noun (plural): <input type="text" required id="varC"></p>
                        <P>Adjective: <input type="text" required id="varD"></p>
                        <P>Plant (plural): <input type="text" required id="varE"></p>
                        <P>Adjective: <input type="text" required id="varF"></p>
                    </td>
                    <td>
                        <P>Liquid: <input type="text" required id="varG"></p>
                        <P>Plant (plural): <input type="text" required id="varH"></p>
                        <P>A place: <input type="text" required id="varI"></p>
                        <P>Animal (plural): <input type="text" required id="varJ"></p>
                        <P>Noun (plural): <input type="text" required id="varK"></p>
                        <P>Adjective: <input type="text" required id="varL"></p>
                        <!-- below input types hidden so variables are present -->
                        <input type="hidden" required id="varM">
                        <input type="hidden" required id="varN">
                        <input type="hidden" required id="varO">
                        <input type="hidden" required id="varP">
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
            <h1>The Farmer</h1>
            <img src="assets/img/farmer.png" class="img-responsive" alt="The Farmer" id="mainImage">
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
