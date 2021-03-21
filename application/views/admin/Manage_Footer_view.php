<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Manage Footer</title>
	<link rel="icon" href="<?= base_url() ?>images/logo.png"  >

</head>
<body>
	<?php require('header_admin.php') ?>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Manage Footer
				<small>Manage Footer</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>
		<!-- Main content -->
		

	<?php foreach ($footer as $key =>$value): ?>
		<?php 
			if ($key == "mangXH") {
				$mangXH = $value;	
			}
			if ($key == "Hotline") {
				$Hotline = $value;	
			}
			if ($key == "Address") {
				$Address = $value;	
			}
			if ($key == "Gmail") {
				$Gmail = $value;	
			}
			if ($key == "Title") {
				$Title = $value;	
			}
			if ($key == "logo") {
				$logo = $value;	
			}
		 ?>
		<?php endforeach ?>	
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="jumbotron jumbotron-fluid text-center">
						<div class="container">
							<h1 class="display-5">Manage Footer</h1>
							<p class="lead">Form này cho phép người dùng sửa thông tin footer.</p>
						</div>
					</div>
					
					<form method="POST" enctype="multipart/form-data" action="<?= base_url() ?>admin/Manage_Footer/updateFooter">
						<h4 class="alert alert-info">Thông tin mạng xã hội</h4>
					
						
						<div class="form-group">
							<label  for="exampleInputEmail1">Link Facebook</label>
							<input value="<?= $mangXH['linkFB'] ?>" name="linkFB" type="text" class="form-control" id="linkFB"  placeholder="linkFB">
						</div>
						<div class="form-group">
							<label  for="exampleInputEmail1">Link Twitter</label>
							<input value="<?= $mangXH['linkTwitter'] ?>" name="linkTwitter" type="text" class="form-control" id="linkTwitter"  placeholder="linkTwitter">
						</div>
						<div class="form-group">
							<label  for="exampleInputEmail1">Link Github</label>
							<input value="<?= $mangXH['linkGitHub'] ?>" name="linkGitHub" type="text" class="form-control" id="linkGitHub"  placeholder="linkGitHub">
						</div>
						
						
						<hr>
						<h4 class="alert alert-info">Thông tin số hotline</h4>
						<div class="form-group">
							<label  for="exampleInputEmail1">Phone Number</label>
							<input value="<?= $Hotline['soDT'] ?>" name="soDT" type="text" class="form-control" id="soDT"  placeholder="Phone Number">
						</div>
						<hr>
						<h4 class="alert alert-info">Thông tin địa chỉ</h4>
						<div class="form-group">
							<label  for="exampleInputEmail1">Address</label>
							<input value="<?= $Address['address'] ?>" name="address" type="text" class="form-control" id="address"  placeholder="Address">
						</div>
						<hr>
						<h4 class="alert alert-info">Thông tin Gmail</h4>
						<div class="form-group">
							<label  for="exampleInputEmail1">Gmail</label>
							<input value="<?= $Gmail['Gmail'] ?>" name="Gmail" type="text" class="form-control" id="Gmail"  placeholder="Gmail">
						</div>
						<hr>
						<h4 class="alert alert-info">Thông tin trang website</h4>
						<div class="form-group">
							<label  for="exampleInputEmail1">Tên trang website</label>
							<input value="<?= $Title['nameWebsite'] ?>" name="nameWebsite" type="text" class="form-control" id="nameWebsite"  placeholder="Name Website">
						</div>
						<div class="form-group">
							<label  for="exampleInputEmail1">Thông tin trang web</label>
							<input value="<?= $Title['titleWebsite'] ?>" name="titleWebsite" type="text" class="form-control" id="titleWebsite"  placeholder="Infomation Website">
						</div>
						
						<hr>
						<h4 class="alert alert-info">Logo website</h4>
						<div class="form-group">
							<img src="<?= $logo ?>" class="img-thumbnail" >
							<input name="logo_old" type="hidden" value="<?= $logo ?>">
							<label  for="exampleInputEmail1">Upload Logo</label>
							<input name="logo" type="file" class="form-control" id="logo"  placeholder="Logo Website">
						</div>
						<div class="form-group">
							<input type="submit"  class="form-control btn btn-warning" id="nuthemdanhmuc" value="Lưu thông tin" >
						</div>
						

					</form>
				</div>

			</div>
		
		</div>
		
		</div>

	<?php include_once './application/views/admin/footer_admin.php' ?>


</body>
</html>