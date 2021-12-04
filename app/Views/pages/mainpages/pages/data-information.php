<?= $this->extend('/pages/mainpages/layouts/master') ?>
<?= $this->section('content') ?>

<div class="container my-5">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('/package') ?>">Travel Package</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('/package-details') ?>">Package Details</a></li>
                <li class="breadcrumb-item active" aria-current="page">Fill Data Information</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card card-details">
                <h4 class="font-weight-bold text-center mb-5" style="color: #F5C234;">FILL DATA INFORMATION</h4>
                <div class="my-3 mx-5">
                    <form action="">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Your Full Name ...">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="number" class="form-control" id="phone" placeholder="Enter Your Phone Number ...">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email Address ...">
                        </div>
                        <div class="form-group">
                            <label for="message">Address</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your Address ..."></textarea>
                        </div>
                        <div class="d-block text-right">
                            <button type="submit" class="btn btn-login px-5">
                                <a href="<?php echo base_url('/payment-checkout') ?>" class="a_section mb-0 font-weight-bold mx-2">BOOK NOW</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>