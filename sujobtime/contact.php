<!DOCTYPE html>
<html>
<head>
	<?php  
	require_once('structure/head.php');
	?>
</head>
<body>
	<?php  
	require_once('structure/header.php');
	?>
	<div class="container">
	<div id="contact" class="container-fluid bg-grey mt-4">
		<h2 class="text-center">ติดต่อเรา</h2>
		<br>
		<div class="row">
			<br>
			<div class="col-sm-5">
				<p>Contact us and we'll get back to you within 24 hours.</p>
				<p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
				<p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
				<p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
			</div>
			<div class="col-sm-7 slideanim">
				<div class="row">
					<div class="col-sm-6 form-group">
						<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
						<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<button class="btn btn-default pull-right mt-4" type="submit">Send</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	
</body>
<?php  
require_once('structure/footer.php');
?>
</html>