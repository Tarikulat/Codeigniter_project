<?= $this->extend('includes/header') ?>
<?= $this->section('content') ?>


<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="col-md-6 col-lg-3">
            <h1>Contact Now</h1>
            <h6 class="section-title text-start text-primary text-uppercase mb-4"><? $page_title ?></h6>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Dhanmundi 15, Dhaka, Banglaesh</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+88 01793 800 828</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>tarikulat124@gmail.com</p>
            <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->

<?= $this->endSection() ?>