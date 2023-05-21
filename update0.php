

<?php

require "controllerUserData.php";



if(isset($_POST['update0'])){
    
    
    //echo $_POST['update1'];
    
    $valoare=$_POST['update0'];
  
    $conn =  mysqli_connect('localhost','root','','apv');
    
    
    $av=$_SESSION['mere'];
    
    
    $log=$av." SET checkin=1 LUI ".$valoare;
    
    
    $connn = mysqli_connect('localhost','root','','checkin');
    
    $sql12=$connn->query("INSERT INTO loguri(log) VALUES('$log')");
    
    $sql1_=$conn->query("UPDATE usertable SET checkin=1 WHERE email='$valoare'");

    header("location:index.php");
}

?>