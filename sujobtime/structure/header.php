<header>

	<?php 
	require_once('connectDB.php');
	session_start();
	?>
	<nav class="navbar navbar-light bg-light">
		<?php 
		if (!isset($_SESSION['user'])) {
					# code...

			?>
			<div class="container p-0 justify-content-end">
				<div class="pl-3 pr-3 border-right">
					<a href="register.php" class="text-secondary">สมัครสมาชิก</a>
				</div>
				<div class="pl-3">
					<a href="login.php" class="text-secondary">เข้าสู่ระบบ</a>
				</div>
			</div><!-- container -->
			<?php 
		}else{

			$sql = "SELECT * FROM user WHERE user_id = ".$_SESSION['user'];
			
			if($result=$conn->query($sql)){
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
						?>
						<div class="container p-0 justify-content-end">

								<div class="dropdown mr-4">
									<span class="btn btn-secondary dropdown-toggle btn-notification btn-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-bell">
											
										</i>
									</span>
									<div class="dropdown-menu dropdown-menu-right box-notification" aria-labelledby="dropdownMenuButton">
										
											
										
									</div>
								</div>
								
							<div class="btn-group">
								<button type="button" class="p-0 btn btn-outline-light text-dark dropdown-toggle " data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
									<img src="asset/
									<?php
									// if($row['image']){
									// 	echo 'upload2/'.$row['image'];
									// 	}else{
									// 		echo 'images/user-default.jpg';
									// 	}
									echo 'upload2/'.$row['image'];
										?>"
										 class="icon-2 rounded-circle overflow-hidden mt-0-5 mr-2">
										<?php 
										echo $row['username'];
										?>
									</button>
									<div class="dropdown-menu dropdown-menu-right mt-2">
										<a class="dropdown-item" href="postwork.php">
											<img src="asset/images/icon-menu-wallet.png" class="img-fluid icon-2 mr-2 mt-0-5">
											ประกาศงาน
										</a>
										<a class="dropdown-item mt-2" href="profile.php">
											<img src="asset/images/icon-menu-info.png" class="img-fluid icon-2 mr-2 mt-0-5">
											ข้อมูลบัญชีของคุณ
										</a>
										<a class="dropdown-item mt-2" href="structure/api_logout.php" style="color: #76b6c2">
											<img src="asset/images/icon-menu-logout.png" class="img-fluid icon-2 mr-2 mt-0-5" >
											ลงชื่อออกจากบัญชี
										</a>
									</div>
								</div>
							</div><!-- container -->
							<?php 
						}
					}
				}
			}
			?>
		</nav>
		<nav class="navbar navbar-light col" style=" background-color: #76b6c2;">
			
			<div  class="col row-fluid ">
				<div class="row">	
					<div class="col " style=" height: 50px;"  ></div>
					<div class="col text-center ">
						<a class="navbar-brand" href="index.php"><strong><img width="auto" height="auto" src="asset/images/lo-01.png" style="width: 150px"></strong>
						</a>
					</div>
					<div class="col " style=" height: 50px;"  ></div>
				</div>


			</div>
				
			
		</nav>
		<nav class="navbar navbar-dark navbar-expand-lg bg-danger " style="background-color: #2f3638 !important;">
			<div class="container p-0 ">
				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center text-center" id="menu" style="font-size: 20px;">
					<div class="mx-3">
						<a href="index.php" class="text-light">หน้าแรก</a>
					</div>
					<div class="mx-3">
						<a href="allwork.php" class="text-light">หางาน</a>
					</div>
					<div class="mx-3">
						<a href="alluser.php" class="text-light">หาคนทำงาน</a>
					</div>
					<div class="mx-3">
						<a href="aboutme.php" class="text-light">เกี่ยวกับเรา</a>
					</div>
					<a href="contact.php" class="text-light">ติดต่อเรา</a>
					</div>
				</div><!-- navbar-collapse -->
			</div><!-- container -->
		</nav>
		<!-- <script type="text/javascript">
			
			$('.btn-notification').on('click',function(){
				$.ajax({
					type: "POST",
					url: "structure/api_loadNotification.php",
					data: {
					},
					success: function(data) {
						console.log(data);
						$('.box-notification').html(data);
					},
				});
			});
		</script> -->
		<script type="text/javascript">
			$.ajax({
					type: "POST",
					url: "structure/api_loadNotification.php",
					data: {
					},
					success: function(data) {
						$('.box-notification').html(data);
					},
				});
		</script>
	</header>