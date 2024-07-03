<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php"); ?>



<?php
$show = false;
$message = "";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword){
    $q = "select* from users where username = '$username'"; 
    $result = mysqli_query($conn,$q);
    if(mysqli_num_rows($result)==1){
        $show = true;
        $message = "Username Already Taken!!!";
    }
    else{
        $q = "insert into users(name,username,email,phone,password) values ('$name','$username','$email','$phone','$password')";
        mysqli_query($conn,$q);
        echo "<script> location.replace('login.php'); </script>";    
        die();
    }

}
    else{
        $show = true;
        $message = "Password and Confirm Password Doesn't Matched";
    }

}


?>





<div class="container">
    <h5 class="text-light bg-primary p-2 text-center"><span class="text-warning">Create</span> an Account</h5>
    <?php if($show){ ?>
    <!-- ALERT Messages -->
    <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
        <?php echo $message ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }  ?>

    <form action="" method="post">
        <div class="row">
            <div class=" col-md-6 mb-3">
                <label for="username">Full Name</label>
                <input type="text" name="name" placeholder="Full Name" class="form-control">
            </div>
            <div class=" col-md-6 mb-3">
                <label for="username">UserName</label>
                <input type="text" name="username" placeholder="UserName" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="password">Email</label>
                <input type="email" name="email" placeholder="Email Address" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="password">Phone Number</label>
                <input type="text" name="phone" placeholder="Phone" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="password">Confirm Password</label>
                <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control">
            </div>
        </div>
        <div class="mb-3 btn-group w-100">
            <a href="login.php" class="btn btn-success">Login</a>
            <button class="btn btn-primary" type="submit">Signup</button>
        </div>
    </form>
</div>







<?php require("./partials/footer.php"); ?>