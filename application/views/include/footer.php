<footer class="main-footer">
    <div class=" hidden-xs text-center">
          <p>&copy; TechEnd 2018 copyright reserved</p>
    </div>
 
    
  </footer>
  
  
    <!-- Control Sidebar -->
   <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
  
  </div>

     
</body>
  
  
       <?php echo script_tag('js/jquery.js'); ?>
      <?php echo script_tag('js/bootstrap.js'); ?>
      <?php echo script_tag('js/main.js'); ?>
     <?php echo script_tag('js/dash_main.js'); ?>
     <?php echo script_tag('public/components/jquery/dist/jquery.min.js'); ?>
     <?php echo script_tag('public/components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>
     <?php echo script_tag('public/components/fastclick/lib/fastclick.js'); ?>
     <?php echo script_tag('public/dist/js/adminlte.min.js'); ?>
     <?php echo script_tag('public/dist/js/demo.js'); ?>
  <!-- jQuery 3 -->
  <?php if($this->uri->segment(1) == 'chat'){?>
    <?php echo script_tag('public/chat/chat.js'); ?>
 <?php }?>
 <?php if($this->uri->segment(1) != 'chat'){?>
     <?php echo script_tag('public/components/PACE/pace.min.js'); ?>
 <?php }?>
<script>



  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
  <?php if($this->uri->segment(1) != 'chat'){?>
  $(document).ajaxStart(function () {
    Pace.restart();
  });
  <?php }?>
</script>