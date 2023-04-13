<?php
include "config.php";
if(isset($_POST['submit'])){
    $LIST = $_POST['list'];

mysqli_query($con, "INSERT INTO `tabletodo`(`list`) VALUES ('$LIST')"); 
header("location:home.php");

}

?>
