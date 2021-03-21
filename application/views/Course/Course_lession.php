<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php foreach ($data_detail_course[1] as $value): ?>
		<?= $value['title_course']; ?>
		<?php endforeach ?>        
	</title>
	<link rel=" icon " href="images/1.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
	 <link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/css_all_course.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<?php foreach ($data_detail_course[0] as $value): ?>
		 <? $id = $value['id_course']; ?>
		
	
	<header style="background: #fff">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 u-pv-small c-navbar">
					<a class="c-nav__link u-text-bold u-mr-auto" href="<?php echo base_url() ?>Course/Course_detail/<?= $value['id_lesson'] ?>">
						<i class="fa fa-arrow-left u-mr-xsmall"></i> 
						<span class="u-hidden-down@desktop">Back</span> 
					</a>
					<h1  style="" class="u-h4 navbar__title u-text-bold u-p-zero"><?= $value['title_lesson'] ?></h1>
					<div class="u-ml-auto"></div>
				</div>
			</div>
		</div>
	</header>
<?php endforeach ?>


	<!-- Container start -->
	<div class="container">
		<div class="row">
			<div class="video-learn">
				<?php foreach ($data_detail_course[0] as $value): ?>
				
						<?= $value['video'] ?>
					
				<?php endforeach ?>
			</div>
		</div>
	</div> 

	
</body>
</html>