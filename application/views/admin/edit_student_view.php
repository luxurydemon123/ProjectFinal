<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Student</title>
	

</head>
<body>
	
	<?php require('header_admin.php') ?>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Edit Student
				<small>Control panel</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Course Management</a></li>
				<li class="active">Manage Student</li>
			</ol>
		</section>
     <!-- Main content -->
	
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h3 class="display-3">Edit Students </h3>
				</div>	
			<hr>
			</div>
			<form method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/Manage_student/update_student">
				
				<?php foreach ($data_student as $key => $value): ?>
					
				
				<div class="form-group row">
					<label  class="col-sm-4 form-control-label  text-right">Name Student:</label>
					<div class="col-sm-4">
						<input required name="name_student" type="text" class="form-control" id="name_student" placeholder="Name Student" value="<?php echo $value['studentname'] ?>">
						<input type="hidden" name="id" value="<?= $value['id'] ?>">
					</div>
				</div>
				<div class="form-group row">
						<div class="row">
							<label  class="col-sm-4 form-control-label  text-right">Date:</label>
							<div class="col-sm-4">
								<input required name="date" type="Date" class="form-control" value="<?php echo $value['date'] ?>"  >
							</div>
						</div>
					
						<br>
						<div class="row">
							<label  class="col-sm-4 form-control-label text-right">Gender:</label>
							<div class="col-sm-8">
								<div class="radio">
									<label>
										<input value="Male" type="radio" name="gender" value="<?php echo $value['gender'] ?>" checked >Male
									</label>
								</div>
								<div class="radio">
									<label>
										<input value="Female" value="<?php echo $value['gender'] ?>" type="radio" name="gender">Female
									</label>
								</div>
								
							</div>
						</div>
					<br>
						<div class="row">
							<label  class="col-sm-4 form-control-label  text-right">Email:</label>
							<div class="col-sm-4">
								<input required name="email_student" type="text" class="form-control"  placeholder="Input email student" value="<?php echo $value['email'] ?>">
							</div>
						</div>
						<br>
						<div class="row">
							<label   class="col-sm-4 form-control-label  text-right ">Choose a course:</label>
							<select name="course_student" id="course_student" value="<?php echo $value['course'] ?>" >
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
								<img style="width: 80px; height: 100px" src="<?php echo $value['image'] ?>" alt="">
								
								<input type="hidden" name="avatar_student_2" value="<?= $value['image'] ?>">
								<input name="avatar_student" type="file" class="form-control" id="avatar_student" placeholder="Upload avatar">
							</div>
						</div>

				</div>
				<?php endforeach ?>
				
				<div class="form-group row text-xs-center">
					<div class="col-sm-offset-5 ">
						<button class="btn btn-info" type="submit">Update </button>
						
					</div>
				</div>
			</form>
		</div>
			

		
			
		
	</div>
	<?php require('footer_admin.php') ?>

</body>
</html>