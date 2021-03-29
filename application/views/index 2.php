<!doctype html>
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
<body>
  <?php require 'header.php' ?>
  <!-- Back to top button -->
  <a id="button"> </a>
  <!--------------------- Phone -------------------->


  <!------------------ carousel ----------------->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" id="toptag">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <?php 
        $mangdl= json_decode($mangdl , true);
        
        $dem = 1;
       ?>
  <?php foreach ($mangdl as $key => $value): ?>
      
      <div class="carousel-item <?php if($dem == 1 ){echo "active"; $dem++;} ?> ">
        <div class="carousel-caption d-none d-md-block">
          <h1><?php echo $value['title'] ?></h1>
          <p style=" 
          color: #fff;
          font-size: 18px;
          width: 700px;
          margin: auto;
          margin-top: 10px;"><?php echo $value['description'] ?></p>
          <a href="<?= base_url() ?>Login"><div class="btn btn-success">Try it for free <i class="fa fa-chevron-right"></i></div></a>
          
        </div>
        <img class="d-block w-100" src="<?php echo $value['slide_image'] ?>" alt="First slide">
      </div>
<?php endforeach ?>

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

 


  <!-------------- Featured Courses ----------------->

  <section class="featured-course py-5">
    <div class="container">
      <div class="wrap-title">
        <h2 class="title py-5">Course in the center</h2>
      </div>
      <div class="row">
        
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
              <img class="card-img-top" src="images/course/n5.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Elementary Course</h5>
                <p style="font-size: larger;" class="card-body text-success">(Level N5)</p>
                <p class="p-time">6 Months/level </p>
                <p  style="font-family:'Font Awesome 5 Free'; font-style: 20px; text-align: left;">
                  - Learn Grammar on a friendly, easy-to-understand slide system.<br>
                  - 100% of teachers with N1 and N2 qualifications used to study and work in Japan
                  Classes up to 12 students, ensuring the best learning quality <br>
                  - Receive 20% discount for all study abroad programs, jobs<br>
                  - To participate in the test at the center. Free re-study if the exam does not pass. <br>
                  - Free account for study + JLPT online preparation <br>
                </p>
                <p class="card-text text-muted"></p>
                <h5 class="card-title">1.750.000 VNĐ</h5>
                <a href="<?php echo base_url() ?>Login" class="btn btn-success">Register now</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
              <img class="card-img-top" src="images/course/n4.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Intermediate Course</h5>
                <p style="font-size: larger;" class="card-body text-success">(Level N4, N3)</p>
                <p class="p-time">6 Months/level </p>
                <p  style="font-family:'Font Awesome 5 Free'; font-style: 20px; text-align: left;">
                  - Teacher level N1<br>
                  - Master all N3, N2 knowledge and effective exam skills. Participate in the test at the center with JLPT exam difficulty.<br>
                  - Maximum of 12 classrooms, ensuring the best learning quality<br>
                  - Textbooks N3, N2 exclusively compiled based on analysis of JLPT problems each year.<br>
                  - Achievement rate of previous courses JLPT N3 is 90%, JLPT N2 is 70%.
                </p>
                <p class="card-text text-muted"></p>
                <h5 class="card-title">4.500.000 VNĐ</h5>
                <a href="<?php echo base_url() ?>Login" class="btn btn-success">Register now</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
              <img class="card-img-top" src="images/course/n4.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Intermediate Course</h5>
                <p style="font-size: larger;" class="card-body text-success">(Level N4, N3)</p>
                <p class="p-time">6 Months/level </p>
                <p  style="font-family:'Font Awesome 5 Free'; font-style: 20px; text-align: left;">
                  - Teacher level N1<br>
                  - Master all N3, N2 knowledge and effective exam skills. Participate in the test at the center with JLPT exam difficulty.<br>
                  - Maximum of 12 classrooms, ensuring the best learning quality<br>
                  - Textbooks N3, N2 exclusively compiled based on analysis of JLPT problems each year.<br>
                  - Achievement rate of previous courses JLPT N3 is 90%, JLPT N2 is 70%.
                </p>
                <p class="card-text text-muted"></p>
                <h5 class="card-title">4.500.000 VNĐ</h5>
                <a href="<?php echo base_url() ?>Login" class="btn btn-success">Register now</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
              <img class="card-img-top" src="images/course/n4.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Intermediate Course</h5>
                <p style="font-size: larger;" class="card-body text-success">(Level N4, N3)</p>
                <p class="p-time">6 Months/level </p>
                <p  style="font-family:'Font Awesome 5 Free'; font-style: 20px; text-align: left;">
                  - Teacher level N1<br>
                  - Master all N3, N2 knowledge and effective exam skills. Participate in the test at the center with JLPT exam difficulty.<br>
                  - Maximum of 12 classrooms, ensuring the best learning quality<br>
                  - Textbooks N3, N2 exclusively compiled based on analysis of JLPT problems each year.<br>
                  - Achievement rate of previous courses JLPT N3 is 90%, JLPT N2 is 70%.
                </p>
                <p class="card-text text-muted"></p>
                <h5 class="card-title">4.500.000 VNĐ</h5>
                <a href="<?php echo base_url() ?>Login" class="btn btn-success">Register now</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
              <img class="card-img-top" src="images/course/n5.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Expedited Course</h5>
                <p style="font-size: larger;" class="card-body text-success">(Level N2, N1)</p>
                <p class="p-time">3 Months/level </p>
                <p  style="font-family:'Font Awesome 5 Free'; font-style: 20px; text-align: left;">
                  - Study 5 sessions / week (3 hours each session). Class for subjects: study abroad in Japan, Japanese labor export<br>
                  - Teachers at level N1, N2 have had experience studying and working in Japan.<br>
                  Classes up to 12 students, ensuring the best learning quality.<br>
                  - Discount 20% if registering for study abroad program, job.<br>
                  - Refund if not pass JLPT.<br>
                  - Give free study account + practice JLPT online 06 months.<br>
                </p>
                <p class="card-text text-muted"></p>
                <h5 class="card-title">4.900.000 VNĐ</h5>
                <a href="<?php echo base_url() ?>Login" class="btn btn-success">Register now</a>
              </div>
            </div>
          </div>
        

      </div>
      <a href="<?= base_url() ?>Course" class="btn btn-outline-success my-3">All Course</a>
    </section>




    <!--------------------Feeling students -------------------->
    <div id="statistic-dkr">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title-hp-dkr">
              
            </div>
          </div>
        </div>    
      </div>
    </div>
  </div>
  <div class="container-fluid bg-3 text-center" style="background-image: url(images/slide.jpg);background-repeat: no-repeat;
  background-size: cover;
  padding: 60px 0">    
  <h2 class="margin" style="color: white;">Feelings of students</h2>
  <div class="img-title">
    <img src="https://dekiru.vn/img-fix/img-icon-1-white.png" alt="The leading website for learning Japanese online in VietNam"><br><br><br>
    

    <div class="row">
      <div class="col-sm-4">
        <h4 style="color: white">Le Thanh Huong</h4> 
        <p style="color: white;font-family: inherit;font-size: 16px;font-style: italic ; text-align: end;">“I went to Japan and started to fulfill my dream. I have finished studying for 2 years at Japanese language school and will be going to university soon. Now I am much more confident in communicating with foreigners. Japanese thinking and reflexes are also faster and I have marked progress in all 4 skills Listening - Speaking - Reading - Writing.”</p>
        <img src="<?php echo base_url() ?>images/thanhhuong.png" class="img-responsive margin" style="width:42% ;  border-radius: 300px;" alt="">

        
      </div>

      <div class="col-sm-4"> 
        <h4 style="color: white">Phan Tien Duc</h4> 
        <p style="color: white; font-family: inherit; font-size: 16px; font-style: italic; text-align: end;">“The learning environment in Dekiru Nihongo is quite comfortable, not restrictive to students in the same pattern as in school. In addition, the teachers are also very funny, which makes the classroom quite fun. Good learning method. If your Japanese skills are poor, Japanese teachers will teach you with illustrations to make it easier to understand, then learn to specialize.”</p>
        <img src="<?php echo base_url() ?>images/tien-duc.png" class="img-responsive margin" style="width:42% ;  border-radius: 300px" alt="">

      </div>
      <div class="col-sm-4">
        <h4 style="color: white">Moc Tram</h4> 
        <p style="color: white;font-family: inherit;font-size: 16px; font-style: italic; text-align: end;">“I never thought that I could communicate Japanese fluently with foreigners until I enrolled in Dekiru Nihongo Japanese Language Center course. After only a short time, his ability to communicate in Japanese has improved dramatically. Also thanks to Hikari's dedicated advice, I went to Japan and started to fulfill my dream. I finished studying for 1 year at Japanese language school and will be going to university in the near future.”</p>
        <img src="<?php echo base_url() ?>images/moctram.png" class="img-responsive margin" style="width:42%; border-radius: 300px" alt="">
        
      </div>
    </div>
    
  </div>
  
