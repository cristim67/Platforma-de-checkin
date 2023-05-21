<?php require_once "controllerUserData.php"; ?>

<?php

if( $_SESSION['email']){

}
else header('Location: login-user.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Donare de sange </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="icon" type="image/x-icon" href="apv.ico">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #1124FA;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    </style>
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#">APV LOG</a>
      <a href="export.php" class="btn btn-success" style="float: left;">Export</a>
        <a href="index.php" class="btn btn-light" style="float: left;">Acasa</a>
    <button type="button" class="btn btn-light" style="float:left;"><a href="logout-user.php">Logout</a></button>
    </nav>
   
   
 


<table class="table table-striped table-bordered">
  <thead>
    <tr class="btn-primary">
      <th>Id</th>
      <th>LOG</th>
    </tr>
  </thead>
  <tbody>
    <?php
      //Fetch user details in user table from the database
      $query = mysqli_query($con,'SELECT * FROM loguri');

      $i = 1;

      while($row = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $i;  ?></td>
      <td><?php echo $row['log'];  ?></td>
  <?php $i++; } ?>
  </tbody>
</table>
   


   
</body>
</html>