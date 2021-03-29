<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php foreach ($data_detail_course[2] as $value): ?>
		<?= $value['title_course']; ?>
		<?php endforeach ?>        
	</title>
	<!-- Bootstrap CSS -->
	<link rel=" icon " href="<?= base_url() ?>images/logo.png"  >
	 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
	 <link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
	 <link rel="stylesheet" href="<?= base_url() ?>css/css_all_course.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 	<!-- chat bot -->
	<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqvwspriuukzbzylxnj")</script>
	<!--end  chat -->
	
</head>
<body class="o-page">
	<?php require './application/views/user/Header_user_view.php'  ?>
	<!-- Part one -->
		<section class="courses my-5" id="p-child-dkr">
				<div class="container">

					<h2 class="title2 text-center " >
						<?php foreach ($data_detail_course[2] as $value): ?>
							<?= $value['title_course']; ?>
						
					</h2>
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="col-12 col-xl-10 ">
								<div class="row u-pv-medium">

									<div class="col-lg-9">
										<h1 class="u-h3 u-text-bold"><?= $value['title_course']; ?></h1>
										<div class="row u-mb-small">
											<div class="col-12 col-lg-4">
												<div class="c-state-card u-m-zero u-p-small" data-mh="state-cards" style="height: 80px;">
													<div class="c-state-card__icon c-state-card__icon--info u-bg-primary" style="width: 30px;height: 30px;">
														<i class="fa fa-calendar"></i>
													</div>
													<div class="c-state-card__content">120 Days</div>
												</div>
											</div>
											<div class="col-12 col-lg-4">
												<div class="c-state-card u-m-zero u-p-small" data-mh="state-cards" style="height: 80px;">
													<div class="c-state-card__icon c-state-card__icon--info bg-primary" style="width: 30px;height: 30px;">
														<i class="fa fa-eye" ></i>
													</div>
													<div class="c-state-card__content"> 248 </div>
												</div>
											</div>
											<div class="col-12 col-lg-4">
												<div class="c-state-card u-m-zero u-p-small" data-mh="state-cards" style="height: 80px;">
													<div class="c-state-card__icon c-state-card__icon--info bg-danger" style="width: 30px;height: 30px;">
														<i class="fa fa-heart"></i>
													</div>
													<div class="c-state-card__content">Favourite</div>
												</div>
											</div>
										</div>

										<a id="c-btn--custom" class="btn btn-primary" href="<?= base_url() ?>quiz/index/">
											<i class="fa fa-send u-mr-xsmall"></i>Test the lesson
										</a>		
									</div>
								
									<!-- <div class="col-lg-3 video-intro">
										<div class="img-intro" style="height: 226px">
											<iframe data-v-a5b1a982="" width="386" height="226" src="https://www.youtube.com/embed/2u0pq6kUDqo?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
											
										</div>
									
									</div> -->
									<div class="col-lg-3">
										
										<iframe data-v-a5b1a982="" width="500" height="365" src="https://www.youtube.com/embed/2u0pq6kUDqo?autoplay" frameborder="0" allow=" encrypted-media" allowfullscreen="allowfullscreen"></iframe>
									</div>
									
								</div>
							</div>
						</div>
				</div>
		</section>
		<div class="container u-ph-small">
			<div class="row u-mt-small u-p-zero">
				<div class="col-12 col-xl-10 offset-xl-1 col-lg-8 offset-lg-2">
					<div class="c-card u-p-medium">
						<h3 class="u-mb-small"> Content </h3>
						<div class="post-body">
							<?= $value['information']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php endforeach ?>	
		<div class="container u-ph-small">
			<div class="row u-mt-small u-p-zero">
				<div class="col-12 col-xl-10 offset-xl-1 col-lg-8 offset-lg-2">
					<div class="c-card u-p-medium">
						<h3 class="u-mb-small"> LỘ TRÌNH HỌC TIẾNG NHẬT N5 </h3>
						<div class="ok">

							<article style="display: block;" class="c-stage u-mb-zero">
							<!-- start section -->
								<div class="c-stage__header u-flex u-justify-between u-p-xsmall" data-toggle="collapse" href="#stage-panel-7" aria-expanded="false" aria-controls="stage-panel-7"> 
									<div class="o-media">
										<div class="c-stage__icon o-media__img">1</div>
										<div class="c-stage__header-title o-media__body u-text-bold">Mục lục</div> 
									</div> 
									<div>
										<div class="c-stage__icon o-media__img"> 
											<i class="fa fa-plus"></i>
										</div> 
									</div> 

								</div>
								<?php foreach ($data_detail_course[0] as $value): ?>
									<?php foreach ($value as $value2): ?>
									
									<div class="c-stage__panel u-p-xsmall collapse show" id="stage-panel-7">
										<div class="c-stage__header u-justify-start u-bg-secondary u-p-xsmall cursor-default">
											<a href="<?= base_url() ?>Course/Course_lession/<?= $value2['id_lesson'] ?>">
												<h6 class="u-mb-zero u-text-dark o-line">
													<i style="color: red;" class="ml-1 fab fa-youtube"></i>
<!-- 													<i style="color: #007BFF;" class="ml-1 fas fa-cloud-download-alt" class="fa fa-file-text-o u-mr-xsmall">
 -->												<i class="fa fa-file-text-o u-mr-xsmall"></i> <?= $value2['title_lesson'] ?>  
											</h6> 
											</a>
											
										</div>
									</div>

									<?php endforeach ?>
								<?php endforeach ?>
								
								
							<!-- end section -->
							<!-- start section -->
						



							</article>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container u-ph-small">
					<div class="row u-mt-small u-p-zero">
						<div class="col-12 col-xl-10 offset-xl-1 col-lg-8 offset-lg-2">
							<div class="c-card u-p-medium">
								<h3 class="u-mb-small"> TÀI LIỆU HỌC TẬP </h3>
								<div class="ok">

									<article style="display: block;" class="c-stage u-mb-zero">
									<!-- start section -->
										<div class="c-stage__header u-flex u-justify-between u-p-xsmall" data-toggle="collapse" href="#stage-panel-7" aria-expanded="false" aria-controls="stage-panel-7"> 
											<div class="o-media">
												<div class="c-stage__icon o-media__img">2</div>
												<div class="c-stage__header-title o-media__body u-text-bold">TÀI LIỆU BÀI HỌC</div> 
											</div> 
											<div>
												<div class="c-stage__icon o-media__img"> 
													<i class="fa fa-plus"></i>
												</div> 
											</div> 

										</div>
										<?php foreach ($data_detail_course[1] as $value): ?>
											<?php foreach ($value as $value2): ?>
											
											<div class="c-stage__panel u-p-xsmall collapse show" id="stage-panel-7">
												<div class="c-stage__header u-justify-start u-bg-secondary u-p-xsmall cursor-default">
													<a href="<?= $value2['link_dowload'] ?>">
														<h6 class="u-mb-zero u-text-dark o-line">
														<i style="color: #007BFF;" class="ml-1 fas fa-cloud-download-alt" class="fa fa-file-text-o u-mr-xsmall"></i> <?= $value2['title_documents'] ?>  
													</h6> 
													</a>
													
												</div>
											</div>

											<?php endforeach ?>
										<?php endforeach ?>
										
										
									<!-- end section -->
									<!-- start section -->
								



									</article>
								</div>
							</div>
						</div>
					</div>
				</div>


					


			
	<?php require './application/views/user/Footer_user_view.php'  ?>
	
</body>
</html>


 