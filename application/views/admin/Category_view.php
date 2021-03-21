<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Manage Category</title>
</head>
<body ng-app="myApp" ng-controller="MyController">
	<?php require('header_admin.php') ?>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Manage Category
				<small>View Category</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>
		<!-- Main content -->
		

		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="jumbotron jumbotron-fluid">
					  <div class="container">
					    <h1 class="display-4">Manage Category</h1>
					    <p class="lead">This form allows to add news categories.</p>
					  </div>
					</div>
					
<!-- 					<form class="form-group"  method="POST" action="<?php //echo base_url(); ?>admin/Category/themdanhmuc">
 -->						<div  class="form-group">
							<label  for="exampleInputEmail1">Name Category</label>
							<input name="tendanhmuc" type="text" class="form-control" id="tendanhmuc"  placeholder="Name Category">
							
						</div>
						<div class="form-group">
							
							<input type="button" class="form-control" id="nuthemdanhmuc" value="Add Category" >
						</div>		
<!-- 					</form>
 -->				</div>
				<div class="col-sm-4 cacdanhmuc">
					<div class="jumbotron">
						<h3 class="display-3">List of category items</h3>
						<p class="lead">Categories was added!</p>
						
						<p class="lead">
							<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
						</p>


					</div>
					<?php foreach ($db as $value): ?>
						
					
					<div class="info-box bg-aqua">
						<span class="info-box-icon"><i class="fa fa-tag"></i></span>
						<div class="thaotac text-right">
							<a  data-href= "<?php echo base_url(); ?>admin/Category/suadanhmuc/<?= $value['id'] ?>" class="nutedit btn btn-danger"><i class="fa fa-pencil-square-o"  aria-hidden="true"></i></a>
							<a  data-href="<?= $value['id'] ?>" class="nutxoa btn btn-primary"><i class="fa fa-remove"></i></a>
						</div>
						<div class="jquery_button text-right hidden">
							<a href="" class="btn btn-success nutluu">
								Save
							</a>
							
						</div>


						<div class="info-box-content">
							<span class="form-group jquery_tendanhmuc hidden">
								<input type="hidden" class="form-control id" value="<?= $value['id']; ?>">
								<input type="text" class="form-control tendanhmucsua" id="tendanhmucsua" value="<?= $value['tendanhmuc']; ?>">
							</span>

						


							<div class="info-box-text noidungten">
								<?= $value['tendanhmuc']; ?>
							</div>
						
								
							
						</div>

						
						<!-- /.info-box-content -->
					</div>
					<?php endforeach ?>

				</div>
			</div>
		</div>
	

		

<?php require('footer_admin.php') ?>
		<script>
			$(function(){
				$('body').on('click', '.nutedit', function(event) {
					$(this).parent().addClass('hidden');
					$(this).parent().next().next().find('.noidungten').addClass('hidden');
					$(this).parent().next().removeClass('hidden');
					$(this).parent().next().next().find('.jquery_tendanhmuc').removeClass('hidden');

					
					event.preventDefault();
					/* Act on the event */
				});
				$('body').on('click', '.nutluu', function(event) {
				
					
					//get data from input
					valuename = $(this).parent().next().children('.jquery_tendanhmuc').children('.tendanhmucsua').val();
					valueid = $(this).parent().next().children('.jquery_tendanhmuc').children('.id').val();
					//console.log(value);
					phantu1 = $(this).parent().addClass('hidden');
					phantu2 = $(this).parent().next().children('.jquery_tendanhmuc').children('.tendanhmucsua').addClass('hidden');
					noidung = $(this).parent().next().children('.jquery_tendanhmuc').children('.tendanhmucsua').val();
					//console.log(noidung);
					view1 = $(this).parent().prev().removeClass('hidden');
					view2 = $(this).parent().next().html(noidung).removeClass('hidden');

					$.ajax({
						url: duongdan+'admin/Category/updatedanhmuc',
						type: 'POST',
						dataType: 'json',
						data: {
							tendanhmuc: valuename,
							id: valueid
						},
					})
					.done(function() {
						console.log("success");
					})
					.fail(function() {
						console.log("error");
					})
					.always(function() {
						console.log("complete");
					});
					event.preventDefault();
					/* Act on the event */
				});
				var duongdan = '<?php echo base_url() ?>';
				$('#nuthemdanhmuc').click(function(event) {
					/* Act on the event */
					
					// var tendanhmuc = $('#tendanhmuc').val();
					// console.log(tendanhmuc);
					$.ajax({
						url: duongdan+'admin/Category/addJquery',
						type: 'POST',
						dataType: 'json',
						data: {tendanhmuc: $('#tendanhmuc').val()}
						
					})
					.done(function() {
						//console.log("success");
					})
					.fail(function() {
						//console.log("error");
					})
					.always(function(res) {
						console.log(res);
						//Using Jquery
						noidung = '<div class="info-box bg-aqua">';
						noidung += '<span class="info-box-icon"><i class="fa fa-tag"></i></span>';
						noidung += '<div class="thaotac text-right">';
						noidung += '<a data-href="'+res+'" class="nutedit btn btn-danger"><i class="fa fa-pencil-square-o"  aria-hidden="true"></i></a>';
						noidung += '<a data-href="'+res+'" class="nutxoa btn btn-primary"><i class="fa fa-remove"></i></a>';
						noidung += '</div>';
						noidung += '<div class="info-box-content">';
						noidung += '<span class="info-box-text">';
						noidung += $('#tendanhmuc').val();
						noidung += '</span>';
						noidung += '</div>';
						noidung += '</div>';
						$('.cacdanhmuc').append(noidung);
						$('#tendanhmuc').val('');
					});
					
				}); //end jquery button add
				//begin jquery button delete
				$('body').on('click', '.nutxoa', function(event) {
						/* Act on the event */
					idnews = $(this).data('href');
					objectneeddelete = $(this).parent().parent();
					
					$.ajax({
						url: duongdan+'admin/Category/xoadanhmuc/' +idnews,
						type: 'POST',
						dataType: 'json'
					})
					.done(function() {
						console.log("success");
					})
					.fail(function() {
						console.log("error");
					})
					.always(function() {
						console.log("complete");
						//use jquery ,delete 
						objectneeddelete.remove();
					});
					
				});
			
			})
		</script>

</div>

</body>
</html>