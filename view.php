<?php
require("db.php");
//get long
$getpost = "SELECT id FROM heart ORDER BY id";
$resget = mysqli_query($con, $getpost);
$rowcount = mysqli_num_rows($resget);

$sql = "SELECT * FROM heart WHERE id='" .$rowcount. "'";
$res = mysqli_query($con, $sql);
$arr = mysqli_fetch_array($res);
$average = ($arr[1]+$arr[2]+$arr[3]+$arr[4])/4;
if($average >= 80 && $average <= 110) {
	$text = "NORMAL BEAT!";
} else {
	$text = "ABNORMAL BEAT!";
}
?>
<html>
<style>
#beattxt {
	position : absolute;
	font-size : 112px;
	top : -5%;
	color :red;
	font-family : Arial;
}
#descript {
	position : absolute;
	font-size : px;
	top : 75%;
	color :black;
	font-family : Arial;
}
</style>
<center><p style="font-family:Perpetua; font-size : 50px;">Heart Beat(BPM)</p></center>
<br><p id="beattxt" style="left : 5%;"><?php echo $arr[1]; ?></p><p id="beattxt" style="left : 30%;"><?php echo $arr[2]; ?></p><p id="beattxt" style="left : 55%;"><?php echo $arr[3]; ?></p><p id="beattxt" style="left : 80%;"><?php echo $arr[4]; ?></p>
<br><p id="descript" style="left : 8%;">Second : 1s</p><p id="descript" style="left : 33%;">Second : 3s</p><p id="descript" style="left : 57%;">Second : 5s</p><p id="descript" style="left : 83%;">Second : 8s</p>
<br>
<p style="position: absolute; bottom : -10px;left : 33%;">Average calculated BPM : <?php echo $average . " : " . $text; ?></p>
</html>