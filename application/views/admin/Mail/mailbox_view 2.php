

<?php require('./application/views/admin/header_admin.php') ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Tables
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Student Registered Offline</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-tools">
            <div class="input-group  " style="width: 150px;">
                   
                   
                    <div class="input-group input-group-sm" style="margin-right: 30px width: 150px;">
                    <input id="myInput" type="search" name="table_search" class="form-control pull-left" placeholder="Search" aria-controls="example2">

                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>

            </div>

            
          </div>
          <div class="box-body">

            <table id="example2" class="table table-bordered table-striped">
              
              <thead>
                <tr>
                  <th>Name Student</th>
                  <th>Email</th>
                  <th>PhoneNumber</th>
                  <th>Schedule</th>
                  <th hidden="">CSS grade</th>
                </tr>
              </thead>
            <?php foreach ($student_offline as $value): ?>
              <tbody id="myTable">
                <tr>
                  <td><?php echo $value['tenkh'] ?></td>
                  <td><?php echo $value['sdt'] ?></td>
                  <td><?php echo $value['email'] ?></td>
                  <td><?php echo $value['lichhoc'] ?></td>
                  <td hidden="">C</td>
                </tr>
                
              </tbody>
            <?php endforeach ?>
              <tfoot>
                <tr>
                  <th>Name Student</th>
                  <th>Email</th>
                  <th>PhoneNumber</th>
                  <th>Schedule</th>
                  <th hidden="">CSS grade</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>

  <!-- /.content -->
</div>




<?php require('./application/views/admin/footer_admin.php') ?>


<script>
  $(function () {
    
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  
</script>
