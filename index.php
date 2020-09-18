<?php
require("bpmtab.php");
?>
<html>
<style>
.bg {
	background-image: url("sources/bg.jpg");
	background-repeat : no-repeat;
	background-size : cover;
	height : 101%;
	width : 101%;
	top : -1%;
	left : -1%;
	position : absolute;
	filter : blur(7px);
	opacity : 0.25;
	z-index : -1;
}
.heart {
	position : absolute;
	left : 25%;
	border-radius : 30px;
	width : 60%;
	height : 30%;
}
#smalltext {
	font-size : 16px;
	position : absolute;
	left : 33%;
	top : 40%;
}
#bigtext {
	font-family : Verdana;
	font-size : 24px;
	position : absolute;
	left : 20%;
	top : 20%;
}
.container {
	position : absolute;
	opacity : 0.5;
	top : 30%;
	height : 40%;
	width : 75%;
	left : 10%;
	border-style: solid;
	border-width : 1px;
	border-radius : 30px;
	transition : 0.5s;
	box-shadow : 2px 2px 15px grey;
	border : none;
}
.container:hover {
	border-radius : 70px;
	opacity : 1.0;
	
}
#showtext {
	color : red;
	font-family : arial;
	font-size : 42px;
	position : absolute;
	top : 70%;
	left : 40%;
}
#animheart {
	transition : 0.3s;
}
#animheart:hover {
	height : 40%;
}
</style>
<head>
<title>
Ageing - Helper
</title>
</head>
<div class="bg"></div>
<div class="heart"><img height="80%" src="sources/house2.png"/><img id="animheart" src="sources/heart-transparent.png" height="35%" style="top: 38%; left: 9%; position : absolute;"/>
<p id="bigtext">&nbsp;&nbsp;&nbsp;HEALTH CARE AND HELPER SERVICE</p><p id="smalltext">Ensure that our beloved person in our concern</p>
</div>
<p id="showtext">#IOTPROJECT</p>
<div class="container"><iframe id="frame" src="view.php" style="height:100%; width:100%;border: none;"></iframe></div>
<center>
<p style="bottom : 20px; position : absolute; left : 45%;">Powered by </p><img src="sources/arduino.png" style="bottom : 22px; position : absolute;" height="7%" width="7%"/>
<a href="list.php" target="_blank" style="z-index : 3; position : absolute; bottom : 25%; left : 43%;">REPORT : STATISTIC</a>
</center>
<script>
var i = 0, z = 0;
var speed = 300;
var refreshtime = 2500;
var txt = "#SERIMAUBELANG";
var here = "#wecare4you";
document.getElementById("showtext").innerHTML = "";
showtext();
refresh();
function showtext() {
	if (i < txt.length) {
		document.getElementById("showtext").innerHTML += txt.charAt(i);
		i++;
		setTimeout(showtext, speed);
	} else {
		i = 0;
		document.getElementById("showtext").innerHTML = "";
		showother();
	}
}
function showother() {
	if (z < here.length) {
		document.getElementById("showtext").innerHTML += here.charAt(z);
		z++;
		setTimeout(showother, speed);
	} else {
		z = 0;
		document.getElementById("showtext").innerHTML = "";
		showtext();
	}
}
function refresh() {
	document.getElementById('frame').contentWindow.location.reload();
	setTimeout(refresh, refreshtime);
}

</script>
</html>