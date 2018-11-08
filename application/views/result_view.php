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
				<a class="navbar-brand" href="http://localhost:3408/qlns"><strong>Quản lý nhân sự</strong></a>
				<ul class="nav navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="http://localhost:3408/qlns">Trang chủ</a>
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
			<?php 			
			foreach ($dsnv as $value) {
				?>
				<div class="col-sm-3">
					<div class="card" style="border: 2px solid #5198E1; border-radius: 10px; padding: 10px;margin-bottom: 20px; padding-right: 10px;">
						<div class="card-block">
							<img style="padding-right: 10px; width: 250px;" src="<?php echo(base_url()) ?><?php echo ($value['anhdaidien']); ?>" alt="">
							<h3 class="card-title" style="text-align: center;"><b><?php echo ($value['hoten']); ?></b></h3>
							<p class="card-text"><b>Mã nhân viên: </b><?php echo ($value['manv']); ?></p>
							<p class="card-text"><b>Năm sinh: </b><?php echo ($value['namsinh']); ?></p>
							<p class="card-text"><b>Quê quán: </b><?php echo ($value['quequan']); ?></p>
							<p class="card-text"><b>Chức vụ: </b><?php echo ($value['chucvu']); ?></p>
							<a href="<?php echo(base_url()) ?>c_nv/sua/<?php echo($value['manv']) ?>" class="btn btn-info">Update</a>
							<a href="<?php echo(base_url()) ?>c_nv/xoa/<?php echo($value['manv']) ?>" class="btn btn-danger">Delete</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</body>
</html>