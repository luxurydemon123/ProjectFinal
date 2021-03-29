<?php require './application/views/user/Header_user_view.php'  ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
  <!-- user information -->
    <?php 
        if (isset($_GET['user']) === true && empty($_GET['user']) === false) {
          $username = $_GET['user'];
           
        }
        else{
          require './application/views/user/profile.php'; 
          //header('location: Header_user_view.php');
          exit();
        }
     ?>
    

    
</body>

<?php require './application/views/user/Footer_user_view.php'  ?>

<script>
   


    $('#profile-info').click(function(){
        $('.main-header-item ').removeClass('active');
        $('#profile-info').addClass('active');
        $('#change-password-form').css('display', 'none');
        $('#change-avatar-form').css('display', 'none');
        $('#change-info-form').css('display', 'block');
    });

    $('#profile-pass').click(function(){
        $('.main-header-item').removeClass('active');
        $('#profile-pass').addClass('active');
        $('#change-avatar-form').css('display', 'none');
        $('#change-info-form').css('display', 'none');
        $('#change-password-form').css('display', 'block');
    });
   
       

 
</script>