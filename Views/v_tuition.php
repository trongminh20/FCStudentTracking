<?php
     /* $stud_type = $_POST['stud_type'];  
     $stud_id = $_POST['stud_id'];  
     $1st_payment = $_POST['1st_payment'];  
     $2nd_payment = $_POST['2nd_payment'];  
     $3rd_payment = $_POST['3rd_payment'];  
     $4th_payment = $_POST['4th_payment'];  
     $5th_payment = $_POST['5th_payment'];  
     $6th_payment = $_POST['6th_payment'];  
     $7th_payment = $_POST['7th_payment'];  
     $8th_payment = $_POST['8th_payment'];  
     $9th_payment = $_POST['9th_payment'];  
     $10th_payment = $_POST['10th_payment']; */      
?>
<div class="tuition" id="tuition">
    <head>
         <title>TUITION FEE</title>
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
         <h2> TUITION FEE </h2>
              <form id="form1" name="form1" method="post" action="tuition.php">
                   <label for="stud_type">Type of Student</label>
                   <input type="checkbox" name="stud_type[]" value="Domestic" id="stud_type_0" />Domestic
                   <input type="checkbox" name="stud_type[]" value="International" id="stud_type_1" />International
                   <br class="clear" /> 
                   <label for="stud_id">Student ID</label><input type="text" name="stud_id" id="stud_id" />
                   <br class="clear" /> 
                   <label for="1st_payment">1st Payment</label><input type="text" name="1st_payment" id="1st_payment" />
                   <br class="clear" /> 
                   <label for="2nd_payment">2nd Payment</label><input type="text" name="2nd_payment" id="2nd_payment" />
                   <br class="clear" /> 
                   <label for="3rd_payment">3rd Payment</label><input type="text" name="3rd_payment" id="3rd_payment" />
                   <br class="clear" /> 
                   <label for="4th_payment">4th Payment</label><input type="text" name="4th_payment" id="4th_payment" />
                   <br class="clear" /> 
                   <label for="5th_payment">5th Payment</label><input type="text" name="5th_payment" id="5th_payment" />
                   <br class="clear" /> 
                   <label for="6th_payment">6th Payment</label><input type="text" name="6th_payment" id="6th_payment" />
                   <br class="clear" /> 
                   <label for="7th_payment">7th Payment</label><input type="text" name="7th_payment" id="7th_payment" />
                   <br class="clear" /> 
                   <label for="8th_payment">8th Payment</label><input type="text" name="8th_payment" id="8th_payment" />
                   <br class="clear" /> 
                   <label for="9th_payment">9th Payment</label><input type="text" name="9th_payment" id="9th_payment" />
                   <br class="clear" /> 
                   <label for="10th_payment">10th Payment</label><input type="text" name="10th_payment" id="10th_payment" />
                   <br class="clear" />
                   <label for="Total">Total</label><input type="text" name="Total" id="Total" />
                   <br class="clear" /> <br> 
                   <input type="submit" name="Submit" id="Submit" value="Submit" />
                   <br class="clear" /> 
         </form>
    </body>
</div>
