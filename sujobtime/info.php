<!-- usermanage-info.html -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- bootstrap 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Athiti|Rubik" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!-- kwsslideitem -->
	<link rel="stylesheet" href="asset/css/kwsslideitem.min.css">
	<script src="asset/js/kwsslideitem.min.js"></script>

	<!-- custom -->
	<link rel="stylesheet" type="text/css" href="asset/css/custom.css">
	<script src="asset/js/custom.js"></script>

</head>
<body>
	<header>
		<nav class="navbar navbar-light bg-light">
			<div class="container p-0 justify-content-end">
				<div class="pl-3 pr-3 border-right">
					<a href="register.html" class="text-secondary">Register</a>
				</div>
				<div class="pl-3">
					<a href="login.html" class="text-secondary">Login</a>
				</div>
			</div><!-- container -->
		</nav>
		<nav class="navbar navbar-light">
			<div class="container p-0 justify-content-between pb-2 pt-2">
				<a class="navbar-brand" href="index.html"><strong>LOGO</strong></a>
				<div class="form-inline search">
					<input class="form-control w-100 badge-pill" type="search" placeholder="Search" aria-label="Search">
				</div>
				<div class="form-inline">
					<a href="cart.html" class="text-dark m-0">
						<img src="asset/images/icon-cart.png" class="img-fluid mr-2 mt-0-5 icon">
						<p class="d-inline mr-2 mt-2">
							MY CART
						</p>
						<span class="badge badge-danger badge-pill position-relative" style="top: -2px;">
							1
						</span>
					</a>
				</div>
			</div><!-- container -->
		</nav>
		<nav class="navbar navbar-dark navbar-expand-lg bg-danger">
			<div class="container p-0 ">
				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center text-center" id="menu">
					<div class="mx-3">
						<a href="index.html" class="text-light">หน้าแรก</a>
					</div>
					<div class="mx-3">
						<a href="#" class="text-light">สินค้า</a>
					</div>
					<div class="mx-3">
						<a href="#" class="text-light">วิธีใช้งานเว็บไซต์</a>
					</div>
					<div class="mx-3">
						<a href="#" class="text-light">เเจ้งชำระเงิน</a>
					</div>
					<div class="mx-3">
						<a href="#" class="text-light">เกี่ยวกับเรา</a>
					</div>
					<div class="mx-3">
						<a href="#" class="text-light">ติดต่อเรา</a>
					</div>
				</div><!-- navbar-collapse -->
			</div><!-- container -->
		</nav>
	</header>
	<div class="container clearfix position-relative">
		<div class="row m-0 mt-2 d-block d-sm-none">
			<div class="col-12 p-0">
				<button class="btn form-control btn-danger" id="toggleMenu">menu</button>
			</div>
		</div>
		<div class="left-menu d-sm-block">
			<div class="row m-0 mt-4">
				<div class="col-12">
					<h4 class="border-bottom-5 pb-2"><strong>ข้อมูลรายการสั่งซื้อ</strong></h4>
				</div>
				<div class="col-12">
					<ul class="nav flex-column">
						<li class="nav-item border-bottom">
    						<a class="nav-link" href="usermanage-list.html">รายการสั่งซื้อ</a>
  						</li>
						<li class="nav-item border-bottom">
    						<a class="nav-link" href="usermanage-history.html">ประวัติการซื้อสินค้า</a>
  						</li>
						<li class="nav-item border-bottom">
    						<a class="nav-link" href="usermanage-payment.html">แจ้งชำระเงิน</a>
  						</li>
						<li class="nav-item border-bottom">
    						<a class="nav-link" href="#">การชำระเงิน</a>
  						</li>
						<li class="nav-item border-bottom">
    						<a class="nav-link" href="usermanage-address.html">รายละเอียดที่อยู่จัดส่ง</a>
  						</li>
					</ul>
				</div>
			</div>
			<div class="row m-0 mt-4 mb-4">
				<div class="col-12">
					<h4 class="border-bottom-5 pb-2"><strong>ข้อมูลบัญชีของคุณ</strong></h4>
				</div>
				<div class="col-12">
					<ul class="nav flex-column">
						<li class="nav-item border-bottom">
    						<a class="nav-link active" href="usermanage-info.html">ข้อมูลส่วนตัว</a>
  						</li>
  						<li class="nav-item border-bottom">
    						<a class="nav-link" href="usermanage-changepassword.html">เปลี่ยนรหัสผ่าน</a>
  						</li>
					</ul>
				</div>
			</div>
		</div><!-- left-menu -->
		<div class="right-content">
			<div class="row mt-4">
				<div class="col-12">
					<h4 class="border-bottom-5 pb-2"><strong>ข้อมูลส่วนตัว</strong></h4>
				</div>
				<div class="col-12 mt-2">
					<div class="row shadow m-0 p-4">
						<div class="col-12 col-sm-8">
							<div class="float-left icon-profile">
								<img src="asset/images/user.jpg" class="img-fluid rounded-circle overflow-hidden">
							</div>
							<div class="float-left ml-2 ml-sm-4">
								<h4 class="m-0">USERNAME</h4>
								<p class="m-0">ชื่อจริง นามสกุล</p>
								<p class="m-0 mt-4 text-success"><span><img src="asset/images/icon-correct.svg" class="img-fluid icon-2"></span>ยืนยันอีเมล์แล้ว</p>
							</div>
							<div class="float-right">
								<a href="usermanage-info-edit.html" class="text-muted"><u>แก้ไข</u></a>
							</div>
						</div>
						<div class="col-12 col-sm-4 mt-4 mt-sm-0">
							<p class="m-0">ยอดเงินคงเหลือ</p>
							<h4 class="text-info">231,021 ฿</h4>
							<a href="#" class="btn btn-outline-danger text-danger form-control"><strong>เติมเงิน</strong></a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- right-content -->
	</div>
	<footer>
		<div class="border-top">
			<div class="container mt-4 mb-4">
				<div class="row">
					<div class="col-6 col-sm-4">
						<h6><strong>Contact Us</strong></h6>
						<small>
							<p>
								Bang Na-Trat Rd, Tambon Bang Kaeo,
								Amphoe Bang Phli,
								Samut Prakan 10540
							</p>
							<p class="m-0">
								example@admin.co.th
							</p>
							<p class="m-0">
								641-275-2938
							</p>
						</small>
					</div>
					<div class="col-6 col-sm-2">
						<h6><strong>Supports</strong></h6>
						<small>
							<p>
								How to & Guideline
								Support Center
								Q&A
							</p>
						</small>
					</div>
					<div class="col-12 col-sm-6 mt-4 mt-sm-0">
						<h6><strong>Subscription</strong></h6>
						<small>
							<p>
								Subscribe to recieve special promotion and discounts ! We’ve more to offer.
							</p>
						</small>
						<div class="input-group mb-3">
						  <input type="text" class="form-control" placeholder="Email">
						  <div class="input-group-append">
						    <button class="btn btn-danger">Subscribe</button>
						  </div>
						</div>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- border-top -->
		<div class="border-top">
			<div class="container mt-2 mb-2">
				<div class="row">
					<div class="col">
						<p class="m-0">
							<small>
								Copyright ©2018 All Rights Reserved. - Terms & Privacy
							</small>
						</p>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- border-top -->
	</footer>
</body>
</html>
<script>
	$("button#toggleMenu").bind('click',function(){
	    $( ".left-menu" ).slideToggle( "slow" );
	});
</script>