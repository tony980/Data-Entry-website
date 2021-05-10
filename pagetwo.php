
<?php
    // this page outputs the contents of the textarea if posted

     // set var to avoid errors
     session_start(); // needs to be before anything else on page to use $_SESSION
    // this page outputs the textarea1 from the session IF it exists
    $date = ""; // set var to avoid errors
    if(isset($_SESSION['date'])){
        $date = $_SESSION['date'];
    }








?>




<!DOCTYPE html>
<html lang="en">
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
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>


    <style type="text/css"> 
        
      select : valid {
          color: blue;
        }

.wpfCheckboxHier option{
  color: red;
}


        .navbar-brand { 
            display: flex; 
            width: 100%; 
            justify-content: center; 
            height: auto;
        } 




        .you {
  border-style: inset;
  border-width: 7px;
  border-color: #6495ED; 
 
}



  




hr.light{
  border-top: 1px solid #d5d5d5;
  width: 100%;
  margin-bottom: 1rem;

  
}


figure {
    display: inline-block;
   
    margin: 20px; /* adjust as needed */
}
figure img {
    vertical-align: top;
   background-color: grey;
}
figure figcaption {
   
    text-align: center;
}

.img-container {
        text-align: center;
      }



.form-control::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #6495ED;
            opacity: 1; /* Firefox */
}

.form-control:-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #6495ED;
}

.form-control::-ms-input-placeholder { /* Microsoft Edge */
            color: #6495ED;
 }



 .navbar{
    padding: .8rem;
  }

.navbar-nav li{
  padding-right: 20px;
}



.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   
  margin-top: 2px;
   text-align: center;
}


    </style> 

<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" >
  <div class="container-fluid">
  
    <a class="navbar-brand" href="#"><figure>
<div class="img-container">
     <img src="logo3.jpg" height="70" width="100" alt='missing' s > </div>
      <figcaption style="color: #6495ED;"><b>REPUBLIC OF KENYA <br>MINISTRY OF LABOUR & SOCIAL PROTECTION</b></figcaption></figure></a>
   
    </div>


    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">

 <div id="accordion">
  <div class="card">
    <div class="" id="headingOne">
          <a class="nav-link" href="" style="color:#6495ED;"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><b>INFO</b></a>
          
            </div>

    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       
<a  style="color: #6495ED;">SOCIAL SECURITY HOUSE,<br>
P.O. BOX 40326 - 00100, Nairobi<br>
TELEPHONE: +2542729800, EMAIL: info@labourmarket.go.ke <br></a>
      </div>
    </div>
  </div>
         </li>
        
    </ul>
  </div>
         </li>
      </ul>


      
    </div>
  </div>
</nav>


     

   
<form action="data.php" method="post">


  <p>
        <div class="span9 btn-block">

  <a class="btn btn-large btn-block btn-primary"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   <b> CLICK FOR INSTRUCTIONS ON COMPLETING QUESTIONNAIRE</b>
  </a>
  </div>
</p>
<div class="collapse navbar-collapse" id="collapseExample">
  <div class="card card-body">
   <p style="color: #6495ED; "><i><b>  1. Fill in correct details on each space provided.<br>
   2. Proceed to the next page.</b></i></p>
  </div>
</div>



 <div class="you    bg-light" >
  <br>
   
<div class="form-group">
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">


        <label class="control-label col-xs-2" for="Instution Name"   style="color: #6495ED; font: bold;"><b>INSTITUTION:</b></label>

    </div>
    <div class="col-lg-3">
     
        <select name="you" id="Type" class="  form-control input-lg" style="width:350px; color: #6495ED; font: bold; " autocomplete="off"   >
