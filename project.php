<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php"); ?>

<?php

$q = "select * from products order by short_order";
$products = mysqli_query($conn,$q);

?>


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Projects</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


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
                        <a class="btn btn-lg-square btn-light rounded-circle m-1"
                            href="./uploads/products/<?php echo $row['pic2'] ?>" data-lightbox="project"><i
                                class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1"
                            href="project-show.php?id=<?php echo $row['id'] ?>"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4" style="text-align: justify;height:300px;overflow:hidden">
                    <a class="d-block h5"
                        href="project-show.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
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

<?php require("./partials/footer.php"); ?>