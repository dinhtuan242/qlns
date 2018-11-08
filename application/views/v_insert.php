<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý nhân sự</title>
	<script type="text/javascript" src="<?php echo(base_url()) ?>/bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="<?php echo(base_url()) ?>bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-light bg-faded">
				<a class="navbar-brand" href="http://localhost:3408/qlns/"><strong>Quản lý nhân sự</strong></a>
				<ul class="nav navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="http://localhost:3408/qlns/">Trang chủ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo(base_url()) ?>c_nv/loadinsert">Thêm nhân viên</a>
					</li>
				</ul>
				<form class="form-inline navbar-form pull-right" action="<?php echo(base_url()) ?>c_nv/search" method="POST">
					<input class="form-control" name="keyword" type="text" placeholder="Thông tin tìm kiếm">
					<button class="btn btn-success-outline" type="submit">Tìm kiếm</button>
				</form>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<form action="<?php echo(base_url()) ?>c_nv/insert" method="POST" name="themnv" enctype="multipart/form-data">
				<div class="form-group">
					<label>Mã nhân viên</label>
					<input style="width: 300px;" type="text" class="form-control" placeholder="Mã nhân viên" name="manv">
				</div>
				<div class="form-group">
					<label>Họ tên</label>
					<input style="width: 300px;" type="text" name="hoten" class="form-control" placeholder="Họ tên">
				</div>
				<div class="form-group">
					<label>Năm sinh</label>
					<input style="width: 300px;" type="text" name="namsinh" class="form-control" placeholder="Năm sinh">
				</div>
				<div class="form-group">
					<label>Quê quán</label>
					<input style="width: 300px;" type="text" name="quequan" class="form-control" placeholder="Quê quán">
				</div>
				<div class="form-group">
					<label>Chức vụ</label>
					<input style="width: 300px;" type="text" name="chucvu" class="form-control" placeholder="Chức vụ">
				</div>
				<div class="form-group">
					<label>Ảnh đại diện</label>
					<input style="width: 300px;" type="file" name="anhdaidien" class="form-control" placeholder="Ảnh đại diện">
				</div>
				<button type="submit" class="btn btn-success">Thêm mới</button>
			</form>
		</div>
	</div>




	
</body>
</html>