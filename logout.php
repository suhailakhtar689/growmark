<?php
require ("./partials/header.php");  
session_destroy();
header("location:login.php");
?>