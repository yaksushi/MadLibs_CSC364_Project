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
  // validate words in all text boxes
  // bug will still allow whitespace
  allTextInput = document.querySelectorAll('input[type="text"]');
  for (var i = 0; i < allTextInput.length; ++i) {
    if (allTextInput[i].value.trim().match(/^[ A-Za-z' ]*$/) == null) {
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
  var z = "Come " + (a) + " at WALMART, where you`ll receive " +
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
  document.getElementById("madlib").innerHTML = z;
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
