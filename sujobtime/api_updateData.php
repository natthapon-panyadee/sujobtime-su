<?php
	if(isset($_POST['product_id'])){
		require('api_connect.php');
		$uploadDirectory = "../images/uploads/";
		if($_POST['if_red']==1){
			$fileName = $_FILES['f_red']['name'];
			$extension=end(explode(".", $fileName));
			$newfilename=$_POST['brand_name']."_".$_POST['product_gen']."_red.".$extension;
			$fileTmpName  = $_FILES['f_red']['tmp_name'];
			$uploadPath = $uploadDirectory . basename($newfilename);
			move_uploaded_file($fileTmpName, $uploadPath);
	        $f_red = $newfilename;
		}
		else{
			$f_red = null;
		}
		if($_POST['if_green']==1){
			$fileName = $_FILES['f_green']['name'];
			$extension=end(explode(".", $fileName));
			$newfilename=$_POST['brand_name']."_".$_POST['product_gen']."_green.".$extension;
			$fileTmpName  = $_FILES['f_green']['tmp_name'];
			$uploadPath = $uploadDirectory . basename($newfilename);
			move_uploaded_file($fileTmpName, $uploadPath);
	        $f_green = $newfilename;
		}
		else{
			$f_green = null;
		}
		if($_POST['if_blue']==1){
			$fileName = $_FILES['f_blue']['name'];
			$extension=end(explode(".", $fileName));
			$newfilename=$_POST['brand_name']."_".$_POST['product_gen']."_blue.".$extension;
			$fileTmpName  = $_FILES['f_blue']['tmp_name'];
			$uploadPath = $uploadDirectory . basename($newfilename);
			move_uploaded_file($fileTmpName, $uploadPath);
	        $f_blue = $newfilename;
		}
		else{
			$f_blue = null;
		}

		$sql = "UPDATE tb_product SET";
		$sql .= " product_red = '".$_POST['red']."',";
		$sql .= " product_green = '".$_POST['green']."',";
		$sql .= " product_blue = '".$_POST['blue']."'";
		if($f_red!=null){
			$sql .= ",img_red = '".$f_red."'";
		}
		if($f_blue!=null){
			$sql .= ",img_blue = '".$f_blue."'";
		}
		if($f_green!=null){
			$sql .= ",img_green = '".$f_green."'";
		}
		$sql .= " WHERE product_id= ".$_POST['product_id'];
		if($result=$conn->query($sql)){
			echo "อัพเดทข้อมูลเรียบร้อยแล้ว";
		}else{
			echo "การอัพเดทข้อมูลไม่สำเร็จ";
		}
		$conn->close();
	}else{
		echo "ไม่ถูกต้อง";
	}
?>