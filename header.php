<?php

$this->setunsetcookie();
 
$mainurl = "http://localhost/EmployeeManagement/";
$baseurl = "http://localhost/EmployeeManagement/assets/"; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Eterna Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $baseurl?>img/favicon.png" rel="icon">
  <link href="<?php echo $baseurl?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $baseurl?>vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $baseurl?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl ?>css/font-awesome.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl?>css/bootstrap.min.css'>
    <script src="<?php echo $baseurl ?>assets/js/jquery.js"></script>
  <!-- Template Main CSS File -->
  <link href="<?php echo $baseurl?>css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: Eterna - v4.1.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
</head>

<body>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="<?php echo $mainurl?>">Eterna</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          
          <?php
            if (!isset($_SESSION["id"])) {
        ?>
          <li><a class="active" href="./">Home</a></li>
          <li><a  href="<?php echo $mainurl;?>Register">Register</a></li>
         
          <li><a  href="<?php echo $mainurl;?>Login">Login</a></li>
        <?php }else
         {
        ?>
        <?php 
        $this->logout()  
                        ?>
        <li><a href="<?php echo  $mainurl?>EmployeeList">EmployeeList</a></li>
        <li><a href="<?php echo  $mainurl?>Salary">Salary</a></li>
        <li><a href="<?php echo  $mainurl?>?logout">Logout</a></li>
       <?php  } 
       ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

