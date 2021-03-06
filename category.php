<?php
require('include/conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Myfreebook Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/st2.css" rel="stylesheet">
  <style>
    body {
      background-color: whitesmoke !important;
    }
  </style>

</head>

<body>

  <!-- ======= Header/Navbar Section ======= -->
  <?php
  include("include/menu.php");
  ?>

  <!-- End Header/Navbar -->


  <!-- ======= Books Category Section ======= -->
  <div class="bookcat">
    <h1>Books Categories</h1>
    <ul>
      <?php
      $query = "select * from category ";
      $res = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($res)) {
        echo '<li><a href="subcat.php?cat=' . $row['cat_id'] . '&catnm=' . $row["cat_nm"] . '">' . $row["cat_nm"] . '</a></li>';
        //pass catid not catnm
      }
      mysqli_close($conn);
      ?>
    </ul>
  </div>

  <!-- End Book Category -->

  <!-- ======= Footer ======= -->


  <!-- End  Footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>