<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php"); ?>

<?php
$show = false;  
if($_SERVER['REQUEST_METHOD'] == "POST") {
     $username = $_POST['username'];
     $password = $_POST['password'];
     $q = "select * from users where username = '$username' and password = '$password'";
     $result = mysqli_query($conn,$q);
     if(mysqli_num_rows($result)==1){
        $row = $result->fetch_assoc();
            $_SESSION['login'] = true;
            $_SESSION['name'] = $row['name'];
            echo "<script> location.replace('admin/index.php'); </script>";
            die();

     }
     else{
        $show = true;
    }
 
}



?>




<div class="container">
    <h5 class="text-light bg-primary p-2 text-center"><span class="text-warning">Login</span> to Your Account</h5>
    <?php if($show){ ?>
    <!-- ALERT Messages -->
    <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
       <strong>Fail</strong>Invalid Username Or Password
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }  ?>
    <form action="" method="post">
    <div class="mb-3">
         <label for="username">UserName</label>
         <input type="text" name="username" placeholder="UserName" class="form-control">
    </div>
    <div class="mb-3">
         <label for="password">Password</label>
         <input type="password" name="password" placeholder="Password" class="form-control">
    </div>
    <div class="mb-3 btn-group w-100">
        <a href="signup.php" class="btn btn-success">Signup</a>
        <button class="btn btn-primary" type="submit">Login</button>
    </div>
    <a href="signup.php">Forget Password?</a>
    </form>
</div>








<?php require("./partials/footer.php"); ?>

