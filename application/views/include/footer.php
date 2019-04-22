<footer class="main-footer ">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
      </div>
    </div> 
    <div class=" hidden-xs text-center">
          <p>&copy; TechEnd <?php echo date('Y') ?> copyright reserved</p>
    </div> 
  </footer>
  
  
    <!-- Control Sidebar -->
   <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <!-- <div class="control-sidebar-bg"></div> -->
</div>
<!-- ./wrapper -->
  
  </div>

     
</body>
  
  
       <?php echo script_tag('js/jquery.js'); ?>

      <?php echo script_tag('js/bootstrap.js'); ?>
      <?php echo script_tag('js/popper.min.js'); ?>
      <?php echo script_tag('js/main.js'); ?>
     <?php echo script_tag('js/dash_main.js'); ?>
     <?php echo script_tag('public/components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>
     <?php echo script_tag('public/components/fastclick/lib/fastclick.js'); ?>
     <?php echo script_tag('public/dist/js/adminlte.min.js'); ?>
     <?php echo script_tag('public/dist/js/demo.js'); ?>
  <!-- jQuery 3 -->
 <?php if($this->uri->segment(2) == 'marriageArticle'){?>
  <?php echo script_tag('js/question.js'); ?>
 <?php }?>

<script src="<?=base_url('public/chat/chat.js');?>"></script> 
<script>



  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
  <?php if($this->uri->segment(1) != 'chat'){?>
  $(document).ajaxStart(function () {
    // Pace.restart();
  });
  <?php }?>
</script>