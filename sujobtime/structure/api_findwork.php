<?php
	if (file_exists('connectDB.php')) {
    require('./connectDB.php'); // This is line 38
	}
	if(isset($_POST['tag'])){
		$tag = $_POST['tag'];
		$page = $_POST['page']*20;
		$sql = "SELECT * FROM postwork WHERE type = 0";
		if($tag!=""){
			$sql.= " AND namework LIKE '%$tag%'";
		}
		$sql.= " ORDER BY work_id DESC LIMIT $page,20";
		// echo $sql;
		if($result=$conn->query($sql)){
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					?>
					<div class="col-12 col-sm-6 col-lg-3 mb-4">
						<div class="card">
							<div class="row">
								<div class="col-4 col-lg-12 text-center">
									<img class="card-img-top img-fluid"
									src="asset/
										<?php
											if($row['image']){
												echo 'uploads/'.$row['image'];
											}else{
												echo 'user-default.jpg';
											}
										?>"
									>
								</div><!-- col-4 -->
								<div class="col-8 col-lg-12">
									<div class="card-body">
								<h2 class="card-title"><?php echo $row['namework']; ?></h2>
								<h5><?php echo $row['detailwork']; ?></h5>
								<h5>งบ <?php echo $row['price']; ?> บาท</h5>
								<a href="detail_user.php?id=<?php echo $row['user_id'];  ?>" class="btn btn-danger w-100" style="background-color: #2f3638 !important; border-color: #76b6c2">รายระเอียด</a>
							</div>
								</div><!-- col-8 -->
							</div><!-- row -->
						</div><!-- card -->
					</div>
					<?php
				}
			}
		}
	}
	
?>