<?php
require("db.php");
$api_key_value = "arduinoprojek123";
if(!empty($_POST['api_key']))
    {
		if($api_key_value == $_POST["api_key"]) {
			$first = $_POST['firstbeat'];
			$second = $_POST['secondbeat'];
			$third = $_POST['thirdbeat'];
			$fourth = $_POST['fourthbeat'];
			$sql = "INSERT INTO heart (firstbeat, secondbeat, thirdbeat, fourthbeat) VALUES ('".$first."', '".$second."', '".$third."' , '".$fourth."')";

			if ($con->query($sql) === TRUE) {
				echo "OK";
			} else {
				echo "Error: " . $sql . "<br>" . $con->error;
			}
		}
	}
?>