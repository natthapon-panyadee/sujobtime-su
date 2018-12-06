<?php
	// require_once '/connectDB.php';
	if (file_exists('connectDB.php')) {
    require('./connectDB.php'); // This is line 38
}
	session_start();

	if (isset($_POST['inputFullName'])){
		$inputFullName = $_POST['inputFullName'];
		
		// id
		$user_id = $_SESSION['user'];

		//upload move image
		$uploadDirectory = "../asset/upload2/";
		if($_POST['iuploadfile']==1){

			$fileName = $_FILES['uploadfile']['name'];
			
			$tmp = explode('.', $fileName);
			$extension = end($tmp);
			$newfilename=$_SESSION['user']."_profile.".$extension;
			$fileTmpName  = $_FILES['uploadfile']['tmp_name'];
			$uploadPath = $uploadDirectory . basename($newfilename);
			move_uploaded_file($fileTmpName, $uploadPath);
			
			
		}
		$sql = "UPDATE user  SET fullname = '$inputFullName'";
		if (isset($_POST['inputPassword'])) {
			$inputPassword = $_POST['inputPassword'];

			$sql.= ",password = '$inputPassword'";

		}
		if ($_POST['iuploadfile']==1) {
			$sql.= ",image='$newfilename'";

		}
		$sql.="WHERE user_id = $user_id";


		echo $sql;
		if($conn->query($sql)){
			echo "โพสสำเร็จ";
		}else{
			echo "โพสผิดพลาด";
		}
		
	}

?>