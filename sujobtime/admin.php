<!-- admin.php -->
<?php
	session_start();
	// require_once("structure/api_login.php");
	if(!isset($_SESSION['admin'])||isset($_SESSION['admin'])==null||isset($_SESSION['admin'])==""){


		header("Location: login.php");
	}else{
		if($_SESSION['admin']==1){
			
		}else{
			header("Location: login.php");
		}
	}
?>
<html>
<head>
	<?php require_once('structure/head.php'); ?>
	<style type="text/css">
		#tabMenu{
			width: calc(100% - 40px);
			margin: 0 auto;
		}
		#tabMenu li.nav-item{
			width: 50%;
			background-color: unset !important;
		}
		#tabMenu li.nav-item a.nav-link{
			width: 100%;
			background-color: #ccc;
			border-top-left-radius: 0;
	    	border-top-right-radius: 0;
	    	text-align: center;
		}
		#tabMenu li.nav-item a.nav-link.active{
			background-color: #6ECCBA;
		}
		#tabControl{
			width: calc(100% - 40px);
			margin: 0 auto;
			height: calc(100% - 55px);
		}
		#tabControl img{
			width: 25px;
		}
		#box-table{
			height: calc(100% - 60px);
			margin:0 10px 10px;
			width:calc(100% - 20px);
			overflow: auto;
		}
		@media only screen and (min-width: 992px) {
			#tabMenu{
				width: 150px;
				float: right;
				margin-top: 20px;
			}
			#tabMenu li.nav-item{
				width: auto;
				margin-top: 10px;
			}
			#tabMenu li.nav-item a.nav-link{
				width: 120px;
				border-top-left-radius: 0;
	    		border-top-right-radius: .25rem;
	    		border-bottom-right-radius: .25rem;
			}
			#tabMenu li.nav-item a.nav-link.active{
				width: 150px;
				padding-left: 40px;
			}
			#tabControl{
				width: calc(100% - 150px);
				float: left;
				position: static;
				z-index: 200;
				height: calc(100% - 20px);
			}
			.drinkcard-cc{
				border-radius: 15px !important;
			}
			.cc-selector input:checked +.drinkcard-cc{
			    border: 3px solid #007bff !important;
			}
		}
		.cc-selector input{
		    margin:0;padding:0;
		    -webkit-appearance:none;
		       -moz-appearance:none;
		            appearance:none;
		}
		.cc-selector input:checked +.drinkcard-cc{
		    border: 1.5px solid #007bff;
		    position: relative;
		}
		.cc-selector input:checked +.drinkcard-cc:after{
			width: 20px;
			height: 20px;
			content: "";
		    position: absolute;
		    background-image: url('images/check-circle-solid.svg');
		    right: 0;
		    top: 0;
		    transform: translate(50%,-50%);
		    background-color: #fff;
		    border-radius: 100%;
		}
		.drinkcard-cc{
			border-radius: 8px;
		    cursor:pointer;
		    display:inline-block;
		    max-width:150px;
		}
		.drinkcard-cc img{
		    width:100% !important;
		}
		.edit, .delect{
			cursor: pointer;
		}
	</style>
