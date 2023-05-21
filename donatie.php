<?php


require "controllerUserData.php";

if(isset($_POST['numedonator'])){
    
    
    //echo $_POST['update1'];
    
    $valoare=$_POST['numedonator'];
 
    
    $donatie= $_POST['donatie'];
    
    
  
    $conn =  mysqli_connect('localhost','root','','apv'); ;
    
    
       
    
    $av=$_SESSION['mere'];
    
    
       $log=$av." SET donatie=".$donatie." LUI ".$valoare;
    
        $connn = mysqli_connect('localhost','root','','checkin');
    
    $sql12=$connn->query("INSERT INTO loguri(log) VALUES('$log')");
    
    $sql1_=$conn->query("UPDATE usertable SET donatie=$donatie WHERE email='$valoare'");

    header('location: index.php');
}


?>