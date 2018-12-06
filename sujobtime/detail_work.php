<!-- formDetail.php -->
<html>
	<head>
		<?php 
			require_once('structure/head.php');
		 ?>
	</head>
	<body>
		<?php
			require_once 'structure/connectDB.php';
			if(isset($_GET['id'])){
				$sql = "SELECT * FROM postwork WHERE id = ".$_GET['id'];
				if($result=$conn->query($sql)){
					if($result->num_rows>0){
						while($row = $result->fetch_assoc()){
		?>
				<div class="card w-100 h-100" style="width: 18rem;">
					<div class="card-body">
						<img src="images/<?php echo $row['image'] ?>" alt="" class="img-fluid">
						<h5 class="card-title"><?php echo $row['namework'] ?>/h5>
						<h5 class="card-title"></h5>
						<h6 class="card-subtitle mb-2 text-muted"><?php echo $row['detailwork'] ?></h6>
						<p class="card-text"><?php echo $row['price'] ?></p>
						
					</div>
				</div>

		<?php
						}
					}
				}
			}else{
				header('location:alluser.php');
			}
		?>
	</body>
</html>
