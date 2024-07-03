<?php
if(!(isset($_SESSION['login']) && $_SESSION['login']==true)){
   echo "<script> location.replace('http://localhost/growMark/login.php'); </script>";    
    die();
}
?>



<div class="list-group">
    <a href="<?php echo $base_url ?>/admin/index.php" class="list-group-item list-group-item-action active"
        aria-current="true">Home</a>
    <a href="#" class="list-group-item list-group-item-action">Users</a>
    <a href="<?php echo $base_url ?>/admin/services/index.php"
        class="list-group-item list-group-item-action">Services</a>
    <a href="<?php echo $base_url ?>/admin/products/index.php"
        class="list-group-item list-group-item-action">Products</a>
    <a href="<?php echo $base_url ?>/admin/newsletter/index.php"
        class="list-group-item list-group-item-action">Newsletter</a>
    <a href="<?php echo $base_url ?>/admin/contactus/index.php" class="list-group-item list-group-item-action">Contact
        Us</a>
    <a href="<?php echo $base_url ?>/admin/quotation/index.php"
        class="list-group-item list-group-item-action">Quotations</a>
    <a href="<?php echo $base_url ?>/admin/testimonials/index.php"
        class="list-group-item list-group-item-action">Testimonials</a>
    <a href="<?php echo $base_url ?>/admin/teams/index.php" class="list-group-item list-group-item-action">Teams</a>

</div>