 <?php 


 
 
      //export.php  
 if(isset($_POST["export"]))  
 {  


       session_start(); // needs to be before anything else on page to use $_SESSION
    $year = "";
    if(isset($_POST['year'])){
        $_SESSION['year'] = $_POST['year'];
    }
      $connect = mysqli_connect("localhost", "root", "", "project");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=StudentsAdmitted.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ownership',  'institution', 'serial number', 'programme', 'programme code', 'male', 'female','year'));  
      $query = "SELECT `ownership`,  `institution`, `serial number`, `programme`, `programme code`, `male`, `female`, `year` FROM `students admitted` WHERE `year`='{$_SESSION['year']}' ";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  