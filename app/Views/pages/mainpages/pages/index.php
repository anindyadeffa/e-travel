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
        <div class="row d-flex">
            <div class="col-xl-10 my-4">
                <h4 class="text-white">Travel Package</h4>
                <p class="text-white">Discover more popular destinations in Indonesia</p>
            </div>
            <div class="col-xl-2 my-4 pl-5">
                <a href="#" class="btn btn-view-more my-xl-0 mb-0">VIEW MORE</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 mb-2">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url(img/bali.jpg);">
                    <div class="travel-country mt-3">INDONESIA</div>
                    <div class="travel-location">DERATAN, BALI</div>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-view-more font-weight-bold px-4 mb-3">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-2">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url(img/bromo.jpg);">
                    <div class="travel-country mt-3">INDONESIA</div>
                    <div class="travel-location">BROMO, MALANG</div>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-view-more font-weight-bold px-4 mb-3">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-2">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url(img/nusa_penida.jpg);">
                    <div class="travel-country mt-3">INDONESIA</div>
                    <div class="travel-location">NUSA PENIDA</div>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-view-more font-weight-bold px-4 mb-3">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-2">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url(img/dubai.jpg);">
                    <div class="travel-country mt-3">MIDDLE EAST</div>
                    <div class="travel-location">DUBAI</div>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-view-more font-weight-bold px-4 mb-3">View Details</a>
                    </div>
                </div>
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
                <h1 class="title-about">TRANSPORTATION</h1>
                <p class="desc-about">Transportation is the act of moving something from one place to another. Transportation may take place by air, water, rail, road, pipeline, or cable routes, using planes, boats, trains, trucks, and telecommunications equipment as the means of transportation.</p>
            </div>
        </div>
        <div class="row d-flex mt-5">
            <div class="col-xl-6 mt-5">
                <h1 class="title-about">TOUR GUIDE</h1>
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
                <h1 class="title-about">CULINARY LOCAL FOOD</h1>
                <p class="desc-about">Local food usually refers to food that is produced and distributed in a specific geographic area. Recipes and ways of making local culinary are usually passed down from generation to generation. That's why local traditional cuisine has a lot of uniqueness and is rich in various flavors.</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>