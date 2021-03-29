<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Show Data Student</title>
</head>

	<?php require('./application/views/admin/header_admin.php') ?>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Manage Student
				<small>View Students</small>	
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>
		<!-- Main content -->
		

		<div class="container">
			<div class="row">
				<div class="col-sm-8 push-sm-3">
					<div class="jumbotron jumbotron-fluid">
					  <div class="container">
					    <h1 class="display-4">Edit Category News</h1>
					    <p class="lead">Form này cho phép thêm danh mục tin.</p>
					  </div>
					</div>
				
						
					
					<form class="form-group"  method="POST" action="<?php echo base_url(); ?>admin/Category/updatedanhmuc">
						<?php foreach ($db as $value): ?>
						<div  class="form-group">
							<label  for="exampleInputEmail1">Name Category</label>
							<input type="hidden" name="id" value="<?= $value['id'] ?>">
							<input name="tendanhmuc" type="text" class="form-control" id="exampleInputEmail1" value="<?= $value['tendanhmuc'] ?>">
						</div>
						<?php endforeach ?>	
						<div class="form-group">
							
							<input type="submit" class="form-control" value="Save Category" >
						</div>	

					</form>
				</div>
			</div>
		</div>
	

		

<?php require('./application/views/admin/footer_admin.php') ?>

</div>
</body>
</html>