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
                  margin-left: 350px;
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
              margin-left: 350px;  
}  
         </style>   
</head>

<!-- Admission Prior to Start Date Section - Health Care -->
<body>
   <div>
        <h2 style="text-align: center;"> ADMISSION PRIOR TO START DATE - HCA PROGRAM </h2>
        <form method="" action="">           
          <label for="photo">Photo ID</label>
             <input type="radio" name="photo" value="YES" id="photo_0" />YES
             <input type="radio" name="photo" value="YES" id="photo_1" />NO
           <br class ="clear"/>  
           <label for="app_form">Application Form</label>
             <input type="radio" name="app_form" value="YES" id="app_form_0" />YES
             <input type="radio" name="app_form" value="NO" id="app_form_1" />NO
           <br class ="clear"/> 
           <label for="app_fee">Application Fee with paid Invoice</label>
             <input type="radio" name="app_fee" value="YES" id="app_fee_0" />YES
             <input type="radio" name="app_fee" value="NO" id="app_fee_1" />NO
           <br class ="clear"/>
           <label for="eng_test">English Test Result (for non-english Speaker)</label>
             <input type="radio" name="eng_test" value="YES" id="eng_test_0" />YES
             <input type="radio" name="eng_test" value="NO" id="eng_test_1" />NO
             <input type="radio" name="eng_test" value="NOT APPLICABLE" id="eng_test_2" />NOT APPLICABLE
           <br class ="clear"/>
           <label for="eng_form">English Language Competency Self-Declaration Form</label>
              <input type="radio" name="eng_form" value="YES" id="eng_form_0" />YES
              <input type="radio" name="eng_form" value="NO" id="eng_form_1" />NO
           <br class ="clear"/>
           <label for="hs_trans">High School Transcript(if applicable)</label>
              <input type="radio" name="hs_trans" value="YES" id="hs_trans_0" />YES
              <input type="radio" name="hs_trans" value="NO" id="hs_trans_1" />NO
              <input type="radio" name="eng_test" value="NOT APPLICABLE" id="eng_test_2" />NOT APPLICABLE
           <br class ="clear"/>
           <label for="email">College Email Address</label><input type="text" name="email" id="email" />
           <br class ="clear"/>
           <label for="stud_num">Student Number</label><input type="text" name="stud_num" id="stud_num" />
           <br class ="clear"/>
           <label for="letter">Letter of Acceptance</label>
              <input type="radio" name="letter" value="YES" id="letter_0" />YES
              <input type="radio" name="letter" value="NO" id="letter_1" />NO
           <br class ="clear"/>
           <label for="enr_con">Enrollment Contract</label>
              <input type="radio" name="enr_con" value="YES" id="enr_con_0" />YES
              <input type="radio" name="enr_con" value="NO" id="enr_con_1" />NO
           <br class ="clear"/>
           <label for="stud_aid">Student Aid BC(Optional)</label><input type="text" name="stud_aid" id="stud_aid" />
           <br class ="clear"/>
           <label for="handbook">College Handbook Receive Date</label><input type="date" name="handbook" id="handbook" />
           <br class ="clear"/>
           <label for="ack_form">Acknowledgement and Agreement Form</label><input type="date" name="ack_form" id="ack_form" />
           <br class ="clear"/>
           <label for="photography">Photography Waiver Form</label><input type="date" name="photography" id="photography" />
           <br class ="clear"/>
           <label for="prog_date">Program Handbook Receive Date</label><input type="date" name="prog_date" id="prog_date" />
           <br class ="clear"/>
           <label for="self_dec">Self Declaration Health</label><input type="date" name="self_dec" id="self_dec" />
           <br class ="clear"/>
           <label for="stu_id">Student ID</label>
              <input type="radio" name="stu_id" value="YES" id="stu_id_0" />YES
              <input type="radio" name="stu_id" value="NO" id="stu_id_1" />NO
           <br class ="clear"/>
           <label for="pay_met">Payment Method</label>
              <input type="radio" name="pay_met" value="Full Payment" id="pay_met_0" />Full Payment
              <input type="radio" name="pay_met" value="Monthly Payment" id="pay_met_1" />Monthly Payment
              <input type="radio" name="pay_met" value="Payment Plan" id="pay_met_2" />Payment Plan
           <br class ="clear"/> <br>
           <button> SUBMIT </button> 
         </form>
   </div>
</body>
