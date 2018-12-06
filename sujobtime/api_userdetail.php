<!-- formDetail.php -->
<html>
	<head>
		<?php 
			require_once('structure/head.php');
	 	?>
		 
	</head>
	<body>

		<?php

			require_once('structure/header.php');
	 	
			require_once 'structure/connectDB.php';
			if(isset($_GET['id'])){
				$sql = "SELECT * FROM user WHERE user_id = ".$_GET['id'];
				if($result=$conn->query($sql)){
					if($result->num_rows>0){
						while($row = $result->fetch_assoc()){
		?>
				<div class="container" >
					<div class="col-12 mt-4">
						<h3><a href="alluser.php"><<ย้อนกลับ</a></h3>
					</div>
					<div class="col-12 ">
						<h1>รายละเอียด</h1>
					<div style="padding-bottom: 30px;">
						<img src="asset/<?php
									if($row['image']){
										echo 'upload2/'.$row['image'];
									}else{
										echo 'images/user-default.jpg';
									}
								?>"" width="30%">
						<h5 class="card-title"><?php echo $row['fullname'] ?></h5>
						<h5 class="card-title"><?php echo $row['email'] ?></h5>
						<h5 class="card-title"><?php echo $row['phonenumber'] ?></h5>
						
						<a href="#" class="card-link">facebook</a>
						<a href="#" class="card-link" style="color: green;">@line</a>


					</div>
					</div>
				</div>

		<?php
						}
					}
				}
			}else{
				// header('location:alluser.php');
			}
		?>
	</body>
	<?php 
		require_once('structure/footer.php')
	 ?>

	 <script type="text/javascript"> 
		$('#btn-register').on('click',function(){

			var fullname = $('#inputFullName').val();
			var phonenumber = $('#inputphone').val();
			var email = $('#inputEmail').val();
			var user = $('#inputUsername').val();
			var password = $('#inputPassword').val();
			var conpass = $('#inputCfPassword').val();
			var type = $('#type').val();

			$.ajax({
				type: "POST",
				url: "structure/api_register.php",
				data: {
					'inputFullName': fullname,
					'inputphone': phonenumber,
					'inputEmail': email,
					'inputType': type,
					'inputUsername': user,
					'inputPassword': password,
					'inputCfPassword': conpass
				},
				success: function(data) {
					alert(data);
          window.location.href = "login.php";
		      },
		  });
		});
		
	 </script>
	
</html>
