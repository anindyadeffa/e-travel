<?= $this->extend('/pages/dashboard/layouts/master') ?>
<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Users</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Profile User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Anindya Deffa Nabila</td>
                            <td>anindya@gmail.com</td>
                            <td>081226935750</td>
                            <td class="text-center" style="vertical-align: middle;">
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
                        <tr>
                            <td>Brama Tri Hadi Syapoetra</td>
                            <td>brama@gmail.com</td>
                            <td>085392094338</td>
                            <td class="text-center" style="vertical-align: middle;">
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
                        <tr>
                            <td>Ibnu Dani Alwidad</td>
                            <td>ibnu@gmail.com</td>
                            <td>081226861635</td>
                            <td class="text-center" style="vertical-align: middle;">
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
                        <tr>
                            <td>Syariz Nadhifa Aruriansyah</td>
                            <td>syariz@gmail.com</td>
                            <td>085695709446</td>
                            <td class="text-center" style="vertical-align: middle;">
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
                        <tr>
                            <td>Wahiddah Nur Fadila</td>
                            <td>wahiddah@gmail.com</td>
                            <td>087882231740</td>
                            <td class="text-center" style="vertical-align: middle;">
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