<?= $this->extend('/pages/mainpages/layouts/master') ?>
<?= $this->section('content') ?>

<!-- <div class="gradien">
    <div class="container-fluid" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
            <h2 style="color:#F5C234; font-weight: 700;" class="contact text-center">CONTACT US</h2>
            <div class="rectangle">
                <div class="row">
                    <div class="col-xl-5 my-auto pr-0" style="margin-left: 100px;">
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
                                <textarea class="form-control" style="height: 88px;" id="messages" rows="" placeholder="Write Your Message Here..."></textarea>
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
    </div>
</div> -->

<section>
    <div class="container my-5">
        <h2 class="font-weight-bold text-center text-uppercase" style="color: #F5C234;">Contact Us</h2>
        <div class="card mt-5" style="border-radius: 10px;">
            <div class="card-body my-4">
                <div class="row justify-content-center">
                    <div class="col-xl-5 mx-3 my-2">
                        <div class="text-center">
                            <img src="<?php echo base_url('/mainpages/img/message.png'); ?>" class="w-75 h-75" alt="...">
                        </div>
                        <div class="mt-5 mb-3">
                            <h5 class="font-weight-bold">Our Address</h5>
                            <p>
                                12345. West Jakarta St. South Meruya,
                                <br>
                                Indonesia
                            </p>
                        </div>
                        <div class="mb-3">
                            <h5 class="font-weight-bold">Our Contact</h5>
                            <p>
                                +[12] 3456 7890
                            </p>
                        </div>
                        <div class="mt-3">
                            <h5 class="font-weight-bold">Our Email</h5>
                            <p>
                                support@travelin.com
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 mx-3 my-2">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" id="name" placeholder="Enter your name ...">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your e-mail address ...">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="phone" class="form-control" id="phone" placeholder="Enter your phone number ...">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="6" placeholder="Enter your message here ..."></textarea>
                            </div>
                            <div class="text-right d-block">
                                <button href="#" type="submit" class="btn btn-login px-5 mr-auto">
                                    <p class="mb-0 font-weight-bold">SEND</p>
                                </button>
                            </div>
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>