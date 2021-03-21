   <!---------------------- nvarbar ----------------------->
   <html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="images/logo.png"  >

  <!-- Bootstrap CSS -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/profile.css">
  
  <link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/solid.min.css">

  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

  <title>Japanese Language Course</title>
  <!-- chat -->
  <script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqvwspriuukzbzylxnj")</script>
  <!--end  chat -->
</head>

   <link rel="icon" href="images/logo.png"  >

   <nav class="navbar navbar-expand-md  navbar-dark bg-white">
    <div class="container menu-top">
    <link rel="icon" href="images/logo.png"  >
      <a class="navbar-brand" href="<?= base_url() ?>Home/Home_user">
      <img src="<?= base_url() ?>uploads/1.png" >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>Home/Home_user">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Home/Course_user">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8888/Project2/News/page/1">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn_contact" href="<?php echo base_url() ?>Home/Contact_user">Contact</a>
          </li>
          <li class="dropdown info-user-desktop open">
            <div class="frame-avatar dropdown-toggle" id="frame-avatar-user" data-toggle="dropdown">
                <img class=" avatar-user hachium img-avatar" src="http://fedu.vn/assets/images/user-default-icon.png" style="height: 100%; width: auto;">
            </div>

            <ul class="dropdown-menu" role="menu" id="user-profile">
                <li><a href="#"><?= $this->session->userdata('user'); ?></a></li>
                <li><a href="<?= base_url() ?>User/Information_user/">Thông tin cá nhân</a></li>
                <li><a href="#">Tiến trình học tập</a></li>
                <li><a href="#">Lịch sử giao dịch</a></li>
                <li><a href="<?php echo base_url('Home/logout'); ?>">Đăng xuất</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
  



