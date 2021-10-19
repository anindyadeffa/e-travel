<?= $this->extend('/pages/mainpages/layouts/master') ?>
<?= $this->section('content') ?>

<div class="container my-5">
    <div class="text-center">
        <h2 class="font-weight-bold" style="color: #F5C234;">TRAVEL PACKAGE</h2>
        <p style="color: #F5C234; font-size: 18px;">Discover more popular destinations in Indonesia</p>
    </div>
    <div class="row mt-5">
        <div class="col-xl-3 px-3 py-3">
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
        <div class="col-xl-3 px-3 py-3">
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
        <div class="col-xl-3 px-3 py-3">
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
        <div class="col-xl-3 px-3 py-3">
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
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/borobudur.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location text-uppercase" style="text-align: center;">Borobudur</div>
                        <div class="travel-country text-uppercase" style="text-align: center;">Central Java</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/ubud.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location text-uppercase" style="text-align: center;">Ubud</div>
                        <div class="travel-country text-uppercase" style="text-align: center;">Bali</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/toraja.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location text-uppercase" style="text-align: center;">Tana Toraja</div>
                        <div class="travel-country text-uppercase" style="text-align: center;">South Sulawesi</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/wakatobi.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location text-uppercase" style="text-align: center;">Wakatobi</div>
                        <div class="travel-country text-uppercase" style="text-align: center;">Southeast Sulawesi</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <nav aria-label="...">
            <ul class="pagination pagination-lg">
                <li class="page-item active" aria-current="page">
                    <span class="page-link">1</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </div>
</div>

<?= $this->endSection() ?>