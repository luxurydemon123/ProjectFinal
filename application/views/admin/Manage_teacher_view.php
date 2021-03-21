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
				Dashboard
				<small>Control panel</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>
		<!-- Main content -->


		<div class="container">
			<div class="text-center">
				<h3 class="display-3">List of Teachers </h3>
				<hr>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<!-- view data teacher -->


				<?php foreach ($teacher as  $value): ?>
					<div class="col-sm-4">
						<div class="card">
							<img class="card-img-top img-thumbnail" src="<?php echo $value['avatar'] ?>" alt="Card image cap">
							<div class="card-block">
								<p class="card-title name">Name: <?php echo $value['name_teacher'] ?></p>
								<p class="card-text age">Age: <small class="badge badge-info"><?php echo $value['age_teacher'] ?></small> </p>
								<p class="card-text phone">PhoneNumber: <?php echo $value['phonenumber'] ?>.</p>
								<p class="card-text description">Description: <?php echo $value['description'] ?></p>
								<p class="card-text linkfb">
									<small>
										<a href=" <?php echo $value['linkfb'] ?>" class="btn btn-info">Facebook <i class="fa fa-chevron-right">
										</i></a>
									</small>
								</p>
								<p class="card-text">
									<small>
										<a href=" <?php echo base_url() ?>admin/Manage_teacher/edit_teacher/<?= $value['id'] ?> " class="btn btn-warning">Edit <i class="fa fa-pencil">
										</i></a>
									</small>
									<small>
										<a href=" <?php echo base_url() ?>admin/Manage_teacher/delete_teacher/<?= $value['id'] ?>" class="btn btn-danger">Delete <i class="fa fa-trash">
										</i></a>
									</small>
								</p>		

							</div>
						</div>
					</div>
				<?php endforeach ?>
				<!-- end card -->		
			</div>
		</div>
		<div class="container">
			<div class="text-center">
				<h3 class="display-3">Add Teachers </h3>
				<hr>
			</div>
		</div>
		<form method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/Manage_teacher/add_teacher">
			<div class="form-group row">
				<label for="avatar" class="col-sm-4 form-control-label  text-right">Avatar teacher:</label>
				<div class="col-sm-8">
					<input name="avatar" type="file" class="form-control" id="avatar" placeholder="Upload avatar">
				</div>
			</div>
			<div class="form-group row">
				<label  class="col-sm-4 form-control-label  text-right">Name Teacher:</label>
				<div class="col-sm-8">
					<input required name="name_teacher" type="text" class="form-control" id="name_teacher" placeholder="Name Teacher">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-4">
					<div class="row">
						<label  class="col-sm-4 form-control-label  text-right">Age Teacher:</label>
						<div class="col-sm-8">
							<input required name="age_teacher" type="number" class="form-control"  placeholder="Age Teacher">
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<label  class="col-sm-4 form-control-label  text-right">Phone Number:</label>
						<div class="col-sm-8">
							<input required name="phone_number" type="number" class="form-control"  placeholder="Phone Number">
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<label  class="col-sm-4 form-control-label  text-right">Link FaceBook:</label>
						<div class="col-sm-8">
							<input required name="linkfb" type="text" class="form-control"  placeholder="Link FB">
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="description">Description:</label>
				<textarea required name="description" class="form-control" rows="5" id="description" placeholder="Describe yourself"></textarea>
			</div>
			<div class="form-group row text-xs-center">
				<div class="col-sm-offset-5 ">
					<button class="btn btn-info" type="submit">Add</button>
					<button class="btn btn-danger" type="reset">Reset</button>
				</div>
			</div>
		</form>
	</div>



<?php include_once './application/views/admin/footer_admin.php' ?>


</div>

</body>
</html>