<!-- login.html -->
<!DOCTYPE html>
<html>
<?php 
	require_once('structure/head.php');
 ?>
<body>
	<?php 
		require_once('structure/header.php');
	 ?>
	<div class="container">
		<div class="form-wrap mt-65">
			<div class="row" id="loginwithsocial">
				<div class="col-12 mb-2">
					<a class="btn form-control bg-line" href="#">
						<img src="asset/images/icon-line.svg" class="img-fluid mr-2 icon">
						<p class="text-light">เข้าสู่ระบบด้วย LINE</p>
					</a>
				</div>
				<div class="col-12 mb-2">
					<a class="btn form-control bg-gmail" href="#">
						<img src="asset/images/icon-gmail.svg" class="img-fluid mr-2 icon">
						<p class="text-light">เข้าสู่ระบบด้วย GMAIL</p>
					</a>
				</div>
				<div class="col-12 mb-2">
					<a class="btn form-control bg-facebook" href="#">
						<img src="asset/images/icon-facebook.svg" class="img-fluid mr-2 icon">
						<p class="text-light">เข้าสู่ระบบด้วย FACEBOOK</p>
					</a>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-12 text-center">
					<p><strong>- หรือ -</strong></p>
				</div>
			</div>
			<div class="row mt-4 shadow-lg pt-4 pb-4" >
				<div class="col-12 text-center">
					<h4><strong>เข้าสู่ระบบ</strong></h4>
				</div>
				<div class="col-12">
					<form id="loginwithemail">
						<div class="form-group mt-4">
							<label for="inputUsername">ชื่อผู้ใช้งาน</label>
							<input type="email" class="form-control bg-light" id="inputUsername" placeholder="ชื่อผู้ใช้งาน">
						</div>
						<div class="form-group position-relative">
							<label for="inputPassword">รหัสผ่าน</label>
							<span class="position-absolute" style="right: 0;">
								<a href="#" class="text-blue">
									ลืมรหัสผ่าน
								</a>
							</span>
							<input type="password" class="form-control bg-light" id="inputPassword" placeholder="••••••••">
						</div>
						<div class="form-check custom-control">
							<input type="checkbox" class="form-check-input d-none" id="inputRemember">
							<label class="checkmark" for="inputRemember"></label>
							<label class="form-check-label" for="inputRemember">จดจำรหัสผ่าน</label>
						</div>
						<div class="text-center mt-4 mb-4">
							<button id="btn-login" class="btn btn-danger rounded pl-4 pr-4" style="background-color: #2f3638 !important; border-color: #76b6c2">เข้าสู่ระบบ</button>
						</div>
					</form>
				</div>
			</div>
			<div class="row text-center mt-4 mb-65">
				<div class="col-12">
					ยังไม่มีบัญชี ? <a href="register.html" class="text-danger" style="color: #76b6c2 !important;">สมัครสมาชิก</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript"> 
		$('#btn-login').on('click',function(){

			var user = $('#inputUsername').val();
			var password = $('#inputPassword').val();

			$.ajax({
				type: "POST",
				url: "structure/api_login.php",
				data: {
					
					'inputUsername': user,
					'inputPassword': password,
					
				},
				success: function(data) {
					alert(data);
          window.location.href = "index.php";
		      },
		  });
		});
		
	 </script>
</body>