</option>
<option style="color: #6495ED;">A C K Language & Orientation School</option>
<option style="color: #6495ED;">A.C.K. Bishop Hannington Institute of Theology and Development Studies </option>
<option style="color: #6495ED;">A.I.C. Kijabe School of Nursing</option>
<option style="color: #6495ED;">A.I.C. Nairobi Training Centre</option>
<option style="color: #6495ED;">Academy of Graphic Technologies</option>
<option style="color: #6495ED;">Academy of Professional Studies</option>
<option style="color: #6495ED;">Accurate Driving School</option>
<option style="color: #6495ED;">Achievers of Professionals School</option>
<option style="color: #6495ED;">Adams Arcade Secretarial College</option>
<option style="color: #6495ED;">Adoptive Business School</option>
<option style="color: #6495ED;">Adventist University of Africa</option>
<option style="color: #6495ED;">Advisory Centre for Overseas Education</option>
<option style="color: #6495ED;">Africa College of Social Work</option>
<option style="color: #6495ED;">Africa Institute of Experiential Education</option>
<option style="color: #6495ED;">African Institute of Development and Technology</option>
<option style="color: #6495ED;">African Institute of Research and Development Studies - </option>
<option style="color: #6495ED;">African Institute of Research and Development Studies -</option>
<option style="color: #6495ED;">African Institute of Research and Development Studies - </option>
<option style="color: #6495ED;">African Institute of Research and Development Studies - </option>
<option style="color: #6495ED;">African Institutes of Research and Development Studies - </option>
<option style="color: #6495ED;">African Institutes of Research and Development Studies - </option>
<option style="color: #6495ED;">African International College of Management and Technology</option>
<option style="color: #6495ED;">African International University</option>
<option style="color: #6495ED;">African Nazarene University</option>
<option style="color: #6495ED;">African Regional Centre for Computing</option>
<option style="color: #6495ED;">Africana Driving School</option>
<option style="color: #6495ED;">Africo Business College</option>
<option style="color: #6495ED;">Afro Beauty Academy</option>
<option style="color: #6495ED;">Aga Khan University</option>
<option style="color: #6495ED;">AIC Litein Hospital</option>
<option style="color: #6495ED;">Air Borne Aviation Institute</option>
<option style="color: #6495ED;">Air Hostess Academy Institute of Cabin Crew Training</option>
<option style="color: #6495ED;">Air Travel and Related Studies Centre</option>
<option style="color: #6495ED;">Air Travel and Tours Training College</option>
<option style="color: #6495ED;">Airways Travel Institute – Mombasa</option>
<option style="color: #6495ED;">Airways Travel Institute-Nairobi</option>
<option style="color: #6495ED;">Alison Caroline Institute</option>
<option style="color: #6495ED;">Alliance Francaise</option>
<option style="color: #6495ED;">Alphax College</option>
<option style="color: #6495ED;">Alupe University College (MU)</option>
<option style="color: #6495ED;">Amani Counselling Centre and Training Institute – Nairobi</option>
<option style="color: #6495ED;">Amani Counselling Centre and Training Institute – Nyeri</option>
<option style="color: #6495ED;">Amboseli Institute of Hospitality and Technology</option>
<option style="color: #6495ED;">Amicus Group of Schools – Nairobi</option>
<option style="color: #6495ED;">Ammarcom Computer Solutions</option>
<option style="color: #6495ED;">Andrew Crawford Media Training School</option>
<option style="color: #6495ED;">Angelic Training College</option>
<option style="color: #6495ED;">Annex Computer College</option>
<option style="color: #6495ED;">Anon Driving School</option>
<option style="color: #6495ED;">Aqua Ventures Ltd</option>
<option style="color: #6495ED;">Arena Arts Multimedia College</option>
<option style="color: #6495ED;">Ark School of Professionals</option>
<option style="color: #6495ED;">Asante College of Entrepreneurship</option>
<option style="color: #6495ED;">Ashley’s Beauty College</option>
<option style="color: #6495ED;">Associated Consulting and Training (The Act Institute)</option>
<option style="color: #6495ED;">Bamato Driving School</option>
<option style="color: #6495ED;">Bandari College</option>
<option style="color: #6495ED;">Baraka Agricultural College</option>
<option style="color: #6495ED;">Baraka Driving School</option>
<option style="color: #6495ED;">Baraton College</option>
<option style="color: #6495ED;">Baringo Teachers Training College – Seretunin</option>
<option style="color: #6495ED;">Bartek Institute</option>
<option style="color: #6495ED;">Beam International Training Centre – Kisii</option>
<option style="color: #6495ED;">Beam International Training Centre-Nairobi</option>
<option style="color: #6495ED;">Beauty Point School</option>
<option style="color: #6495ED;">Becon Bible College</option>
<option style="color: #6495ED;">Belcom Computer/ Accountancy College</option>
<option style="color: #6495ED;">Bell Institute of Technology</option>
<option style="color: #6495ED;">Bethany Christian College</option>
<option style="color: #6495ED;">Bethany Computer Training</option>
<option style="color: #6495ED;">Bible College of East Africa</option>
<option style="color: #6495ED;">Blanes College</option>
<option style="color: #6495ED;">Blanes Secretarial College</option>
<option style="color: #6495ED;">Blescohouse Teachers Training College – Nakuru</option>
<option style="color: #6495ED;">Blessed Institute of Electronic</option>
<option style="color: #6495ED;">Blue Marine Diving</option>
<option style="color: #6495ED;">Bomet College of Accountancy</option>
<option style="color: #6495ED;">Bondo Teachers Training College – Bondo</option>
<option style="color: #6495ED;">Bondo University College</option>
<option style="color: #6495ED;">Boston College</option>
<option style="color: #6495ED;">BRAEBURN COLLEGE</option>
<option style="color: #6495ED;">Braides School of Business</option>
<option style="color: #6495ED;">Breldan Consultants Computer Training College</option>
<option style="color: #6495ED;">Bridge College</option>
<option style="color: #6495ED;">Bridges Hospitality Centre</option>
<option style="color: #6495ED;">Bright Touch College</option>
<option style="color: #6495ED;">Brightwoods Institute of Accountancy</option>
<option style="color: #6495ED;">Brilliant College</option>
<option style="color: #6495ED;">Broadbase Computer School</option>
<option style="color: #6495ED;">Budget Driving School</option>
<option style="color: #6495ED;">Bungoma Teachers Training College – Bungoma</option>
<option style="color: #6495ED;">Bungoma Institute of Business & Technology</option>
<option style="color: #6495ED;">Nabongo Teachers’ Training College</option>
<option style="color: #6495ED;">West Kenya Teachers’ College</option>
<option style="color: #6495ED;">Western Teachers’ Training College</option>
<option style="color: #6495ED;">Kakamega Teachers’ Training College</option>
<option style="color: #6495ED;">Millenium Diploma Teachers Training College</option>
<option style="color: #6495ED;">Pamus Teachers’ Training College</option>
<option style="color: #6495ED;">Bungoma College of Technology</option>
<option style="color: #6495ED;">Bunks Early Childhood Education College Kenya</option>
<option style="color: #6495ED;">Bura Vocational Rehabilitation Centre</option>
<option style="color: #6495ED;">C.C.S Computer and Commercial College</option>
<option style="color: #6495ED;">C.F.K. Teachers Training College – Nairobi</option>
<option style="color: #6495ED;">Cage Driving School</option>
<option style="color: #6495ED;">Career Training Centre-Nairobi</option>
<option style="color: #6495ED;">Carlile College School of Business Studies</option>
<option style="color: #6495ED;">Carol Teachers Training College – Rongai</option>
<option style="color: #6495ED;">Carribean College of the Bible</option>
<option style="color: #6495ED;">Catholic University of Eastern Africa (CUEA)</option>
<option style="color: #6495ED;">Cedat Institute</option>
<option style="color: #6495ED;">Cefored Institute</option>
<option style="color: #6495ED;">Centre for Counselling and Life Skills Management – Thika Institute of Technology</option>
<option style="color: #6495ED;">Centre for Finance and Project Management</option>
<option style="color: #6495ED;">Centre of Professional Language</option>
<option style="color: #6495ED;">Century Park College</option>
<option style="color: #6495ED;">Ceroma Training College</option>
<option style="color: #6495ED;">Chako Training Centre</option>
<option style="color: #6495ED;">Chartered Institute of Logistics and Transport Kenya</option>
<option style="color: #6495ED;">Christ the Teacher Institute for Education – Nairobi</option>
<option style="color: #6495ED;">Christ the Teacher Institute for Education Tangaza College,</option>
<option style="color: #6495ED;">Christian Industrial Training Centre</option>
<option style="color: #6495ED;">Chuka University</option>
<option style="color: #6495ED;">City Business Training Institute</option>
<option style="color: #6495ED;">City Driving School</option>
<option style="color: #6495ED;">City Institute of Management and Accountancy</option>
<option style="color: #6495ED;">Clive School of Nursing</option>
<option style="color: #6495ED;">Coast Aviation Training Institute</option>
<option style="color: #6495ED;">Coast College of Commerce</option>
<option style="color: #6495ED;">Coast Facilitation and Psychological Counseling Centre</option>
<option style="color: #6495ED;">Coast Institute of Business Studies</option>
<option style="color: #6495ED;">College of Management Sciences</option>
<option style="color: #6495ED;">College of Tropical Medicine and Community Health – Ganjoni Hospital</option>
<option style="color: #6495ED;">Comboni Polytechnic</option>
<option style="color: #6495ED;">Common Ground Theological Institute</option>
<option style="color: #6495ED;">Compliance Institute of Professional Studies</option>
<option style="color: #6495ED;">Compuera College</option>
<option style="color: #6495ED;">Computer Aid International</option>
<option style="color: #6495ED;">Computer for School Kenya</option>
<option style="color: #6495ED;">Computer Fundamentals Institute</option>
<option style="color: #6495ED;">Computer Learning Centre</option>
<option style="color: #6495ED;">Computer Pride Learning Centre</option>
<option style="color: #6495ED;">Computer Science, Secretarial and Management Training Centre</option>
<option style="color: #6495ED;">Computer Training Centre</option>
<option style="color: #6495ED;">Computerways Computer Training Institute</option>
<option style="color: #6495ED;">Consolata College</option>
<option style="color: #6495ED;">Consolata Driving School</option>
<option style="color: #6495ED;">Consolata Hospital, Nyeri</option>
<option style="color: #6495ED;">Consolata Institute of Communication and Technology</option>
<option style="color: #6495ED;">Consolata Language Centre</option>
<option style="color: #6495ED;">Convoy Driving School</option>
<option style="color: #6495ED;">Co-operative College of Kenya</option>
<option style="color: #6495ED;">Copperbelt College</option>
<option style="color: #6495ED;">Costa Rica Driving School</option>
<option style="color: #6495ED;">Cotech Training Centre</option>
<option style="color: #6495ED;">Crown School of Business Training College</option>
<option style="color: #6495ED;">Cybeitech Training</option>
<option style="color: #6495ED;">Cyber School Technology Solutions Ltd</option>
<option style="color: #6495ED;">Dagoretti College of Catering and Institutional Management</option>
<option style="color: #6495ED;">DALC Education</option>
<option style="color: #6495ED;">Data Centre Ltd</option>
<option style="color: #6495ED;">Data Sector Ltd</option>
<option style="color: #6495ED;">Davis Computer Institute</option>
<option style="color: #6495ED;">Dawn to Dusk College</option>
<option style="color: #6495ED;">Daystar University</option>
<option style="color: #6495ED;">Dean E.C.D College</option>
<option style="color: #6495ED;">Dedan Kimathi University of Technology</option>
<option style="color: #6495ED;">DeepAfrica School</option>
<option style="color: #6495ED;">Defensive Driving Systems Ltd</option>
<option style="color: #6495ED;">Development Training Institute</option>
<option style="color: #6495ED;">Dhiirens Hair and Beauty College</option>
<option style="color: #6495ED;">Diamond Defensive Driving Academy</option>
<option style="color: #6495ED;">Diani Commercial College</option>
<option style="color: #6495ED;">Diani Marine Ltd</option>
<option style="color: #6495ED;">Dima College</option>
<option style="color: #6495ED;">Diverse ICT College Mtwapa</option>
<option style="color: #6495ED;">Diving The Crab (Blue Wave Ltd)</option>
<option style="color: #6495ED;">Dominion Computer College</option>
<option style="color: #6495ED;">Dominion Training Institute</option>
<option style="color: #6495ED;">Double Visio Driving School</option>
<option style="color: #6495ED;">Dreamline College – Nairobi</option>
<option style="color: #6495ED;">Dynamic College of Professional Studies</option>
<option style="color: #6495ED;">Dynamic Foreign Language Centre</option>
<option style="color: #6495ED;">E.L.C.K.A.T.P Technical College</option>
<option style="color: #6495ED;">Eagle College of Management and Business Studies</option>
<option style="color: #6495ED;">East Africa Institute of Certified Studies</option>
<option style="color: #6495ED;">East Africa Media Institute</option>
<option style="color: #6495ED;">East Africa School of Foreign Languages</option>
<option style="color: #6495ED;">East Africa School of Journalism</option>
<option style="color: #6495ED;">East Africa Utalii Institute</option>
<option style="color: #6495ED;">East African Center for Maritime Affairs</option>
<option style="color: #6495ED;">East African Commercial College</option>
<option style="color: #6495ED;">East African Institute of Information</option>
<option style="color: #6495ED;">East African Institute of Professional Counseling</option>
<option style="color: #6495ED;">East African School of Aviation</option>
<option style="color: #6495ED;">East African School of Foreign Languages</option>
<option style="color: #6495ED;">East African School of Journalism</option>
<option style="color: #6495ED;">East African School of Management</option>
<option style="color: #6495ED;">East African School of Media Studies-Nairobi</option>
<option style="color: #6495ED;">Eastern Computer Institute</option>
<option style="color: #6495ED;">Eastern Institute for Health Research and Training – Westlands</option>
<option style="color: #6495ED;">Easton Training Institute</option>
<option style="color: #6495ED;">Ebenezer Commercial College</option>
<option style="color: #6495ED;">Eden Driving School</option>
<option style="color: #6495ED;">Edsal College</option>
<option style="color: #6495ED;">Egerton University</option>
<option style="color: #6495ED;">Egoji Teachers Training College – Egoji</option>
<option style="color: #6495ED;">Eldo-Mwangaza Institute of Accountancy and Commercial Studies</option>
<option style="color: #6495ED;">Eldoret Aviation Training Institute</option>
<option style="color: #6495ED;">Eldoret Polytechnic</option>
<option style="color: #6495ED;">Eldoret Professional Accountancy and Computer College </option>
<option style="color: #6495ED;">Eldoret Splendid College of Computer Training</option>
<option style="color: #6495ED;">Elevate Commercial College</option>
<option style="color: #6495ED;">Elgonview College</option>
<option style="color: #6495ED;">Elite Commercial College</option>
<option style="color: #6495ED;">Embu Institute of Business Management</option>
<option style="color: #6495ED;">Embu Technical Training Institute</option>
<option style="color: #6495ED;">Embu University College (UoN)</option>
<option style="color: #6495ED;">Embu Vocational Rehabilitation Centre</option>
<option style="color: #6495ED;">EMICS Salon and College of Hairdressing and Beauty</option>
<option style="color: #6495ED;">Emmanuel Computer Academy</option>
<option style="color: #6495ED;">Emmys College of Hairdressing and Beauty Therapy</option>
<option style="color: #6495ED;">English Language Training Institute</option>
<option style="color: #6495ED;">Enjoy Driving School</option>
<option style="color: #6495ED;">Eregi Teachers Training College – Maragoli</option>
<option style="color: #6495ED;">Esmart College</option>
<option style="color: #6495ED;">Estenest College</option>
<option style="color: #6495ED;">Evangelical Bible College</option>
<option style="color: #6495ED;">Evelyn College of Design</option>
<option style="color: #6495ED;">Excel Institute of Professionals – Kiambu</option>
<option style="color: #6495ED;">Extreme School of Hair Dressing and Beauty Parlour</option>
<option style="color: #6495ED;">Felmu College</option>
<option style="color: #6495ED;">Financial Training Solutions</option>
<option style="color: #6495ED;">Focus Driving School</option>
<option style="color: #6495ED;">Foresight Institute of Logistics and Business Studies</option>
<option style="color: #6495ED;">Forr Nax Computer College</option>
<option style="color: #6495ED;">Foundation College of Professional Studies</option>
<option style="color: #6495ED;">Foundation Institute of Africa – Kisumu</option>
<option style="color: #6495ED;">Foundation Institute of Africa – Mombasa</option>
<option style="color: #6495ED;">Foundation Institute of Africa-Nairobi</option>
<option style="color: #6495ED;">Foundation Institute of Professionals</option>
<option style="color: #6495ED;">Fountain College of Business Studies</option>
<option style="color: #6495ED;">Fourth Dimension College</option>
<option style="color: #6495ED;">Frantech College</option>
<option style="color: #6495ED;">Freuki College</option>
<option style="color: #6495ED;">Friends Hospital Kaimosi</option>
<option style="color: #6495ED;">Friends university Kaimosi</option>
<option style="color: #6495ED;">Frontier Institute of Professional and Management Studies</option>
<option style="color: #6495ED;">Futurecom Institute of Professional Studies</option>
<option style="color: #6495ED;">Gakeo College of Business Studies</option>
<option style="color: #6495ED;">Garissa Commercial College</option>
<option style="color: #6495ED;">Garissa Teachers Training College – Garissa</option>
<option style="color: #6495ED;">Garissa University College (MU)</option>
<option style="color: #6495ED;">GENCO University</option>
<option style="color: #6495ED;">Generations Driving School</option>
<option style="color: #6495ED;">German Institute</option>
<option style="color: #6495ED;">German Institute of Professional Studies</option>
<option style="color: #6495ED;">Glad Toto Early Childhood Teachers Training Centre – Nairobi</option>
<option style="color: #6495ED;">Gladpoint College of Business Studies</option>
<option style="color: #6495ED;">Glamourland School of Hair Design and Beauty Therapy</option>
<option style="color: #6495ED;">Global Institute of Business Studies</option>
<option style="color: #6495ED;">Global Institute of Management and Commerce</option>
<option style="color: #6495ED;">Globeville Shanzu Beach College</option>
<option style="color: #6495ED;">Glory Commercial College</option>
<option style="color: #6495ED;">Gorgeous Looks College</option>
<option style="color: #6495ED;">Grace Bible College</option>
<option style="color: #6495ED;">Graffins College</option>
<option style="color: #6495ED;">Great Lakes University of Kisumu</option>
<option style="color: #6495ED;">Gretsa University</option>
<option style="color: #6495ED;">Hands of Love Training Centre</option>
<option style="color: #6495ED;">Hekima Education Centre</option>
<option style="color: #6495ED;">Hekima University College (CUEA)</option>
<option style="color: #6495ED;">Hemland Computer Institute</option>
<option style="color: #6495ED;">High Grade Computer College</option>
<option style="color: #6495ED;">Higher Institute of Development Studies</option>
<option style="color: #6495ED;">Hightech College of Accountancy</option>
<option style="color: #6495ED;">Hi-Tec Institute</option>
<option style="color: #6495ED;">Hi-Tec institute of Professional Studies</option>
<option style="color: #6495ED;">Holy Rosary College, Tala</option>
<option style="color: #6495ED;">Homabay District Hospital</option>
<option style="color: #6495ED;">Hope School of Professional Studies</option>
<option style="color: #6495ED;">Horizon Breeze ICT Consultancy</option>
<option style="color: #6495ED;">Hosannah institute of Professional Studies</option>
<option style="color: #6495ED;">Hospitality and Hotel Management Institute – Kilifi</option>
<option style="color: #6495ED;">ICE Training and Consultancy Ltd</option>
<option style="color: #6495ED;">ICS Training Services</option>
<option style="color: #6495ED;">I-link Institute of Development and International Management</option>
<option style="color: #6495ED;">Imara Early Childhood Development Training College</option>
<option style="color: #6495ED;">Imenti College</option>
<option style="color: #6495ED;">Impala Driving School</option>
<option style="color: #6495ED;">Imphonet Upline Technologies</option>
<option style="color: #6495ED;">Industrial Rehabilitation Centre -Nairobi</option>
<option style="color: #6495ED;">Informatics Training Centre</option>
<option style="color: #6495ED;">Infotech Training Center</option>
<option style="color: #6495ED;">Inooro University</option>
<option style="color: #6495ED;">Institute of Advanced Datalink</option>
<option style="color: #6495ED;">Institute of Advanced Technology - Mombasa</option>
<option style="color: #6495ED;">Institute of Advanced Technology - Nairobi</option>
<option style="color: #6495ED;">Institute of Applied Studies and Research</option>
<option style="color: #6495ED;">Institute of Applied Technology</option>
<option style="color: #6495ED;">Institute of Business and Professional Studies</option>
<option style="color: #6495ED;">Institute of Community Development</option>
<option style="color: #6495ED;">Institute of Computer Education</option>
<option style="color: #6495ED;">Institute of Computer Science and Technology</option>
<option style="color: #6495ED;">Institute of Human Resource Management – Nairobi</option>
<option style="color: #6495ED;">Institute of Information and Communication Technology – Machakos</option>
<option style="color: #6495ED;">Institute of Information Technology and Computer Knowledge</option>
<option style="color: #6495ED;">Institute of Information Technology Studies and Research</option>
<option style="color: #6495ED;">Institute of Logistics and Supply Chain Management</option>
<option style="color: #6495ED;">Institute of Media and Technology</option>
<option style="color: #6495ED;">Institute of Software Technologies</option>
<option style="color: #6495ED;">Institute of Trade Development</option>
<option style="color: #6495ED;">Institute of Visual Communication Design</option>
<option style="color: #6495ED;">Integrity School of Management</option>
<option style="color: #6495ED;">Intel College</option>
<option style="color: #6495ED;">Intercontinental Aviation Institute & Related Studies</option>
<option style="color: #6495ED;">International Centre for Tourism and Foreign Languages</option>
<option style="color: #6495ED;">International College of Professionals</option>
<option style="color: #6495ED;">International Leadership University</option>
<option style="color: #6495ED;">International Montessori School – Nairobi</option>
<option style="color: #6495ED;">International School of Medicine and Applied Technology</option>
<option style="color: #6495ED;">International Teachers Training College – Nairobi</option>
<option style="color: #6495ED;">International Teachers’ and Training Centre</option>
<option style="color: #6495ED;">Interstate College of IT and Business Studies</option>
<option style="color: #6495ED;">Interworld College</option>
<option style="color: #6495ED;">Intraglobal Training Institute</option>
<option style="color: #6495ED;">Intraglobal Training Institute – Embu</option>
<option style="color: #6495ED;">Intraglobal Training Institute – Kisii</option>
<option style="color: #6495ED;">Intraglobal Training institute – Kisumu</option>
<option style="color: #6495ED;">Intraglobal Training Institute – Nakuru Town</option>
<option style="color: #6495ED;">Isiolo District Hospital</option>
<option style="color: #6495ED;">Islamic Teachers’ Training College – Maragua</option>
<option style="color: #6495ED;">Italian Institute of Culture Nairobi</option>
<option style="color: #6495ED;">Itando Vocational Rehabilitation Centre</option>
<option style="color: #6495ED;">Iten District Hospital</option>
<option style="color: #6495ED;">Jackson and Associates Banking and Business School</option>
<option style="color: #6495ED;">Jaffery Institute of Professional Studies</option>
<option style="color: #6495ED;">Jamia Training Institute</option>
<option style="color: #6495ED;">Japan Africa Culture Interchange Institute</option>
<option style="color: #6495ED;">Jaramogi Oginga Odinga Teaching and Referral Hospital</option>
<option style="color: #6495ED;">Jaramogi Oginga Odinga University of Science and Technology</option>
<option style="color: #6495ED;">Jasmine School of Catering</option>
<option style="color: #6495ED;">Jerusa Teachers Training College, Jttc – Butere – Kakamega</option>
<option style="color: #6495ED;">Jodan College of Technology</option>
<option style="color: #6495ED;">Jogoo Commercial College</option>
<option style="color: #6495ED;">Jomaken ECD Pre-Primary Teachers Training Programme & Care Centre – Nairobi</option>
<option style="color: #6495ED;">Jomo Kenyatta University of Agriculture and Technology</option>
<option style="color: #6495ED;">Jomo Kenyatta University of Agriculture and Technology (JKUAT)</option>
<option style="color: #6495ED;">Joo’s School of IT and Management Studies</option>
<option style="color: #6495ED;">Josneb Commercial College</option>
<option style="color: #6495ED;">Joyce Haji College</option>
<option style="color: #6495ED;">Joyka College</option>
<option style="color: #6495ED;">Jusnet Business Institute</option>
<option style="color: #6495ED;">Kaanan International College</option>
<option style="color: #6495ED;">Kabarak University</option>
<option style="color: #6495ED;">Kabarnet District Hospital</option>
<option style="color: #6495ED;">Kabarnet Vocational Rehabilitation Centre</option>
<option style="color: #6495ED;">Kabianga University College</option>
<option style="color: #6495ED;">KAG - EAST University</option>
<option style="color: #6495ED;">Kagumo Ngandu Commercial College</option>
<option style="color: #6495ED;">Kahawa Training College</option>
<option style="color: #6495ED;">Kaimosi Teachers Training College – Kaimosi</option>
<option style="color: #6495ED;">Kajiado District Hospital</option>
<option style="color: #6495ED;">Kakamega Provincial General Hospital</option>
<option style="color: #6495ED;">Kakamega Vocational Rehabilitation Centre</option>
<option style="color: #6495ED;">KAM School of Health and Beauty</option>
<option style="color: #6495ED;">Kamagambo Adventist College</option>
<option style="color: #6495ED;">Kamagambo Adventist Teachers’ Training College – Kisii</option>
<option style="color: #6495ED;">Kamata School of Music</option>
<option style="color: #6495ED;">Kamwenja Teachers Training College – Nyeri</option>
<option style="color: #6495ED;">Kanaani Technical and Computer College</option>
<option style="color: #6495ED;">Kangundo District Hospital</option>
<option style="color: #6495ED;">Kapenguria District Hospital</option>
<option style="color: #6495ED;">Kapkatet District Hospital</option>
<option style="color: #6495ED;">Kapsabet District Hospital</option>
<option style="color: #6495ED;">Karatina Business College</option>
<option style="color: #6495ED;">Karatina District Hospital</option>
<option style="color: #6495ED;">Karatina University</option>
<option style="color: #6495ED;">Karen Christian College</option>
<option style="color: #6495ED;">Karen International College</option>
<option style="color: #6495ED;">Karengata Driving School</option>
<option style="color: #6495ED;">Katoloni Technical Training College</option>
<option style="color: #6495ED;">KCA University</option>
<option style="color: #6495ED;">KCB Management Centre</option>
<option style="color: #6495ED;">Kenafric College of Professional Studies</option>
<option style="color: #6495ED;">Kendu Adventist Hospital</option>
<option style="color: #6495ED;">Kenya Baptist Theological College</option>
<option style="color: #6495ED;">Kenya Christian Industrial Training Institute</option>
<option style="color: #6495ED;">Kenya College of Management and Information Technology</option>
<option style="color: #6495ED;">Kenya Education Staff Institute – Nairobi</option>
<option style="color: #6495ED;">Kenya Highlands Evangelical University</option>
<option style="color: #6495ED;">Kenya Institute of Advanced Driving</option>
<option style="color: #6495ED;">Kenya Institute of Applied Sciences</option>
<option style="color: #6495ED;">Kenya Institute of Bankers</option>
<option style="color: #6495ED;">Kenya Institute of Biomedical Sciences and Technology</option>
<option style="color: #6495ED;">Kenya Institute of Business Training</option>
<option style="color: #6495ED;">Kenya Institute of Cargo Forwarders</option>
<option style="color: #6495ED;">Kenya Institute of Computer Studies</option>
<option style="color: #6495ED;">Kenya Institute of Development Studies</option>
<option style="color: #6495ED;">Kenya Institute of Electronics and Technology</option>
<option style="color: #6495ED;">Kenya Institute of Entrepreneurship and Related Studies</option>
<option style="color: #6495ED;">Kenya Institute of Entrepreneurship Development</option>
<option style="color: #6495ED;">Kenya Institute of Finance and Applied Management</option>
<option style="color: #6495ED;">Kenya Institute of Foreign Languages and Professional Studies</option>
<option style="color: #6495ED;">Kenya Institute of Hospitality Studies</option>
<option style="color: #6495ED;">Kenya Institute Of Management</option>
<option style="color: #6495ED;">Kenya Institute of Management – Nyeri</option>
<option style="color: #6495ED;">Kenya Institute of Management and Technology</option>
<option style="color: #6495ED;">Kenya Institute of Media and Technology</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counseling - Kisii</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counseling - Nairobi</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counseling - Nakuru</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counseling - Nyandarua</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counseling - Nyeri</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counseling - Uasin Gishu</option>
<option style="color: #6495ED;">Kenya institute of Professional Counseling - Wajir</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counselling - Bomet</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counselling - Bungoma</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counselling - Kakamega</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counselling - Kericho</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counselling - Kiambu</option>
<option style="color: #6495ED;">Kenya Institute of Professional Counselling - Machakos</option>
<option style="color: #6495ED;">Kenya Institute of Professional Studies</option>
<option style="color: #6495ED;">Kenya institute of project management</option>
<option style="color: #6495ED;">Kenya Institute of Social Work</option>
<option style="color: #6495ED;">Kenya Institute of Special Education</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Bomet</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Bungoma</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Embu</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Garissa</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Kakamega</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Kericho</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Kiambu</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Kisii</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Kisumu</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Machakos</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Meru</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Mombasa</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Nairobi</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Nakuru</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Nyeri</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Taveta Town</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Uasin Gishu</option>
<option style="color: #6495ED;">Kenya Institute of Studies in Criminal Justice - Voi Town</option>
<option style="color: #6495ED;">Kenya Institute of Surveying and Mapping</option>
<option style="color: #6495ED;">Kenya International Institute of Business Studies</option>
<option style="color: #6495ED;">Kenya Methodist University</option>
<option style="color: #6495ED;">Kenya Methodist University – Medical School</option>
<option style="color: #6495ED;">Kenya School of Credit Management</option>
<option style="color: #6495ED;">Kenya School of Flying</option>
<option style="color: #6495ED;">Kenya School of Law</option>
<option style="color: #6495ED;">Kenya School of Medical Science and Technology</option>
<option style="color: #6495ED;">Kenya School of Professional Studies</option>
<option style="color: #6495ED;">Kenya School of Technology Studies</option>
<option style="color: #6495ED;">Kenya Science Teachers College – Nairobi</option>
<option style="color: #6495ED;">Kenya Technical Teachers College – KTTC</option>
<option style="color: #6495ED;">Kenya Water Institute</option>
<option style="color: #6495ED;">Kenyatta National Hospital</option>
<option style="color: #6495ED;">Kenyatta University</option>
<option style="color: #6495ED;">Kenyatta University (KU)</option>
<option style="color: #6495ED;">Kericho Teachers Training College – Kericho</option>
<option style="color: #6495ED;">Kericho Technical Institute</option>
<option style="color: #6495ED;">Kericho Vocational Rehabilitation Centre</option>
<option style="color: #6495ED;">Keroka College of Accountancy</option>
<option style="color: #6495ED;">Kerugoya District Hospital</option>
<option style="color: #6495ED;">Kiambu District Hospital</option>
<option style="color: #6495ED;">Kiambu Institute of Business Studies</option>
<option style="color: #6495ED;">Kiambu Institute of Computers and Engineering</option>
<option style="color: #6495ED;">Kiambu Institute of Science and Technology</option>
<option style="color: #6495ED;">Kiamosi Friends University College (MMUST)</option>
<option style="color: #6495ED;">Kibabi Teachers Training College – Bumgoma</option>
<option style="color: #6495ED;">Kibabii University</option>
<option style="color: #6495ED;">Kifu School of Business Studies</option>
<option style="color: #6495ED;">Kijabe Hospital School of Nursing</option>
<option style="color: #6495ED;">Kikuyu College of Accountancy and Information Technology</option>
<option style="color: #6495ED;">Kikuyu Commercial College</option>
<option style="color: #6495ED;">Kilifi District Hospital</option>
<option style="color: #6495ED;">Kilifi Institute of Business</option>
<option style="color: #6495ED;">Kilimambogo Teachers Training College – Thika</option>
<option style="color: #6495ED;">KIMA International School of Theology – Siaya</option>
<option style="color: #6495ED;">KIMA International School of Theology – Vihiga</option>
<option style="color: #6495ED;">Kimathi University College of Technology</option>
<option style="color: #6495ED;">Kinango Driving School</option>
<option style="color: #6495ED;">Kinetic Institute of Business Management</option>
<option style="color: #6495ED;">Kings Medical College</option>
<option style="color: #6495ED;">Kinyanjui Technical Training Institute</option>
<option style="color: #6495ED;">Kirinyaga School of Professional Studies</option>
<option style="color: #6495ED;">Kirinyaga University College (JKUAT)</option>
<option style="color: #6495ED;">Kiriri Women’s University of Science and Technology</option>
<option style="color: #6495ED;">Kiriri Women's University of Science and Technology</option>
<option style="color: #6495ED;">Kisauni Youth Polytechnic</option>
<option style="color: #6495ED;">Kisii College of Accountancy</option>
<option style="color: #6495ED;">Kisii College of Professional Studies</option>
<option style="color: #6495ED;">Kisii Level 5 Hospital</option>
<option style="color: #6495ED;">Kisii University College</option>
<option style="color: #6495ED;">Kisii Vocational Rehabilitation Centre</option>
<option style="color: #6495ED;">Kisumu Business College</option>
<option style="color: #6495ED;">Kisumu District Hospital</option>
<option style="color: #6495ED;">Kisumu Polytechnic</option>
<option style="color: #6495ED;">Kitale District Hospital</option>
<option style="color: #6495ED;">Kitale Technical Training Institute</option>
<option style="color: #6495ED;">Kithimani Integrated Teachers College – Kithimani</option>
<option style="color: #6495ED;">Kitui District Hospital</option>
<option style="color: #6495ED;">Kobujoi Development Training Institute</option>
<option style="color: #6495ED;">KTI Institute</option>
<option style="color: #6495ED;">La Contessa College</option>
<option style="color: #6495ED;">Laikipia University</option>
<option style="color: #6495ED;">Laikipia University College</option>
<option style="color: #6495ED;">Lake Institute of Tropical Medicine</option>
<option style="color: #6495ED;">Lake Nakuru Hotel and Ecotourism Management</option>
<option style="color: #6495ED;">Language Center Ltd, The</option>
<option style="color: #6495ED;">Language Connections Centre</option>
<option style="color: #6495ED;">Leaders Institute of Business Studies</option>
<option style="color: #6495ED;">Legacy College of Business Studies</option>
<option style="color: #6495ED;">Legacy Institute of Social Work and Community Development</option>
<option style="color: #6495ED;">Lematon Computer Training Centre</option>
<option style="color: #6495ED;">Lidas Driving School</option>
<option style="color: #6495ED;">Likoni Community Technical Centre</option>
<option style="color: #6495ED;">Link-up Institute</option>
<option style="color: #6495ED;">Lio School of Computer Studies</option>
<option style="color: #6495ED;">Lolaz Communication Institute</option>
<option style="color: #6495ED;">Lukenya University</option>
<option style="color: #6495ED;">Maasai Teachers’ College – Karen</option>
<option style="color: #6495ED;">Mabati Technical Training Institute</option>
<option style="color: #6495ED;">Machakos Institute of Development Studies</option>
<option style="color: #6495ED;">Machakos Institute of Technology</option>
<option style="color: #6495ED;">Machakos Level 5 Hospital</option>
<option style="color: #6495ED;">Machakos Medical and Technical Training College</option>
<option style="color: #6495ED;">Machakos Teachers Training College – Machakos</option>
<option style="color: #6495ED;">Machakos Technical Institute for the Blind</option>
<option style="color: #6495ED;">Machakos University College (KU)</option>
<option style="color: #6495ED;">Machakos Vocational Rehabilitation Centre</option>
<option style="color: #6495ED;">Magan College</option>
<option style="color: #6495ED;">Magenta Training Institute</option>
<option style="color: #6495ED;">Makini College</option>
<option style="color: #6495ED;">Makueni District Hospital</option>
<option style="color: #6495ED;">Malezi College</option>
<option style="color: #6495ED;">Malindi District Hospital</option>
<option style="color: #6495ED;">Malindi Language Centre</option>
<option style="color: #6495ED;">Mama Lucy Kibaki Hospital</option>
<option style="color: #6495ED;">Management University of East Africa</option>
<option style="color: #6495ED;">Manna Bible Institute and School of Missions</option>
<option style="color: #6495ED;">Maragua District Hospital</option>
<option style="color: #6495ED;">Maragua Teachers Training College – Muranga</option>
<option style="color: #6495ED;">Maranatha College of Professional Studies</option>
<option style="color: #6495ED;">Marcs Driving School</option>
<option style="color: #6495ED;">Mariakani Youth Polytechnic</option>
<option style="color: #6495ED;">Marist International College</option>
<option style="color: #6495ED;">Marist International University College (CUEA)</option>
<option style="color: #6495ED;">Maritime and Management Institute of East Africa</option>
<option style="color: #6495ED;">Masai Mara University</option>
<option style="color: #6495ED;">Masai Teachers’ Training College</option>
<option style="color: #6495ED;">Masai Technical Training Institute</option>
<option style="color: #6495ED;">Maseno University</option>
<option style="color: #6495ED;">Maseno University – Medical School</option>
<option style="color: #6495ED;">Masinde Muliro University of Science and Technology (MMUST)</option>
<option style="color: #6495ED;">Mathenge Technical Institute</option>
<option style="color: #6495ED;">Maua Methodist Hospital</option>
<option style="color: #6495ED;">Mawego Technical Training Institute</option>
<option style="color: #6495ED;">Mbagathi District Hospital</option>
<option style="color: #6495ED;">Mbaya Karichu Institute</option>
<option style="color: #6495ED;">Media School Africa</option>
<option style="color: #6495ED;">Medical Schools In Kenya – Approved Internship Training Centres</option>
<option style="color: #6495ED;">Memon College</option>
<option style="color: #6495ED;">Menengai Medical Training College</option>
<option style="color: #6495ED;">Merit Institute of Business and Applied Technology</option>
<option style="color: #6495ED;">Meru District Hospital</option>
<option style="color: #6495ED;">Meru Teachers Training College – Meru</option>
<option style="color: #6495ED;">Meru Technical Training Institute</option>
<option style="color: #6495ED;">Meru University of Science and Technology</option>
<option style="color: #6495ED;">Mesburn Institute</option>
<option style="color: #6495ED;">Metropolitan Group of Colleges</option>
<option style="color: #6495ED;">Michuki Technical Training Institute</option>
<option style="color: #6495ED;">Microchip Secretarial Services</option>
<option style="color: #6495ED;">Microhouse Institute of Information Technology</option>
<option style="color: #6495ED;">Midlands Driving School</option>
<option style="color: #6495ED;">Migori Bible Training Centre</option>
<option style="color: #6495ED;">Migori District Hospital</option>
<option style="color: #6495ED;">Migori Institute of Medical Science and Technology</option>
<option style="color: #6495ED;">Migori School of Guidance and Counselling</option>
<option style="color: #6495ED;">Migori Teachers Training College – Migori</option>
<option style="color: #6495ED;">Millennium Global Education Services</option>
<option style="color: #6495ED;">Mkwajuni Youth Polytechnic</option>
<option style="color: #6495ED;">Modia Driving School</option>
<option style="color: #6495ED;">Moi Hospital – Voi</option>
<option style="color: #6495ED;">Moi Teaching & Referral Hospital</option>
<option style="color: #6495ED;">Moi Teaching and Referral Hospital</option>
<option style="color: #6495ED;">Moi University – Dental School</option>
<option style="color: #6495ED;">Moi University (MU)</option>
<option style="color: #6495ED;">Moi University School of Dentistry</option>
<option style="color: #6495ED;">Moi-Baringo Teachers College – Kabarnet</option>
<option style="color: #6495ED;">Mombasa Aviation Training Institute</option>
<option style="color: #6495ED;">Mombasa College of Business and Related Studies</option>
<option style="color: #6495ED;">Mombasa College of Professional Studies</option>
<option style="color: #6495ED;">Mombasa College of Tourism and Business Studies</option>
<option style="color: #6495ED;">Mombasa Management and Technical Training Centre</option>
<option style="color: #6495ED;">MOMBASA POLYTECHNIC</option>
<option style="color: #6495ED;">Mombasa Polytechnic University College</option>
<option style="color: #6495ED;">Mombasa School of Accountancy</option>
<option style="color: #6495ED;">Mombasa Technical Training Institute (MTTI)</option>
<option style="color: #6495ED;">Mosoriot Teachers Training College – Mosoriot</option>
<option style="color: #6495ED;">Mounain View College of Hotel and Hairdressing</option>
<option style="color: #6495ED;">Mount Kenya University</option>
<option style="color: #6495ED;">Mount Kenya University </option>
<option style="color: #6495ED;">Mountain Top Hotel and Travel Institute</option>
<option style="color: #6495ED;">Mountain Top Institute</option>
<option style="color: #6495ED;">Msambweni District Hospital</option>
<option style="color: #6495ED;">Mukurweini District Hospital</option>
<option style="color: #6495ED;">Multi Media Business College</option>
<option style="color: #6495ED;">Multimedia University</option>
<option style="color: #6495ED;">Multimedia University of Kenya</option>
<option style="color: #6495ED;">Mumbuni Engineering and Driving School</option>
<option style="color: #6495ED;">Murang’a District Hospital</option>
<option style="color: #6495ED;">Murang’a Technical Institute</option>
<option style="color: #6495ED;">Muranga Teachers Training College – Makuyu</option>
<option style="color: #6495ED;">Muranga Technical Institute</option>
<option style="color: #6495ED;">Murang'a University College (JKUAT)</option>
<option style="color: #6495ED;">Muriranjas Vocational Rehabilitation Centre</option>
<option style="color: #6495ED;">Mwalimu Technical College and Driving School</option>
<option style="color: #6495ED;">Mwangaza Nakuru College</option>
<option style="color: #6495ED;">Mwingi District Hospital</option>
<option style="color: #6495ED;">Nairobi Aviation College</option>
<option style="color: #6495ED;">Nairobi Aviation College – Kisumu</option>
<option style="color: #6495ED;">Nairobi Aviation College – Kitale</option>
<option style="color: #6495ED;">Nairobi Aviation College – Uasin Gishu</option>
<option style="color: #6495ED;">Nairobi Aviation Institute</option>
<option style="color: #6495ED;">Nairobi College of Bread and Confectionery Technology</option>
<option style="color: #6495ED;">Nairobi Evangelical School of Theology (NEGST)</option>
<option style="color: #6495ED;">Nairobi Hospital Cicely Macdonald School of Nursing</option>
<option style="color: #6495ED;">Nairobi Institute of Computer Science</option>
<option style="color: #6495ED;">Nairobi Institute of Swahili & East African Culture</option>
<option style="color: #6495ED;">Nairobi North Polytechnic</option>
<option style="color: #6495ED;">Nairobi Sailing & Sub Aqua Club</option>
<option style="color: #6495ED;">Nairobi Technical Training Institute</option>
<option style="color: #6495ED;">Naitiri Commercial and Technical College</option>
<option style="color: #6495ED;">Naivasha District Hospital</option>
<option style="color: #6495ED;">Nakuru College of Health Sciences</option>
<option style="color: #6495ED;">Nakuru Institute of Medical Sciences and Management</option>
<option style="color: #6495ED;">Nakuru Provincial</option>
<option style="color: #6495ED;">Nakuru Teachers Training College – Nakuru</option>
<option style="color: #6495ED;">Nanyuki District Hospital</option>
<option style="color: #6495ED;">Narok District Hospital</option>
<option style="color: #6495ED;">Narok Teachers Training College – Narok</option>
<option style="color: #6495ED;">Nazareth Medical College</option>
<option style="color: #6495ED;">Nazareth Mission Hospital</option>
<option style="color: #6495ED;">Neet Training College</option>
<option style="color: #6495ED;">Nehema Institute of Science and Technology – Bungoma</option>
<option style="color: #6495ED;">Nehema Institute of Science and Technology – Uasin Gishu</option>
<option style="color: #6495ED;">Nelson’s Banking and Business Institute</option>
<option style="color: #6495ED;">Neptune Driving School</option>
<option style="color: #6495ED;">New Horizons Computer Learning Centre</option>
<option style="color: #6495ED;">NIBS College – Nairobi Institute of Business Studies</option>
<option style="color: #6495ED;">Ninety-Nine Flying School</option>
<option style="color: #6495ED;">North Eastern Province Technical Training Institute</option>
<option style="color: #6495ED;">North Kinangop Catholic Hospital</option>
<option style="color: #6495ED;">Nyahururu District Hospital</option>
<option style="color: #6495ED;">Nyamira District Hospital</option>
<option style="color: #6495ED;">Nyanchwa Adventist College</option>
<option style="color: #6495ED;">Nyanchwa Teachers Training College – Kisii</option>
<option style="color: #6495ED;">Nyandarua Vocational Rehabilitation Centre</option>
<option style="color: #6495ED;">Nyeri Catholic (ECDE TTC) – Nyeri</option>
<option style="color: #6495ED;">Nyeri County General Hospital</option>
<option style="color: #6495ED;">Nyeri Institute of Computer Studies</option>
<option style="color: #6495ED;">Nyeri Provincial General Hospital</option>
<option style="color: #6495ED;">Nyeri Sterling Computers College</option>
<option style="color: #6495ED;">Nyeri Technical Training Institute</option>
<option style="color: #6495ED;">Oasis Africa Institute of Professional Counselling and Psychology</option>
<option style="color: #6495ED;">Odiado Vocational Rehabilitation Centre</option>
<option style="color: #6495ED;">Ol Kalou District Hospital</option>
<option style="color: #6495ED;">Omni-Tech Computer Services</option>
<option style="color: #6495ED;">Orbit school of management studies</option>
<option style="color: #6495ED;">Orthodox Teachers Training College of Africa – Nairobi</option>
<option style="color: #6495ED;">Oshwal College</option>
<option style="color: #6495ED;">Our Lady of Lourdes Mwea Hospital</option>
<option style="color: #6495ED;">Our lady of lourdes school of nursing</option>
<option style="color: #6495ED;">Outspan college</option>
<option style="color: #6495ED;">Outspan Medical College – Nyeri Town</option>
<option style="color: #6495ED;">Outspan Medical College – P.C.E.A. Tumutumu Hospital</option>
<option style="color: #6495ED;">Overcomers Commercial College</option>
<option style="color: #6495ED;">P.C.E.A. Tumutumu Hospital</option>
<option style="color: #6495ED;">Pago Airways Travel Services and Training Institute</option>
<option style="color: #6495ED;">Palmax College</option>
<option style="color: #6495ED;">Pan African Christian University</option>
<option style="color: #6495ED;">Pan African School of Theology (PAST)</option>
<option style="color: #6495ED;">Paradise Divers Ltd</option>
<option style="color: #6495ED;">Parapet Hospitality and Business Institute</option>
<option style="color: #6495ED;">Patana Institute</option>
<option style="color: #6495ED;">PATH Institute of Technology and Entrepreneurship</option>
<option style="color: #6495ED;">PCEA Chogoria Hospital</option>
<option style="color: #6495ED;">PCEA Kikuyu Hospital</option>
<option style="color: #6495ED;">PCEA Tumutumu Hospital</option>
<option style="color: #6495ED;">Pearl School of Hair and Beauty</option>
<option style="color: #6495ED;">Personal Care Institute</option>
<option style="color: #6495ED;">Petanns Driving School Computer College</option>
<option style="color: #6495ED;">Phillips Business Training College</option>
<option style="color: #6495ED;">Phoenix Aviation</option>
<option style="color: #6495ED;">Pinnacle Business School</option>
<option style="color: #6495ED;">Pinnacle College of Professional Studies</option>
<option style="color: #6495ED;">Pinnacle School of Business</option>
<option style="color: #6495ED;">Pioneer International College</option>
<option style="color: #6495ED;">Pioneer International University</option>
<option style="color: #6495ED;">Pivot Point Hair Design and Beauty School</option>
<option style="color: #6495ED;">Pivot Point International School</option>
<option style="color: #6495ED;">Platinum College Of Actuarial Science</option>
<option style="color: #6495ED;">Posco Executive College</option>
<option style="color: #6495ED;">Posh Institute</option>
<option style="color: #6495ED;">Premese Africa Development Institute</option>
<option style="color: #6495ED;">Premese Montessori – Nairobi</option>
<option style="color: #6495ED;">Premier Institute of Hospitality and Business Studies</option>
<option style="color: #6495ED;">Premier Institute of Professional Studies Ltd</option>
<option style="color: #6495ED;">Presbyterian University of East Africa</option>
<option style="color: #6495ED;">Prestige Global Language Center</option>
<option style="color: #6495ED;">Project Management Institute</option>
<option style="color: #6495ED;">Prosperity Driving School</option>
<option style="color: #6495ED;">Pulp College of Accountancy</option>
<option style="color: #6495ED;">Pwani Training Institute</option>
<option style="color: #6495ED;">Pwani University College</option>
<option style="color: #6495ED;">Pwani Vocational College</option>
<option style="color: #6495ED;">Queen’s Park College of Hair Dressing</option>
<option style="color: #6495ED;">Queensway Secretarial College</option>
<option style="color: #6495ED;">Rahabel College</option>
<option style="color: #6495ED;">Real Music House Ltd</option>
<option style="color: #6495ED;">Redeemed Bible Seminary An African Campus of Vision International University</option>
<option style="color: #6495ED;">Reeswood Secretarial College</option>
<option style="color: #6495ED;">Regency Beauty College</option>
<option style="color: #6495ED;">Regina Pacis University College (CUEA)</option>
<option style="color: #6495ED;">Regional Aviation Training Institute</option>
<option style="color: #6495ED;">Regional Center For Tourism and Foreign Languages</option>
<option style="color: #6495ED;">Regional Centre for Mapping of Resources for Development Information    Technology Training Centre</option>
<option style="color: #6495ED;">Regional Centre for Tourism and Foreign Languages</option>
<option style="color: #6495ED;">Regional Institute of Business Management</option>
<option style="color: #6495ED;">Reward Institute of Professional Studies</option>
<option style="color: #6495ED;">Rewarding College</option>
<option style="color: #6495ED;">Rewards Institute of Professional Studies</option>
<option style="color: #6495ED;">Riara University</option>
<option style="color: #6495ED;">Riccatti Business College of East Africa</option>
<option style="color: #6495ED;">Rifkins Business College</option>
<option style="color: #6495ED;">Rift Valley County Provincial Hospital</option>
<option style="color: #6495ED;">Rift Valley Institute of Development Studies</option>
<option style="color: #6495ED;">Rift Valley Technical Training Institute</option>
<option style="color: #6495ED;">Rizfar Hair College and Salon Ltd</option>
<option style="color: #6495ED;">Road Skills Driving School</option>
<option style="color: #6495ED;">Robin Institute of Business Studies</option>
<option style="color: #6495ED;">Rochester Business School</option>
<option style="color: #6495ED;">Rocky Computer College</option>
<option style="color: #6495ED;">Rocky Driving School</option>
<option style="color: #6495ED;">Rolima Training Institute</option>
<option style="color: #6495ED;">Rongo University College</option>
<option style="color: #6495ED;">Rongo University College (MU)</option>
<option style="color: #6495ED;">Rosetta Business College</option>
<option style="color: #6495ED;">Royal Automobile Club (RAC) Kenya</option>
<option style="color: #6495ED;">Royal Beauty College</option>
<option style="color: #6495ED;">Royal Business School</option>
<option style="color: #6495ED;">Royal College of Science and Technology</option>
<option style="color: #6495ED;">Ruiru College of Catering and Management Studies</option>
<option style="color: #6495ED;">Rural Aid Kenya Training Institute</option>
<option style="color: #6495ED;">Sacred Training Institute-Bungoma</option>
<option style="color: #6495ED;">Sacred Training Institute-Nairobi</option>
<option style="color: #6495ED;">Safeworld information and Technical Institute</option>
<option style="color: #6495ED;">Sagana Technical Training Institute</option>
<option style="color: #6495ED;">Sairene Travel Operations College</option>
<option style="color: #6495ED;">School of Petroleum Studies</option>
<option style="color: #6495ED;">Scott Christian University</option>
<option style="color: #6495ED;">Scuba Diving Watamu Ltd</option>
<option style="color: #6495ED;">Sea World East Africa Ltd</option>
<option style="color: #6495ED;">Selika Driving School</option>
<option style="color: #6495ED;">Senior Driving School</option>
<option style="color: #6495ED;">Seniors Driving School Ltd</option>
<option style="color: #6495ED;">Serengeti Institute – Thika</option>
<option style="color: #6495ED;">Shanzu Teachers Traning College – Mombasa</option>
<option style="color: #6495ED;">Sheer Logic Computer Training Centre</option>
<option style="color: #6495ED;">Shepherds Foundation Education and Research Centre</option>
<option style="color: #6495ED;">Shields Institute of Commerce and Marketing</option>
<option style="color: #6495ED;">Shilrey’s International Hair and Beauty College</option>
<option style="color: #6495ED;">Shujaa Training Institute of Development Studies</option>
<option style="color: #6495ED;">Siaya District Hospital</option>
<option style="color: #6495ED;">Sigalagala Technical Training Institute</option>
<option style="color: #6495ED;">Simplified Language Services</option>
<option style="color: #6495ED;">Skynet Business School</option>
<option style="color: #6495ED;">Skytech Aviation College International</option>
<option style="color: #6495ED;">Smart Media Colleges</option>
<option style="color: #6495ED;">Sontana Computer College</option>
<option style="color: #6495ED;">Sotemi Business Centre</option>
<option style="color: #6495ED;">South Eastern Kenya University</option>
<option style="color: #6495ED;">Southern College – Collegedale TN</option>
<option style="color: #6495ED;">Special Education & Professional Studies College – Nairobi</option>
<option style="color: #6495ED;">St Mary’s School of Clinical Medicine</option>
<option style="color: #6495ED;">St Paul;s University</option>
<option style="color: #6495ED;">St. Andrew’s College of Theology</option>
<option style="color: #6495ED;">St. Ann’s ECD Teachers College – Kisii</option>
<option style="color: #6495ED;">St. Anne’s College</option>
<option style="color: #6495ED;">St. Austin’s Teachers Training College – Ishiara</option>
<option style="color: #6495ED;">St. Francis Institute of Science and Technology</option>
<option style="color: #6495ED;">St. Francis Techinical Training Institute – Asumbi</option>
<option style="color: #6495ED;">St. John’s Community Centre College</option>
<option style="color: #6495ED;">St. John’s Riruta Computer College</option>
<option style="color: #6495ED;">St. John’s Teachers Training College – Thika</option>
<option style="color: #6495ED;">St. Kizito Vocational Training Institute</option>
<option style="color: #6495ED;">St. Martin De Porres Teachers College – Kiserian</option>
<option style="color: #6495ED;">St. Mary Computer College</option>
<option style="color: #6495ED;">St. Paul’s Nyabururu Teachers Training College – Kisii</option>
<option style="color: #6495ED;">St. Paul’s United Theological College</option>
<option style="color: #6495ED;">St. Theresa’s Commercial College</option>
<option style="color: #6495ED;">Stanley Mathenge Youth Politechnic</option>
<option style="color: #6495ED;">Star College of Management Studies</option>
<option style="color: #6495ED;">Star Media Institute</option>
<option style="color: #6495ED;">Star Technical Institute</option>
<option style="color: #6495ED;">Stonebic College</option>
<option style="color: #6495ED;">Strathmore University</option>
<option style="color: #6495ED;">Strive and Excell Commercial College</option>
<option style="color: #6495ED;">Success Professional Institute</option>
<option style="color: #6495ED;">Summit Institute of Professionals</option>
<option style="color: #6495ED;">Sunrise Teachers College – Athi River</option>
<option style="color: #6495ED;">Superior Commercial and Secretarial College</option>
<option style="color: #6495ED;">Suwon Christian College</option>
<option style="color: #6495ED;">Swiss Management Academy</option>
<option style="color: #6495ED;">Sydney Driving School</option>
<option style="color: #6495ED;">T.E.S. College</option>
<option style="color: #6495ED;">Taita Taveta University College (JKUAT)</option>
<option style="color: #6495ED;">Tala School of Management Studies</option>
<option style="color: #6495ED;">Tangaza College</option>
<option style="color: #6495ED;">Tanya Centre</option>
<option style="color: #6495ED;">TEC Institute of Management – Machakos</option>
<option style="color: #6495ED;">Tec institute of Management-Nairobi</option>
<option style="color: #6495ED;">Tec Teachers Training Institute – Nairobi</option>
<option style="color: #6495ED;">Technical Education Centre</option>
<option style="color: #6495ED;">Technical Institute</option>
<option style="color: #6495ED;">Technical University of Kenya</option>
<option style="color: #6495ED;">Technical University of Mombasa</option>
<option style="color: #6495ED;">Techno Brain (K) Ltd</option>
<option style="color: #6495ED;">Technosoft Computer Training Centre</option>
<option style="color: #6495ED;">Tenwek Mission Hospital</option>
<option style="color: #6495ED;">The Aviation College</option>
<option style="color: #6495ED;">The Catholic University of Eastern Africa (CUEA)</option>
<option style="color: #6495ED;">The Co-operative University College (JKUAT)</option>
<option style="color: #6495ED;">The East African University</option>
<option style="color: #6495ED;">The Eastern and Southern African Management Institute (ESAMI)</option>
<option style="color: #6495ED;">The Institute of Administrative Management</option>
<option style="color: #6495ED;">The Institute Of Community Development</option>
<option style="color: #6495ED;">The Karen Hospital</option>
<option style="color: #6495ED;">The Kenya Agricultural Research Institute (KARI)</option>
<option style="color: #6495ED;">The Kenya Christian Industrial Training Institute (KCITI-Mombasa)</option>
<option style="color: #6495ED;">The KIM, School of Management</option>
<option style="color: #6495ED;">The Language Center Ltd</option>
<option style="color: #6495ED;">The Mater Hospital</option>
<option style="color: #6495ED;">The Rocky Mirror College</option>
<option style="color: #6495ED;">The SPA Ambassador College – Nyeri Town</option>
<option style="color: #6495ED;">The SPA Ambassador College – Voi Town</option>
<option style="color: #6495ED;">The Springboard College</option>
<option style="color: #6495ED;">The Summit College of Professional Studies-Nairobi</option>
<option style="color: #6495ED;">Thika Advanced Institute of Science and Technology</option>
<option style="color: #6495ED;">Thika College of Banking, Accountancy and Computer Studies</option>
<option style="color: #6495ED;">Thika E.C.D. Academy – Thika</option>
<option style="color: #6495ED;">Thika Institute of Business Studies</option>
<option style="color: #6495ED;">Thika Institute of Engineering and Technology</option>
<option style="color: #6495ED;">Thika Institute of Technology</option>
<option style="color: #6495ED;">Thika Level 5 Hospital</option>
<option style="color: #6495ED;">Thika School of Medical and Health Sciences</option>
<option style="color: #6495ED;">Thika Technical Training Institute</option>
<option style="color: #6495ED;">Thogoto Teachers Training College – Kikuyu</option>
<option style="color: #6495ED;">Timeless Professional College</option>
<option style="color: #6495ED;">Times Professional Institute</option>
<option style="color: #6495ED;">Times Training Centre</option>
<option style="color: #6495ED;">Timmabby School of Hairdressing for Beauty Therapy</option>
<option style="color: #6495ED;">Tom Mboya Labour College Courses and Contacts</option>
<option style="color: #6495ED;">Tonic Hair and Beauty College</option>
<option style="color: #6495ED;">Top Media Institute</option>
<option style="color: #6495ED;">Toprank Computer Training Centre – Kikuyu Township</option>
<option style="color: #6495ED;">Total Care Pre-School Teachers College – Nairobi</option>
<option style="color: #6495ED;">Total Quality Driving School</option>
<option style="color: #6495ED;">Tracom College of Professional Studies</option>
<option style="color: #6495ED;">Trans-Eastern Airlines Aviation College</option>
<option style="color: #6495ED;">Trans-National College</option>
<option style="color: #6495ED;">Trezian Driving School</option>
<option style="color: #6495ED;">Trinity Academy of Contemporary Music</option>
<option style="color: #6495ED;">Trinity College</option>
<option style="color: #6495ED;">Tropical Institute of Community Health and Development (TICH)</option>
<option style="color: #6495ED;">Tsavo Institute of Technology</option>
<option style="color: #6495ED;">Ujuzi Driving School</option>
<option style="color: #6495ED;">Ukamba Agricultural Institute – UKAI</option>
<option style="color: #6495ED;">UMMA University</option>
<option style="color: #6495ED;">United Stataes International University</option>
<option style="color: #6495ED;">Unity College of Profesional Studies</option>
<option style="color: #6495ED;">Universal Technical Training Institute of Science and Technology</option>
<option style="color: #6495ED;">University of Eastern Africa, Baraton</option>
<option style="color: #6495ED;">University of Eldoret</option>
<option style="color: #6495ED;">University of Kabianga</option>
<option style="color: #6495ED;">University of Nairobi</option>
<option style="color: #6495ED;">Update School of Hairdressing and Beauty</option>
<option style="color: #6495ED;">Upinde Diving Center</option>
<option style="color: #6495ED;">Uzima University College CUEA</option>
<option style="color: #6495ED;">Uzuri Institute of Technology and Development</option>
<option style="color: #6495ED;">Valentine school of catering and hotel management</option>
<option style="color: #6495ED;">Valley Business School</option>
<option style="color: #6495ED;">Vera Beauty College</option>
<option style="color: #6495ED;">Vera Beauty College – Uasin Gishu</option>
<option style="color: #6495ED;">Vera Beauty College and Fashion Institute – Nairobi</option>
<option style="color: #6495ED;">Vihiga District Hospital</option>
<option style="color: #6495ED;">Violet Driving School</option>
<option style="color: #6495ED;">Vision Empowerment Training Institute</option>
<option style="color: #6495ED;">Vision Institute of Professionals – Kilifi</option>
<option style="color: #6495ED;">Vision Institute of Professionals – Mombasa</option>
<option style="color: #6495ED;">Vision Institute of Professionals – Nairobi</option>
<option style="color: #6495ED;">Vision View Commercial College</option>
<option style="color: #6495ED;">Viteec Training Institute</option>
<option style="color: #6495ED;">Wagema Institute of Professional Studies</option>
<option style="color: #6495ED;">Wamy Vocational College</option>
<option style="color: #6495ED;">Wang Point Technologies</option>
<option style="color: #6495ED;">Wanjua School of Beauty Therapy and Hairdressing</option>
<option style="color: #6495ED;">Watulizeni Technical Training Centre</option>
<option style="color: #6495ED;">Weaver College</option>
<option style="color: #6495ED;">Webbs Institute</option>
<option style="color: #6495ED;">Webuye District Hospital</option>
<option style="color: #6495ED;">Western Kenya College of Economics and Business Studies</option>
<option style="color: #6495ED;">Willpower Institute</option>
<option style="color: #6495ED;">Wisemen School of Management</option>
<option style="color: #6495ED;">Woodgrove Fashion College</option>
<option style="color: #6495ED;">Woodvale Institute of Professional Studies</option>
<option style="color: #6495ED;">Wote Technical Training Institute</option>
<option style="color: #6495ED;">Wright Flyers International College</option>
<option style="color: #6495ED;">Wyda College of Advanced Information and Communication Technology</option>
<option style="color: #6495ED;">YMCA National Training Institute</option>
<option style="color: #6495ED;">Zetech University</option>


     </select>
     

    </div>

    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Institution Type" style=" color: #6495ED; font: bold;"> <b>INSTITUTION-TYPE:</b></label>
    </div>
    <div class="col-lg-3">
        <select name="be" id="Type" class="  form-control input-lg" style="width:350px; color: #6495ED;font: bold;" autocomplete="off">    
            <option value="university" ="University"  selected="active">University</option>
            <option value="National Polytechnic" ="National Polytechnic" >National Polytechnic</option>
            <option value="Medical Training College" ="Medical Training College" >Medical Training College</option>
            <option value="other">Other</option>
        </select>
    </div>
