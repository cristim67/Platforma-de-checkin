

<?php

require "controllerUserData.php";



if(isset($_POST['card0'])){
    
    
    //echo $_POST['update1'];
    
    $valoare=$_POST['card0'];
  
    $conn =   mysqli_connect('localhost','root','','apv'); ;
    
    
    $av=$_SESSION['mere'];
    
    
    $log=$av." SET card_cash=cash LUI ".$valoare;
    
    
    $connn =  mysqli_connect('localhost','root','','checkin'); ;
    
    $sql12=$connn->query("INSERT INTO loguri(log) VALUES('$log')");
    
    $sql1_=$conn->query("UPDATE usertable SET card_cash='cash' WHERE email='$valoare'");

    header("location:index.php");
}

?>