</head>
<body style="overflow: hidden;" onload="getData(1); pagination();" class="p-0">
	<nav class="navbar navbar-light" style="max-height: 80px;">
		<div class="navbar-brand mr-auto">
			<img src="images/logo.svg" width="120" alt="" class="img-fluid d-lg">
			<img src="images/icon.png" width="40" alt="" class="img-fluid d-xs">
		</div>
		<a class="btn btn-danger cl_white" id="logout">
			ออกจากระบบ
		</a>
	</nav>
	<div class="container p-0" style="height: calc(100% - 80px);">
		<ul class="nav nav-tabs" id="tabMenu">
			<li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-selected="true">
					หน้าหลัก
					<img src="images/home-solid.svg" class="d-inline img-fluid" width="20" style="margin-top: -5px;">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-selected="false">
					เพิ่มรถยนต์
					<img src="images/plus-solid.svg" class="d-inline img-fluid" width="15" style="margin-top: -5px;">
				</a>
			</li>
		</ul>
		<div class="tab-content shadow-lg" id="tabControl">
			<div class="tab-pane fade show active" id="home" role="tabpanel">
				<div class="row m-0  border-bottom" style="height: 60px;">
					<div class="col">
						<h4 class="d-inline-block" style="line-height: 60px;">รายการสินค้า</h4>
						<div class="form-group float-right" style="margin: 11px 0;">
							<select class="form-control" id="filter_brand">
								<option value="all">ทั้งหมด</option>
								<?php
									require('structure/api_connect.php');
									$sql = "SELECT brand_name FROM tb_brand";
									if($result=$conn->query($sql)){
										if($result->num_rows>0){
											while($row = $result->fetch_assoc()){
								?>
									<option value="<?php echo $row['brand_name'] ?>"><?php echo $row['brand_name'] ?></option>
								<?php
											}
										}
									}
								?>
		                    </select>
						</div>
					</div>
				</div>
				<div class="row m-0" style="height: calc(100% - 60px);">
					<div id="box-table">
						<table class="table m-0" style="max-width: 100%;">
							<thead>
								<tr>
									<th scope="col" class="text-center" style="width:40px;">ลำดับ</th>
									<th scope="col" style="width:30%;">ยี่ห้อรถ</th>
									<th scope="col" style="width:30%;">รุ่นรถ</th>
									<th scope="col" style="min-width:120px">สินค้าที่รับรอง</th>
									<th scope="col" class="text-center">แก้ไข</th>
									<th scope="col" class="text-center">ลบ</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<nav aria-label="Page navigation" style="width: 100%; height: 50px;">
						<ul class="pagination justify-content-end mr-2">

						</ul>
					</nav>
				</div>
			</div>
			<div class="tab-pane fade" id="add" role="tabpanel">
				<div class="row m-0 border-bottom" style="height: 60px;">
					<div class="col text-center mt-2">
						<h4 class="title-edit" style="line-height: 60px;">เพิ่มยี่ห้อรถยนต์</h4>
						<input type="hidden" id="product_id" value="0">
					</div>
				</div>
				<div class="row m-0">
					<div class="col-12 col-lg-6 mt-4">
						<div class="form-group mt-lg-4">
							<label><div class="border border-dark rounded-circle d-inline p-2 mr-2">1</div>กรอกยี่ห้อรถยนต์</label>
							<select class="form-control mt-2" id="brand_name">
								<?php
									require('structure/api_connect.php');
									$sql = "SELECT brand_name FROM tb_brand";
									if($result=$conn->query($sql)){
										if($result->num_rows>0){
											while($row = $result->fetch_assoc()){
								?>
									<option value="<?php echo $row['brand_name'] ?>"><?php echo $row['brand_name'] ?></option>
								<?php
											}
										}
									}
								?>
		                    </select>
						</div>
					</div><!-- col-12 -->
					<div class="col-12 col-lg-6 mt-lg-4">
						<div class="form-group mt-lg-4">
							<label><div class="border border-dark rounded-circle d-inline p-2 mr-2">2</div>กรอกชื่อรุ่นรถยนต์</label>
							<input type="text" class="form-control mt-2" id="product_gen">
						</div>
					</div><!-- col-12 -->
					<div class="col-12">
						<div class="form-group mt-lg-4">
							<label><div class="border border-dark rounded-circle d-inline p-2 mr-2">3</div>เลือกผลิตภัณฑ์ที่สนับสนุนรถยนต์</label>
							<div class="row m-0 cc-selector">
								<div class="col-4 text-center">
									<input class="d-none" id="red" type="checkbox" name="red" value="1" />
									<label class="drinkcard-cc" for="red">
										<img src="images/product_red.png" class="img-fluid" id="img_red">
									</label>
									<input class="d-none" id="f_red" name="f_red" type="file" accept="image/x-png,image/gif,image/jpeg"/>
									<label for="f_red" class="btn btn-danger m-0 w-100">
										อัพโหลด
									</label>
								</div>
								<div class="col-4 text-center">
									<input class="d-none" id="blue" type="checkbox" name="blue" value="1" />
									<label class="drinkcard-cc" for="blue">
										<img src="images/product_blue.png" class="img-fluid" id="img_blue">
									</label>
									<input class="d-none" id="f_blue" name="f_blue" type="file" accept="image/x-png,image/gif,image/jpeg"/>
									<label for="f_blue" class="btn btn-primary m-0 w-100">
										อัพโหลด
									</label>
								</div>
								<div class="col-4 text-center">
									<input class="d-none" id="green" type="checkbox" name="green" value="1" />
									<label class="drinkcard-cc" for="green">
										<img src="images/product_green.png" class="img-fluid" id="img_green">
									</label>
									<input class="d-none" id="f_green" name="f_green" type="file" accept="image/x-png,image/gif,image/jpeg"/>
									<label for="f_green" class="btn btn-success m-0 w-100">
										อัพโหลด
									</label>
								</div>
							</div>
						</div>
					</div><!-- col-12 -->
					<div class="col-12 text-center">
						<button class="btn btn-secondary" id="form_cancle">ยกเลิก</button>
						<button class="btn cl_white" style="background-color: #6ECCBA;"  id="form_save">เพิ่มข้อมูล</button>
					</div><!-- col-12 -->
				</div>
			</div>
		</div>
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog modal-dialog-centered">
		        <div class="modal-content">
		            <div class="modal-header">
		                ข้อความแจ้งเตือน
		            </div>
		            <div class="modal-body text-center mt-4 mb-4">
		                ท่านต้องการลบข้อมูลนี่หรือไม่
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
		                <a class="btn btn-danger btn-ok cl_white" data-dismiss="modal" id="form_delect">ลบทันที</a>
		            </div>
		        </div>
		    </div>
		</div>
	</div>

