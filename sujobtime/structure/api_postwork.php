<?php
	// require_once '/connectDB.php';
if (file_exists('connectDB.php')) {
    require('./connectDB.php');
	session_start();

	if (isset($_POST['namecompany'])){
		$namecompany = $_POST['namecompany'];
		$namework = $_POST['namework'];
		$detailwork = $_POST['detailwork'];
		$price = $_POST['price'];
		// id
		$user_id = $_SESSION['user'];
		
		//upload move image
		$uploadDirectory = "../asset/uploads/";
		if($_POST['iuploadfile']==1){

			$fileName = $_FILES['uploadfile']['name'];
			
			$tmp = explode('.', $fileName);
			$extension = end($tmp);
			$newfilename=$_POST['namework']."_".date("m-d-y").date("h-i-sa").".".$extension;
			$fileTmpName  = $_FILES['uploadfile']['tmp_name'];
			$uploadPath = $uploadDirectory . basename($newfilename);
			move_uploaded_file($fileTmpName, $uploadPath);
			echo "result";
			
		}
		
		
		

		$sql = "INSERT INTO postwork ( namecompany, namework,detailwork,price,user_id";
		if ($_POST['iuploadfile']==1) {
			$sql.= ",image";
		}
		$sql.=") VALUES ( '$namecompany', '$namework','$detailwork','$price',$user_id";
		if ($_POST['iuploadfile']==1) {
			$sql.= ",'$newfilename'";
		}
		$sql.=")";


		echo $sql;
		if($conn->query($sql)){
			echo "โพสสำเร็จ";
		}else{
			echo "โพสผิดพลาด";
		}
		
	}
}

?>