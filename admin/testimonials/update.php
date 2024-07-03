<?php require("../../partials/header.php"); ?>
<?php require("../../partials/navbar.php"); ?>
<?php require("../../db_connect.php"); ?>


<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "select * from testimonials where id = '$id'";
    $result = mysqli_query($conn,$q);
    $row = $result->fetch_assoc();
}
else{
    // header("location: index.php", true);
    // die();
   echo "<script> location.replace('index.php'); </script>";    
}


if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['name'];
    if($_FILES['pic']['name'] !=""){
        $pic = $_FILES['pic']['name'];
        move_uploaded_file($_FILES['pic']['tmp_name'], "../../uploads/testimonials/" .$pic);
    }
    else
    $pic = $row['pic'];
    
    
    $profile = $_POST['profile'];
    $message = $_POST['message'];
    

    $q = "update testimonials set name = '$name',pic = '$pic',profile = '$profile',message = '$message' where id = '$id'";
    $result = mysqli_query($conn,$q); 
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
            <h5 class="bg-primary text-center text-light p-2">Update Testimonial </h5>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name" class="form-control"
                        value="<?php echo $row['name'] ?>">
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Pic</label>
                        <input type="file" name="pic" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Profile</label>
                        <input type="text" name="profile" class="form-control" placeholder="Profile" value="<?php echo $row['profile'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label>Message</label>
                    <textarea name="message" rows="5" placeholder="Message..."
                        class="form-control"><?php echo $row['message'] ?></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require("../../partials/footer.php"); ?>