<?php 


 
 
      //export.php  
 if(isset($_POST["export13"]))  
 {  


       session_start(); // needs to be before anything else on page to use $_SESSION
   
      $connect = mysqli_connect("localhost", "root", "", "project");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=AcademicStaff.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('OWNERSHIP',  'INSTITUTION', 'CODE', 'SKILL LEVEL',  'MALE', 'FEMALE','YEAR'));  
      $query = "SELECT  `ownership`,`institution`,`programme code`,`skill level`,  `male`, `female`, `year`   FROM `academic staff` WHERE date  Between '{$_SESSION['begin2']}' and  '{$_SESSION['end2']}'  order by date";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  