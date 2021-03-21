 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
	 <link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/css_all_course.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel=" icon " href="<?= base_url() ?>images/logo.png"  >
<?php require './application/views/user/Header_user_view.php'  ?>
 	

  
<body>
	<section class="courses my-5" id="p-child-dkr">
		<div class="container">
			<h2 class="title text-center">Course List</h2>
			<div class="col-lg-12 col-md-12">
				<div class="row">
					<!--  start row -->
					<?php foreach ($data_course as $value): ?>
						<?php 
						$date = strtotime($value['date_upload']); 
						$date = date('H:i d/m/Y', $date);
						?>
						<div class="col-sm-12 col-lg-4">
							<div class="c-event u-p-zero">
								<div class="c-event__img u-m-zero" >
									<a  class="u-color-primary" href="<?= base_url() ?>Course/Course_detail/<?= $value['id_course'] ?>"> 
										<img width="100%" src="<?= $value['image'] ?>" alt="" >
									</a>
									<span class="c-event__status u-bg-secondary u-color-primary"> 
										<i style="color: #e24646;" class="fas fa-heart"></i> 
										<a class="u-text-dark" href="#" title="Skill Hidup">Favourite </a> 
									</span>
								</div>
								<div class="c-event__meta u-ph-small u-pt-xsmall" data-mh="heading" style="height: 70px;"> 
									<a title="" class="u-color-primary u-h4 u-text-bold" href="<?= base_url() ?>Course/Course_detail/<?= $value['id_course'] ?>"><?= $value['title_course'] ?></a> 
								</div>
								<div class="c-event__meta u-ph-small u-pt-xsmall u-border-top">
									<div class="o-media"> 
										<div class="o-media__img u-mr-xsmall"> 
											<div class="c-avatar c-avatar--xsmall">										
												<img href=" http://localhost:8888/Project2/Course/Course_detail/" class="c-avatar__img loaded" src="<?= base_url() ?>images/logo2.jpg" alt="" > 											
											</div> 
										</div> 
										<div class="o-media__body"> Dekiru Nihongo 
											<small class="u-block u-text-mute"> <?= $value['title_course'] ?></small>
											<br>
											<small class="u-block u-text-mute"> <?= $date ?> </small> 
											<div> 
											</div>
											<div class="u-ml-auto"> 
												<div class="rating-stars u-flex u-justify-between u-pt-xsmall"> 
													<ul> 
														<li class="star"> 
															<i class="fa fa-star fa-fw"></i> 
														</li> 
														<li class="star"> <i class="fa fa-star fa-fw"></i></li> 
														<li class="star"> <i class="fa fa-star fa-fw"></i></li> 
														<li class="star"> <i class="fa fa-star fa-fw"></i></li> 
														<li class="star"> <i class="fa fa-star fa-fw"></i></li> 
													</ul> 
												</div> 
											</div>
										</div>	
									</div>
								</div>
								<div class="c-event__meta u-ph-small u-pt-xsmall u-border-top"> 
									<span class="cursor-default c-btn c-event__btn c-btn--custom u-bg-secondary u-color-primary u-border-zero">
										<i class="fa fa-eye u-mr-xsmall"></i>247</span> 
										<span class="cursor-default c-btn c-event__btn c-btn--custom u-bg-secondary u-color-primary u-border-zero"> 
											<i class="far fa-paper-plane"></i> Học Miễn Phí 
										</span> 
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>

					<!--  end row -->


				</div>
				





				

			</div><!-- end container -->
		</section>


	</body>
<?php require './application/views/user/Footer_user_view.php'  ?>