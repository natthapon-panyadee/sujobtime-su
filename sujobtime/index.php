<!-- index.html -->
<!DOCTYPE html>
<html>

<?php 
require_once('structure/head.php');
?>

<body>
	<?php 
	require_once('structure/header.php');
	?>
	<div id="banner" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#banner" data-slide-to="0" class="active"></li>
			<li data-target="#banner" data-slide-to="1"></li>
			<li data-target="#banner" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner h-100">
			<div class="carousel-item h-100 active">
				<img class="img-fluid h-100" src="asset/images/ss.jpg">
				<div class="carousel-caption m-0 p-0 center-vertical">
					
				</div><!-- carousel-caption -->
			</div>
			<div class="carousel-item h-100">
				<img class="img-fluid h-100" src="asset/images/slide2.jpg">
				<div class="carousel-caption m-0 p-0 center-vertical">
					
				</div><!-- carousel-caption -->
			</div>
			<div class="carousel-item h-100">
				<img class="img-fluid h-100" src="asset/images/slide3.jpg">
				<div class="carousel-caption m-0 p-0 center-vertical">
					
				</div><!-- carousel-caption -->
			</div>
		</div><!-- carousel-inner -->
	</div><!-- banner -->

	<!-- sub banner -->
	<!-- <div class="container mt">
		<div class="row text-center">
			<div class="col-12 col-sm-6">
				<div class="bg-image h200 center-vertical text-light" style="background-image: url('asset/images/banner-1.jpg');">
					<h2 class="m-0"><strong>SALE 10-30%</strong></h2>
				</div>
			</div>
			<div class="col-12 col-sm-6 mt-2 mt-sm-0">
				<div class="bg-image h200 center-vertical text-light" style="background-image: url('asset/images/banner-2.jpg');">
					<h2 class="m-0"><strong>SALE 50-70%</strong></h2>
				</div>
			</div>
			<div class="col-12  col-sm-12 mt-2 mt-sm-4">
				<div class="bg-image h200 center-vertical text-light" style="background-image: url('asset/images/banner-3.jpg');">
					<h2 class="m-0"><strong>FREE ! VOUCHER 400 BATH</strong></h2>
				</div>
			</div>
		</div>
	</div> --><!-- sub banner -->

	<!-- product slide -->
	<!-- <div class="container mt">
		<div class="row mb-4">
			<div class="col-8">
				<h3><strong>สินค้าโปรโมชั่น</strong></h3>
			</div>
			<div class="col-4 text-right">
				<p class="m-0 mt-2">
					<small>
						<a href="#" class="text-danger">VIEW ALL >></a>
					</small>
				</p>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="api_workdetail.php?id=<?php echo $row['work_id'];  ?>" class="btn btn-primary" style="background-color: #2f3638 !important; border-color: #76b6c2">รายละเอียด</a>
		  </div>
		</div>
		<?php 
			// require_once'structure/connectDB.php';
			// $sql = "SELECT * FROM user ";
		 ?>
	</div>

	bestseller slide -->
	<div class="container mt-65">
		<div class="row mb-4">
			<div class="col-8">
				<h3><strong>งานแนะนำ</strong></h3>
			</div>
			<div class="col-4 text-right">
				<p class="m-0 mt-2">
					<small>
						<a href="allwork.php" class="text-danger" style="font-size: 15px;">ดูทั้งหมด >></a>
					</small>
				</p>
			</div>
		</div>
		<div class="__slide" id="bestseller" __ps="4" style="height: 290px!important;">
			<div class="__slide_box">
				<?php
						require_once'structure/connectDB.php';
						$sql = "SELECT * FROM postwork ORDER by work_id DESC LIMIT 8";
						if($result=$conn->query($sql)){
							if($result->num_rows>0){
								while($row = $result->fetch_assoc()){

									?>
				<div class="__slide_item pl-1 pr-1">
					<div class="row mt-4" id="show_item">
						
									<div class="card" style="width: 18rem;">
										<img class="card-img-top" src="asset/
										<?php
										if($row['image']){
											echo 'uploads/'.$row['image'];
											}else{
												echo 'user-default.jpg';
											}
											?>" alt="Card image cap">
											<div class="card-body">
												<h5 class="card-title"><?php echo $row['namework']; ?></h5>
												<p class="card-text"><?php echo $row['detailwork']; ?></p>
												<h5> งบ <?php echo $row['price']; ?> บาท</h5>
												<a href="api_workdetail.php?id=<?php echo $row['work_id'];  ?>" class="btn btn-primary" style="background-color: #2f3638 !important; border-color: #76b6c2">รายละเอียด</a>
											</div>
										</div>
										
						</div><!-- row -->
					</div><!-- __slide_box -->
					<?php
									}
								}
							}
							?>
				</div><!-- __slide -->
			</div><!-- bestseller slide -->

			<!-- newproduct slide -->
	<div class="container mt-65">
		<div class="row mb-4">
			<div class="col-8">
				<h3><strong>รับงานจ้าง</strong></h3>
			</div>
			<div class="col-4 text-right">
				<p class="m-0 mt-2">
					<small>
						<a href="alluser.php" class="text-danger"  style="font-size: 15px;">ดูทั้งหมด >></a>
					</small>
				</p>
			</div>
		</div>
			<div class="__slide" id="newproduct" __ps="4">
				<div class="__slide_box">
					<?php

				require_once'structure/connectDB.php';
				$sql = "SELECT * FROM user WHERE user_id  LIMIT 8";
					if($result=$conn->query($sql)){
						if($result->num_rows>0){
							while($row = $result->fetch_assoc()){
		 			?>
					<div class="__slide_item pl-1 pr-1">
						<div class="row mt-4" id="show_item">
			
						 	<div>
								<div class="card">
									<div class="row">
										<div class=" text-center">
											<img class="card-img-top img-fluid-2"
												src="asset/
												<?php
													if($row['image']){
														echo 'upload2/'.$row['image'];
													}else{
														echo 'user-default.jpg';
													}
												?>"
											>
										</div><!-- col-4 -->
										<div class="col">
											<div class="card-body">
												<h5 class="card-title"><?php echo $row['fullname']; ?></h5>
												<h5 class="card-title"><?php echo $row['phonenumber']; ?></h5>
												<h5 class="card-title"><?php echo $row['email']; ?></h5>
												<a href="api_userdetail.php?id=<?php echo $row['user_id'];  ?>" class="btn btn-danger w-100" style="background-color: #2f3638 !important; border-color: #76b6c2">รายละเอียด</a>
											</div>
										</div><!-- col-8 -->
									</div><!-- row -->
								</div><!-- card -->
							</div>
			
						</div>
					</div>
					<?php
								}
							}
						}
					?> 
				</div>
				<!-- __slide -->
			</div><!-- newproduct slide -->
		</div>
			






	<!-- <div class="container mt-10" style="height: 220px;">
				<div id="partner" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner h-100">
						<div class="carousel-item h-100 active">
							<div class="row">
								<div class="col-2">
									<img class="img-fluid-2" src="asset/images/partner-muji.png">
								</div>
								<div class="col-5">
									<img class="img-fluid" src="asset/images/partner-mercari.png">
								</div>
								<div class="col-5">
									<img class="img-fluid" src="asset/images/partner-abc.png">
								</div>
							</div>
						</div>
						<div class="carousel-item h-100">
							<div class="row">
								<div class="col-6">
									<img class="img-fluid" src="asset/images/partner-amiami.png">
								</div>
								<div class="col-6">
									<img class="img-fluid" src="asset/images/partner-rakuten.png">
								</div>
							</div>
						</div>
					</div>carousel-inner -->
				</div><!-- partner -->
			</div>
 
			<?php 
			require_once('structure/footer.php');

			?>
			

		</body>
		</html>