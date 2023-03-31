<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMAS SANDIKTA BEKASI</title>

  <!-- CUSTOM STYLE -->
    <link href="<?php echo base_url()?>/assets/css/style.css" id="switch_style" rel="stylesheet">

     <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/absen.css' ?>">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/jquery-ui.css">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php
      $this->load->view('v_sider');
    ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lainnya
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('index.php/welcome/contakkepsek');?>">Kontak Sekolah</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
         <div class="container-fluid">
        <div class="row">
            <?php $this->load->view($konten)?>
          </div><!--/row-->
    </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url()?>js/jquery-ui.js"></script>

  <!-- Menu Toggle Script -->
  <script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>
<script>
  $(document).ready(function() {
    $('#datatable').DataTable({
      "order" : []
    });

  } );
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("input.datepicker" ).datepicker({
      dateFormat:'yy-mm-dd',
      changeMonth: true,
      changeYear: true
    });
    $("input.datepicker2" ).datepicker({
      dateFormat:'yy-mm-dd',
      changeMonth: true,
      changeYear: true
    });

  });
</script>

</body>

</html>
