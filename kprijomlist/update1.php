<?php 
include "config.php";
$List = $_POST['list'];
$ID = $_POST['id'];
mysqli_query($con, "UPDATE `tabletodo` SET `list`='$List' WHERE Id = $ID");
header("location:home.php");
?>