</body>
</html>
<script type="text/javascript">
	function getData(data) {
		filter = $('#filter_brand').val();
    	$.ajax({
      		type: "POST",
      		url: "structure/api_table.php",
      		data: {
        		'data': data,
        		'filter': filter,
      		},
      		success: function(data) {
        		$('tbody').html(data);
      		},
    	});
  	}
	$("select#filter_brand").change(function(){
          filter_brand = $(this).val();
          console.log(filter_brand);
          getData(1);
          pagination();
    });
  	$('#form_cancle,#home-tab').click(function(e){
  		$('#img_green').attr('src','images/product_green.png');
  		$('#img_blue').attr('src','images/product_blue.png');
  		$('#img_red').attr('src','images/product_red.png');

  		$('#add').removeClass('active');
  		$('#add').removeClass('show');
  		$('#home').addClass('active');
  		$('#home').addClass('show');
  		$('#add-tab').removeClass('active');
  		$('#home-tab').addClass('active');

  		$('#product_gen').val("");
  		$('#red').prop('checked', false);
  		$('#blue').prop('checked', false);
  		$('#green').prop('checked', false);
  		$('#product_gen').removeAttr('disabled'); 
  		$('#brand_name').removeAttr('disabled'); 
  		$('.title-edit').html('เพิ่มยี่ห้อรถยนต์');
  		$('#add-tab').html('เพิ่มรถยนต์ <img src="images/plus-solid.svg" class="d-inline img-fluid" width="15" style="margin-top: -5px;">');
  		$('#form_save').html('เพิ่มข้อมูล');
  	});
  	$('#form_save').click(function(e){
  		var red=0,green=0,blue=0;
  		if ($('input[name="red"]').is(":checked")){
			red = $('input[name="red"]').val();
		}
  		if ($('input[name="green"]').is(":checked")){
			green = $('input[name="green"]').val();
		}
  		if ($('input[name="blue"]').is(":checked")){
			blue = $('input[name="blue"]').val();
		}
		if($('#form_save').html()=="เพิ่มข้อมูล"){
  			if($('#product_gen').val()!=""&&$('#brand_name').val()!=""){
  				addData($('#product_gen').val(),$('#brand_name').val(),red,blue,green);
  			}
  		}else if($('#form_save').html()=="อัพเดทข้อมูล"){
  			updateData($('#product_id').val(),$('#product_gen').val(),$('#brand_name').val(),red,blue,green);
  		}
  		$('#img_green').attr('src','images/product_green.png');
  		$('#img_blue').attr('src','images/product_blue.png');
  		$('#img_red').attr('src','images/product_red.png');

  		$('#add').removeClass('active');
  		$('#add').removeClass('show');
  		$('#home').addClass('active');
  		$('#home').addClass('show');
  		$('#add-tab').removeClass('active');
  		$('#home-tab').addClass('active');

  		$('#product_gen').val("");
  		$('#red').prop('checked', false);
  		$('#blue').prop('checked', false);
  		$('#green').prop('checked', false);
  		$('#product_gen').removeAttr('disabled');
  		$('#brand_name').removeAttr('disabled');
  		$('.title-edit').html('เพิ่มยี่ห้อรถยนต์');
  		$('#add-tab').html('เพิ่มรถยนต์ <img src="images/plus-solid.svg" class="d-inline img-fluid" width="15" style="margin-top: -5px;">');
  		$('#form_save').html('เพิ่มข้อมูล');
  	});

  	$('#form_delect').click(function(e){
  		delectData($(this).attr('value'));
  	});
	function addData(product_gen,brand_name,red,blue,green) {
		var formData = new FormData();
		formData.append('product_gen',product_gen);
		formData.append('brand_name', brand_name);
		formData.append('red',red);
		formData.append('blue', blue);
		formData.append('green', green);
		// Attach file
		if($('input[name=f_red]')[0].files[0]){
			formData.append('f_red', $('input[name=f_red]')[0].files[0]);
			formData.append('if_red',1);
			//upload
		}else{
			formData.append('if_red',0);
		}
		if($('input[name=f_blue]')[0].files[0]){
			formData.append('f_blue', $('input[name=f_blue]')[0].files[0]);
			formData.append('if_blue',1);
		}else{
			formData.append('if_blue', 0);
		}
		if($('input[name=f_green]')[0].files[0]){
			formData.append('f_green', $('input[name=f_green]')[0].files[0]);
			formData.append('if_green', 1);
		}else{
			formData.append('if_green', 0);
		}
    	$.ajax({
      		type: "POST",
      		mimeTypes:"multipart/form-data",
      		url: "structure/api_addData.php",
      		contentType: false,
    		processData: false,
      		data: formData,
      		success: function(data) {
        		alert(data);
        		getData(1);
      		},
    	});
  	}
	function updateData(product_id,product_gen,brand_name,red,blue,green) {
		var formData = new FormData();
		formData.append('product_id',product_id);
		formData.append('product_gen',product_gen);
		formData.append('brand_name', brand_name);
		formData.append('red', red);
		formData.append('blue',blue);
		formData.append('green', green);
		// Attach file
		if($('input[name=f_red]')[0].files[0]){
			formData.append('f_red', $('input[name=f_red]')[0].files[0]);
			formData.append('if_red',1);
		}else{
			formData.append('if_red',0);
		}
		if($('input[name=f_blue]')[0].files[0]){
			formData.append('f_blue', $('input[name=f_blue]')[0].files[0]);
			formData.append('if_blue',1);
		}else{
			formData.append('if_blue', 0);
		}
		if($('input[name=f_green]')[0].files[0]){
			formData.append('f_green', $('input[name=f_green]')[0].files[0]);
			formData.append('if_green', 1);
		}else{
			formData.append('if_green', 0);
		}
    	$.ajax({
      		type: "POST",
      		mimeTypes:"multipart/form-data",
      		url: "structure/api_updateData.php",
      		contentType: false,
    		processData: false,
      		data: formData,
      		success: function(data) {
        		alert(data);
        		getData(1);
      		},
    	});
  	}
	function delectData(id) {
    	$.ajax({
      		type: "POST",
      		url: "structure/api_delectData.php",
      		data: {
        		'product_id': id,
      		},
      		success: function(data) {
        		alert(data);
        		getData(1);
      		},
    	});
  	}
	function pagination() {
		filter = $('#filter_brand').val();
    	$.ajax({
      		type: "POST",
      		url: "structure/api_pagination.php",
      		data: {
        		'filter': filter,
      		},
      		success: function(data) {
      			showPagination(data);
      		},
    	});
  	}
	function showPagination(data) {
		// console.log(data);
    	$('.pagination').html(data);
  	}
  	$('#logout').click(function(e){
		$.ajax({
	      	type: "POST",
	      	url: "structure/api_logout.php",
	      	data: {

	      	},
	      	success: function() {
	        	window.location.href = "admin.php";
	       	},
	    });
	});
    function readURL(input,res){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(res).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("input:file").change(function(){
    	var name_img = $(this).attr('name');
    	var res = '#img_'+name_img.split("_")[1];
        readURL(this,res);
    });
</script>
