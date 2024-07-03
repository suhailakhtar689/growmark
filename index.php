<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php"); ?>

<?php

$q = "select * from services order by short_order limit 6";
$services = mysqli_query($conn,$q);


$q = "select * from products order by short_order";
$products = mysqli_query($conn,$q);


$q = "select * from teams order by id limit 4";
$teams = mysqli_query($conn,$q);


$q = "select * from testimonials order by id";
$testimonials = mysqli_query($conn,$q);


?>


<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated slideInRight">Welcome to
                                    <strong>GrowMark</strong>
                                </p>
                                <h1 class="display-1 text-white mb-4 animated slideInRight">Unlock Your Business
                                    Growth</h1>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>GrowMark</strong>
                                </p>
                                <h1 class="display-1 text-white mb-5 animated slideInLeft">Ready to Grow Your
                                    Business</h1>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 feature-row">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-1.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Award Winning</h5>
                    <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Professional Staff</h5>
                    <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Fair Prices</h5>
                    <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-4.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">24/7 Support</h5>
                    <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- About Start -->
<div class="container-xxl about my-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src=""
                        data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded-top p-5 mt-lg-5">
                    <p class="fs-5 fw-medium text-primary">About Us</p>
                    <h1 class="display-6 mb-4">The Best Marketing Agency to Improve Your Business</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                        diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/icon/icon-5.png" alt="">
                            <h5 class="mb-3">Managed Services</h5>
                            <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/icon/icon-2.png" alt="">
                            <h5 class="mb-3">Dedicated Experts</h5>
                            <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Our Services</p>
        </div>
        <div class="row g-4">
            <?php  while($row=$services->fetch_assoc()){ ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="./uploads/services/<?php echo $row['logo'] ?>" alt="Icon">
                        </div>
                        <h5 class="mb-3"><?php echo $row['name'] ?></h4>
                            <p class="mb-0" style="text-align: justify;height:300px;overflow:hidden"><?php echo $row['short_description'] ?></p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="service-show.php?id=<?php echo $row['id'] ?>">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- service End -->



<!-- Project Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Our Projects</p>
            <h1 class="display-5 mb-5">We've Done Lot's of Awesome Projects</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
        <?php  while($row=$products->fetch_assoc()){ ?>
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="./uploads/products/<?php echo $row['pic2'] ?>" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="./uploads/products/<?php echo $row['pic2'] ?>"
                            data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="project-show.php?id=<?php echo $row['id'] ?>"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4" style="text-align: justify;height:300px;overflow:hidden">
                    <a class="d-block h5" href="project-show.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
                    <span><?php echo $row['short_description'] ?></span>
                </div>
                <div class="service-btn rounded-0 rounded-bottom text-center">
                        <a class="text-primary fw-medium" href="project-show.php?id=<?php echo $row['id'] ?>">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
            </div>
           <?php }  ?>
        </div>
    </div>
</div>
<!-- Project End -->



<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Our Team</p>
            <h1 class="display-5 mb-5">Our Expert People Ready to Help You</h1>
        </div>
        <div class="row g-4">
        <?php  while($row=$teams->fetch_assoc()){ ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="./uploads/teams/<?php echo $row['pic'] ?>" style="height: 250px; width: 100%;" alt="">
                    <h5><?php echo $row['name'] ?></h5>
                    <span class="text-primary"><?php echo $row['profile'] ?></span>
                    
                </div>
            </div>
             <?php } ?>
        </div>
        <div class="text-center my-3">
        <a href="about.php" class="btn btn-primary">View More</a>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Testimonial</p>
            <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
        <?php  while($row=$testimonials->fetch_assoc()){ ?>
            <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                <img class="mb-4" src="./uploads/testimonials/<?php echo $row['pic'] ?>" alt="">
                <p class="mb-4" style="text-align: justify;"><?php echo $row['message'] ?></p>
                <h5><?php echo $row['name'] ?></h5>
                <span class="text-primary"><?php echo $row['profile'] ?></span>
            </div>
      <?php } ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<?php require("./partials/footer.php");?>