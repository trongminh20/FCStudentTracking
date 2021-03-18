<?php
include "v_tech_nav.php";
?>
<div id="main-container">
    <div class="content" id="ResetPass">
        <h1> Reset Password </h1>
        <p> 1. Click on the 'Forgot your password?' link on the login page </p>
        <img src="images/ResetPass1.jpg" alt="Reset Password Step 1">

        <p> 2. Enter your username and click submit </p>

        <p> 3. Admin will review your request for a password reset and send an email containing your new password within 2 business days </p>

    </div>

    <div class="content" id="GenerateInvoice">
        <h1> Generate Invoice </h1>
        <p> 1. Navigate to the 'Generate Invoice' page under the 'Export Documents' tab in the navigation bar </p>
        <img src="images/GenerateInvoice1.jpg" alt="Generate Invoice Step 1">

        <p> 2. Fill out the appropriate information for the invoice </p>
        <!-- Put information about the form here -->
        <img src="images/GenerateInvoice2.jpg" alt="Generate Invoice Step 2">
        <ul>
            <li> <strong> Invoice Number: </strong> An autogenerated number is generated </li>
            <li> <strong> Bill To: </strong> Full name of the recipient </li>
            <li> <strong> Program: </strong> The program the recipient has enrolled in </li>
            <li> <strong> Note: </strong> Any additional notes that may need to be added </li>
            <li> <strong> Quantity: </strong> Quanity of the fee </li>
            <li> <strong> Description: </strong> Description of the fee </li>
            <li> <strong> Unit Price: </strong> Unit price of the fee </li>       
            <li> <strong> Total: </strong> Calculates the total amount of the fee. Autogenerated after 'Quantity' and 'Unit Price' fields are filled </li>     
            <li> <strong> Send to this student: </strong> When checkbox is enabled, an input field will appear for you to enter the recipients email in. The invoice will be sent to them after the 'generate' button is clicked </li>
            <li> <strong> Subtotal: </strong> Autogenerated when invoice is created </li>
            <li> <strong> Total Fees: </strong> Autogenerated when invoice is created </li>
        </ul>

        <p> 3. Click the 'Preview' or 'Generate' button to generate invoice
            <!-- Put information about the preview and generate button here -->
            <ul>
                <li> <strong> Preview: </strong> Generates a pdf preview of the invoice in a new tab </li>
                <li> <strong> Generate: </strong> Generates and downloads a pdf copy of the invoice </li>
            </ul>
        </p>      

        <h1>CHANGE PASSWORD</h1>
        <br>
        <p>This function allows user to change password.</p>
        <br>
    </div>
    <div class="content" id="item2">
        <h2>PROCEDURE</h2>
        <br>
        <p>1. Press user icon <img src="images/user.png" alt="user_icon"> on the upper right-hand corner of the website.</p>
        <br>
        <p>2. Select Change Password.</p>
        <img src="images/change_password.png" alt="change">
        <br><br>
        <p>3. Enter new password in the "Enter New Password" box.</p>
        <br>
        <img src="images/new_pword.png" alt="new_password">
        <br><br>
        <p>4. Press enter <img src="images/enter.jpg" alt="enter" style="width:80px;height:40px;"> or select change button <img src="images/change.png" alt="change" 
              style="width:80px;height:40px;">.</p>
        <br>
        <p>5. Message "Your password has been changed" will appear confirming change password was successful.</p>
        <br><br>
    </div>
    <div class="content" id="item1">
        <h1>SEARCH</h1> 
        <br><br>      
        <p> This function allows user to search for student record by entering student ID or student name.
        </p>
        <br>
    </div>
    <div class="content" id="item2">
        <h2> PROCEDURE </h2>
        <br>
        <p> 1. Go to search box.</p>
        <br>        
        <p><img src="images/search.png" alt="search_box"></p>       
        <br>    
        <p> 2. Enter the student ID or student name.</p>
        <br>
        <p>(Note: If using student ID, type # followed by student number. If using student name, type @ followed by student name.)</p>
        <br><br>
        <p> 3. Press Enter  <img src="images/enter.jpg" alt="enter" style="width:80px;height:40px;"> or search tab button <img src="images/search_button.jpg" style="width:80px;height:40px;"></p> 
        <br>
    </div> 



</div>

    <?php
    include "v_tech_footer.php";
    ?>
</div><!--end of wrapper-->



