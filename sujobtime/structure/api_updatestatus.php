<?php  
	require_once('connectDB.php');

	if (isset($_POST['workid'])) {
		$sql = "UPDATE joinwork SET status=1 WHERE joinwork_id = ".$_POST['workid'];
		$conn->query($sql);
		
	}


?>