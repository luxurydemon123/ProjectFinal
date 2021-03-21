<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Show Data Student</title>
</head>
<body>
	<?php require('header_admin.php') ?>
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
			<div class="text-center">
				<h3 class="display-3">List of Students </h3>
				<hr>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-xs-pull-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">List Student Table</h3>

								<div class="box-tools">
									<div class="input-group input-group-sm" style="width: 150px;">
										<input id="myInput" type="text" name="table_search" class="form-control pull-right" placeholder="Search">

										<div class="input-group-btn">
											<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding">
								<table class="table table-hover">
									<tr>
										<th>ID</th>
										<th>Name Student</th>
										<th>Date</th>
										<th>Gender</th>
										<th>Email</th>
										<th>Course</th>
										<th>Image</th>
										
									</tr>

									<?php foreach ($student as $value): ?>
							<?php $dem = 1; ?>			
								<tbody id="myTable">
								 
									<tr>
										<td><?php echo $value['id'] ?></td>
										<td><?php echo $value['studentname'] ?></td>
										<td><?php echo $value['date'] ?></td>
										<td><?php echo $value['gender'] ?></td>
										<td><?php echo $value['email'] ?></td>
										<td><span class="label label-success"><?php echo $value['course'] ?></span></td>
										<td>
											<img style="width: 80px; height: 100px" src="<?php echo $value['image'] ?>" alt="">
										</td>
										<td>
											<a href="<?php echo base_url() ?>admin/Manage_student/edit_student/<?php echo $value['id'] ?>" class="btn btn-warning">Edit <i class="fa fa-pencil"></i></a>	
											
											<a href="<?php echo base_url() ?>admin/Manage_student/delete_student/<?php echo $value['id'] ?>" class="btn btn-danger">Delete <i class="fa fa-trash"></i>
											</a>
										</td>			
									</tr>
								</tbody>
									
									<?php endforeach ?>
									
									<p class="card-text">
									
								</p>		
								</table>
							</div>
							<!-- /.box-body -->
							<div class="box-footer clearfix">
								<ul class="pagination pagination-sm no-margin pull-right">
								
									<li><a href="#">&laquo;</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
						<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
				</div>
			</section>
			<!-- /.content -->
		</div>
<script>
	$(document).ready(function(){
		$("#myInput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#myTable tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
	
</script>
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h3 class="display-3">Add Students </h3>
				</div>	
			<hr>
			</div>
			<form method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/Manage_student/add_student">
				
				<div class="form-group row">
					<label  class="col-sm-4 form-control-label  text-right">Name Student:</label>
					<div class="col-sm-4">
						<input required name="name_student" type="text" class="form-control" id="name_student" placeholder="Name Student">
					</div>
				</div>
				<div class="form-group row">
						<div class="row">
							<label  class="col-sm-4 form-control-label  text-right">Date:</label>
							<div class="col-sm-4">
								<input required name="date" type="Date" class="form-control"  >
							</div>
						</div>
					
						<br>
						<div class="row">
							<label  class="col-sm-4 form-control-label text-right">Gender:</label>
							<div class="col-sm-8">
								<div class="radio">
									<label>
										<input value="Male" type="radio" name="gender" checked >Male
									</label>
								</div>
								<div class="radio">
									<label>
										<input value="Female" type="radio" name="gender">Female
									</label>
								</div>
								
							</div>
						</div>
					<br>
						<div class="row">
							<label  class="col-sm-4 form-control-label  text-right">Email:</label>
							<div class="col-sm-4">
								<input required name="email_student" type="text" class="form-control"  placeholder="Input email student">
							</div>
						</div>
						<br>
						<div class="row">
							<label   class="col-sm-4 form-control-label  text-right ">Choose a course:</label>
							<select name="course_student" id="course_student">
								<option value="N5">N5</option>
								<option value="N4">N4</option>
								<option value="N3">N3</option>
								<option value="N2">N2</option>
								<option value="N1">N1</option>
							</select>
						</div>
						<br>
						<div class="row">
							<label for="avatar" class="col-sm-4 form-control-label  text-right">Avatar Student:</label>
							<div class="col-sm-4">
								<input name="avatar_student" type="file" class="form-control" id="avatar_student" placeholder="Upload avatar">
							</div>
						</div>

					</div>
				
				<div class="form-group row text-xs-center">
					<div class="col-sm-offset-5 ">
						<button class="btn btn-info" type="submit">Add &nbsp<i class="fa fa-plus"></i></button>
						<button class="btn btn-danger" type="reset">Reset &nbsp <i class="fa fa-refresh"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include_once './application/views/admin/footer_admin.php' ?>
</div>




</div>
</body>
</html>