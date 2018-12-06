<?php
	// require_once '/connectDB.php';
if (file_exists('connectDB.php')) {
    require('./connectDB.php'); // This is line 38
}
	if (isset($_POST['inputFullName'])){
		$inputFullName = $_POST['inputFullName'];
		$inputphone = $_POST['inputphone'];
		$inputEmail = $_POST['inputEmail'];
		$inputUsername = $_POST['inputUsername'];
		$inputPassword = $_POST['inputPassword'];
		$inputCfPassword = $_POST['inputCfPassword'];
		$inputType = $_POST['inputType'];
		
		$sql = "INSERT INTO user ( fullname, phonenumber,email,username, password,type) VALUES ( '$inputFullName',$inputphone, '$inputEmail','$inputUsername', '$inputPassword',$inputType)";
		echo $sql;
		if($conn->query($sql)){
			echo "สมัครสมาชิกสำเร็จ";
		}else{
			echo "สมัครสมาชิกผิดพลาด";
		}
		
	}

?>