</div>


</div><br>

<div class="form-group">
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">

        <label class="control-label col-xs-2" for="Postal Address" style=" color: #6495ED; font: bold;"><b>POSTAL-ADDRESS:</b></label>
    </div>
    <div class="col-lg-3">
        <input type="text" class="form-control" id="address" placeholder="Address" name="address" required=""  style=" color: #6495ED; font: bold;"/> 
    </div>


     <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Telephone:"  style=" color: #6495ED;"><b>TELEPHONE:</b></label>
    </div>
    <div class="col-lg-3">
        <input type="text" class="form-control" id="Telephone" placeholder="Telephone No." name="Telephone" required="" style=" color: #6495ED; font: bold;" /> 
    </div>
</div>


</div><br>

<div class="form-group">
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="County"  style=" color: #6495ED; font: bold;"><b>COUNTY:</b></label>
    </div>
    <div class="col-lg-3">
        <select name="County" id="Type" class="  form-control input-lg  " style="width:350px; color: #6495ED; font: bold;" autocomplete="off">
          <option>Mombasa </option>
<option>Kwale</option>
<option>Kilifi</option>
<option>Tana River</option>
<option>Lamu</option>
<option>Taita–Taveta</option>
<option>Garissa</option>
<option>Wajir</option>
<option>Mandera</option>
<option>Marsabit</option>
<option>Isiolo</option>
<option>Meru</option>
<option>Tharaka-Nithi</option>
<option>Embu</option>
<option>Kitui</option>
<option>Machakos</option>
<option>Makueni</option>
<option>Nyandarua</option>
<option>Nyeri</option>
<option>Kirinyaga</option>
<option>Murang'a</option>
<option>Kiambu</option>
<option>Turkana</option>
<option>West Pokot</option>
<option>Samburu</option>
<option>Trans-Nzoia</option>
<option>Uasin Gishu</option>
<option>Elgeyo-Marakwet</option>
<option>Nandi</option>
<option>Baringo</option>
<option>Laikipia</option>
<option>Nakuru</option>
<option>Narok</option>
<option>Kajiado</option>
<option>Kericho</option>
<option>Bomet</option>
<option>Kakamega</option>
<option>Vihiga</option>
<option>Bungoma</option>
<option>Busia</option>
<option>Siaya</option>
<option>Kisumu</option>
<option>Homa Bay</option>
<option>Migori</option>
<option>Kisii</option>
<option>Nyamira</option>
<option>Nairobi </option>
<option>Other</option>
        </select>
    </div>
