<?= $this->extend('/pages/mainpages/layouts/master') ?>
<?= $this->section('content') ?>

<div class="container my-5">
    <div class="row d-flex">
        <div class="col-xl-6 my-5">
            <h1 style="color: #F5C234; font-size: 42px; font-weight: 700;">Explore the Wonderland Indonesia</h1>
            <p style="color: #F5C234; font-size: 20px; font-weight: 400;">You will see beautiful moment you never seen before</p>
        </div>
        <div class="col-xl-6">
            <img src="/mainpages/img/header.png" class="w-100 h-100" alt="">
        </div>
    </div>
</div>

<section class="section-package">
    <div class="container py-4">
        <div class="row d-flex my-4">
            <div class="col-xl-10">
                <h3 class="text-white font-weight-400">Travel Package</h3>
                <p class="text-white">Discover more popular destinations in Indonesia</p>
            </div>
            <div class="col-xl-2">
                <a href="<?php echo base_url('/package') ?>" class="btn btn-view-more my-xl-0 mb-0">VIEW MORE</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 mb-2">
                <a class="a_section_info" href="<?php echo base_url('/package-details') ?>">
                    <div class="card-travel">
                        <img src="<?php echo base_url('/mainpages/img/bromo.jpg'); ?>" class="img-package" alt="...">
                        <div class="card-body w-100" style="position: absolute;">
                            <div class="travel-location text-uppercase" style="text-align: center;">Bromo Mount</div>
                            <div class="travel-country text-uppercase" style="text-align: center;">East Java</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 mb-2">
                <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                    <div class="card-travel">
                        <img src="<?php echo base_url('/mainpages/img/bali.jpg'); ?>" class="img-package" alt="...">
                        <div class="card-body w-100" style="position: absolute;">
                            <div class="travel-location text-uppercase" style="text-align: center;">Deratan</div>
                            <div class="travel-country text-uppercase" style="text-align: center;">Bali</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 mb-2">
                <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                    <div class="card-travel">
                        <img src="<?php echo base_url('/mainpages/img/nusa_penida.jpg'); ?>" class="img-package" alt="...">
                        <div class="card-body w-100" style="position: absolute;">
                            <div class="travel-location text-uppercase" style="text-align: center;">Nusa Penida</div>
                            <div class="travel-country text-uppercase" style="text-align: center;">Bali</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 mb-2">
                <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                    <div class="card-travel">
                        <img src="<?php echo base_url('/mainpages/img/raja-ampat.jpg'); ?>" class="img-package" alt="...">
                        <div class="card-body w-100" style="position: absolute;">
                            <div class="travel-location text-uppercase" style="text-align: center;">Raja Ampat</div>
                            <div class="travel-country text-uppercase" style="text-align: center;">Papua</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container my-5">
        <div class="row d-flex mt-5">
            <div class="col-xl-6">
                <img src="/mainpages/img/about-1.png" class="w-75 h-100" alt="">
            </div>
            <div class="col-xl-6 mt-5">
                <h1 class="title-about text-uppercase">TRANSPORTATION</h1>
                <p class="desc-about">Transportation is the act of moving something from one place to another. Transportation may take place by air, water, rail, road, pipeline, or cable routes, using planes, boats, trains, trucks, and telecommunications equipment as the means of transportation.</p>
            </div>
        </div>
        <div class="row d-flex mt-5">
            <div class="col-xl-6 mt-5">
                <h1 class="title-about text-uppercase">TOUR GUIDE</h1>
                <p class="desc-about">Tour guides accompany groups of visitors to tourist attractions, whether on day trips or longer visits, and give them information and insights that help them make the most of the experience.</p>
            </div>
            <div class="col-xl-6">
                <img src="/mainpages/img/about-2.png" class="w-75 h-100" style="align-items: flex-end !important;" alt="">
            </div>
        </div>
        <div class="row d-flex mt-5">
            <div class="col-xl-6">
                <img src="/mainpages/img/about-3.png" class="w-75 h-100" alt="">
            </div>
            <div class="col-xl-6 mt-5">
                <h1 class="title-about text-uppercase">CULINARY LOCAL FOOD</h1>
                <p class="desc-about">Local food usually refers to food that is produced and distributed in a specific geographic area. Recipes and ways of making local culinary are usually passed down from generation to generation. That's why local traditional cuisine has a lot of uniqueness and is rich in various flavors.</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>