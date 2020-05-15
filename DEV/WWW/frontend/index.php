<!DOCTYPE html>
<html lang="de">

<head>

  <?php
      define("WERDICHLEGALGERUFEN", 1);
      require_once "settings.php";
      require_once "model/m-header.php";
      require_once "model/m-navi.php";
      HEADER::GET_HEADER();
  ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

     <?php
        NAVI::GET_NAVI();
     ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?php
          NAVI::GET_TOPNAVI();
        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="col-lg-12">

            <!-- Default Card Example -->
            <div class="card mb-12">
              <div class="card-header">
                Default Card Example
              </div>
              <div class="card-body">
                This card uses Bootstrap's default styling with no utility classes added. Global styles are the only things modifying the look and feel of this default card example.
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SmallCL 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Loading Box -->

</body>

</html>

