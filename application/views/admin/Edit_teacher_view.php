<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Show Data Teacher</title>
	

</head>
<body>
	
	<?php require('header_admin.php') ?>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Edit Teacher
				<small>Control panel</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Course Management</a></li>
				<li class="active">Manage Teacher</li>
			</ol>
		</section>
     <!-- Main content -->
	
		<div class="container">
		<div class="text-center">
			<h3 class="display-3">Edit Teachers </h3>
			<hr>
		</div>
	</div>
			<form method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/Manage_teacher/update_teacher">
				<?php foreach ($data as $key => $value): ?>
					
				
				<div class="form-group row">
					<label for="avatar" class="col-sm-4 form-control-label  text-right">Avatar teacher:</label>
					<div class="col-sm-8">
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
									<img src="<?= $value['avatar'] ?>" alt="" class="img-thumbnail">
								</div>
							</div>
						</div>
						<input type="hidden" name="id" value="<?= $value['id'] ?>">
						<input type="hidden" name="avatar2" value="<?= $value['avatar'] ?>">
						<input name="avatar" type="file" class="form-control" id="avatar" placeholder="Upload avatar">
					</div>
				</div>
				<div class="form-group row">
					<label  class="col-sm-4 form-control-label  text-right">Name Teacher:</label>
					<div class="col-sm-8">
						<input required name="name_teacher" type="text" class="form-control" id="name_teacher" placeholder="Name Teacher" value="<?= $value['name_teacher'] ?>">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-4">
						<div class="row">
							<label  class="col-sm-4 form-control-label  text-right">Age Teacher:</label>
							<div class="col-sm-8">
								<input required name="age_teacher" type="number" class="form-control"  placeholder="Age Teacher" value="<?= $value['age_teacher'] ?>">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<label  class="col-sm-4 form-control-label  text-right">Phone Number:</label>
							<div class="col-sm-8">
								<input required name="phone_number" type="number" class="form-control"  placeholder="Phone Number" value="<?= $value['phonenumber'] ?>">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<label  class="col-sm-4 form-control-label  text-right">Link FaceBook:</label>
							<div class="col-sm-8">
								<input required name="linkfb" type="text" class="form-control"  placeholder="Link FB" value="<?= $value['linkfb'] ?>">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea required name="description" class="form-control" rows="5" id="description" placeholder="<?= $value['description'] ?>" value="<?= $value['description'] ?>"></textarea>
				</div>

				<?php endforeach ?>
				<div class="form-group ">
					<div class="col-sm-offset-5 ">
						<button class="btn btn-success " type="submit">Update</button>
						
					</div>
				</div>
			</form>

		
			
		</div>
	</div>
	<?php require('footer_admin.php') ?>

</body>
</html>