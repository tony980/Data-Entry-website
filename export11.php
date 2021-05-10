<?php 


 
 
      //export.php  
 if(isset($_POST["export11"]))  
 {  


       session_start(); // needs to be before anything else on page to use $_SESSION
   
      $connect = mysqli_connect("localhost", "root", "", "project");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=StudentsGraduated.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ownership',  'institution', 'Code', 'programme', 'Duration', 'male', 'female','year'));  
      $query = "SELECT `ownership`,`institution`,`Code`,`programme`,`Duration`,    `male`, `female`, `year`  FROM `students graduated` WHERE `programme`='{$_SESSION['course1']}'";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  