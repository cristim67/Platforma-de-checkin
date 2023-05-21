<?php require_once "controllerUserData.php"; ?>

<?php

if( $_SESSION['email']){

}
else header('Location: login-user.php');
?>



<?php $conapv = mysqli_connect('localhost','root','','apv'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> DASHBOARD INSCRIERE </title>
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
    <a class="navbar-brand" href="#" >INSCRIERE  
   </a>
    <a href="exportziev.php" class="btn btn-success" style="float: left;">EXPORT</a>
        <a href="index.php" class="btn btn-light" style="float: left;">CHECKIN</a>
        
        <a href="log.php" class="btn btn-light" style="float: left;">Logs</a>
        
    <button type="button" class="btn btn-light" style="float:left;"><a href="logout-user.php">Logout</a></button>
    </nav>
   
 


<table class="table table-striped table-bordered">
  <thead>
    <tr class="btn-primary">
   <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Telefon</th>
      <th>Tricou</th>
      <th>Varsta</th>
      <th>Gen</th>
     <th>Card-Cash</th>
      <th>Donatie</th>
      <th>NUMAR TRICOU</th>
        <th>DELETE</th>
    </tr>
  </thead>
  <tbody>
    <?php
      //Fetch user details in user table from the database
      $query = mysqli_query($conapv,'SELECT * FROM ziuaev');

      $i = 1;

      while($row = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $i;  ?></td>
      <td><?php echo $row['nume'];  ?></td>
          
        <td><?php echo $row['email'];  ?>
        </td>   
        
        
         <td><?php echo $row['telefon'];  ?>
        </td>
        
             <td><?php echo $row['marime_tricou'];  ?>
        </td>
        <td><?php echo $row['varsta'];  ?>
        </td>
            <td><?php echo $row['sex'];  ?>
        </td>
              <td><?php echo $row['cash_card'];  ?>
        </td>
           <td><?php echo $row['donatie'];  ?>
        </td>
         <td><?php echo $row['nr_tricou'];  ?>
        </td>
  <td><?php 
        
          echo "<form method='post' action='stergereadd.php' name='edit'>

           <button  name='numesters' value='$row[telefon] ' type='submit' style='background-color:red;'> DELETE
</form>";
        
        
        ?>
        </td>
    </tr>
  <?php $i++; } ?>
  
  </tbody>
  
</table>



<table class="table table-striped table-bordered">
  <thead>
    <tr class="btn-primary">
      <th>Adauga participant</th>
    </tr>
  </thead>
  <tbody>
    <?php
      //Fetch user details in user table from the database
      $query = mysqli_query($conapv,'SELECT * FROM echipe ORDER BY punctaj DESC' );

      $i = 1;

    
    ?>
    <tr>
 
          
        <td><?php 
        
          echo "<form method='post' action='donatieadd.php' name='edit' style='margin-left:1rem;margin-top:1rem;margin-bottom:1rem;'>

           <input class='text' name='participant' value='' placeholder='Nume participant' required style='margin-left:1rem;margin-bottom:1rem;'>
           
           <input class='text' name='email' value='' placeholder='Email participant'required style='margin-left:1rem;'>
           
           <input class='text' name='telefon' value='' placeholder='Telefon' required style='margin-left:1rem;'>
           
           <input class='text' name='tricou' value='' placeholder='Marime Tricou' required style='margin-left:1rem;margin-right:60rem;'>
           
           <input class='text' name='varsta' value='' placeholder='Varsta' required style='margin-left:1rem;'>
           
           <input class='text' name='gen' value='' placeholder='Gen' required style='margin-left:1rem;'>
           
           <input class='text' name='plata' value='' placeholder='Metoda de Plata' required style='margin-left:1rem;'>
           
           <input class='text' name='donatie' value='' placeholder='Donatie' required style='margin-left:1rem;'>
           
           <input class='text' name='nrtricou' value='' placeholder='Numar Tricou' required style='margin-left:1rem;'>
           
           <button  name='NUME'  type='submit' style='background-color:lightblue;'> ADAUGA
</form>";
        
        
        ?>
        </td>
        
    
       
      
            
    </tr>

  
  </tbody>
  
</table>



</body>
</html>