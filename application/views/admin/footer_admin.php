
  
<footer  class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 .</strong> All rights
    reserved.
  </footer>


<script src="<?= base_url() ?>public/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>public/ckeditor/ckfinder/ckfinder.js"></script>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
               
                CKEDITOR.replace( 'content', {
                	filebrowserBrowseUrl:'<?= base_url() ?>'+ 'public' + '/ckfinder/ckfinder.html',
                	filebrowserImageBrowseUrl: '<?= base_url() ?>'+'public'+'/ckfinder/ckfinder.html?Type=Images',
                	
                });
</script>






<!-- jQuery 3 -->
<script src="<?= base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>public/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>public/bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>public/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>public/dist/js/demo.js"></script>