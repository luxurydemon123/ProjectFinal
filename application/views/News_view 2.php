<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>News</title>
	<link rel="icon" href="/images/logo.PNG">

	<!-- Bootstrap CSS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
	<script type="text/javascript" src="<?= base_url() ?>js/index.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




	<title>Japanese Language Course</title>
	<!-- chat -->
	<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqvwspriuukzbzylxnj")</script>
	<!--end  chat -->
</head>
 	 <?php if (!isset($user)) { ?>
			        	<a href="<?php echo base_url('Login/sign_in'); ?>"></a>
			        <?php }
			        else{ ?>
						<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Xin chào: <?php echo $user->name; ?><span class="caret"></span></a>
				          <ul class="dropdown-menu">
				          	<li><a href="<?php echo base_url('user'); ?>">Tài khoản</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="<?php echo base_url('user/logout'); ?>">Đăng xuất</a></li>
				          </ul>
				        </li>
			        <?php } ?>
<?php require 'header.php' ?> 
<!-- //<?php //require './application/views/user/Header_user_view.php'  ?>
 --><body style="background: #F9F9F9;">
	
		
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?php echo base_url() ?>images/banner/banner3.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo base_url() ?>images/banner/banner5.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h1>The leading website for learning Japanese online in VietNam</h1>
							<p style=" 
							color: #fff;
							font-size: 18px;
							width: 700px;
							margin: auto;
							margin-top: 10px;">Dekiru online Japanese learning website is fully integrated with all information, knowledge and skills to help you conquer Japanese perfectly.</p>

						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo base_url() ?>images/banner/banner2.jpg" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		
			
		
	
	<!--CONTENT-->
	
	<section id="title" style="padding: 0px;">
		<div class="container">
			<div class="row" style="margin-left: -15px;
			margin-right: -15px;">
			<div class="col-md-12">
				<div class="pagetitle" style="  margin: 0;
				padding: 0;
				font-weight: 600;">
				<h1>News</h1>
				<?php 
					//get uri
					$uri = $_SERVER['REQUEST_URI'];
					$uri = explode('/', $uri);
					$tranghientai = end($uri);
					//$tranghientai = $tranghientai - 1;
					
				 ?>

			</div>
		</div>


	</section>
	<div class="container">
		<div class="row">
			<section id="main-blog" class="col-12 col-sm-12 col-md-8 ">
				<?php foreach ($dulieutin as $value): ?>
					
				
				<div class="blog">
					<div id="image-box">
						<a href="<?= base_url() ?>News/News_detail/<?= $value['id'] ?>"><img  src="<?= $value['image'] ?>" alt=""></a>
					</div>
					<div class="title-and-author">
						<div class="blog-title"><a href="<?= base_url() ?>News/News_detail/<?= $value['id'] ?>?>"><?= $value['title'] ?></a></div>
						<div class="author">
							<span class="time"><?= date('d/m/Y - G:i - A',$value['date']) ?></span>
							<a class="author" href="#"><?= $value['tendanhmuc'] ?></a>
						</div>
						<div class="content">
							<p><?= $value['trichdan'] ?></p>
						</div>
						<div class="read-more-and-comment">
							<a href="<?= base_url() ?>News/News_detail/<?= $value['id'] ?>" class="readMore"><p>Read more</p></a>
							<a href="#" class="comment">0 Comment</a>
						</div>
					</div>
				</div>
				<?php endforeach ?>
				<!-- pagination -->
		
				<div class="pagination text-center">
					<ul class="page-number mx-auto">
						<?php 
							if ($tranghientai == 1) {
								
							}
							else {
								?>
								<li>
									<a aria-label="Previous" href="<?php echo base_url() ?>News/page/<?= $tranghientai-1 ?>">
										<i class="fa fa-caret-left" aria-label="Previous">
										

										</i>
									</a> 
								</li>
								<?php  
							}
						 ?>
						

						<?php 
							for ($i = 0; $i < $sotrang ; $i++) {

								?>
								<?php 
									if (($i+1) == $tranghientai) {
										
									
								 ?>
								 	<li><span class="current-page"><?= $i+1 ?></span></li>
								 <?php }
								 	else{
								  ?>
								  
								<!-- <li><span class="current-page"><?= $var ?></span></li> -->

									<li><a href="<?php echo base_url() ?>News/page/<?= $i+1 ?>"><?= $i+1 ?></a></li>
									<?php } ?>

								<?php 

							}
						?>
						
						

						<?php 
							if ($tranghientai == $sotrang) {
								
							}
							else {

								?>
								<li>
									<a href="<?php echo base_url() ?>news/page/<?= $tranghientai+1 ?>">
										<i class="fa fa-caret-right" >
											

										</i>
									</a>
								</li>
								<?php  
							}
						 ?>

						
					</li>
					</ul>  
				</div>
			</section>
			<aside class="col-sm-1"></aside>
			<aside id="aside" class="col-12 col-sm-12 col-md-3 _1row wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
				<form action="search.php">
					<input type="text" placeholder="Search" required="">
					<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
				<div class="categories">
					<p>Categories</p>
					<ul>
						<?php foreach ($cacdanhmuc as $value): ?>
							
						
						<li>
							<a href="<?= base_url() ?>News/page/<?= $value['id'] ?>/danhmuc/<?= $value['id']; ?>">
								<i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?= $value['tendanhmuc']; ?></a>
						</li>
						<?php endforeach ?>
					</ul>
					<div style="margin-bottom: 10px" class="text-center">
						<a href="https://dekiru.vn/study-route/999" target="_blank">
							<img style="width: 100%" src="https://storage.dekiru.vn/Data/2020/07/14/999-2-09-637303325796842173.jpg" >
						</a>
					</div>
				</div>
			</aside>

		</div>
		
		
		
		
		

		


	</div>











</body>
</html>