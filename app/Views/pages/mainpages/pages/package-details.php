<?= $this->extend('/pages/mainpages/layouts/master') ?>
<?= $this->section('content') ?>

<div class="container my-5">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('/package') ?>">Travel Package</a></li>
                <li class="breadcrumb-item active" aria-current="page">Package Details</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <div class="card card-details">
                <h4 class="font-weight-bold" style="color: #F5C234;">Bromo Mount</h4>
                <p class="text-muted mb-2">East Java</p>
                <div id="carousel-example-1z" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <!-- <div class="item-active">
                            <img src="" width="100%" alt="">
                        </div> -->
                        <!-- https://stackoverflow.com/questions/47122521/dynamic-carousel-codeigniter -->
                        <div class="carousel-item active">
                            <img src="<?php echo base_url('/mainpages/img/bromo-1.jpg'); ?>" class="d-block w-100" style="height: 400px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url('/mainpages/img/bromo-2.jpg'); ?>" class="d-block w-100" style="height: 400px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url('/mainpages/img/bromo-3.jpg'); ?>" class="d-block w-100" style="height: 400px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url('/mainpages/img/bromo-4.jpg'); ?>" class="d-block w-100" style="height: 400px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url('/mainpages/img/bromo-5.jpg'); ?>" class="d-block w-100" style="height: 400px;" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev slider-btn-left" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next slider-btn-right" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="mt-3">
                    <h4 class="font-weight-bold my-3" style="color: #F5C234;">About Tourism</h4>
                    <p>
                        Bromo has been known by all visitors of the world. They come to Bromo to watch the sunrise.
                        The visitor also can look down to the crater that is full of its smoke, and feel the cold of the air,
                        which is probably could only be done in Bromo. Our eyes will also be complete by the sea of sand that the way to reach Bromo's peak.
                        The main gate to the sea of sand and mount Bromo is through Cemorolawang.
                        This is the most crowded visiting area, especially on holidays.
                        There are many kinds of activities that could be carried in this area
                        such as; Camping, watching the scenery, horse riding to the sea of sand or walking.
                    </p>
                </div>
                <div class="row">
                    <div class="col-xl-4 border-set mt-2">
                        <div class="media ml-0">
                            <img class="mt-1 mr-3" src="<?php echo base_url('/mainpages/img/ticket.png'); ?>" alt="" style="width: 20%; height: 20%;">
                            <div class="media-body">
                                <h6 class="mt-0">Special Event</h6>
                                <p>Golden Sunrise</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 border-set mt-2">
                        <div class="media">
                            <img class="mt-1 mr-3" src="<?php echo base_url('/mainpages/img/food.png'); ?>" alt="" style="width: 20%; height: 20%;">
                            <div class="media-body">
                                <h6 class="mt-0">Foods</h6>
                                <p>Local Foods</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mt-2">
                        <div class="media mr-0">
                            <img class="mt-1 mr-3" src="<?php echo base_url('/mainpages/img/language.png'); ?>" alt="" style="width: 20%; height: 20%;">
                            <div class="media-body">
                                <h6 class="mt-0">Language</h6>
                                <p>Indonesian - English</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-detail-sm card-right">
                <h4 class="mb-3">Trip Information</h4>
                <table class="#">
                    <tr>
                        <th width="55%">Date of Departure</th>
                        <td width="45%" class="text-right">26/10/2021</td>
                    </tr>
                    <tr>
                        <th width="55%">Place of Origin</th>
                        <td width="45%" class="text-right">Jakarta</td>
                    </tr>
                    <tr>
                        <th width="55%">Duration</th>
                        <td width="45%" class="text-right">4D 3N</td>
                    </tr>
                    <tr>
                        <th width="55%">Type</th>
                        <td width="45%" class="text-right">Open Trip</td>
                    </tr>
                    <tr>
                        <th width="55%">Person</th>
                        <td width="45%" class="text-right">1</td>
                    </tr>
                    <tr>
                        <th width="55%">Price</th>
                        <td width="45%" class="text-right">IDR 800.000</td>
                    </tr>
                </table>
            </div>
            <div class="join-container">
                <a href="<?php echo base_url('/data-information') ?>" class="btn btn-block btn-join-now mt-3 py-2" style="border-radius: 0px 0px 12px 12px;">
                    Join Now
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>