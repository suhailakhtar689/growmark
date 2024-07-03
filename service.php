<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php"); ?>


<?php
$q = "select * from services order by short_order limit 6";
$services = mysqli_query($conn,$q);



?>




<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Our Services</p>
            <h1 class="display-5 mb-5">Digital Marketing Services that We Offer</h1>
        </div>
        <?php  while($row=$services->fetch_assoc()){ ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item position-relative h-100">
                <div class="service-text rounded p-5">
                    <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="./uploads/services/<?php echo $row['logo'] ?>" alt="Icon">
                    </div>
                    <h5 class="mb-3"><?php echo $row['name'] ?></h4>
                        <p class="mb-0" style="text-align: justify;height:300px;overflow:hidden">
                            <?php echo $row['short_description'] ?></p>
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
<!-- Service End -->


<?php require("./partials/footer.php"); ?>