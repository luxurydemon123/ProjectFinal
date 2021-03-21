<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Manage News</title>
</head>

	<?php require('./application/views/admin/header_admin.php') ?>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Manage News
				<small>View News</small>	
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>
		<!-- Main content -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 themmoi">
					<div class="jumbotron text-xs-center">
						<h1 class="display-3">Add News</h1>
						<p class="lead">Add News information at here!</p>
						<hr class="m-y-md">
					</div>
					<div  class="formthemmoi">
						<form method="Post" enctype="multipart/form-data" action="<?= base_url() ?>admin/Manage_news/addnews">
							<fieldset class="form-group">
								<label for="">Title News:</label>
								<input name="title" type="text" class="form-control" id="" placeholder="Title">
							</fieldset>

							<fieldset class="form-group">
								<label for="">Image News: </label>
								<input name="image_news" type="file" class="form-control" placeholder="Image News">
							</fieldset>
							<fieldset class="form-group">
								<label for="">Trích dẫn: </label>
								<input name="trichdan" type="text" class="form-control" placeholder="Image News">
							</fieldset>

							<fieldset class="form-group">
								<label for="">Category News:</label>
								<select class="form-control" name="idcategory" id="">
									<?php foreach ($dulieudanhmuc as $value): ?>
										
									
									<option value="<?= $value['id'] ?>"><?= $value['tendanhmuc'] ?></option>
									<?php endforeach ?>
								</select>
							</fieldset>
							<fieldset class="form-group">
								<label for="">Content:</label>
								<textarea name="content" id="content" class="content" cols="50" rows="12">									
							</textarea>
								
							</fieldset>
							
							
							<fieldset class="form-group"> 
								<input type="submit" value="Add News">
							</fieldset>
						</form>


					</div>
				</div>
				
				<div class="col-sm-6 danhsach">
					<div class="jumbotron text-xs-center">
						<h1 class="display-3">Listview News</h1>
						<p class="lead">List News</p>
						<hr class="m-y-md">
					</div>
					<!--card group  -->
					<div class="row">
						<div class="card-group">
							<?php foreach ($dulieutin as $value): ?>
								
							
							<div class="col-sm-4">
								<div class="card">
									<img class="card-img-top img-thumbnail" src="<?= $value['image'] ?>" alt="Card image cap">
									<div class="card-block">
										<h4 class="card-title"><?= $value['title'] ?></h4>
										<p class="card-text"><?= $value['trichdan'] ?></p>
									</div>
									<div class="card-footer">
										<small class="text-muted">Đăng vào ngày <?= date('d/m/Y - G:i - A',$value['date']) ?></small>

									</div>
									<a href="<?= base_url() ?>admin/Manage_news/editNews/<?= $value['id'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
									<a href="<?= base_url() ?>admin/Manage_news/deleteNews/<?= $value['id'] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
								</div>
							</div>
							<?php endforeach ?>
						</div>
					</div>
					<!-- end card group -->
				</div>
			</div>
		</div>
		

		

		

<?php require('./application/views/admin/footer_admin.php') ?>

</div>
</body>
</html>