</div>



<!-------------------- Feature Teacher -------------------->
<!-- Feature layout -->  

<section class="contact my-5">
  <div class="container">
    <h2 class=" title py-5">Experienced teachers are working at Dekiru Nihongo</h2>
    <div class="row contact-us">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <i class="fas fa-id-card-alt contact-icon"></i>
            <h3 class="contact-title">Teacher</h3>
            <div class="team-member"  style="text-align: center">
              <div class="member-avater"> <img src="<?php echo base_url() ?>images/thy.jpg" alt="avater" style= " border-radius: 18px ;object-fit: cover;width:270px;height: 270px; ">
                <ul class="member-social">
                  <li style="display: block; color:black">
                   <p style="font-size: large;">Thy Japan has 6 years working and studying experience in Japan, JLPT ... </p>
                   <li style="display: block" ><a href="https://www.facebook.com/thyJapan/"><i class="fas fa-external-link-alt" aria-hidden="true"></i></a>
                   </ul> 
                 </div>
                 <div class="team-info">
                  <h3 class="name">
                    Thy Japan                
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <i class="fas fa-id-card-alt contact-icon"></i>
              <h3 class="contact-title">Teacher</h3>
              <div class="team-member"  style="text-align: center">
                <div class="member-avater"> <img src="<?php echo base_url() ?>images/tomo.jpg" alt="avater" style= " object-position: top;border-radius: 18px ;object-fit: cover;width:270px;height: 270px; ">
                  <ul class="member-social">
                    <li style="display: block; color:black">
                     <p style="font-size: large;" >私は日本でSpeech - Language Pathologistとしてリハビリテーションを行っています。趣味は海外旅行、筋力トレーニングです。よろしくお願いします。😊😊😊 </p></li>
                     
                     <li style="display: block" ><a href="#"><i class="fas fa-external-link-alt" aria-hidden="true"></i></a>
                     </ul> 
                   </div>
                   <div class="team-info">
                    <h3 class="name">
                      Hirumuta Makoto 
                      
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <i class="fas fa-id-card-alt contact-icon"></i>
                <h3 class="contact-title">Teacher</h3>
                <div class="member-avater"><img src="<?php echo base_url() ?>images/sasuke.jpg" alt="avater" style="border-radius:18px;object-fit: cover; width:270px;height: 270px; ">
                  <ul class="member-social">
                    <li style=" display: block;color: black">
                      <p style="font-size: large;">よろしくお願いいたします。</p>
                      <li style="display: block;"><a href="#"><i class="fas fa-external-link-alt" aria-hidden="true"></i></a></li>
                    </ul> 
                  </div>
                  <div class="team-info">
                    <h3 class="name">
                      Sasuke         
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h4 style="text-align: center;">宜しくお願いします。。。😊</h4>




        </div>
      </div>
    </section>
    <!-------------------- Feature register the course -------------------->
    <!-- Feature layout -->  
    <section id = "enroll">
      <div class="container" style="max-width: 1140px;">
        <h2 class="title py-5">Register The Course Offline</h2>
        <img src="https://koijapanese.github.io/images/facilities4.jpg" style="padding-left: 75px; padding-bottom: 56px;" alt="">
        <div class="row">

          <div class="col-sm-6 col-content">
           <form action="Do_send" method="POST">
            <div>
              <h1 class="title1">SCHOOL SCHEDULE</h1>
              <p id="namep" style="margin-top: 0; margin-bottom: 2rem;">Opening Japanese classes for beginners each month in the morning, afternoon, and evening hours.
              </p> 
            </div>
            <div>
              <h2 class="title-h2">Morning class (08h30-10h30)</h2>
              <p id="namep">Monday to Friday (5 sessions/week)</p>
            </div>
            <div>
              <h2 class="title-h2">Afternoon class (15h00 - 17h00)</h2>
              <p id="namep">Monday to Friday (5 sessions/week)</p>
            </div>
            <div>
              <h2 class="title-h2">Evening class (18h30-20h30)</h2>
              <p id="namep" style="line-height: 1,2;">Calendar 1: Monday + Thursday<br>Calendar 2: Tuesday + Friday</p>
            </div>
          </div>
          <div class="col-sm-6">
            <span class="title-2 wow fadeInRight">Register for the offline course</span>
            <div class="form-group" style="margin-top: 10px; margin-bottom: 1rem;">
              <input style="font-style: italic;" required name="fullname" type="text" class="form-control form-control-lg custom-input " placeholder="First and Last name">
              <input style="font-style: italic;" required name="phonenumber" type="text" class="form-control form-control-lg custom-input " placeholder="Phone Number" >
              <input hidden name="email2" type="text" class="form-control form-control-lg custom-input "  value="luxurydemon1999@gmail.com" >
              <input style="font-style: italic;" required name="email" type="Email" class="form-control form-control-lg custom-input " placeholder="Email" >
