<?php require("../../partials/header.php"); ?>
<?php require("../../partials/navbar.php"); ?>
<?php require("../../db_connect.php"); ?>


<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "select * from products where id = '$id'";
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
    if($_FILES['pic1']['name'] !=""){
        $pic1 = $_FILES['pic1']['name'];
        move_uploaded_file($_FILES['pic1']['tmp_name'], "../../uploads/products/" .$pic1);
    }
    else
    $pic1 = $row['pic1'];
    
    if($_FILES['pic2']['name'] !=""){
        $pic2 = $_FILES['pic2']['name'];
        move_uploaded_file($_FILES['pic2']['tmp_name'], "../../uploads/products/" .$pic2);
    }
    else
    $pic2 = $row['pic2'];


    if($_FILES['pic3']['name'] !=""){
        $pic3 = $_FILES['pic3']['name'];
        move_uploaded_file($_FILES['pic3']['tmp_name'], "../../uploads/products/" .$pic3);
    }
    else
    $pic3 = $row['pic3'];

    
    if($_FILES['pic4']['name'] !=""){
        $pic4 = $_FILES['pic4']['name'];
        move_uploaded_file($_FILES['pic4']['tmp_name'], "../../uploads/products/" .$pic4);
    }
    else
    $pic4 = $row['pic4'];




    $short_description = $_POST['short_description'];
    $long_description = $_POST['long_description'];
    $short_order = $_POST['short_order'];
    $status = $_POST['status'];

    $q = "update products set name = '$name',pic1 = '$pic1',pic2 = '$pic2',pic3 = '$pic3',pic4 = '$pic4',short_description = '$short_description',long_description = '$long_description', short_order = '$short_order',status = '$status' where id = '$id'";
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
            <h5 class="bg-primary text-center text-light p-2">Update Product </h5>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="name" class="form-control"
                        value="<?php echo $row['name'] ?>">
                </div>
                <div class="mb-3">
                    <label>Short Description</label>
                    <textarea name="short_description" rows="2" placeholder="Short Description..."
                        class="form-control"><?php echo $row['short_description'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label>Long Description</label>
                    <textarea name="long_description" rows="10" placeholder="Long Description..."
                        class="form-control"><?php echo $row['long_description'] ?></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Pic1</label>
                        <input type="file" name="pic1" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Pic2</label>
                        <input type="file" name="pic2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Pic3</label>
                        <input type="file" name="pic3" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Pic4</label>
                        <input type="file" name="pic4" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Short Order</label>
                        <input type="number" name="short_order" value="5" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Status</label>
                        <select name="status" class="form-select">
                            <option value="1" <?php echo $row['status']==1?"selected": "" ?>>Active</option>
                            <option value="0" <?php echo $row['status']==0?"selected": "" ?>>Inactive</option>

                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require("../../partials/footer.php"); ?>