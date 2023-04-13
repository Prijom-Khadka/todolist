<?php
include "config.php";
$id = $_GET['ID'];
mysqli_query($con,"DELETE FROM `tabletodo` WHERE ID = $id");
header("location:home.php");
?>