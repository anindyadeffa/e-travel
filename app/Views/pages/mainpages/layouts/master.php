<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </meta>
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Travel.in</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
  <link href="<?php echo base_url('/mainpages/css/styles.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('/libraries/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('/libraries/perfect-scrollbar/css/perfect-scrollbar.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('/libraries/jquery-switchbutton/jquery.switchButton.css') ?>" rel="stylesheet">
</head>

<body class="Poppins">
  <!-- navbar -->
  <div class="container">
    <nav class="row navbar navbar-expand-xl bg-white">
      <div class="col-xl-2 d-flex">
        <a href="/" style="text-decoration: none; color: #98c8db; font-size: 25px; font-weight: 700;">TRAVEL.IN</a>
      </div>
      <div class="col-xl-10">
        <button class="navbar-toggler navbar-toggler-left navbar-light" type="button" data-toggle="collapse" data-target="#navb">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-xl-2">
              <a class="nav-link color-basic" href="<?php echo base_url('/') ?>">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-xl-2">
              <a class="nav-link color-basic" href="<?php echo base_url('/package') ?>">TRAVEL PACKAGE</a>
            </li>
            <li class="nav-item mx-xl-2">
              <a class="nav-link color-basic" href="<?php echo base_url('#') ?>">ABOUT</a>
            </li>
            <li class="nav-item mx-xl-2">
              <a class="nav-link color-basic" href="<?php echo base_url('/contact') ?>">CONTACT US</a>
            </li>
          </ul>
          <!-- mobile button -->
          <form class="form-inline d-xl-block d-xl-none">
            <button class="btn btn-login d-flex my-2 my-xl-0">
              <p href="#" class="mb-0 font-weight-bold">MY PROFILE</p>
              <i class="fa fa-sort-down ml-2"></i>
            </button>
          </form>
          <!-- desktop button -->
          <!-- <form class="form-inline my-2 my-xl-0 d-none d-xl-block">
            <button class="btn btn-login btn-navbar-right my-2 my-xl-0 px-4">
              Masuk
            </button>
          </form> -->
        </div>
      </div>
    </nav>
  </div>

  <div class="">
    <?= $this->renderSection('content') ?>
  </div>

  <section class="section-footer">
    <div class="container py-4">
      <div class="row">
        <div class="col-xl-5">
          <h3 class="title-footer">About Us</h3>
          <p class="text-footer">TRAVEL.in is a private retailer or public service that provides travel and tourism-related services to the general public on behalf of accommodation or travel suppliers to offer different kinds of travelling packages for each destination.</p>
        </div>
        <div class="col-xl-4">
          <h3 class="title-footer">Contact Us</h3>
          <div class="text-footer">
            <div class="d-flex mt-1">
              <i class="fa fa-home mt-1 mr-2" aria-hidden="true"></i>
              <p>
                12345. West Jakarta St. South Meruya,
                <br>
                Indonesia
              </p>
            </div>
            <div class="d-flex mt-1">
              <i class="fa fa-phone mt-1 mr-2" aria-hidden="true"></i>
              <p>
                +[12] 3456 7890
              </p>
            </div>
            <div class="d-flex mt-1">
              <i class="fa fa-envelope mt-1 mr-2" aria-hidden="true"></i>
              <a class="a_section_info" href="mailto: support@travelin.com">
                support@travelin.com
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3">
          <h3 class="title-footer">Travel.in</h3>
          <div class="pt-5 mt-5" style="text-align: end;">
            <a href="#" class="btn btn-view-more">Side Map</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?php echo base_url('/libraries/jquery/jquery.js') ?>"></script>
  <script src="<?php echo base_url('/libraries/bootstrap/bootstrap.js') ?>"></script>
  <script src="<?php echo base_url('/libraries/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('/libraries/bootstrap/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('/libraries/popper.js/popper.js') ?>"></script>
  <script src="<?php echo base_url('/libraries/perfect-scrollbar/js/perfect-scrollbar.jquery.js') ?>"></script>
  <script src="<?php echo base_url('/libraries/jquery-ui/jquery-ui.js') ?>"></script>
  <script src="<?php echo base_url('/libraries/jquery-switchbutton/jquery.switchButton.js') ?>"></script>
  <script src="<?php echo base_url('/libraries/peity/jquery.peity.js') ?>"></script>
  <script src="<?php echo base_url('/libraries/retina/retina.min.js') ?>"></script>
  <script src="<?php echo base_url('/libraries/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</body>

</html>