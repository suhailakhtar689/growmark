<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php"); ?>

<?php
$q = "select * from services order by id desc";
$services = mysqli_query($conn,$q);

$show = false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $q ="insert into quotation(name,email,phone,service,message) values('$name','$email','$phone','$service','$message')";
    mysqli_query($conn,$q);
    $show = true;
}

?>






<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Quote</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Quote</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Quote Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-medium text-primary">Get A Quote</p>
                <h1 class="display-5 mb-4">Need Our Expert Help? We're Here!</h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                    erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <a class="d-inline-flex w-100 align-items-center rounded overflow-hidden border border-primary" href="tel:8750083134">
                    <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </span>
                    <span class="fs-5 fw-medium mx-4">+91-8750083134</span>
                </a>
                <a class="my-2 w-100 d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="mailto:growmark68@gmail.com">
                    <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                        <i class="fa fa-envelope text-white"></i>
                    </span>
                    <span class="fs-5 fw-medium mx-4">growmark68@gmail.com</span>
                </a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="mb-4">Get A Free Quote</h2>
                <?php if($show){ ?>
                <!-- ALERT Messages -->
                <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                    <strong>Thank You!</strong> Your Query Has Been Received. Our Team Will Contact You Soon!!!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php }  ?>
                <form action="" method="post">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                <label>Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Mobile">
                                <label for="phone">Your Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select" name="service" id="service">
                                    <?php while($row=$services->fetch_assoc()){  ?>
                                    <a href="<?php echo $base_url ?>/service.php" class="dropdown-item"></a>
                                    <option value="<?php echo $row['name'] ?>"></option>
                                    <?php } ?>

                                </select>
                                <label for="service">Choose A Service</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message"
                                    style="height: 130px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

<?php require("./partials/footer.php"); ?>