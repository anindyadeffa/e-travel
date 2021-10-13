<?= $this->extend('/pages/mainpages/layouts/master') ?>
<?= $this->section('content') ?>

<div class="container-fluid" style="padding-top: 100px;">
    <h1 class="contact">CONTACT US</h1>
    <div class="container">
        <div class="rectangle">
            <div class="row">
                <div class="col-xl-5 my-auto pr-0" style="margin-left: 100px; padding-top: 100px;">
                    <form>
                        <div class="col mb-4">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                        </div>
                        <div class="col mb-4">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter Your Email Address">
                        </div>
                        <div class="col mb-4">
                            <Label for="phone">Phone Number</Label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter Your Phone Number">
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 my-auto pr-0">
                    <form>
                        <div class="col mb-4">
                            <label for="messages">Message</label>
                            <textarea class="form-control" style="height: 88px;" id="messages" rows="3" placeholder="Write Your Message Here..."></textarea>
                        </div>
                        <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn-block btn-login" style="width: 173px; height: 44px;">Send</button>
                        </div>
                    </form>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 my-auto pr-0" style="margin-left: 100px;">
                            <div class="row d-flex mt-5">
                                <div class="col-xl-12">
                                    <img src="/mainpages/img/about-1.png" class="w-75 h-100" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 pr-0">
                            <div class="col-xl-12 col mb-4">
                                <h3>Our Address</h3>
                                <p>12345. West Jakarta St. Meruya, Indonesia</p>
                            </div>
                            <div class=" col-xl-12 col mb-4">
                                <h3>Contact Us</h3>
                                <p>+[12] 3456 7890</p>
                            </div>
                            <div class="col-xl-12 col mb-4">
                                <h3>Our Email</h3>
                                <p>support@travelin.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>