<html>
<style>
.bpmtab {
	border-radius : 50%;
	position : absolute;
	border-style : solid;
	height : 100px;
	width : 100px;
	transition : 0.2s;
	background-color : purple;
	top : 50px;
	left : -55px;
	opacity : 0.4;
}
.bpmtab:hover {
	height : 150px;
	width : 50px;
	border-top-right-radius : 15px;
	border-bottom-right-radius : 15px;
	border-top-left-radius : 0px;
	border-bottom-left-radius : 0px;
	background-color : black;
	top : 30px;
	left : 0px;
	opacity : 1.0;
}
.bpmtab:active {
	top : -1%;
	left : -1%;
	height : 100%;
	width : 100%;
	background-color: white;
	border-radius : 0px;
	filter:blur(20px);
}
#textbpm {
	transition : 0.2s;
	opacity : 0.0;
	transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	position : absolute;
	top : 20%;
	color : white;
}
#textbpm:hover {
	opacity : 1.0;
}
</style>
<div class="bpmtab">
<a href="BPM.png" target="_blank"><p id="textbpm">BPM LIST</p></a>
</div>
</html>