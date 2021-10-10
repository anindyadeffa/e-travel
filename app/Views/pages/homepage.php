<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('mainpages/css/styles.css'); ?>">
</head>

<body>
    <!-- navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg bg-white">
            <a href="travel.html"><img src="img/logo_travel.png" width="90px" alt="Logo Travel"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-xl-2">
                        <a href="travel.html" class="nav-link color-basic">Home</a>
                    </li>
                    <li class="nav-item mx-xl-2">
                        <a href="details.html" class="nav-link color-basic">Paket Travel</a>
                    </li>
                    <li class="nav-item mx-xl-2 dropdown">
                        <a class="nav-link color-basic dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item color-basic" href="#">Action</a>
                            <a class="dropdown-item color-basic" href="#">Another action</a>
                            <a class="dropdown-item color-basic" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item mx-xl-2">
                        <a href="#" class="nav-link color-basic">Testimonial</a>
                    </li>
                </ul>
                <!-- mobile button -->
                <form class="form-inline d-xl-block d-xl-none">
                    <button class="btn btn-login my-2 my-xl-0">
                        Masuk
                    </button>
                </form>

                <!-- desktop button -->
                <!-- <form class="form-inline my-2 my-xl-0 d-none d-xl-block">
						<button class="btn btn-login btn-navbar-right my-2 my-xl-0 px-4">
							Masuk
						</button>
					</form> -->
            </div>
        </nav>
    </div>

    <!-- header -->
    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>
        <h4 class="mt-4">
            You will see beautiful
            <br>
            moment you never see before
        </h4>
        <a class="btn btn-get-started px-4 mt-5">
            Get Started
        </a>
    </header>

    <main>
        <div class="container">
            <!-- statictic -->
            <section class="section-stats row justify-content-center text-center">
                <div class="col-3 col-xl-2 stats-detail">
                    <h3>20K</h3>
                    <p>Members</p>
                </div>
                <div class="col-3 col-xl-2 stats-detail">
                    <h3>12</h3>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-xl-2 stats-detail">
                    <h3>3K</h3>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-xl-2 stats-detail">
                    <h3>72</h3>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <!-- wisata popular -->
        <section class="section-popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2 style="font-weight: bold;">Wisata Popular</h2>
                        <p class="mt-4">
                            Something that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 mb-2">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url(img/bali.jpg);">
                            <div class="travel-country mt-3">INDONESIA</div>
                            <div class="travel-location">DERATAN, BALI</div>
                            <div class="mt-auto">
                                <a href="#" class="btn btn-travel-details px-4 mb-3">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-2">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url(img/bromo.jpg);">
                            <div class="travel-country mt-3">INDONESIA</div>
                            <div class="travel-location">BROMO, MALANG</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4 mb-3">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-2">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url(img/nusa_penida.jpg);">
                            <div class="travel-country mt-3">INDONESIA</div>
                            <div class="travel-location">NUSA PENIDA</div>
                            <div class="mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4 mb-3">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-2">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url(img/dubai.jpg);">
                            <div class="travel-country mt-3">MIDDLE EAST</div>
                            <div class="travel-location">DUBAI</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4 mb-3">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- networks -->
        <section class="section-networks">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 mt-4">
                        <h2 style="font-weight: bold;">Our Networks</h2>
                        <p>
                            Companies are trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-xl-2 mt-4">
                        <img src="img/ana.png" class="img-network">
                    </div>
                    <div class="col-xl-2 mt-4">
                        <img src="img/disney.png" class="img-network">
                    </div>
                    <div class="col-xl-2 mt-4">
                        <img src="img/shangri-la.png" class="img-network">
                    </div>
                    <div class="col-xl-2 mt-4">
                        <img src="img/visa.png" class="img-network">
                    </div>
                </div>
            </div>
        </section>

        <!-- testimonial -->
        <section class="section-testimonial-heading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 style="font-size: 40px; font-weight: bold;">They Are Loving Us</h2>
                        <p class="text-center">
                            Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="img/sharron_k.jpg" alt="" class="mb-4 mt-4 rounded-circle" style="width: 50%;">
                                <h3 class="mb-4">Sharron K.</h3>
                                <p class="testimonial">
                                    " It was glorius and I could not to stop to say wohooo for every single moment Dankeeee "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="img/jesse_ramirez.jpg" alt="" class="mb-4 mt-4 rounded-circle" style="width: 50%;">
                                <h3 class="mb-4">Jesse Ramirez</h3>
                                <p class="testimonial">
                                    " The trip was amazing and I saw something beautiful in that island that makes me want to learn more "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="img/yoona_kim.jpg" alt="" class="mb-4 mt-4 rounded-circle" style="width: 50%;">
                                <h3 class="mb-4">Yoona Kim</h3>
                                <p class="testimonial">
                                    " I loved it when the waves was shaking harder-- I was scared too "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Karimun Jawa
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer  -->
    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-3">
                            <h5 class="color-basic-head">FEATURES</h5>
                            <ul class="list-unstyled">
                                <li><a class="color-basic" href="#">Reviews</a></li>
                                <li><a class="color-basic" href="#">Community</a></li>
                                <li><a class="color-basic" href="#">Social Media Kit</a></li>
                                <li><a class="color-basic" href="#">Affiliate</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-3">
                            <h5 class="color-basic-head">ACCOUNT</h5>
                            <ul class="list-unstyled">
                                <li><a class="color-basic" href="#">Refund</a></li>
                                <li><a class="color-basic" href="#">Security</a></li>
                                <li><a class="color-basic" href="#">Rewards</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-3">
                            <h5 class="color-basic-head">COMPANY</h5>
                            <ul class="list-unstyled">
                                <li><a class="color-basic" href="#">Career</a></li>
                                <li><a class="color-basic" href="#">Help Center</a></li>
                                <li><a class="color-basic" href="#">Media</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-3">
                            <h5 class="color-basic-head">GET CONNECTED</h5>
                            <ul class="list-unstyled">
                                <li><a style="text-decoration: none; color: #071C4D;">Jakarta Selatan</a></li>
                                <li><a style="text-decoration: none; color: #071C4D;">Indonesia</a></li>
                                <li><a class="color-basic">0812 - 3456 - 7890</a></li>
                                <li><a class="color-basic" href="#">support@travel.id</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    <div class="text-muted m-auto">Copyright &copy; Travel 2021</div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>