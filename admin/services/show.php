<?php require("../../partials/header.php"); ?>
<?php require("../../partials/navbar.php"); ?>
<?php require("../../db_connect.php"); ?>


<?php 
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "select * from services where id = '$id'";
    $result = mysqli_query($conn,$q);
    $row = $result->fetch_assoc();
}
else{
    // header("location: index.php", true);
    // die();
   echo "<script> location.replace('index.php'); </script>";    
}
 
?>






<div class="container-fluid my-3">
    <div class="row">
        <div class="col-md-2">
            <?php require("../sidebar.php"); ?>
        </div>
        <div class="col-md-10">
            <h5 class="bg-primary text-center text-light p-2">Services</h5>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <td><?php echo $row['id'] ?></td>
                    </tr>

                    <tr>
                        <th>Name</th>
                        <td><?php echo $row['name'] ?></td>
                    </tr>

                    <tr>
                        <th>Logo</th>
                        <td>
                            <a href="<?php echo $base_url."/uploads/services/".$row['logo'] ?>" target="_blank">
                                <img src="<?php echo $base_url."/uploads/services/".$row['logo'] ?>" height="100px" width="100px" alt="">
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <th>Cover</th>
                        <td> <a href="<?php echo $base_url."/uploads/services/".$row['cover'] ?>" target="_blank">
                                <img src="<?php echo $base_url."/uploads/services/".$row['cover'] ?>" height="100px" width="100px" alt="">
                            </a></td>
                    </tr>

                    <tr>
                        <th>Short Description</th>
                        <td><?php echo $row['short_description'] ?></td>
                    </tr>
                    <tr>
                        <th>Long Description</th>
                        <td><?php echo $row['long_description'] ?></td>
                    </tr>
                    <tr>
                        <th>Short Order</th>
                        <td><?php echo $row['short_order'] ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?php echo $row['status']?"Active":"Inactive" ?></td>
                    </tr>
                    <tr>
                         <td colspan="2"><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-primary w-100">Update</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require("../../partials/footer.php"); ?>