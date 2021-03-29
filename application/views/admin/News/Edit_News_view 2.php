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
			<small>Edit News</small>	
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<!-- Main content -->
	<div class="container">
		<div class="row">
			<div class="col-sm-10 push-sm-1">
				<div class="jumbotron text-xs-center">
					<h1 class="display-3">Edit News</h1>
					<p class="lead">Edit Content News</p>
					<hr class="m-y-md">
				</div>
				<div  class="formthemmoi">
					<form method="Post" enctype="multipart/form-data" action="<?= base_url() ?>admin/Manage_news/saveNews">
						<?php foreach ($dulieusua as $value): ?>
							
						
						<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
						<fieldset class="form-group">
							<label for="">Title News:</label>
							<input name="title" type="text" class="form-control" id="" value="<?= $value['title'] ?>" >
						</fieldset>

						<fieldset class="form-group">
							<label for="">Image News: </label>
							<br>
							<img src="<?= $value['image'] ?>" alt="" class="img-fluid">
							<input type="hidden" value="<?php echo $value['image'] ?>" name = "anhtincu">
							
							<input name="image_news" type="file" class="form-control" placeholder="Image News">
						</fieldset>
						<fieldset class="form-group">
							<label for="">Trích dẫn: </label>
							<input name="trichdan" type="text" class="form-control" value="<?= $value['trichdan'] ?>">
						</fieldset>

						<fieldset class="form-group">
							<label for="">Category News:</label>
							<select class="form-control" name="idcategory" id="">
								<option value="<?= $value['idcategory'] ?>">
									
										<?php echo $tendanhmuc; ?>
									
								</option>
							</select>
						</fieldset>
						<fieldset class="form-group">
							<label for="">Content:</label>
							<textarea name="content" id="content" class="content" cols="50" rows="12" >		
								<?= $value['content']?>
														
							</textarea>

						</fieldset>
						<?php endforeach ?>


						<fieldset class="form-group"> 
							<input type="submit" class="btn btn-warning btn-lg btn-block" value="Edit News">
						</fieldset>
					</form>


				</div>
			</div>

			
		</div>
	</div>






	<?php require('./application/views/admin/footer_admin.php') ?>

</div>
</body>
</html>