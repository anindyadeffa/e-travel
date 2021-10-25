<?= $this->extend('/pages/dashboard/layouts/master') ?>
<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row d-flex">
                <div class="col-xl-10">
                    <h6 class="m-2 font-weight-bold text-primary">Travel Package</h6>
                </div>
                <div class="col-xl-2 text-right">
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-plus text-white"></i> Tambah Data
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Destination</th>
                            <th>City</th>
                            <th>Date of Departure</th>
                            <th>Place of Origin</th>
                            <th>Duration</th>
                            <th>Type</th>
                            <th>Pax</th>
                            <th>Price</th>
                            <!-- <th>Special Event</th>
                            <th>Foods</th>
                            <th>Language</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Bromo Mount</td>
                            <td>East Java</td>
                            <td>26/10/2021</td>
                            <td>Jakarta</td>
                            <td>4D 3N</td>
                            <td>Open Trip</td>
                            <td>1</td>
                            <td>800000</td>
                            <!-- <td>Golden Sunrise</td>
                            <td>Local Foods</td>
                            <td>Indonesian - English</td> -->
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-success btn-sm mb-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm mb-1">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="#" method="post" class="d-inline">
                                    <button class="btn btn-danger btn-sm mb-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Deratan</td>
                            <td>Bali</td>
                            <td>13/11/2021</td>
                            <td>Jakarta</td>
                            <td>3D 2N</td>
                            <td>Private Trip</td>
                            <td>2</td>
                            <td>5000000</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-success btn-sm mb-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm mb-1">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="#" method="post" class="d-inline">
                                    <button class="btn btn-danger btn-sm mb-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Nusa Penida</td>
                            <td>Bali</td>
                            <td>30/11/2021</td>
                            <td>Jakarta</td>
                            <td>3D 2N</td>
                            <td>Open Trip</td>
                            <td>1</td>
                            <td>1200000</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-success btn-sm mb-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm mb-1">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="#" method="post" class="d-inline">
                                    <button class="btn btn-danger btn-sm mb-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Raja Ampat</td>
                            <td>Papua</td>
                            <td>31/11/2021</td>
                            <td>Bali</td>
                            <td>2D 1N</td>
                            <td>Open Trip</td>
                            <td>1</td>
                            <td>1200000</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-success btn-sm mb-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm mb-1">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="#" method="post" class="d-inline">
                                    <button class="btn btn-danger btn-sm mb-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Borobudur</td>
                            <td>Central Java</td>
                            <td>28/11/2021</td>
                            <td>Bandung</td>
                            <td>3D 2N</td>
                            <td>Private Trip</td>
                            <td>2</td>
                            <td>2000000</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-success btn-sm mb-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm mb-1">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="#" method="post" class="d-inline">
                                    <button class="btn btn-danger btn-sm mb-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Ubud</td>
                            <td>Bali</td>
                            <td>26/10/2021</td>
                            <td>Jakarta</td>
                            <td>3D 2N</td>
                            <td>Private Trip</td>
                            <td>2</td>
                            <td>2300000</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-success btn-sm mb-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm mb-1">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="#" method="post" class="d-inline">
                                    <button class="btn btn-danger btn-sm mb-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Tana Toraja</td>
                            <td>South Sulawesi</td>
                            <td>12/11/2021</td>
                            <td>Bali</td>
                            <td>3D 2N</td>
                            <td>Open Trip</td>
                            <td>1</td>
                            <td>2600000</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-success btn-sm mb-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm mb-1">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="#" method="post" class="d-inline">
                                    <button class="btn btn-danger btn-sm mb-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Wakatobi</td>
                            <td>Southeast Sulawesi</td>
                            <td>05/11/2021</td>
                            <td>Jakarta</td>
                            <td>4D 3N</td>
                            <td>Open Trip</td>
                            <td>1</td>
                            <td>2900000</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-success btn-sm mb-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm mb-1">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
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
<!-- /.container-fluid -->
<?= $this->endSection() ?>