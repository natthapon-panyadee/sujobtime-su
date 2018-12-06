<?php
	require_once '/connectDB.php';
	if (isset($_POST['inputFullName'])){
		$inputFullName = $_POST['inputFullName'];
		$inputPassword = $_POST['inputPassword'];
		$image = $_POST['image'];
		session_start();

		$sql = "UPDATE user SET fullname = '$inputFullName',password = 'inputPassword', image = '$image' WHERE user_id =  ". $_SESSION['user'];
		
		echo $sql;
		if($conn->query($sql)){
			echo "แก้ไขสำดร็จสำเร็จ";
		}else{
			echo "แก้ไขผิดพลาด";
		}
		
	}

?>