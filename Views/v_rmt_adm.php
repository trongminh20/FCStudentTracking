<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>ADMISSION PRIOR TO START DATE</title>
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
   * {box-sizing: border-box;}
             form label {
	          float: left;
	          width: 400px;
	          margin-bottom: 5px;
	          margin-top: 5px;
                  margin-left: 200px;
             }
             .clear {
	          display: block;
	          clear: both;
	          width: 100%;             
             }
              button {  
              background-color: lightblue;  
              color: black;  
              font-size: 20px;  
              margin-left: 200px;  
              }
              .col-75 {
              float: left;
              width: 15%;
              margin-top: 1px;
              }
         </style>   
</head>

<!-- Admission Prior to Start Date - RMT Program -->
<body>
   <div>
        <h2 style="text-align: center;"> ADMISSION PRIOR TO START DATE - RMT PROGRAM</h2>
        <form id="form1" name="form1" method="post" action="rmt_program.php">
          <label for="photo ID">Photo ID</label>
            <div class="col-75">
              <input type="radio" name="photo" value="YES" id="photo_0" />YES
              <input type="radio" name="photo" value="NO" id="photo_1" />NO
            </div>
          Application Form ..................:
            <input type="radio" name="app_form" value="YES" id="app_form_0" />YES
            <input type="radio" name="app_form" value="NO" id="app_form_1" />NO
          <br class="clear" /> 
          <label for="app_fee">Application Fee with Paid Invoice</label>
            <div class="col-75">
              <input type="radio" name="app_fee" value="YES" id="app_fee_0" />YES
              <input type="radio" name="app_fee" value="NO" id="app_fee_1" />NO
            </div>
          Application Essay ................:
            <input type="radio" name="app_essay" value="YES" id="app_essay_0" />YES
            <input type="radio" name="app_essay" value="NO" id="app_essay_1" />NO
          <br class="clear" /> 
          <label for="char_ref">Character Reference Letters</label>
            <div class="col-75">
              <input type="radio" name="char_ref" value="YES" id="char_ref_0" />YES
              <input type="radio" name="char_ref" value="NO" id="char_ref_1" />NO
            </div> 
           Resume ...............................:
             <input type="radio" name="resume" value="YES" id="resume_0" />YES
             <input type="radio" name="resume" value="NO" id="resume_1" />NO
           <br class="clear" />            
           
           <label for="wel_let">Welcome Letter Sent</label>
             <div class="col-75">
               <input type="radio" name="wel_let" value="YES" id="wel_let_0" />YES
               <input type="radio" name="wel_let" value="NO" id="wel_let_1" />NO
             </div> 
           Completed ............................:
             <input type="radio" name="completed" value="YES" id="completed_0" />YES
             <input type="radio" name="completed" value="NO" id="completed_1" />NO
           <br class="clear" /> 
           <label for="eng_test">English Test Result(For Non-English Speaker)</label>
             <div class="col-75">
               <input type="radio" name="eng_test" value="YES" id="eng_test_0" />YES
               <input type="radio" name="eng_test" value="NO" id="eng_test_1" />NO
             </div>
           Approved ..............................:
             <input type="radio" name="approved" value="YES" id="approved_0" />YES
             <input type="radio" name="approved" value="NO" id="approved_1" />NO
           <br class="clear" /> 
           <label for="crc">CRC</label>
             <div class="col-75">
               <input type="radio" name="crc" value="YES" id="crc_0" />YES
               <input type="radio" name="crc" value="NO" id="crc_1" />NO
             </div> 
           Medical Notes from Physician
             <input type="radio" name="med_notes" value="YES" id="med_notes_0" />YES
             <input type="radio" name="med_notes" value="NO" id="med_notes_1" />NO
           <br class="clear" />
           <label for="stud_id">Student ID</label>
             <div class="col-75">
               <input type="radio" name="stud_id" value="YES" id="stud_id_0" />YES
               <input type="radio" name="stud_id" value="NO" id="stud_id_1" />NO
             </div>
           Sheet Set ..............................:
             <input type="radio" name="sheet" value="YES" id="sheet_0" />YES
             <input type="radio" name="sheet" value="NO" id="sheet_1" />NO
           <br class="clear" /> 
           <label for="labtop">Labtop</label>
             <div class="col-75">
               <input type="radio" name="labtop" value="YES" id="labtop_0" />YES
               <input type="radio" name="labtop" value="NO" id="labtop_1" />NO
              </div> 
           Goniometer.............................:
             <input type="radio" name="goniometer" value="YES" id="goniometer_0" />YES
             <input type="radio" name="goniometer" value="NO" id="goniometer_1" />NO
           <br class="clear" /> 
           <label for="oil">Oil Holster</label>
             <div class="col-75">
               <input type="radio" name="oil" value="YES" id="oil_0" />YES
               <input type="radio" name="oil" value="NO" id="oil_1" />NO
             </div> 
           Bottle......................................:
             <input type="radio" name="bottle" value="YES" id="bottle_0" />YES
             <input type="radio" name="bottle" value="NO" id="bottle_1" />NO
           <br class="clear" />
           <label for="hs_trans">Highschool Diploma & transcript</label>
             <input type="radio" name="hs_trans" value="YES" id="hs_trans_0" />YES
             <input type="radio" name="hs_trans" value="NO" id="hs_trans_1" />NO
             <input type="radio" name="hs_trans" value="NOT APPLICABLE" id="hs_trans_2" />NOT APPLICABLE
           <br class="clear" />                        
           <label for="email">College Email Address</label>
             <input type="text" name="email" id="email" />
           <br class="clear" />           
           <label for="stud_num">Student Number</label>
             <input type="text" name="stud_num" id="stud_num" />
           <br class="clear" />
           <label for="stud_aid">Student Aid BC(optional)/payment</label>
             <input type="text" name="stud_aid" id="stud_aid" />
           <br class="clear" /> 
           <label for="intro_mass">Intro Of Massage Course Date & Time</label>
             <input type="datetime-local" name="intro_mass" id="intro_mass" />
           <br class="clear" /> 
           <label for="int_date">Interview Date & Time</label>
             <input type="datetime-local" name="int_date" id="int_date" />
           <br class="clear" />
           <label for="fees">Fees with Paid Invoice</label>
             <div class="col-75">
               <input type="date" name="fees" id="fees" />
             </div>
           Letter of Acceptance.................:
             <input type="date" name="letter" id="letter" />
           <br class="clear"/> 
           <label for="rmt_handbook">RMT General Handbook Received Date</label>
             <div class="col-75">
               <input type="date" name="rmt_handbook" id="rmt_handbook" />
             </div> 
           Enrolment Contract...................:
             <input type="date" name="enr_con" id="enr_con" />
           <br class="clear" />
           <label for="rmt_stud">RMT Student Handbook Received Date</label>
             <div class="col-75">
               <input type="date" name="rmt_stud" id="rmt_stud" />
             </div>
           Student General Handbook AAF
             <input type="date" name="stud_handbook" id="stud_handbook" />
           <br class="clear" />  
           <label for="ack_form">Acknowledgement and Agreement Form</label>
             <input type="date" name="ack_form" id="ack_form" />
           <br class="clear" />
           
           <label for="pay_method">Payment Method</label>
             <input type="radio" name="pay_method" value="Full Payment" id="pay_method_0" />Full Payment
             <input type="radio" name="pay_method" value="Monthly Payment" id="pay_method_1" />Monthly Payment
             <input type="radio" name="pay_method" value="Payment Plan" id="pay_method_2" />Payment Plan
           <br class="clear" /> 
           
            
           <button>SUBMIT</button>
           <br class="clear" /> 
       </form>
  </div>
</body>
