<?php 
session_start();
require_once('connectDB.php');
$sql2 = "SELECT * FROM joinwork join postwork on joinwork.work_id = postwork.work_id join user on joinwork.user_id = user.user_id WHERE postwork.user_id =".$_SESSION['user']." AND joinwork.status = 0 ";

if($result2=$conn->query($sql2)){
	if($result2->num_rows>0){
		while($row2 = $result2->fetch_assoc()){
			?>
			<span class="dropdown-item status" value="<?php echo $row2['joinwork_id']; ?>" >

				<div class="row" style="width: 480px;">
					<div class="col-3">
						<img src="asset/
						<?php  
						if($row2['image']){
							echo 'upload2/'.$row2['image'];
							}else{
								echo 'images/user-default.jpg';
							}
							?>
							" class="img-fluid">
						</div>
						<div class="col-6">
							<h5 class="mt-3">
								<strong>
									<?php 
									echo $row2['namework'];
									?>
								</strong>
							</h5>
							<p class="mt-4">
								<?php 
								echo $row2['fullname'];
								?>
							</p>
						</div>
						<div class="col-3">
							<button class="btn btn-primary form-control d-block mt-3">รับ</button>
							<button class="btn btn-danger form-control d-block mt-3">ปฏิเสธ</button>
						</div>

					</div>
				</span>

				<?php 
			}
		}else{
			?>
			<span class="dropdown-item" value="<?php echo $row2['joinwork_id']; ?>" >

				<div class="row text-center" style="width: 480px;">
					<div class="col pt-4 pb-4">ไม่มีข้อมูลการแจ้งเตือน</div>

				</div>
			</span>
			<?php 

		}	
	}
	?>



	<script type="text/javascript">
		ass="mx-3">
						
$('.status').on('click',function(){

				var workid = $(this).attr('value');
				// $(this).fadeOut();
				
				$.ajax({
					type: "POST",
					url: "structure/api_updatestatus.php",
					data: {

						'workid': workid,


					},
					success: function(data) {
						// alert(data);
						// window.location.href = "index.php";
					},
				});
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
	</script>
	<script type="text/javascript">
			
			$('.btn-notification').on('click',function(){
				
			});
		</script>