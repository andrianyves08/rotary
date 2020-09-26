 <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>

      <!-- DataTables JS -->
  <script src="<?php echo base_url(); ?>assets/admin/js/addons/datatables.min.js" type="text/javascript"></script>

  <!-- DataTables Select JS -->
  <script src="<?php echo base_url(); ?>assets/admin/js/addons/datatables-select.min.js" type="text/javascript"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('table.display').DataTable();
    });
  </script>

  
  <script src="<?php echo base_url(); ?>assets/admin/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
  $(function() {  
  <?php if($this->session->flashdata('user_loggedin')): ?>
    <?php echo "toastr.success('".$this->session->flashdata('user_loggedin')." ')"; ?>
  <?php endif; ?>


  <?php if($this->session->flashdata('user_loggedout')): ?>
    <?php echo "toastr.success('".$this->session->flashdata('user_loggedout')." ')"; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('login_failed')): ?>
    <?php echo "toastr.error('".$this->session->flashdata('login_failed')." ')"; ?>
  <?php endif; ?>
  
  <?php if($this->session->flashdata('article_created')): ?>
    <?php echo "toastr.success('".$this->session->flashdata('article_created')." ')"; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('article_updated')): ?>
    <?php echo "toastr.success('".$this->session->flashdata('article_updated')." ')"; ?>
  <?php endif; ?>
  
  
  });

</script>


</body>
</html>