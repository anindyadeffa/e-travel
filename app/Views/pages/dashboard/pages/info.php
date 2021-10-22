<?= $this->extend('/pages/dashboard/layouts/master') ?>
<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contact Information</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TRAVEL.in is a private retailer or public service that provides travel and
                                tourism-related services to the general public on behalf of accommodation or
                                travel suppliers to offer different kinds of travelling packages for each destination.</td>
                            <td>12345. West Jakarta St. South Meruya, Indonesia</td>
                            <td>+[12] 3456 7890</td>
                            <td>support@travelin.com</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
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