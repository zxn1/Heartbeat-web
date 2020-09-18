<html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  position : absolute;
  top : 0px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.div {
	position : absolute;
	top: 50px;
	width : 95%;
}
</style>
<center>
<h1>Health Report</h1>
<div class="div">
</html>
<?php
require("db.php");
$getpost = "SELECT id FROM heart ORDER BY id";
$resget = mysqli_query($con, $getpost);
$rowcount = mysqli_num_rows($resget);
echo "<table><tr><th> ID </th><th>Beat 1s</th><th>Beat 3s</th><th>Beat 5s</th><th>Beat 8s</th><th>Average</th><th>Condition</th><th>Time</th></tr>";
while($rowcount > 0) {
	$sql = "SELECT * FROM heart WHERE id='" .$rowcount. "'";
	$res = mysqli_query($con, $sql);
	$arr = mysqli_fetch_array($res);
	$calc = ($arr[1]+$arr[2]+$arr[3]+$arr[4])/4;
	if($calc >= 80 && $calc <= 110) {
		$textcondition = "Normal";
	} else {
		$textcondition = "Abnormal";
	}
	echo "<tr><td>" . $arr[0] . "</td><td>"  .$arr[1] . "</td><td>" . $arr[2] . "</td><td>" . $arr[3] . "</td><td>" . $arr[4] . "</td><td>" . ($arr[1]+$arr[2]+$arr[3]+$arr[4])/4 . "</td><td>" . $textcondition . "</td><td>" . $arr[5] . "</td></tr><br>" ;
	$rowcount--;
}
echo "</table></div></center>";
?>