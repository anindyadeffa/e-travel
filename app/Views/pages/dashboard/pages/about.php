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
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-25 h-25">
                                <!-- @if(empty($banners->image))
                                <img src="http://via.placeholder.com/100x100" width="100%" alt="">
                                @else -->
                                <img src="<?php echo base_url('/mainpages/img/about-1.png'); ?>" width="100%" alt="">
                                <!-- @endif -->
                            </td>
                            <td>Transportation</td>
                            <td>Transportation is the act of moving something from one place to another. Transportation
                                may take place by air, water, rail, road, pipeline, or cable routes, using planes, boats,
                                trains, trucks, and telecommunications equipment as the means of transportation.</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-25 h-25">
                                <!-- @if(empty($banners->image))
                                <img src="http://via.placeholder.com/100x100" width="100%" alt="">
                                @else -->
                                <img src="<?php echo base_url('/mainpages/img/about-2.png'); ?>" width="100%" alt="">
                                <!-- @endif -->
                            </td>
                            <td>Tour Guide</td>
                            <td>Tour guides accompany groups of visitors to tourist attractions,
                                whether on day trips or longer visits, and give them information and insights
                                that help them make the most of the experience.</td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-25 h-25">
                                <!-- @if(empty($banners->image))
                                <img src="http://via.placeholder.com/100x100" width="100%" alt="">
                                @else -->
                                <img src="<?php echo base_url('/mainpages/img/about-3.png'); ?>" width="100%" alt="">
                                <!-- @endif -->
                            </td>
                            <td>Culinary Local Food</td>
                            <td>Local food usually refers to food that is produced and distributed in a specific geographic area.
                                Recipes and ways of making local culinary are usually passed down from generation to generation.
                                That's why local traditional cuisine has a lot of uniqueness and is rich in various flavors.</td>
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
<?= $this->endSection() ?>