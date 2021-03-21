<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Slide</title>
</head>
	<?php require('./application/views/admin/header_admin.php') ?>
<body>
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Edit Slide</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-md-6">
					<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="display-4 text-center">Edit Slide</h3>
						</div>
						<!-- /.box-header -->
			<?php $dem = 0 ?>
				<form class="form-horizontal" action="Slides/updateSlide" method="POST" enctype="multipart/form-data">
					<?php foreach ($mangdl as $key => $value): ?>	
					<hr>
					<?php $dem++ ?>	
					<h2>Slide Number <?php echo $dem ;?> </h2>						
						<!-- form start -->
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">Title Slide: </label>
									<div class="col-sm-10">
										<input name="title[]" type="text" class="form-control" id="title" value="<?php echo $value['title'] ?>">
									</div>
								</div>			
							</div>
							<div class="box-body">
								<div class="form-group">
									<label for="title" class="col-sm-2 control-label">Description Slide: </label>
									<div class="col-sm-10">
										<input name="description[]" type="text" class="form-control" id="description" value="<?php echo $value['description'] ?>">
									</div>
								</div>			
							</div>
							<div class="box-body">
								<div class="form-group">
									<label for="title" class="col-sm-2 control-label">Button Link: </label>
									<div class="col-sm-10">
										<input name="button_link[]" type="text" class="form-control" id="button_link" value="<?php echo $value['button_link'] ?>">
									</div>
								</div>			
							</div>
							<div class="box-body">
								<div class="form-group">
									<label for="title" class="col-sm-2 control-label">Text of Button: </label>
									<div class="col-sm-10">
										<input name="button_text[]" type="text" class="form-control" id="button_text" value="<?php echo $value['button_text'] ?>">
									</div>
								</div>			
							</div>
							<div class="box-body">
								<div class="form-group">
									<div class="col-sm-2 control-label">
										<label for="exampleInputFile">Upload Image</label>
										
										<div class="col-sm-10">
											<input name="slide_image_old[]" type="hidden" id="exampleInputFile" value="<?php echo $value['slide_image'] ?>">
											<input name="slide_image[]" type="file" id="exampleInputFile">
										</div>	
										<img src="<?php echo $value['slide_image'] ?>" alt="" width="200px" >
									</div>
								</div>
							</div>
					<?php endforeach ?>
							
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-info pull-right">Save</button>
							</div>
							<!-- /.box-footer -->
						</form>
					</div>
				</div>

			</div>

	


		</section>


	<!-- Horizontal Form -->

	


	


</body>
 <!-- jQuery 3 -->
<script src="<?= base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?= base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= base_url() ?>public/bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>


<script src="<?= base_url() ?>public/dist/js/adminlte.min.js"></script>


<!-- AdminLTE App -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>public/dist/js/demo.js"></script>
</div>
<!-- ./wrapper -->
</html>