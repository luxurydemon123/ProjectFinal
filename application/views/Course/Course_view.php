<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Course</title>
	<link rel=" icon " href="images/logo.png"  >
	<!-- Bootstrap CSS -->
	 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
	 <link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/css_all_course.css">
	 	<!-- chat bot -->
	<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqvwspriuukzbzylxnj")</script>
	<!--end  chat -->
</head>
<body>
	<?php require './application/views/header.php' ?>
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
							<div class="u-m-zero" >
								<a title="" class="u-color-primary" href="http://localhost:8888/Project2/Login/"> 
									<img width="100%" src="<?= $value['image'] ?>" alt="" >
								</a>
								<span class="c-event__status u-bg-secondary u-color-primary"> 
									<i style="color: #e24646;" class="fa fa-heart"></i> 
									<a class="u-text-dark" href="#" > Favourite </a> 
								</span>
							</div>
							<div class="c-event__meta u-ph-small u-pt-xsmall" data-mh="heading" style="height: 70px;"> 
								<a title="" class="u-color-primary u-h4 u-text-bold" href="http://localhost:8888/Project2/Login/"><?= $value['title_course'] ?></a> 
							</div>
							<div class="c-event__meta u-ph-small u-pt-xsmall u-border-top">
								<div class="o-media"> 
									<div class="o-media__img u-mr-xsmall"> 
										<div class="c-avatar c-avatar--xsmall">										
											<img href=" http://localhost:8888/Project2/Course/Course_detail/" class="c-avatar__img loaded" src="images/logo2.jpg" alt="" > 											
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
										<i class="far fa-paper-plane"></i> Study Free
									</span> 
								</div>
							</div>
						</div>
<?php endforeach ?>
						</div>
						
			<!--  end row -->


				</div>
				


					


			<div class="pagination align-items-center">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item disabled">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item disabled"><a class="page-link" href="#">2</a></li>
						<li class="page-item disabled"><a class="page-link" href="#">3</a></li>
						<li class="page-item disabled">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div> <!-- end pagination -->

		</div><!-- end container -->
	</section>
	<?php require './application/views/footer.php' ?>
	
</body>
</html>