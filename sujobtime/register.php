<!-- register.html -->
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
						<p class="text-light">ลงทะเบียนด้วย LINE</p>
					</a>
				</div>
				<div class="col-12 mb-2">
					<a class="btn form-control bg-gmail" href="#">
						<img src="asset/images/icon-gmail.svg" class="img-fluid mr-2 icon">
						<p class="text-light">ลงทะเบียนด้วย GMAIL</p>
					</a>
				</div>
				<div class="col-12 mb-2">
					<a class="btn form-control bg-facebook" href="#">
						<img src="asset/images/icon-facebook.svg" class="img-fluid mr-2 icon">
						<p class="text-light">ลงทะเบียนด้วย FACEBOOK</p>
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
					<h4><strong>สมัครสมาชิก</strong></h4>
				</div>
				<div class="col-12">
					<div id="loginwithemail">
						<div class="form-group mt-4">
							<label for="inputFullName">ชื่อ นามสกุล</label>
							<input type="text" class="form-control bg-light" id="inputFullName" placeholder="ชื่อ นามสกุล">
						</div>
						<div class="form-group mt-4">
							<label for="inputFullName">เบอร์โทรศัพท์</label>
							<input type="number" class="form-control bg-light" id="inputphone" placeholder="เบอร์โทรศัพท์">
						</div>
						
						<div class="form-group mt-4">
							<label for="inputEmail">อีเมล์</label>
							<input type="email" class="form-control bg-light" id="inputEmail" placeholder="wassana@example.com">
						</div>
						<div class="form-group mt-4">
							<label for="inputFullName">ชื่อผู้ใช้งาน</label>
							<input type="text" class="form-control bg-light" id="inputUsername" placeholder="ชื่อผู้ใช้งาน">
						</div>
						<div class="form-group">
							<label for="inputPassword">รหัสผ่าน</label>
							<input type="password" class="form-control bg-light" id="inputPassword" placeholder="••••••••">
						</div>
						<div class="form-group">
							<label for="inputCfPassword">ยืนยันรหัสผ่าน</label>
							<input type="password" class="form-control bg-light" id="inputCfPassword" placeholder="••••••••">
							<div class="form-group mt-4">
								<label for="sel1">ประเภท</label>
								<select class="form-control bg-light" id="type">
									<option value="1">นักศึกษา</option>
									<option value="2">ผู้ประกอบการ</option>
								</select>
							</div>
						</div>
						<div class="form-check custom-control">
							<input type="checkbox" class="form-check-input d-none" id="inputRemember">
							<label class="checkmark" for="inputRemember"></label>
							<label class="form-check-label" for="inputRemember">
								ฉันยอมรับ
								<a href="#" class="text-danger">
									เงื่อนไขและข้อตกลง
								</a>
							</label>
						</div>
						<div class="text-center mt-4 mb-4">
							<button type="submit" id="btn-register" class="btn btn-danger rounded pl-4 pr-4" style="background-color: #2f3638 !important; border-color: #76b6c2">
								สมัครสมาชิก
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center mt-4 mb-65">
				<div class="col-12">
					มีบัญชีอยู่แล้ว ? <a href="login.php" class="text-danger" style="color: #76b6c2 !important;">เข้าสู่ระบบ</a>
				</div>
			</div>
		</div>
	</div>

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
</body>