
 <!DOCTYPE html>  
 <html>  
      <head>  

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">



<href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




           <title   style="color: RED;">Academic Staff</title>  
                   
      </head>  
      <body>  


 <?php  

  
 session_start(); // needs to be before anything else on page to use $_SESSION
  



 // needs to be before anything else on page to use $_SESSION
    


    




 ob_start();
 function fetch_data()  
 {  


 // needs to be before anything else on page to use $_SESSION
     


 
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "project");  
   $sql = "SELECT `serial number`, `skill level`, `programme code`, `male`, `female`, `year`, `institution`, `date`, `ownership` FROM `academic staff` WHERE `year`= '{$_SESSION['period1']}' ";

      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          
                          <td>'.$row["institution"].'</td>  
                           <td>'.$row["ownership"].'</td> 
                           <td>'.$row["programme code"].'</td> 
                         
                          <td>'.$row["skill level"].'</td>  
                          

                          <td>'.$row["male"].'</td>  
                           <td>'.$row["female"].'</td>  
                           <td>'.$row["year"].'</td>
                     </tr>  
                          ';  
      }  
      return $output; 







 }  
 if(isset($_POST["create_pdf"]))  
 {  



      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("STUDENTS GRADUATED");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage('P', 'B3'); 

      $content = '';  
      $content .= '  
      <h3 align="center" style="color:#5dade2;">ACADEMIC STAFF</h3><br /><br /> 

     

       <table border="1;" class="table table-bordered table-responsive-md table-striped text-center  bg-light" style="align:left;">  
           <tr   >  
                <th width="20%" class="text-center "><b>INSTITUTION</b></th>  
                <th width="17%" class="text-center bg-light"><b>OWNERSHIP</b></th>  
                <th width="10%" class="text-center bg-light"><b>CODE</b></th>  

                <th  width="18%" class="text-center bg-light"><b>SKILL LEVEL</b></th>  
              
                <th  width="10%" class="text-center bg-light"><b>MALE</b></th>  
                 <th width="10%" class="text-center bg-light"><b>FEMALE</b></th> 
                  <th  width="10%" class="text-center bg-light"><b>YEAR</b></th> 
                

           </tr> 
           
           
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('STUDENTS GRADUATED.pdf', 'I');  
 }  
 ?>  
 
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center" style="color: #6495ED;">STUDENTS GRADUATED</h3><br />  
                <div class="table-responsive ">  
                  <table class="table table-bordered table-responsive-md table-striped text-center  bg-light" style="color:#6495ED;"> 
                          <tr>  
                               <th  class="text-center">INSTITUTION</th>  
                               <th    class="text-center">OWNERSHIP</th>  
                               <th  class="text-center" >CODE</th>  
                <th class="text-center">SKILL LEVEL</th>
                  
                <th  class="text-center">MALE ADMITTED</th>  
                 <th  class="text-center">FEMALE ADMITTED</th> 
                  <th  class="text-center">YEAR</th> 
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  