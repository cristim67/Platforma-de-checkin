<?php 

  //Create Connection of Database
  
  $con =  mysqli_connect('localhost','root','','apv');
   
  // Fetch data from Users table
  $result = mysqli_query($con, "SELECT * FROM usertable");
  
  //Create header of excel
  $content = '<table><tr><th>Name</th><th>Email</th><th>Code</th><th>Status</th><th>Telefon</th><th>Tricou</th><th>Zi nastere</th><th>Varsta</th><th>Sex</th><th>Card/cash</th><th>Donatie</th><th>Numar tricou</th><th>Check-in</th></tr>'; 

  //fetch all data with the help of mysqli_fetch_array 
  while($row = mysqli_fetch_array($result))  
  {  
  	  $content .='<tr>';
	    $content .='<td>'.$row['name'].'</td>';
	    $content .='<td>'.$row['email'].'</td>';
	    $content .='<td>'.$row['code'].'</td>';
	    $content .='<td>'.$row['status'].'</td>';
	    
	    $content .='<td>'.$row['phone'].'</td>';
	    $content .='<td>'.$row['dimensiune_tricou'].'</td>';
	    
	    $content .='<td>'.$row['zinastere'].'</td>';
	    $content .='<td>'.$row['varsta'].'</td>';
	    
	    $content .='<td>'.$row['sex'].'</td>';
	    
	    $content .='<td>'.$row['card_cash'].'</td>';
	    $content .='<td>'.$row['donatie'].'</td>';
	    $content .='<td>'.$row['nr_tricou'].'</td>';
	    $content .='<td>'.$row['checkin'].'</td>';
	    $content .='<tr>';   
  } 
  $content.='</table>'; 

  //This code is use to create excel format
  header('Content-Type:application/xls');  
  header('Content-Disposition: attachment; filename=users.xls');
  echo $content;
  exit();

?>