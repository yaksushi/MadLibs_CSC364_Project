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
    document.getElementById("outputSection").style.display = "none";
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
  // var fStro = "<br><br><strong>"
  // var bStro = "</strong>"

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
  var q = fSpan + document.getElementById("varQ").value + bSpan;
  var r = fSpan + document.getElementById("varR").value + bSpan;
  var s = fSpan + document.getElementById("varS").value + bSpan;
  var t = fSpan + document.getElementById("varT").value + bSpan;
  // the massive z variable aka madlib paragraph

  //get id from h2 madlibTitle to determin what version to assemble
  var elements = document.getElementsByName( "madlibTitle" );
  var id = elements[0].getAttribute( "id");

  //paragraph variable for madlib 1
  var madLib1 = "Come " + (a) + " at WALMART, where you`ll receive " +
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
  var madLib2 = "Farmers work very hard planting wheat and  " + (a)
  + ". They begin by " + (b) + " their fields and if they don’t have a tractor they use " +
  (c) + ". Then they plant " + (d) + " seeds and by the next fall they have many acres of " +
  (e) + ". Tomatoes are harder to raise. They grow on " + (f) +
  " bushes and the farmer sprays them with " + (g) +
  " to keep the bugs off. The easiest things to grow are green " +
  (h) + " but the farmer must be very careful to make sure worms don’t get into his "
  + (i) + ". Farmers also raise " + (j) + " and grow onions, cabbages, lettuce, and " +
  (k) + " . But no matter what they grow, farmers really lead a/an " +
  (l) + " life.";

  //paragraph variable for madlib 3
  var madLib3 = "At one time man walked on four " + (a) + ", spoke in " + (b) + " grunts, and did not know how to make a/an " +
  (c) + " fire. Here is the story of the day that changed mankind forever (translated from the " +
  (d) + " cave-speak): Caveman #1: It’s colder than (the) " + (e) + " in this cave. Even my warmest " +
  (f) + " fur won’t keep my " + (g) + " from shivering. Caveman #2: If only there was a way to make the cold " +
  (h) + " warmer because I think my " + (i) + " " + (j) + " has frostbite. Caveman #1: I'm borde. I think I'll play with these " +
  (k) + " sticks of wood. Caveman #2: Why don't you rub them " + (l) + " together and see what happens? Caveman #1: " +
  (m) + "! There’s smoke coming off those " + (n) + " sticks! Caveman #2: Ouch! It's hot! In the name of " +
  (o) +" we made heat! Caveman #1: We shall call this magical flaming " + (p) + " fire.";

  //paragraph variable for madlib 4
  var madLib4 = (a) + " is a normal " + (b) + ". Then, one day, a " + (c) +
  " explodes, causing a " + (d) + " to blow up, and a nearby " + (e) +
  " erupts into a " + (f) + " of flames. " + (g) +
  " realizes that he's being chased by the government, who's trying to " + (h) +
  " him. While on the run, he teams up with an incredibly attractive woman named " + (i) +
  ", who has an incredible " + (j) + ". She may be from the streets, but she can " + (k) +
  " like nobody's business. The duo decide to turn the tables on their pursuers by blowing up a " + (l) +
  ", which triggers a chain reaction, causing the local " + (m) + ", " + (n) + ", and the " + (o) +
  " to explode. Then, the bad guys' helicopter gets " + (p) + " by a piece of " + (q) +
  ", causing it to " + (r) + ", which shoots a fireball straight into the heart of " + (s) +
  " and destroys the bad guy leader. Everything is " + (t) + " and the story is over.";


  document.getElementById("inputSection").style.display = "none"; // hide input section
  document.getElementById("outputSection").style.display = "block"; // display output section
  //madlib 1
  if(id=="madlib1"){
    document.getElementById("madlib").innerHTML = madLib1;
  //madlib 2
  }else if(id=="madlib2"){
    document.getElementById("madlib").innerHTML = madLib2;
  //madlib 3
  }else if(id=="madlib3"){
    document.getElementById("madlib").innerHTML = madLib3;
  //madlib 4
}else if(id=="madlib4"){
    document.getElementById("madlib").innerHTML = madLib4;
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
