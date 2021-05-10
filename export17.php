<?php 


 
 
      //export.php  
 if(isset($_POST["export17"]))  
 {  


       session_start(); // needs to be before anything else on page to use $_SESSION
   
      $connect = mysqli_connect("localhost", "root", "", "project");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=AcademicStaff.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array(  'INSTITUTION','OWNERSHIP', 'CODE', 'SKILL LEVEL',  'MALE', 'FEMALE','YEAR'));  
      $query =  "SELECT `institution`, `ownership`,`programme code`, `skill level`, `male`, `female`, `year`   FROM `academic staff` WHERE `skill level`= '{$_SESSION['level']}' ";
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  