<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>css/css_all_course.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/admin.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Course</title>
</head>

  <?php require('./application/views/admin/header_admin.php') ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Manage Course
        <small>Manage Course</small>  
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    

<!-- form add course -->

<div class="container-add-course"  >  
  <form class="shadow form-add-course" method="post" action="<?= base_url() ?>admin/Manage_course/add_course" enctype="multipart/form-data">
    <i class="fas fa-times btn-exit" ></i>

    <div class="form-title">
      <h3  class="text-center py-4">ADD COURSE</h3>
    </div>

    <div class="form-group">
      <label>Name Course</label>
      <input type="text" name="title" class="form-control title-course" placeholder="Input The Course Name">
    </div>
    <hr>

    <div class="form-group">
      <label for="exampleFormControlFile1">Course Image</label>
      <input type="file" class="form-control-file image-course" name="image">
    </div>
    <hr>

   
    <input style="border-radius: 30px;"type="submit" value="ADD COURSE" class="btn btn-success btn-block btn-add-course">
    
  </form>
  <br>
  <br>
</div>




        <!---------------------- Course ------------------>

        <section >
          <div class="container">
            <div class="btn btn-info add-course ">Add Course</div>

            <h2 class="title text-center">Course List</h2>

            <div class="row">
              <?php foreach ($data_course as $value): ?>
                <?php 
                $date = strtotime($value['date_upload']); 
                $date = date('H:i d/m/Y', $date);
                ?>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                  <input type="hidden" value="<?= $value['id_course'] ?>">
                  <img class="img-thumbnail" src="<?= $value['image'] ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?= $value['title_course'] ?></h5>
                    <p class="card-text text-muted"><?= $date ?></p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="<?= base_url() ?>admin/Manage_course/ad_detail_course/<?= $value['id_course'] ?>" class="btn btn-warning">View detail</a>
                      <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#exampleModal">Edit <i class="fas fa-pencil-alt"></i></button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_course'] ?>">
                        Delete <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </div>

                </div>


                  <div class="modal fade" id="delete<?= $value['id_course'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">Do you want to delete the course?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                           <?= $value['title_course'] ?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <a href="<?php echo base_url() ?>admin/Manage_course/delete_course/<?= $value['id_course'] ?>" class="btn btn-danger">Delete <i class="fas fa-delete"></i></a> 
                        </div>
                      </div>
                    </div>
                  </div> <!-- end delete course -->

                </div>
                <?php endforeach ?> 
                <!-- form edit course -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Edit Course</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post" class="form-edit" action="<?= base_url() ?>admin/Manage_course/update_course" enctype="multipart/form-data">
                          <input type="hidden" name="id-edit" class="id-edit" value="">
                          <input type="hidden" name="image-course" class="image-course2" value="">
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name Course: </label>
                            <input type="text" name="title-edit" class="form-control title-edit" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Image Course: </label>
                            <img class="img-thumbnail image-course1" src="" alt="Ảnh edit">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Image Course New :</label>
                            <input type="file" name="image-edit" class="form-control-file image-edit" name="image">

                          </div> 
                         

                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-save">Save</button>
                      </div>
                    </div>
                  </div>
                </div>


              </div><!--  end row -->



            </div><!-- end container -->
          </section>



          

</div>
<?php require('./application/views/admin/footer_admin.php') ?>

<script src="<?= base_url() ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>js/popper.min.js"></script>
<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/main.js"></script>
</body>
</html>