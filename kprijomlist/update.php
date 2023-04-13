<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
$id = $_GET['ID'];
include "config.php";
$rdaata = mysqli_query($con, "select * from `tabletodo` where Id = $id");
$data = mysqli_fetch_array($rdaata);
?>
<body class = "bg_info">
<form action="update1.php" method="POST">
<div class="container">
<h3 class="text-center text-primary font-Helvetica">UPDATE</h3>
    <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3">
        
        <div class="col-10"> 
            <input type="text" value ="<?php echo $data['list'] ?>" name="list" class="form-control">
        </div>
      
            <div class = "col-2">
                <button class="btn btn-primary">UPDATE</button>
                <input type="hidden" name = "id" value= "<?php echo $data['Id'] ?>">
            </div>
        </div>
    </div>
    </form>

    
</body>
</html>