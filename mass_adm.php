<?php

     /*$photo_id = $_POST['photo_id'];  
     $app_form = $_POST['app_form'];  
     $app_fee = $_POST['app_fee'];  
     $app_essay = $_POST['app_essay'];  
     $char_ref = $_POST['char_ref'];  
     $resume = $_POST['resume'];  
     $massage = $_POST['massage'];  
     $fees = $_POST['fees'];  
     $welcome = $_POST['welcome'];  
     $completed = $_POST['completed'];  
     $eng_test = $_POST['eng_test'];  
     $crc = $_POST['crc'];  
     $medical = $_POST['medical'];  
     $interview = $_POST['interview'];  
     $approved = $_POST['approved'];  
     $diploma = $_POST['diploma'];  
     $email = $_POST['email'];  
     $stud_id = $_POST['stud_id'];  
     $letter = $_POST['letter'];  
     $en_cont = $_POST['en_cont'];  
     $rmt = $_POST['rmt'];  
     $acknowledgement = $_POST['acknowledgement'];  
     $student_id = $_POST['student_id'];  
     $pay_methods = $_POST['pay_methods'];  
     $sheet = $_POST['sheet'];  
     $labtop = $_POST['labtop'];  
     $goniometer = $_POST['goniometer'];  
     $oil = $_POST['oil'];  
     $bottle = $_POST['bottle'];  
     $handbook = $_POST['handbook'];  */

?>
<!DOCYPE html>
<html>
    <head>
         <title>ADMISSION PRIOR TO START DATE</title>
         <style type="text/css">
             form label {
	          float: left;
	          width: 150px;
	          margin-bottom: 5px;
	          margin-top: 5px;
             }
             .clear {
	          display: block;
	          clear: both;
	          width: 100%;
             }
         </style>   
    </head>
    <body>
         <h2> ADMISSION PRIOR TO START DATE </h2>         
         <form id="form1" name="form1" method="post" action="mass_admission.php">
              <label for="stud_id">Student Number</label><input type="text" name="stud_id" id="stud_id" />
              <br class="clear" />
              <label for="photo_id">Photo ID</label><input type="text" name="photo_id" id="photo_id"/>		
              <br class="clear" />
              <label for="app_form">Application Form</label><input type="text" name="app_form" id="app_form" />
              <br class="clear" /> 
              <label for="app_fee">Application Fee</label><input type="text" name="app_fee" id="app_fee" />
              <br class="clear" /> 
              <label for="app_essay">Application Essay</label><input type="text" name="app_essay" id="app_essay" />
              <br class="clear" /> 
              <label for="char_ref">Character Reference Letters</label><input type="text" name="char_ref" id="char_ref" />
              <br class="clear" /> 
              <label for="resume">Resume</label><input type="text" name="resume" id="resume" />
              <br class="clear" /> 
              <label for="massage">Intro of Massage Date and Time</label><input type="text" name="massage" id="massage" />
              <br class="clear" /> 
              <label for="fees">Fees with Paid Invoice</label><input type="text" name="fees" id="fees" />
              <br class="clear" /> 
              <label for="welcome">Welcome Letter Sent</label><input type="text" name="welcome" id="welcome" />
              <br class="clear" /> 
              <label for="completed">Completed</label><input type="text" name="completed" id="completed" />
              <br class="clear" /> 
              <label for="eng_test">English test Result(for non-English Speaker)</label><input type="text" name="eng_test" id="eng_test" />
              <br class="clear" /> 
              <label for="crc">CRC</label><input type="text" name="crc" id="crc" />
              <br class="clear" /> 
              <label for="medical">Medical Notes from Physician</label><input type="text" name="medical" id="medical" />
              <br class="clear" /> 
              <label for="interview">Interview Date and Time</label><input type="text" name="interview" id="interview" />
              <br class="clear" /> 
              <label for="approved">Approved</label><input type="text" name="approved" id="approved" />
              <br class="clear" /> 
              <label for="diploma">High school diploma & Transcript</label><input type="text" name="diploma" id="diploma" />
              <br class="clear" /> 
              <label for="email">College Email Address</label><input type="text" name="email" id="email" />
              <br class="clear" /> 
              <label for="stud_id">Student Number</label><input type="text" name="stud_id" id="stud_id" />
              <br class="clear" /> 
              <label for="letter">Letter of Acceptance</label><input type="text" name="letter" id="letter" />
              <br class="clear" /> 
              <label for="en_cont">Enrollment Contract</label><input type="text" name="en_cont" id="en_cont" />
              <br class="clear" /> 
              <label for="rmt">RMT General Handbook Received Date</label><input type="text" name="rmt" id="rmt" />
              <br class="clear" /> 
              <label for="acknowledgement">Acknowledgement and Agreement Form</label><input type="text" name="acknowledgement" id="acknowledgement" />
              <br class="clear" /> 
              <label for="student_id">Student ID</label><input type="text" name="student_id" id="student_id" />
              <br class="clear" /> 
              <label for="pay_methods">Payment Method Notes</label><input type="text" name="pay_methods" id="pay_methods" />
              <br class="clear" /> 
              <label for="sheet">Sheet Set</label><input type="text" name="sheet" id="sheet" />
              <br class="clear" /> 
              <label for="labtop">Labtop</label><input type="text" name="labtop" id="labtop" />
              <br class="clear" /> 
              <label for="goniometer">Goniometer</label><input type="text" name="goniometer" id="goniometer" />
              <br class="clear" /> 
              <label for="oil">Oil Holster</label><input type="text" name="oil" id="oil" />
              <br class="clear" /> 
              <label for="bottle">Bottle</label><input type="text" name="bottle" id="bottle" />
              <br class="clear" /> 
              <label for="handbook">Student General Handbook</label><input type="text" name="handbook" id="handbook" />
              <br class="clear" /> <br> <br>
              <input type="submit" name="Submit" id="Submit" value="Submit" />
              <br class="clear" /> 
         </form>
    </body>
</html>
