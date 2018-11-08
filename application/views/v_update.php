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
						<a class="nav-link" href="<?php echo(base_url()) ?>index.php/c_nv/loadinsert">Thêm số mới</a>
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
			<?php 			
			foreach ($dsnv as $value) {
				?>
				<form action="<?php echo(base_url()) ?>index.php/c_nv/update" method="POST" name="suanv" enctype="multipart/form-data">
					<div class="form-group">
						<label>Mã Nhân viên</label>
						<input style="width: 300px;" type="text" class="form-control" placeholder="Mã nhân viên" name="manv" value="<?php echo($value['manv']) ?>" readonly>
					</div>
					<div class="form-group">
						<label>Họ tên</label>
						<input style="width: 300px;" type="text" class="form-control" placeholder="Họ tên" name="hoten" value="<?php echo($value['hoten']) ?>">
					</div>
					<div class="form-group">
						<label>Năm sinh</label>
						<input style="width: 300px;" type="text" name="namsinh" class="form-control" placeholder="Năm sinh" value="<?php echo($value['namsinh']) ?>">
					</div>
					<div class="form-group">
						<label>Quê quán</label>
						<input style="width: 300px;" type="text" name="quequan" class="form-control" placeholder="Quê quán" value="<?php echo($value['quequan']) ?>">
					</div>
					<div class="form-group">
						<label>Chức vụ</label>
						<input style="width: 300px;" type="text" name="chucvu" class="form-control" placeholder="chucvu" value="<?php echo($value['chucvu']) ?>">
					</div>
					<div class="form-group">
						<label>Ảnh đại diện</label>
						<img src="<?php echo ($value['anhdaidien']); ?>" alt="">
						<input style="width: 300px;" type="file" name="anhdaidien" class="form-control" placeholder="Ảnh đại diện" value="<?php echo ($value['anhdaidien']); ?>">
					</div>
					<button type="submit" class="btn btn-success">Cập nhật</button>
				</form>
			<?php } ?>
		</div>
	</div>
</body>
</html>