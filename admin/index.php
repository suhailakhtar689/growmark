<?php require("../partials/header.php"); ?>
<?php require("../partials/navbar.php"); ?>


<div class="container-fluid my-3">
    <div class="row">
        <div class="col-md-2">
            <?php require("./sidebar.php"); ?>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $base_url ?>/img/team-2.jpg" height="250px"  alt="">
                </div>
                <div class="col-md-6">
                    <h5 class="bg-primary text-center text-light">Admin Profile</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>Suhail Akhtar</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>growmark68@gmail.com</td>
                        </tr>

                        <tr>
                            <th>Phone</th>
                            <td>8750083134</td>
                        </tr>

                        <tr>
                            <th>Role</th>
                            <td>Admin</td>
                        </tr>

                        <tr>
                            <td colspan="2"><a href="#" class="btn btn-primary w-100">Update</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require("../partials/footer.php"); ?>