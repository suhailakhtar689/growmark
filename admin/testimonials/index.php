<?php require("../../partials/header.php"); ?>
<?php require("../../partials/navbar.php"); ?>
<?php require("../../db_connect.php"); ?>


<?php 
if(isset($_GET['type']) && $_GET['type']=="delete"){
    $id = $_GET['id'];
    $q = "delete from testimonials where id = '$id'"; 
   mysqli_query($conn,$q);
   // header("location: index.php", true);
        // die();
   echo "<script> location.replace('index.php'); </script>";    
}


$q = "select * from testimonials order by id desc";
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
    <a href="<?php echo $base_url ?>/admin/newsletter/index.php" class="list-group-item list-group-item-action">Newsletter</a>
    <a href="<?php echo $base_url ?>/admin/contactus/index.php" class="list-group-item list-group-item-action">Contact Us</a>
    <a href="<?php echo $base_url ?>/admin/quotation/index.php" class="list-group-item list-group-item-action">Quotations</a>
    <a href="<?php echo $base_url ?>/admin/testimonials/index.php" class="list-group-item list-group-item-action active">Testimonials</a>
    <a href="<?php echo $base_url ?>/admin/teams/index.php" class="list-group-item list-group-item-action">Teams</a>

</div>
        </div>
        <div class="col-md-10">
            <h5 class="bg-primary text-center text-light p-2">Testimonials <a href="create.php"> <i
                        class="fa fa-plus text-light float-end"></i></a></h5>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Pic</th>
                        <th>Profile</th>
                        <th>Message</th>
                        <th></th>
                        <th></th>
                        <th></th>

                    </tr>

                    <?php while($row=$result->fetch_assoc()){  ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td>
                            <?php if($row['pic']) { ?>
                                <a href="<?php echo $base_url."/uploads/testimonials/".$row['pic'] ?>" target="_blank">
                                <img src="<?php echo $base_url."/uploads/testimonials/".$row['pic'] ?>" height="70px" width="70px" alt="">
                            </a>
                            <?php } ?>
                        </td>
                            <td><?php echo $row['profile'] ?></td>
                        <td><?php echo mb_strimwidth($row['message'], 0, 100, "..."); ?></td>
                        <td><a href="show.php?id=<?php echo $row['id'] ?>"><i class="fa fa-eye text-primary"></i></a></td>
                        <td><a href="update.php?id=<?php echo $row['id'] ?>"><i class="fa fa-edit"></i></a></td>
                        <td><a href="index.php?type=delete&id=<?php echo $row['id'] ?>"><i class="fa fa-trash text-danger"></i></a></td>
                    </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>
</div>

<?php require("../../partials/footer.php"); ?>