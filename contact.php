<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php"); ?>

<?php
$show = false;
if($_SERVER['REQUEST_METHOD']=="POST"){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 $q = "insert into contactus(name,email,phone,subject,message) values('$name','$email','$phone','$subject','$message')";
 mysqli_query($conn,$q);
 $show = true;
}

?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Contact Us</p>
            <h1 class="display-5 mb-5">If You Have Any Query, Please Contact Us</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                <?php if($show){ ?>
                <!-- ALERT Messages -->
                <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                    <strong>Thank You!</strong> Your Query Has Been Received. Our Team Will Contact You Soon!!!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php }  ?>
                

                <form action="" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                        <label for="name">Your Name</label>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="phone" placeholder="Your Name">
                                <label for="name">Your Phone Number</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" name="message"
                                    style="height: 200px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5 w-100" type="submit">Send
                                Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h3 class="mb-4">Contact Details</h3>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Our Office</h6>
                        <span>A-43, Sector 16, Noida, India</span>
                    </div>
                </div>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Call Us</h6>
                        <span><a href="tel:8750083134">8750083134</a></span>
                    </div>
                </div>

                <div class="d-flex border-bottom-0 pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                        <i class="fa fa-envelope text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Mail Us</h6>
                        <span><a href="mailto:growmark@gmail.com">growmark@gmail.com</a></span>
                    </div>
                </div>
                
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=%20a-43%20sector%2016%20noida&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<?php require("./partials/footer.php"); ?>