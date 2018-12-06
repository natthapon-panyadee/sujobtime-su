<!-- payment.html -->
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

	<div class="container">
		<div class="row step-wrap mt-65 mb-4 text-center">
			<div class="col-33 p-0">
				<div class="stpe-max">
					<div class="step-circle border-danger">
						<img src="asset/images/icon-step-1-active.png">
					</div>
				</div>
				<p class="mt-2 text-soft-danger">กรอกข้อมูลของคุณ</p>
			</div>
			<div class="col-1 p-0">
				<div class="step-dash bg-soft-danger"></div>
			</div>
			<div class="col-33 p-0">
				<div class="stpe-max">
					<div class="step-circle border-danger">
						<img src="asset/images/icon-step-2-active.png">
					</div>
				</div>
				<p class="mt-2 text-soft-danger">ชำระเงินตามรายการ</p>
			</div>
			<div class="col-1 p-0">
				<div class="step-dash bg-soft-gray"></div>
			</div>
			<div class="col-33 p-0">
				<div class="stpe-max">
					<div class="step-circle border-soft-gray">
						<img src="asset/images/icon-step-3.png">
					</div>
				</div>
				<p class="mt-2">ทำรายการสำเร็จ !</p>
			</div>
		</div>

		<div class="row border-bottom">
			<div class="col-12 mb-4">
				<h3><strong>Choose Payment</strong></h3>
			</div>
		</div><!-- row -->

		<div class="row mt-2 mb-2 border-bottom selectPayment">
			<div class="col-4 col-sm-3 text-center">
				<input class="d-none" id="paymentCard" type="radio" name="typePayment" value="1" checked/>
				<label class="col-12 border rounded typePayment pt-4 pb-4" for="paymentCard">
					<img src="asset/images/icon-payment-card.svg" class="img-fluid icon-2 mr-2">
					<p class="m-0 d-inline">บัตรเครดิต / เดบิต</p>
				</label>
			</div>
			<div class="col-4 col-sm-3 text-center">
				<input class="d-none" id="paymentInternet" type="radio" name="typePayment" value="2" />
				<label class="col-12 border rounded typePayment pt-4 pb-4" for="paymentInternet">
					<img src="asset/images/icon-payment-internet.svg" class="img-fluid icon-2 mr-2">
					<p class="m-0 d-inline">Internet Banking</p>
				</label>
			</div>
			<div class="col-4 col-sm-3 text-center">
				<input class="d-none" id="paymentBanking" type="radio" name="typePayment" value="3" />
				<label class="col-12 border rounded typePayment pt-4 pb-4" for="paymentBanking">
					<img src="asset/images/icon-payment-banking.svg" class="img-fluid icon-2 mr-2">
					<p class="m-0 d-inline">โอนเงินผ่านธนาคาร</p>
				</label>
			</div>
		</div><!-- row -->

		<div class="row mt-2 mb-2 border-bottom">
			<div class="col-12">
				<div class="col-12 col-sm-3">
					<div class="form-group">
					    <label class="text-dark" for="ipCardName">
					    	<strong>
					    		ชื่อ นามสกุล ผู้ถือบัตร
					    	</strong>
					   	</label>
					    <input type="text" class="form-control" id="ipCardName" placeholder="ชื่อสมมติ นามสกุลดี">
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col-12 col-sm-3">
					<div class="form-group">
					    <label class="text-dark" for="ipCardNumber">
					    	<strong>
					    		หมายเลขบัตรเครดิต หรือ เดบิต
							</strong>
					    </label>
					    <input type="text" class="form-control" id="ipCardNumber" placeholder="xxxx-xxxx-xxxx-xxxx">
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col-12 col-sm-3">
					<div class="form-group">
					    <label class="text-dark" for="ipCvv">
					    	<strong>
					    		CVV
							</strong>
					    </label>
					    <input type="text" class="form-control" id="ipCvv" placeholder="124">
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col-12 col-sm-3">
					<div class="form-group">
					    <label class="text-dark" for="ipDate">
					    	<strong>
					    		วันที่บัตรหมดอายุ
							</strong>
					    </label>
					    <input type="date" class="form-control" id="ipDate">
					</div>
				</div>
			</div>
		</div><!-- row -->
		<div class="row mt-4 mb-4">
			<div class="col-6 col-sm-3 offset-sm-6">
				<a class="form-control btn btn-outline-danger text-danger" href="customer-information.html">กลับ</a>
			</div>
			<div class="col-6 col-sm-3">
				<a class="form-control btn btn-danger text-light" href="payment-success.html">ต่อไป</a>
			</div>
		</div><!-- row -->
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
	$(window).bind('load resize', function() {
		//create martop with jquery
		height = $('.step-circle').css('height');
		marginTop = (parseInt(height)/2)-1+"px";
		$('.step-dash').css('margin-top',marginTop)

	});
</script>