<div class="col-lg-1">
        <label class="control-label col-xs-2" for="Sub-County" style=" color: #6495ED; font: bold;"><b>SUBCOUNTY:</b></label>
    </div>

    <div class="col-lg-3">
        <input type="text" class="form-control" id="Sub" placeholder="Sub-County" name="Sub" required="" style=" color: #6495ED;font: bold;"> 
    </div>

</div>


</div><br>


<div class="form-group">
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Town" style=" color: #6495ED; font: bold;"><b>TOWN:</b></label>
    </div>
    <div class="col-lg-3">
        <input type="text" class="form-control" id="Town" placeholder="Town" name="Town" required="" style=" color: #6495ED; font: bold;"> 
    </div>

     <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Road" style=" color: #6495ED; font: bold;"><b>ROAD:</b></label>
    </div>
    <div class="col-lg-3">
        <input type="text" class="form-control" id="Road" placeholder="Road" name="Road" required="" style=" color: #6495ED; font: bold;"> 
    </div>
  </div>
</div><br>


<div class="form-group">
<div class="col-lg-12">
  <div class="row">

     <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Building" style=" color: #6495ED; font: bold;"><b>BUILDING:</b></label>
    </div>
    <div class="col-lg-3">
        <input type="text" class="form-control" id="Building" placeholder="Building" name="Building" required="" style=" color: #6495ED;font: bold;" > 
    </div>
 <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Type of Ownership" style=" color: #6495ED;font: bold;"><b>OWNERSHIP:</b></label>
    </div>
    <div class="col-lg-3">
        <select name="type" id="class_type" class="  form-control input-lg" style="width:350px;color: #6495ED; font: bold;" autocomplete="off">
            <option value="private">Private</option>
            <option value="public" selected="active">Public</option>
            
        </select>
    </div>

</div>


</div>


<div class="form-group" >
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Date"  style="visibility: hidden;">Date:</label>
    </div>
    <div class="col-lg-3">
        <input type="label"  style="visibility: hidden;" class="form-control" id="date"  name="date"  style="background-color: grey;"  value="<?php echo $date;?>"   readonly> 
    </div>
</div>


</div>




</div>
</div>
</div>
</div>
</div>
</div>
</div>


<br>


 <div class="form-group">        
      
        <form>
           <div class="row">
             <div class="col-lg-12">
  
         
         
          <button type="submit"  class=" btn btn-primary" style="font: bold;" /><b>PROCEED TO THE NEXT PAGE</b> </button><br>
        
           
    </div>
</div>

      

      
      </form>
      </div>
    </div>
  
  </form>
</div>

</form>


</form>
<br>


 <!-- Footer -->
      <div class="footer   bg-light">
  <p style="color: #6495ED;">  <i class='fas fa-at'></i><b>labourmarket.go.ke</b></p>
</div>


</body>
</html>
