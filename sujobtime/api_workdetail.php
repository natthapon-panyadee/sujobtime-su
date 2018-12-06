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
				$sql = "SELECT * FROM postwork WHERE work_id = ".$_GET['id'];
				if($result=$conn->query($sql)){
					if($result->num_rows>0){
						while($row = $result->fetch_assoc()){
		?>
				<div class="container" >
					<div class="col-12 mt-4">
						<h3><a href="allwork.php"><<ย้อนกลับ</a></h3>
					</div>
					<div class="col-12  ">
						<h1>รายละเอียด</h1>
					<div style="padding-bottom: 30px;">
						<img src="asset/<?php
									if($row['image']){
										echo 'uploads/'.$row['image'];
									}else{
										echo 'user-default.jpg';
									}
								?>"" alt="" width="30%" >
						<h5 class="card-title"><?php echo $row['namework'] ?></h5>
						<h5 class="card-title"><?php echo $row['detailwork'] ?></h5>
						<h5 class="card-title">งบ <?php echo $row['price'] ?></h5>
						
						<a href="#" class="card-link">facebook</a>
						<a href="#" class="card-link" style="color: green;">@line</a>
						<br>
						<br>
						<a href="allwork.php" class="btn btn-danger w-50" style="background-color: #2f3638 !important; border-color: #76b6c2">สมัครงาน</a>
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
	
</html>
