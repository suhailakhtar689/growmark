<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php"); ?>

<?php
 if(isset($_GET['id'])){
    $id = $_GET['id'];
$q = "select * from products where id = '$id'";
$result = mysqli_query($conn,$q);
$data = $result->fetch_assoc();
}
else{ 
    echo "<script> location.replace('project.php'); </script>";    
     die();
}
?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Project</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="projects.php">Projects</a></li>
                <li class="breadcrumb-item text-light" aria-current="page"><?php echo $data['name'] ?></li>
            </ol>
        </nav>
    </div>
</div><datagrid></datagrid>
<!-- Page Header End -->

<div class="container my-2">
    <h5 class="text-center"><?php echo $data['name'] ?></h5>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./uploads/products/<?php echo $data['pic1'] ?>" height="500px" width="100%" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./uploads/products/<?php echo $data['pic2'] ?>" height="500px" width="100%" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./uploads/products/<?php echo $data['pic3'] ?>" height="500px" width="100%" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./uploads/products/<?php echo $data['pic4'] ?>" height="500px" width="100%" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <p class="my-2" style="text-align:justify;">
        <?php echo $data['short_description'] ?>
    </p>
    <hr>
    <div><?php echo $data['long_description'] ?></div>
    <div class="text-center">
        <a href="quotation.php" class="btn btn-primary">Get Quotation</a>
    </div>
</div>





<?php require("./partials/footer.php"); ?>