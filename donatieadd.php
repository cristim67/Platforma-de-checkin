<?php


require "controllerUserData.php";

if(isset($_POST['NUME'])){
    
    
    //echo $_POST['update1'];
    
    $valoare=$_POST['NUME'];
 

    
    $participant= $_POST['participant'];

    
    $email= $_POST['email'];


    
    $telefon= $_POST['telefon'];


    
    $varsta= $_POST['varsta'];


    
    $gen= $_POST['gen'];

       $plata= $_POST['plata'];
       
   $donatie= $_POST['donatie'];
   
   $tricou= $_POST['tricou'];
   
   $nrtricou=$_POST['nrtricou'];

  
    $conn =  mysqli_connect('localhost','root','','apv'); ;
    
    
       
    
    $av=$_SESSION['mere'];
    
    
       $log=$av." SET donatie=".$donatie." LUI ".$valoare;
    
        $connn =  mysqli_connect('localhost','root','','checkin');
    
    $sql12=$connn->query("INSERT INTO loguri(log) VALUES('$log')");
    
    $sql1_=$conn->query("INSERT INTO ziuaev(nume,email,donatie,telefon,marime_tricou,varsta,nr_tricou,cash_card,sex) VALUES('$participant','$email','$donatie','$telefon','$tricou','$varsta','$nrtricou','$plata','$gen')");

    header('location: add.php');
}


?>