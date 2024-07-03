<?php
$conn = mysqli_connect("localhost","root","","growMark");

$displayNewsletterMessage = "";
$displayNewsletterOption = false;
$displayNewsletter = -1;

if(isset($_GET['email'])){
    $email = $_GET['email'];
   $q = "select * from  newsletter where email = '$email'";
   $result =  mysqli_query($conn,$q);
   $displayNewsletterOption = true;
   if(mysqli_num_rows($result)==1){
    $displayNewsletterMessage = "Your Email ID is Already Registered With Us!!!";
    $displayNewsletterType = 1;
}
   else{
   $q = "insert into newsletter(email) values('$email')";
   mysqli_query($conn,$q);
   $displayNewsletterMessage = "Thanks to Subscribe Our Newsletter Services!!!";
   $displayNewsletterType = 2;
   }
}

?>






<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4">Our Office</h4>
                <p class="mb-2 text-light"><i class="fa fa-map-marker-alt me-3"></i> A-43, Sector 16, Noida, India</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3 text-lights"></i><a href="tel:8750083134" class="text-light">+91
                         8750083134</a></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:growmark@gmail.com"
                        class="text-light"> growmark@gmail.com</a></p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Quick Links</h4>
                <a class="btn btn-link" href="<?php echo $base_url?>/index.php">Home</a>
                <a class="btn btn-link" href="<?php echo $base_url?>/about.php">About</a>
                <a class="btn btn-link" href="<?php echo $base_url?>/contact.php">Contact Us</a>
                <a class="btn btn-link" href="<?php echo $base_url?>/service.php">Services</a>
                <a class="btn btn-link" href="#">T&C</a>
            </div>
            <!-- <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div> -->
            <div class="col-md-5">
                <h4 class="text-white mb-4">Newsletter</h4>
                <?php if($displayNewsletterOption){ ?>
                <?php if($displayNewsletterType==1){ ?>

                <!-- ALERT Messages -->
                <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                    <?php echo $displayNewsletterMessage; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php }  ?>

                <?php if($displayNewsletterType==2){ ?>

                <!-- ALERT Messages -->
                <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                    <?php echo $displayNewsletterMessage; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <?php }  ?>
                <?php }  ?>

                <form action="">
                    <div class="position-relative w-100">
                        <input name="email" class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="submit"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="fw-medium text-light" href="#">GrowMark</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a class="fw-medium text-light" href="http://localhost/portfilio/">SUHAIL AKHTAR</a>
                <!-- https://www.linkedin.com/in/suhail-akhtar-b51175249 -->

                <!-- Distributed By <a class="fw-medium text-light" href="https://themewagon.com">ThemeWagon</a> -->
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->



<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $base_url ?>/lib/wow/wow.min.js"></script>
<script src="<?php echo $base_url ?>/lib/easing/easing.min.js"></script>
<script src="<?php echo $base_url ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo $base_url ?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo $base_url ?>/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="<?php echo $base_url ?>/js/main.js"></script>


</body>
</html>