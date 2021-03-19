<?php    
?>
<!DOCTYPE html>
<html>
<head>
  <title>PAYMENT TRACKING</title>
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
       <div>
         <h2> PAYMENT TRACKING </h2>
           <form id="form1" name="form1" method="post" action="payment.php">
              <label for="stud_type">Student Type</label>
              <input type="radio" name="stud_type" value="Domestic" id="stud_type_0" />Domestic
              <input type="radio" name="stud_type" value="International" id="stud_type_1" />International
              <br class="clear" /> 
              <label for="stud_id">Student ID</label><input type="text" name="stud_id" id="stud_id" />
              <br class="clear" /> 
              <label for="app_fee">Application Fee</label><input type="text" name="app_fee" id="app_fee" />
              <br class="clear" /> 
              <label for="mass_fee">Intro to Massage Fee</label><input type="text" name="mass_fee" id="mass_fee" />
              <br class="clear" /> 
              <label for="scholarships">Scholarships OR Subsidy</label><input type="text" name="scholarships" id="scholarships" />
              <br class="clear" /> 
              <label for="mat_fee">Course Materials Fee</label><input type="text" name="mat_fee" id="mat_fee" />
              <br class="clear" /> 
              <label for="textbook">Textbook Fee</label><input type="text" name="textbook" id="textbook" />
              <br class="clear" /> 
              <label for="admin_fee">Administration Fee</label><input type="text" name="admin_fee" id="admin_fee" />
              <br class="clear" /> 
              <label for="Total">Total</label><input type="text" name="Total" id="Total" />
              <br class="clear" /> <br>
              <input type="submit" name="Submit" id="Submit" value="Submit" />
              <br class="clear" /> 
           </form>
       </div>
    </body>
