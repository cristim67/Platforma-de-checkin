<?php


require "controllerUserData.php";

if(isset($_POST['numesters'])){
    
    
    $valoare=$_POST['numesters'];
 
    
    // echo $valoare;
   
  
    $conn =  mysqli_connect('localhost','root','','apv');
    
       
    
        $av=$_SESSION['mere'];
    
    
        $log=$av." Stergere participant".$valoare;
        
        
    $sql1_=$conn->query("DELETE FROM ziuaev WHERE telefon='$valoare'");
    header('location: add.php');
}



?>