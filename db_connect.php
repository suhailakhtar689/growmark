<?php
try{
$conn = mysqli_connect("localhost", "root", "", "growMark");

}
catch(Exception $e){
    echo $e;
  die();
}



?>