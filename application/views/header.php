   <!---------------------- nvarbar ----------------------->
   <link rel="icon" href="images/logo.png"  >

   <nav class="navbar navbar-expand-md  navbar-dark bg-white">
    <div class="container menu-top">
    <link rel="icon" href="images/logo.png"  >
      <a class="navbar-brand" href="<?= base_url() ?>Home">
      <img src="<?= base_url() ?>uploads/1.png" >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Course">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8888/Project2/News/page/1">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn_contact" href="<?php echo base_url() ?>Contact">Contact</a>
          </li>
          <li class="nav-item" style="background: linear-gradient(to right,#f52c3d,#d10718);font-size: 15px;
    color: red;
    font-weight: 600;
    border-radius: 80px;
    margin-left: 15px;">
            <a id="login-color" class="nav-link" style="" href="<?= base_url() ?>Login/">Login</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>