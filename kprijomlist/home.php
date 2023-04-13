<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO-LIST</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form action="submit.php" method="POST">
<div class="container">
<h3 class="text-center text-primary font-Helvetica">TODO-LIST</h3>
    <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3">
        
        <div class="col-8"> 
            <input type="text" name="list" class="form-control">
        </div>
      
        <div class = "col-2">
            <button type = "submit" name = "submit" class="btn btn-primary">ADD</button>
        </div>
    </div>
    </form>


    <!-- GET DATA FROM DATABASE UPDATE AND DELETE SECTION -->
<?php
include "config.php";
$data = mysqli_query($con, "SELECT * FROM `tabletodo`");
?>
<div class="container">
    <div class="col-8  m-auto shadow bg-white mt-3 py-3">
<table class="table">
    <tbody>
        <?php
        while($row = mysqli_fetch_array($data)){

        
        ?>
        <tr>
            <td><?php echo $row['Id'] ?></td>
            <td><?php echo $row['list'] ?></td>
            <td style ="width: 10%"><a href="update.php? ID= <?php echo $row['Id'] ?>" class="btn btn-success">UPDATE</a></td>
            <td style ="width: 10%"><a href="delete.php? ID= <?php echo $row['Id'] ?> "class="btn btn-danger">DELETE</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>
</div>
<div class="container">

   <div class="content">
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>
</body>
</html>