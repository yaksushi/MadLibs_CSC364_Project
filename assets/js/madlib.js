// JavaScript source code
// Filename:  madlib.js
// Author:    Mark Watanabe
// Date:      10/20/2016
// Original Source: ex05_nochange.js
// Sources: http://www.javascriptkit.com/javatutors/round.shtml
// http://stackoverflow.com/questions/40167451/how-to-validate-multiple-text-boxes-to-make-sure-they-have-letters-only/40167685#40167685

document.getElementById('fm').addEventListener('click',submit_form)

// hides madlib output section
function hideOutput() {
    document.getElementById("outputSection").style.visibility = "hidden";
}

// validates combines text input and adds words to the madlib paragraph
function dumpMadlib() {
  // make sure there are no empty values
  allTextInput = document.querySelectorAll('input[type="text"]');
  for (var i = 0; i < allTextInput.length; ++i) {
    if (allTextInput[i].value.trim().match(/\S/) == null) {
      alert("You need to enter a word in each text box");
      return
    }
  }
  // style variables
  var fSpan = "<span id=addedWords>";
  var bSpan = "</span>";
  // word variables
  var a = fSpan + document.getElementById("varA").value + bSpan;
  var b = fSpan + document.getElementById("varB").value + bSpan;
  var c = fSpan + document.getElementById("varC").value + bSpan;
  var d = fSpan + document.getElementById("varD").value + bSpan;
  var e = fSpan + document.getElementById("varE").value + bSpan;
  var f = fSpan + document.getElementById("varF").value + bSpan;
  var g = fSpan + document.getElementById("varG").value + bSpan;
  var h = fSpan + document.getElementById("varH").value + bSpan;
  var i = fSpan + document.getElementById("varI").value + bSpan;
  var j = fSpan + document.getElementById("varJ").value + bSpan;
  var k = fSpan + document.getElementById("varK").value + bSpan;
  var l = fSpan + document.getElementById("varL").value + bSpan;
  var m = fSpan + document.getElementById("varM").value + bSpan;
  var n = fSpan + document.getElementById("varN").value + bSpan;
  var o = fSpan + document.getElementById("varO").value + bSpan;
  var p = fSpan + document.getElementById("varP").value + bSpan;
  // the massive z variable aka madlib paragraph

  //get id from h2 madlibTitle to determin what version to assemble
  var elements = document.getElementsByName( "madlibTitle" );
  var id = elements[0].getAttribute( "id");

  //paragraph variable for madlib 1
  var x = "Come " + (a) + " at WALMART, where you`ll receive " +
  (b) + " discounts on all of your favorite brand name " +
  (c) + ". Our " + (d) + " and " +
  (e) + " associates are there to " + (f) + " you " +
  (g) + " hours a day. Here you will find " +
  (h) + " prices on the " + (i) + " you need. " +
  (j) + " for the moms, " +
  (k) + " for the kids and all the latest electronics for the " +
  (l) +". So come on down to your " + (m) + " " +
  (n) + " WALMART where the " + (o) + " come " + (p) +".";

  //paragraph variable for madlib 2
  var y = "Farmers work very hard planting wheat and  " + (a)
  + ". They begin by plowing their " + (b) +
  " and if they don’t have a tractor they use " + (c) +
  ". Then they plant " + (d) +
  " seeds and by the next fall they have many acres of " +
  (e) + ". Tomatoes are harder to raise. They grow on " + (f) +
  " bushes and the farmer sprays them with " + (g) +
  " to keep the bugs off. The easiest things to grow are green " +
  (h) + " but the farmer must be very careful to make sure worms don’t get into his "
  + (i) + ". Farmers also raise " + (j) + " and grow onions, cabbages, lettuce, and " +
  (k) + " . But no matter what they grow, farmers really lead a/an " +
  (l) + " life.";

  //paragraph variable for madlib 3
  var z = "Come " + (a) + " Madlib 3 at WALMART, where you`ll receive " +
  (b) + " discounts on all of your favorite brand name " +
  (c) + ". Our " + (d) + " and " +
  (e) + " associates are there to " + (f) + " you " +
  (g) + " hours a day. Here you will find " +
  (h) + " prices on the " + (i) + " you need. " +
  (j) + " for the moms, " +
  (k) + " for the kids and all the latest electronics for the " +
  (l) +". So come on down to your " + (m) + " " +
  (n) + " WALMART where the " + (o) + " come " + (p) +".";

  document.getElementById("inputSection").style.display = "none"; // hide input section
  document.getElementById("outputSection").style.visibility = "visible"; // display output section
  //madlib 1
  if(id=="madlib1"){
    document.getElementById("madlib").innerHTML = x;
  //madlib 2
  }else if(id=="madlib2"){
    document.getElementById("madlib").innerHTML = y;
  //madlib 3
  }else if(id=="madlib3"){
    document.getElementById("madlib").innerHTML = z;
  }else{
    document.getElementById("madlib").innerHTML = "Oppsie there was an error.";
  }
}

// reset page to redo madlib
function resetMadlib() {
  location.reload();
}

// clear all text and numbers
function clearText(){
  var elements = document.getElementsByTagName("input");
  for (var ii=0; ii < elements.length; ii++) {
    if (elements[ii].type == "text" || elements[ii].type == "number") {
      elements[ii].value = "";
    }
  }
}
