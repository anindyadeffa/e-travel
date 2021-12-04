<?= $this->extend('/pages/dashboard/layouts/master') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row d-flex">
                <h6 class="m-2 font-weight-bold text-primary">Feedback and Services</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>James Bond</td>
                            <td>james@gmail.com</td>
                            <td>08123456789</td>
                            <td>Is there a discount for summer season?</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <form action="#" method="post" class="d-inline">
                                    <button class="btn btn-danger btn-sm mb-1">
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
<?= $this->endSection() ?>