<!--               <textarea required name="info" class="form-control form-control-lg custom-input wow fadeInRight" placeholder="Please enter the time slot (morning, noon, afternoon, evening) that you want to study! "></textarea>
 -->          <div  class="form-control" >
                    <select style="font-style: italic;" name="schedule"> 
                        <option hidden selected="">Appropriate schedule</option>
                        
                        <option value="Morning class">Morning class</option>
                        <option value="Afternoon class">Afternoon class</option>
                        <option value="Evening class">Evening class</option>
                    </select>
              </div>
              
              <input type="submit" class="btn-cta" value="Sign up">

      
              
            </div>
          </div>
        </form>
      </div>
    </div>

  </section>




  
  <!--------------------- Contact Us -------------------->

<?php foreach ($dataFooter as $key =>$value): ?>
    <?php 
      if ($key == "mangXH") {
        $mangXH = $value;  
      }
      if ($key == "Hotline") {
        $Hotline = $value;  
      }
      if ($key == "Address") {
        $Address = $value;  
      }
      if ($key == "Gmail") {
        $Gmail = $value;  
      }
      if ($key == "Title") {
        $Title = $value;  
      }
      if ($key == "logo") {
        $logo = $value; 
      }
     ?>
    <?php endforeach ?> 
  <section class="contact my-4">
    <div class="container">
      <h2 class="title py-5" id="contact">Contact Us</h2>

      <div class="row contact-us">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <i class="fas fa-map-marker-alt contact-icon"></i>
              <h3 class="contact-title">Address</h3>
              <b class="card-text"><?= $Address['address'] ?></b>

            </div>
          </div>

        </div>


        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <i class="fas fa-phone contact-icon"></i>
              <h3 class="contact-title">Phone Number</h3>
              <b class="card-text"><?= $Hotline['soDT'] ?></b>

            </div>
          </div>

        </div>


        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <i class="far fa-envelope contact-icon"></i>
              <h3 class="contact-title">Email</h3>
              <b class="card-text"><?= $Gmail['Gmail'] ?></b>
            </div>
          </div>
        </div>
        <p style="border-color: black">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.123558693497!2d108.20897945115208!3d16.059076788832613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b67e4bebb7%3A0x27031d5e3b55f7ee!2zMTA0LCAxMiBMw6ogxJDDrG5oIEzDvSwgVGjhuqFjIEdpw6FuLCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1607486710095!5m2!1sen!2s" width="1072" height="621" frameborder="3" style="border:3px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </section>

  <?php require 'footer.php';?>