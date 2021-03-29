<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
  <link rel="stylesheet" href="<?= base_url() ?>css/detail_course.css">

  <link rel="stylesheet" href="<?= base_url() ?>css/admin.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php foreach ($data_detail_course[2] as $value): ?>
      <?= $value['title_course']; ?>
      
      <?php endforeach ?>        
  </title>
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
        <div class="container mt-5 content">
          <h3 class="text-center pt-5">
            <?php foreach ($data_detail_course[2] as $value): ?>
              <?= $value['title_course']; ?>
              <? $id = $value['id_course']; ?>
            <?php endforeach ?>
          </h3>
          <section>
            <h4 class="title_lession">Lesson
              <button style="float: right;" type="button" class="btn btn-info btn-add" data-toggle="modal" data-target="#add-lesson" >Add Lesson</button>
            </h4>

            <div class="modal fade" id="add-lesson" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Lesson: </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="form-add-lesson" method="post" action="<?= base_url() ?>admin/Manage_course/add_lesson/<?= $value['id_course']; ?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="col-form-label">Name Lesson:</label>
                        <input type="text" class="form-control" name="title-lesson" placeholder="Input name lesson">
                      </div>
                      <div class="form-group">
                        <label>Video Lesson :</label>
                        <input type="file" class="form-control-file" name="file-lesson">

                      </div>
                      <div class="form-group">
                        <label>Link Youtube :</label>
                        <input type="text" class="form-control" placeholder="Input url youtube" name="link-youtube">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info btn-add-lesson">Add Lesson</button>
                  </div>
                </div>
              </div>
            </div>
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">List</th>
                  <th scope="col">Date upload</th>
                  <th scope="col">Video Lesson</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data_detail_course[0] as $value): ?>
                  <?php foreach ($value as $value2): ?>
                    <?php 
                    $date = strtotime($value2['date_upload']); 
                    $date = date('H:i d/m/Y', $date);
                    $id_lesson = $value2['id_lesson'];
                    ?>


                <tr>
                  <th scope="row"></th>
                  <td><?= $value2['title_lesson'] ?></td>
                  <td><?= $date ?></td>
                  <td><a href="<?= $value2['video'] ?>" style="font-size: 20px" class="fab fa-youtube"></a></td>
                  <td>
                    <button type="button" class="btn btn-warning btn-edit-detail" data-toggle="modal" data-target="#edit-documents" data-whatever="@fat"><i class="fas fa-pencil-alt"></i></button>

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $id_lesson ?>"><i class="fas fa-trash"></i></button>
                    <input type="hidden" value="<?= $id_lesson ?>">
                    <input type="hidden" value="1">           
                  </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="delete<?= $id_lesson ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Do you want to delete the lesson?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <?= $value2['title_lesson'] ?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a style="color: white" href="<?= BASE_URL() ?>admin/Manage_course/delete_lesson/<?= $id_lesson ?>" class="btn btn-danger">Delete <i class="fas fa-trash"></i></a> 
                      </div>
                    </div>
                  </div>
                </div> <!-- end delete lesson -->
              <?php endforeach ?>
            <?php endforeach ?>



              </tbody>
            </table>

          </section>
          <hr>
       

          <section>



            <h4 class="title">Documentation
              <button style="float: right;" type="button" class="btn btn-info" data-toggle="modal" data-target="#add-docs" >Add Documents</button>
            </h4>

            <div class="modal fade" id="add-docs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Add Documents</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form  class="form-add-documents" method="post" action="<?= base_url() ?>admin/Manage_course/add_documents/<?= $id_lesson ?> ?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Title: </label>
                        <input type="text" class="form-control" id="recipient-name" name="title-documents">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">File Documents:</label>
                        <input type="file" class="form-control-file" name="file-documents">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-docs">Add</button>
                  </div>
                </div>
              </div>
            </div>

            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">List</th>
                  <th scope="col">Date upload</th>
                  <th scope="col">Link Download</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
               <?php foreach ($data_detail_course[1] as $value): ?>
                <?php foreach ($value as $value2): ?>
                  <?php 
                  
                  $id_docs = $value2['id_documents'];
                  ?>
               
                    <tr>
                      <th scope="row"></th>
                      <td><?= $value2['title_documents'] ?></td>
                      <td><?= $date ?></td>
                      <td><a href="<?= $value2['link_dowload'] ?>" class="ml-4 fas fa-cloud-download-alt"></a></td>
                      <td>
                        <button type="button" class="btn btn-warning btn-edit-detail" data-toggle="modal" data-target="#edit-documents" data-whatever="@fat"><i class="fas fa-pencil-alt"></i></button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete3<?= $id_docs ?>"><i class="fas fa-trash"></i></button>
                        <input type="hidden" value="<?= $id_docs ?>">
                        <input type="hidden" value="3"> 
                      </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="delete3<?= $id_docs ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Do you want to delete the lesson?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <?= $value2['title_documents'] ?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a style="color: white" href="<?= BASE_URL() ?>admin/Manage_course/delete_documents/<?= $id_docs ?>" class="btn btn-danger">Delete <i class="fas fa-trash"></i></a> 
                          </div>
                        </div>
                      </div>
                    </div> <!-- end delete lesson -->
                  <?php endforeach ?>
                <?php endforeach ?>
              </tbody>
            </table>
          </section>
          <hr>
          
          <h4 class="title">Course Content</h4>
          <div class="row">
            <form method="POST" enctype="multipart/form-data" action="<?= base_url() ?>admin/Manage_course/editContent">
            <?php foreach ($data_detail_course[2] as $value): ?>
                            
              <input type="hidden" name="id" value="<?php echo $value['id_course'] ?>">                  
              <fieldset class="form-group">

                <textarea name="content" id="content" class="content" cols="50" rows="12">             
                            <?= $value['information']?>
                            
                </textarea>
              </fieldset>
          <?php endforeach ?>  

              <fieldset class="form-group"> 
                <input type="submit" class="btn btn-warning btn-lg btn-block" value="Update Content">
              </fieldset>
            </form>
          </div>
        

           <!-- form edit Lesson -->
           <div class="modal fade" id="edit-lesson" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" >Edit : </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="form-edit" method="post" action="<?= base_url() ?>admin/Manage_course/editLesson/<?= $id_lesson ?>" enctype="multipart/form-data">
                    <!-- Lesson -->
                     
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Name Lesson:</label>
                      <input type="text" class="form-control title-edit" name="title-edit">
                    </div>
                    <!-- File Video -->
                    <div class="form-group">
                      <label class="col-form-label">File Video:</label>
                      <input type="file" class="form-control-file" name="file-upload">
                      <input type="hidden" class="file-upload2" name="file-upload2">
                      <input type="hidden" name="type" class="type">
                      <input type="hidden" name="id-edit" class="id-edit">
                    </div>
                    <!-- Link Youtube -->
                    <div class="form-group">
                        <label  for="recipient-name" class="col-form-label">Link Youtube:</label>
                        <input type="text" class="form-control youtube-edit"  name="youtube-edit">
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
          <!-- form edit Document -->
          <div class="modal fade" id="edit-documents" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit: </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="form-edit" method="post" action="<?= base_url() ?>admin/Manage_course/editLesson/<?= $id_lesson ?>" enctype="multipart/form-data">
                    <!-- Lesson -->

                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Name Document:</label>
                      <input type="text" class="form-control title-edit" name="title-edit">
                    </div>
                    <!-- File Video -->
                    <div class="form-group">
                      <label class="col-form-label">File Video :</label>
                      <input type="file" class="form-control-file" name="file-upload">
                      <input type="hidden" class="file-upload2" name="file-upload2">
                      <input type="hidden" name="type" class="type">
                      <input type="hidden" name="id-edit" class="id-edit">
                    </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary btn-save">Save</button>
                </div>
              </div>
            </div>
          </div>







    




</div>

</div>
<?php require('./application/views/admin/footer_admin.php') ?>
<script src="<?= base_url() ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>js/popper.min.js"></script>
<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/main.js"></script>
</body>

</html>