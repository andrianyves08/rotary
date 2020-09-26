 <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>

      <!-- DataTables JS -->
  <script src="js/addons/datatables.min.js" type="text/javascript"></script>

  <!-- DataTables Select JS -->
  <script src="js/addons/datatables-select.min.js" type="text/javascript"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('table.display').DataTable();
    });
  </script>


  
  <script src="plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
  $(function() {  
    <?php
     if(isset($_SESSION['success'])){
      echo "toastr.success('".$_SESSION['success']." ')";
        unset($_SESSION['success']);
      }

    ?>  
  });

</script>
<?php
  if(isset($_SESSION['error'])){
    foreach($_SESSION['error'] as $error) {
      echo "<script type='text/javascript'>
              $(function() { 
             toastr.error('".$error."');});</script>";
      }
    unset($_SESSION['error']);
  }
?> 

<script>
$("#selectall").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>

<script type="text/javascript">
$("td").click(function(e) {
    var checkbox = $(':checkbox', $(this).parent()).get(0);
    var checked = checkbox.checked;
    if (checked == false) checkbox.checked = true;
    else checkbox.checked = false;
});
</script>

<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>