<?= $this->extend('/pages/mainpages/layouts/master') ?>
<?= $this->section('content') ?>

<div class="container my-5 py-5">
    <div class="text-center">
        <h1 class="font-weight-bold" style="color: #F5C234; font-size: 40px;">TRAVEL PACKAGE</h1>
        <p style="color: #F5C234; font-size: 20px;">Discover more popular destinations in Indonesia</p>
    </div>
    <div class="row mt-5">
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package-details') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/bromo.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location" style="text-align: center;">BROMO MOUNT</div>
                        <div class="travel-country" style="text-align: center;">EAST JAVA</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/bali.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location" style="text-align: center;">DERATAN</div>
                        <div class="travel-country" style="text-align: center;">BALI</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/nusa_penida.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location" style="text-align: center;">NUSA PENIDA</div>
                        <div class="travel-country" style="text-align: center;">BALI</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/raja-ampat.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location" style="text-align: center;">RAJA AMPAT</div>
                        <div class="travel-country" style="text-align: center;">PAPUA</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/borobudur.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location" style="text-align: center;">BOROBUDUR</div>
                        <div class="travel-country" style="text-align: center;">CENTER JAVA</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/ubud.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location" style="text-align: center;">UBUD</div>
                        <div class="travel-country" style="text-align: center;">BALI</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/toraja.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location" style="text-align: center;">TANA TORAJA</div>
                        <div class="travel-country" style="text-align: center;">SOUTH SULAWESI</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 px-3 py-3">
            <a class="a_section_info" href="<?php echo base_url('/package') ?>">
                <div class="card-travel">
                    <img src="<?php echo base_url('/mainpages/img/wakatobi.jpg'); ?>" class="img-package" alt="...">
                    <div class="card-body w-100" style="position: absolute;">
                        <div class="travel-location" style="text-align: center;">WAKATOBI</div>
                        <div class="travel-country" style="text-align: center;">SOUTHEAST SULAWESI</div>
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