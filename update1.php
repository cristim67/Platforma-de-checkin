<?php


require "controllerUserData.php";

if(isset($_POST['update1'])){
    
    
    //echo $_POST['update1'];
    
    $valoare=$_POST['update1'];
    
   
    

    
    
    $conn =  mysqli_connect('localhost','root','','apv');
    
        $av=$_SESSION['mere'];
    

    
    $log=$av."  SET checkin=0 LUI ".$valoare;
    

    
    
    $sql1_=$conn->query("UPDATE usertable SET checkin=0 WHERE email='$valoare'");
    
        $connn =  mysqli_connect('localhost','root','','checkin');
    
       $sql12=$connn->query("INSERT INTO loguri(log) VALUES('$log')");
    header("location:index.php");
}


?>