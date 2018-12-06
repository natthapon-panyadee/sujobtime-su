<!DOCTYPE html>
<html>
<head>
	<?php 
		require_once('structure/head.php');
	 ?>
</head>
<body>
	<?php 
		require_once('structure/header.php')
	 ?>

	 <div class="container">
	 	<h1 class="col-6 offset-5 mt-4">ประกาศงาน</h1>
		<div class="row mt-4">
			<input class="form-control form-control-lg" type="text" placeholder="ค้นหางาน" id="search">
		</div>
		<div class="row mt-4" id="show_item">
			<?php
				require_once'structure/connectDB.php';
				$sql = "SELECT * FROM postwork WHERE work_id ORDER by work_id DESC LIMIT 20";
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
										echo 'images/user-default.jpg';
									}
								?>"
							>
						</div><!-- col-4 -->
						<div class="col-8 col-lg-12">
							<div class="card-body">
								<h5 class="card-title"><?php echo $row['namework']; ?></h5>
								<h5><?php echo $row['detailwork']; ?></h5>
								<h5>งบ <?php echo $row['price']; ?> บาท</h5>
								<a href="api_workdetail.php?id=<?php echo $row['work_id'];  ?>" class="btn btn-danger w-100" style="background-color: #2f3638 !important; border-color: #76b6c2">รายละเอียดงาน</a>
							</div>
						</div><!-- col-8 -->
					</div><!-- row -->
				</div><!-- card -->
			</div>
			<?php
							}
						}
					}
			?>
		</div><!-- row -->

		<div class="row mt-4">
			<nav aria-label="Page navigation">
				<ul class="pagination justify-content-end">
					
				</ul>
			</nav>
		</div>
	</div><!-- product slide -->
	<?php
		require_once('structure/footer.php')
	?>
</body>
</html>
<script>
	
	$('#search').on('keypress keyup',function(){
		filter($('#search').val(),0);
		setPage($('#search').val());
	});

	$('.pagevalue').on('click',function(){
		console.log('click');
		// console.log($('li.page-item .page-link').attr('value'));
		// filter($('#search').val(),$('li.page-item .page-link').attr('value'));
		// setPage($('#search').val());
	});
	
	$( document ).ready(function() {
	    setPage("");
	});
	function setPage(text){
		$.ajax({
			type: "POST",
			url: "structure/api_checkwork.php",
			data: {
				'tag':text,
			},
			success: function(data) {
				pagination(data);
			}
		});
	}
	function filter(text,page){
		$.ajax({
			type: "POST",
			url: "structure/api_findwork.php",
			data: {
				'tag':text,
				'page':page,
			},
			success: function(data) {
				$('#show_item').html(data);
			}
		});
	}
	function pagination(data){
		var npage = data/20;
		var page="";
		for (var i = 1; i < npage+1; i++) {
			page+='<li class="page-item pagevalue"><button class="page-link" value="'+i+'">'+i+'</button></li>';
		}
		$('ul.pagination').html(page);
	}
</script>