<?php require("../../partials/header.php"); ?>
<?php require("../../partials/navbar.php"); ?>
<?php require("../../db_connect.php"); ?>


<?php 
 if(isset($_GET['type'])){
    $id = $_GET['id'];
    $q = "update contactus set status = 0 where id = '$id'";
    mysqli_query($conn,$q);
 }

 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "select * from contactus where id = '$id'";
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
            <h5 class="bg-primary text-center text-light p-2">Contact Us Query</h5>
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
                        <th>Email</th>
                        <td><?php echo $row['email'] ?></td>
                    </tr>

                    <tr>
                        <th>Phone</th>
                        <td><?php echo $row['phone'] ?></td>

                    </tr>

                    <tr>
                        <th>Subject</th>
                        <td><?php echo $row['subject'] ?></td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td><?php echo $row['message'] ?></td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td><?php echo $row['date'] ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?php echo $row['status']?"Active":"Inactive" ?></td>
                    </tr>
                    <tr>
                        <?php if($row['status']==1) { ?>
                            <td colspan="2"><a href="show.php?type=update&id=<?php echo $row['id'] ?>" class="btn btn-primary w-100">Update</a></td>
                            <?php }   ?>
                            <?php if($row['status']==0) { ?>
                            <td colspan="2"><a href="index.php?type=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger w-100">Delete</a></td>
                            <?php }   ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require("../../partials/footer.php"); ?>