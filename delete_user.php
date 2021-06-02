<?php 
	$uid = $_GET['uid'];
	$connection = mysqli_connect("localhost", "root", "", "crud");

	$sql = mysqli_query($connection, "DELETE FROM user WHERE userID LIKE '$uid'");
	echo '<script> alert("Record Deleted Successfully"); window.location="user_report.php" </script>';
 ?>