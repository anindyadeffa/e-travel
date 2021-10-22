<?= $this->extend('/pages/dashboard/layouts/master') ?>
<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Header Homepage</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Sub-title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-25 h-25">
                                <!-- @if(empty($banners->image))
                                <img src="http://via.placeholder.com/100x100" width="100%" alt="">
                                @else -->
                                <img src="<?php echo base_url('/mainpages/img/header.png'); ?>" width="100%" alt="">
                                <!-- @endif -->
                            </td>
                            <td>Explore the Wonderland Indonesia</td>
                            <td>You will see beautiful moment you never seen before</td>
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