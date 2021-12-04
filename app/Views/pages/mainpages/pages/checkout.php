<?= $this->extend('/pages/mainpages/layouts/master') ?>
<?= $this->section('content') ?>

<div class="container my-5">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('/package') ?>">Travel Package</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('/package-details') ?>">Package Details</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('/data-information') ?>">Fill Data Information</a></li>
                <li class="breadcrumb-item active" aria-current="page">Payment Checkout</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card card-details">
                <h4 class="font-weight-bold text-center mb-5" style="color: #F5C234;">PAYMENT CHECKOUT</h4>
                <h5 class="font-weight-bold my-4" style="color: #F5C234;">Payment Details</h5>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-6">
                                <h6>Bank Account Name</h6>
                            </div>
                            <div class="col-xl-6 text-right">
                                <p class="text-uppercase">PT. Travel In</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <h6>Bank Account Number</h6>
                            </div>
                            <div class="col-xl-6 text-right">
                                <p>1234567890</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-6">
                                <h6>Price of Package</h6>
                            </div>
                            <div class="col-xl-6 text-right">
                                <p class="text-uppercase">IDR 800.000</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <h6>Tax and Service 15%</h6>
                            </div>
                            <div class="col-xl-6 text-right">
                                <p class="text-uppercase">IDR 120.000</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <h6>Total of Payment</h6>
                            </div>
                            <div class="col-xl-6 text-right">
                                <p class="text-uppercase">IDR 920.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="font-weight-bold my-4" style="color: #F5C234;">Fill Your Payment</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nadya Aulia</td>
                                    <td>nadya@gmail.com</td>
                                    <td>08123456789</td>
                                    <td>Rumah Jo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <form action="">
                            <div class="form-group">
                                <label>Bank Account Holder's Name<span class="text-danger"></span></label>
                                <input class="form-control" name="title" placeholder="Enter your Bank Account Holder's Name">
                            </div>
                            <div class="form-group">
                                <label>Upload Payment Confirmation Receipt<span class="text-danger">*</span></label>
                                <input type="file" class="custom-file" name="image" placeholder="Upload Payment Confirmation Receipt">
                                <small class="text-danger">Format image must be jpg, jpeg or png.</small>
                            </div>
                            <div class="d-block text-right">
                                <button type="submit" class="btn btn-login px-5">
                                    <a href="<?php echo base_url('/verification') ?>" class="a_section mb-0 font-weight-bold mx-2">SUBMIT</a>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<?= $this->endSection() ?>