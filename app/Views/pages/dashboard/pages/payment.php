<?= $this->extend('/pages/dashboard/layouts/master') ?>
<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Transaction</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Selected Package</th>
                            <th>Bank Account Name</th>
                            <th>Payment Receipt's Photo</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nadya Aulia</td>
                            <td>nadyaaulia@gmail.com</td>
                            <td>08123456789</td>
                            <td>Bromo Mount</td>
                            <td>Arifin</td>
                            <td class="w-25 h-25">
                                <!-- @if(empty($banners->image))
                                <img src="http://via.placeholder.com/100x100" width="100%" alt="">
                                @else -->
                                <img src="<?php echo base_url('/dashboard/img/payment-receipt.jpg'); ?>" width="100%" alt="">
                                <!-- @endif -->
                            </td>
                            <td>Unverified</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-success btn-sm mb-1">
                                    <i class="fa fa-check"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="#" method="post" class="d-inline">
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>