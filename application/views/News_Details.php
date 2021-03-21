<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>News</title>
	<link rel="icon" href="images/logo.png"  >

	<!-- Bootstrap CSS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/detail_news.css">
	<script type="text/javascript" src="<?= base_url() ?>js/index.js"></script>


	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




	<title>Japanese Language Course</title>
	<!-- chat -->
	<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqvwspriuukzbzylxnj")</script>
	<!--end  chat -->
</head>
<?php require 'header.php' ?>
<body style="background: #F9F9F9;">
	
		
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1">
						<h1>Ad</h1>
					</li>
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
				

			</div>
		</div>
	</section>



	<div class="container">
		<div class="row">
			<section id='main-blog' class="col-12 col-sm-12 col-md-8 _1row wow fadeInLeft">
				<div class="_1-blog">
					<?php foreach ($dulieutin as $value): ?>
						
					
					<div class="blog-image-box"><img src="<?= $value['image'] ?>" alt=""></div>
					<div class="title-and-author">
						<div class="blog-title"><span><?= $value['title'] ?></span></div>
						<div class="author"><span class="time"><?= date('d/m/Y - G:i - A',$value['date']) ?></span><a class='author' href="#"><?= $value['tendanhmuc'] ?></a></div>
					</div>
					<div class="content">
						<p><?= $value['content'] ?></p>
					</div>
					
					<ul>
						<li><span><i class="fa fa-square" aria-hidden="true"></i>Tatemesa quiau voluptas sit aspernatur aut odit aut fugit be thought of as magic bullets for creativity.</span></li>
						<li><span><i class="fa fa-square" aria-hidden="true"></i>Accusanteum reqw dol vreme querirka laudantium create chemical changes that occur naturally in your body.</span></li>
						<li><span><i class="fa fa-square" aria-hidden="true"></i>Quis autem vel eum iurea reprehenderit qui in eavoltu healthy diet, and allowing yourself to take breaks.</span></li>
					</ul>
					
					<iframe  src="https://www.youtube.com/embed/2u0pq6kUDqo?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="read-more-and-comment">
						<div class="tags"><span>Tags:</span> <a href="#"><?= $value['tendanhmuc'] ?></a></div>
						<a href="#" class="comment">0 Comment</a>
					</div>
					<?php endforeach ?>
				</div>
				<!-- end 1-blog -->


			</section>
			<aside class='col-sm-1'></aside>
			<aside id='aside' class='col-12 col-sm-12 col-md-3 _1row wow fadeInRight'>
				<form action="search.php">
					<input type="text" placeholder="Search" required>
					<button type='submit'><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
				<div class="categories">
					<p>Categories</p>
					<ul>
						<?php foreach ($cacdanhmuc as $value): ?>
							
						
						<li><a href="<?php base_url() ?>News/page/danhmuc/<?= $value['id']; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?= $value['tendanhmuc'] ?></a></li>
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