<!DOCTYPE html>
<html>
<head>
	<?php 
	require_once('structure/head.php');
	?>
</head>
<body>
	<?php 
	require_once('structure/header.php');
	?>

	<div class="container">
		<div class="row ">
			<div class="col-12 col-lg-4 offset-lg-4">

				<div class="form-group mt-4  ">
					<label for="exampleInputEmail1">ชื่ร้าน</label>
					<input type="text" class="form-control" id="namecompany" aria-describedby="emailHelp" placeholder="ชื่อร้าน">
					
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">งาน</label>
					<input type="text" class="form-control" id="namework" placeholder="งาน">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">รายละเอียดงาน</label>
					<textarea type="password" class="form-control" id="detailwork" placeholder="รายละเอียดงาน"></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">ราคางาน</label>
					<input type="number" class="form-control" id="price" placeholder="xxxx บาท">
				</div>
				<div class="form-group">
					
						<input type="file" name="uploadfile" id="uploadfile" accept="image/x-png,image/gif,image/jpeg"/>
						<!-- <input type="submit"   /> -->
				</div>
				<div class="form-group mt-4">
					<div class="col-4 offset-lg-4">
						<button id="btn-post" value="upload"  class="btn btn-danger rounded pl-4 pr-4" style="background-color: #2f3638 !important; border-color: #76b6c2">ประกาศ</button>
					</div>
				</div>
			</div>
		</div>
		<?php 
		// require_once('structure/connectDB.php');

		// if(isset($_POST['uploadfilesub'])) {

		// 	$filename = $_FILES['uploadfile']['name'];
		// 	$filetmpname = $_FILES['uploadfile']['tmp_name'];
		// 	$folder = 'imagesuploadedf/';
		// 	move_uploaded_file($filetmpname, $folder.$filename);
		// 	$sql = "INSERT INTO postwork (imagename)  VALUES ('$filename')";
		// 	$qry = mysqli_query($conn,  $sql);
		// 	if( $qry) {

		// 		echo "image uploaded";

		// 	}

		// }
		?>
	</div>
	<script type="text/javascript">
		$('#btn-post').on('click',function(){
			var namecom = $('#namecompany').val();
			var work = $('#namework').val();
			var dework = $('#detailwork').val();
			var price = $('#price').val();

			var formData = new FormData();

		 	formData.append('namecompany',namecom);
		 	formData.append('namework',work);
		 	formData.append('detailwork',dework);
		 	formData.append('price',price);


		 	if($('input#uploadfile')[0].files[0]){
		 		formData.append('uploadfile', $('input#uploadfile')[0].files[0]);
		 		formData.append('iuploadfile',1);
		 	}else{
		 		formData.append('iuploadfile',0);
		 	}


		
		$.ajax({
      		type: "POST",
      		mimeTypes:"multipart/form-data",
      		url: "structure/api_postwork.php",
      		contentType: false,
    		processData: false,
      		data: formData,
      		success: function(data) {
      			alert(data);
				// window.location.href = "allwork.php";
      		},
      		error: function(xhr, status, error) {
      			var err = eval("(" + xhr.responseText + ")");
      			alert(err.Message);

      		}
      	});



	});


	</script>
	

	<?php 
	require_once('structure/footer.php');
	?>
</body>
</html>