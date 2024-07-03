<?php
try{
    $conn = mysqli_connect("localhost", "root", "", "growMark");
    }
    catch(Exception $e){
        echo $e;
      die();
    }
    


$q = "select * from services order by id desc";
$services = mysqli_query($conn,$q);
$q = "select * from products order by id desc";
$products = mysqli_query($conn,$q);
?>


<!-- Topbar Start -->

<div class="container-fluid bg-primary text-white d-none d-lg-flex">
    <div class="container py-3">
        <div class="d-flex align-items-center">
            <a href="index.php">
                <h2 class="text-white fw-bold m-0">GrowMark</h2>
            </a>
            <div class="ms-auto d-flex align-items-center ">
                <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Noida(201301),India</small>
                <small class="ms-4"><i class="fa fa-envelope me-3"></i><a class="text-light" href="mailto:growmark@gmail.com">growmark@gmail.com</a></small>
                <small class="ms-4"><i class="fa fa-phone-alt me-3"></i><a class="text-light" href="tel:+91 8750083134">+91 8750083134</a></small>
                <div class="ms-3 d-flex">
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="index.html" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">GrowMark</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="<?php echo $base_url ?>/index.php" class="nav-item nav-link active">Home</a>
                    <a href="<?php echo $base_url ?>/about.php" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="<?php echo $base_url ?>/service.php" class="dropdown-item">All</a>
                            <?php  while($row=$services->fetch_assoc()){  ?>
                            <a href="<?php echo $base_url ?>/service.php" class="dropdown-item"><?php echo $row['name'] ?></a>
                             <?php } ?>
                         </div>
                    </div>                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Projects</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="<?php echo $base_url ?>/project.php" class="dropdown-item">All</a>
                            <?php  while($row=$products->fetch_assoc()){  ?>
                            <a href="<?php echo $base_url ?>/project-show.php?id=<?php echo $row['id'] ?>" class="dropdown-item"><?php echo $row['name'] ?></a>
                             <?php } ?>
                         </div>
                    </div>              

                    <a href="<?php echo $base_url ?>/quotation.php" class="nav-item nav-link">Quotation</a>
                    <a href="<?php echo $base_url ?>/feature.php" class="nav-item nav-link">Features</a>
                    <a href="<?php echo $base_url ?>/team.php" class="nav-item nav-link">Teams</a>
                    <a href="<?php echo $base_url ?>/contact.php" class="nav-item nav-link">Contact</a>
                   
 
               <?php if(isset($_SESSION['login']) and $_SESSION['login']==true) {?>
               <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['name'] ?></a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="<?php echo $base_url ?>/admin/index.php" class="dropdown-item">Admin</a>
                            <hr>
                            <a href="<?php echo $base_url ?>/logout.php" class="dropdown-item">Logout</a>

                         </div>
                         <?php } else{ ?>
                    <a href="<?php echo $base_url ?>/login.php" class="nav-item nav-link">Login</a>
                            <?php }?>
                    </div>
                
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="" class="btn btn-primary rounded-pill py-2 px-3">Get A Quote</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->