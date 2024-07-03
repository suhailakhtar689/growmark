<?php require("../../partials/header.php"); ?>
<?php require("../../partials/navbar.php"); ?>
<?php require("../../db_connect.php"); ?>


<?php 
if(isset($_GET['type']) && $_GET['type']=="delete"){
    $id = $_GET['id'];
    $q = "delete from newsletter where id = '$id'"; 
   mysqli_query($conn,$q);
   // header("location: index.php", true);
        // die();
   echo "<script> location.replace('index.php'); </script>";    
}


$q = "select * from newsletter order by id desc";
$result = mysqli_query($conn,$q);

?>






<div class="container-fluid my-3">
    <div class="row">
        <div class="col-md-2">
        <div class="list-group">
    <a href="<?php echo $base_url ?>/admin/index.php" class="list-group-item list-group-item-action" aria-current="true">Home</a>
    <a href="#" class="list-group-item list-group-item-action">Users</a>
    <a href="<?php echo $base_url ?>/admin/services/index.php" class="list-group-item list-group-item-action">Services</a>
    <a href="<?php echo $base_url ?>/admin/products/index.php" class="list-group-item list-group-item-action">Products</a>
    <a href="<?php echo $base_url ?>/admin/newsletter/index.php" class="list-group-item list-group-item-action active">Newsletter</a>
    <a href="<?php echo $base_url ?>/admin/contactus/index.php" class="list-group-item list-group-item-action">Contact Us</a>
    <a href="<?php echo $base_url ?>/admin/quotation/index.php" class="list-group-item list-group-item-action">Quotations</a>
    <a href="<?php echo $base_url ?>/admin/testimonials/index.php" class="list-group-item list-group-item-action">Testimonials</a>
    <a href="<?php echo $base_url ?>/admin/teams/index.php" class="list-group-item list-group-item-action">Teams</a>

</div>
        </div>
        <div class="col-md-10">
            <h5 class="bg-primary text-center text-light p-2">Contact Us Queries <a href="create.php"></h5>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th></th>

                    </tr>

                    <?php while($row=$result->fetch_assoc()){  ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['email'] ?></td>

                        <td> <a href="index.php?type=delete&id=<?php echo $row['id'] ?>"><i
                                    class="fa fa-trash text-danger"></i></a>
                            <?php  } ?>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>

<?php require("../../partials/footer.php"); ?>