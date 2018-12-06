<?php
	require_once 'connectDB.php';
	session_start();

	if (isset($_GET['work_id'])){
		// $namecompany = $_POST['namecompany'];
		// $namework = $_POST['namework'];
		// $detailwork = $_POST['detailwork'];
		$work_id = $_GET['work_id'];
		// id
		$user_id = $_SESSION['user'];
		// $fileName = $_FILES['f_red']['name'];
		// $extension=end(explode(".", $fileName));
		// $newfilename=$_POST['brand_name']."_".$_POST['product_gen']."_red.".$extension;
		// $fileTmpName  = $_FILES['f_red']['tmp_name'];
		// $uploadPath = $uploadDirectory . basename($newfilename);
		// move_uploaded_file($fileTmpName, $uploadPath);
		

		$sql = "INSERT INTO joinwork ( work_id,user_id) VALUES ( $work_id,$user_id)";
		echo $sql;
		if($conn->query($sql)){
			echo "โพสสำเร็จ";
		}else{
			echo "โพสผิดพลาด";
		}
		
	}

?>