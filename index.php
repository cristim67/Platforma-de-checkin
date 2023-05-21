<?php require_once "controllerUserData.php"; ?>

<?php

if( $_SESSION['email']){

}
else header('Location: login-user.php');
?>



<?php $conapv =  mysqli_connect('localhost','root','','apv');  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> APV DASHBOARD ONLINE</title>
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
    <a class="navbar-brand" href="#" > CHECK-IN ONLINE
   </a>
    <!--<a href="inscriere_participant.php" class="btn btn-dark" style="float: left;">ADD</a>-->
      <a href="export.php" class="btn btn-success" style="float: left;">Export</a>
      
        <a href="add.php" class="btn btn-light" style="float: left;">INSCRIERE</a>
        
        <a href="log.php" class="btn btn-light" style="float: left;">Logs</a>
        
        <!--<a href="add.php" class="btn btn-light" style="float: left;">ADD</a>-->
    <button type="button" class="btn btn-light" style="float:left;"><a href="logout-user.php">Logout</a></button>
    </nav>
   
 


<table class="table table-striped table-bordered">
  <thead>
    <tr class="btn-primary">
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Code</th>
      <th>Status</th>
      <th>Telefon</th>
      <th>Tricou</th>
      <th>Varsta</th>
      <th>Sex</th>
     <th>Card-Cash</th>
      <th>Donatie</th>
      
      <th>NUMAR TRICOU</th>
      <th>CHECK-IN</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
      //Fetch user details in user table from the database
      $query = mysqli_query($conapv,'SELECT * FROM usertable');

      $i = 1;

      while($row = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $i;  ?></td>
      <td><?php echo $row['name'];  ?></td>
      <td><?php echo $row['email'];  ?></td>
      <td><?php echo $row['code'];  ?></td>
        <td><?php echo $row['status'];  ?></td>
        <td><?php echo $row['phone'];  ?></td>
        <td><?php echo $row['dimensiune_tricou']?></td>
                
            <td><?php 
        
          echo "<form method='post' action='varsta.php' name='edit'>

           <input class='text' name='donatie' value='$row[varsta]' style='margin-bottom:1rem;'>
           <button  name='numedonator' value='$row[email] ' type='submit'> Actualizare
</form>";
        
        
        ?></td>
               <td><?php echo $row['sex']?></td>
               
             <td><?php 
        
    if($row[card_cash]=="cash"){
       echo "<form method='post' action='card1.php' name='edit1'>

        <button name='card1' value='$row[email]' type='submit' style='background-color:blue; color:white;'> Cash
  
</form>";
    }
    else {
           echo "<form method='post' action='card0.php' name='edit2'>

        <button name='card0' value='$row[email] ' type='submit'style='background-color:cyan;'> Card
        
  
</form>";
    }
        
        ?></td>
        <td><?php 
        
          echo "<form method='post' action='donatie.php' name='edit'>

           <input class='text' name='donatie' value='$row[donatie]' style='margin-bottom:1rem;'>
           <button  name='numedonator' value='$row[email] ' type='submit'> Actualizare
</form>";
        
        
        ?></td>
                    </td>
                    <td><?php 
        
          echo "<form method='post' action='nrtricou.php' name='edit'>

           <input class='text' name='donatie' value='$row[nr_tricou]' style='margin-bottom:1rem;'>
           <button  name='numedonator' value='$row[email] ' type='submit'> Actualizare
</form>";
        
        
        ?></td>
        <td>
  
        <?php
        
        if($row[checkin]==1){
       echo "<form method='post' action='update1.php' name='edit'>

        <button name='update1' value='$row[email]' type='submit' style='background-color:green;'> A VENIT!
  
</form>";
    }
    else {
           echo "<form method='post' action='update0.php' name='edit'>

        <button name='update0' value='$row[email] ' type='submit'style='background-color:red;'> NU A VENIT!
        
  
</form>";
    }

        ?>
            

            
    </tr>
  <?php $i++; } ?>
  
  </tbody>
  
</table>

</body>
</html>