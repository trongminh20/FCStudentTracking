<?php
include "v_tech_nav.php";
?>

<div id="mainContainer">
    <div class="content" id="introduction">
        <h1>Introduction</h1>
        <br>
        <p>This user guide is intended to provide the user a comprehensive explanation of all the features of
            this appliation.</p>
        <p>This guide is intended for any user, whether you are an administrator or general user.</p>
        <br>
        <p>If you are entering information like student personal information, enrollment status, payment status
            you will find</p>
        <p>the topics you need to guide you through the process.</p>
        <br>
        This guide covers all general and non-administrative functions of the system.</p>
    </div>
    <hr>
    <div class="content" id="resetPassword">
        <h1>How to reset Password?</h1>
        <p> 1. Click on the 'Forgot your password?' link on the login page </p>
        <img src="images/ResetPass1.jpg" alt="Reset Password Step 1">

        <p> 2. Enter your username and click submit </p>
        <p> 3. Admin will review your request for a password reset and send an email containing your new
            password within 2 business days </p>
    </div>
    <hr>
    <div class="content" id="changePassword">
        <h1>How to change your password?</h1>
        <br>
        <p>This function allows user to change password.</p>
        <br>
        <div class="content" id="">

            <p>1. Press user icon <img src="images/user.png" alt="user_icon"> on the upper right-hand corner of
                the
                website.
            </p>
            <br>
            <p>2. Select Change Password.</p>
            <img src="images/change_password.png" alt="change">
            <br><br>
            <p>3. Enter new password in the "Enter New Password" box.</p>
            <br>
            <img src="images/new_pword.png" alt="new_password">
            <br><br>
            <p>4. Press enter <img src="images/enter.jpg" alt="enter" style="width:80px;height:40px;"> or select
                change
                button <img src="images/change.png" alt="change"
                            style="width:80px;height:40px;">.</p>
            <br>
            <p>5. Message "Your password has been changed" will appear confirming change password was
                successful.</p>
            <br><br>
        </div>
    </div>
    <hr>
    <div class="content" id="addRecord">
        <h1> How to Add New Record?</h1>
        <h2> This function allows user to add new student record.</h2>
        <br>
        <p> 1. Select Add New Record</p>
        <img src="images/new_record.png" alt="add new record">
        <br>
        <p> 2. Press down arrow key and select desired section.</p>
        <img src="images/section_insert.png" alt="add new record">
        <br>
        <p> 3. Press submit button.</p>
        <img src="images/submit.png" alt="submit">
        <br>
        <p> 4. Fill out the form. </p>
        <br>
        <p> 5. Press add new student once done. </p>
        <img src="images/add_new_student.png" alt="submit">
    </div>
    <hr>
    <div class="content" id="updateRecord">
        <h1> How to Update Existing Record?</h1>
        <h2> This function allows user to update existing student record.</h2>
        <br>
        <p> 1. Select Add New Record</p>
        <img src="images/new_record.png" alt="add new record">
        <br>
        <p> 2. Enter Student ID.</p>
        <img src="images/student_id.png" alt="student_id">
        <br>
        <p> 3. Press down arrow to select section to update.</p>
        <img src="images/section_update.png" alt="section_update">
        <br>
        <p> 4. Press submit after selecting section. </p>
        <img src="images/submit.png" alt="submit">
        <br>
        <p> 5. Press add new student once done. </p>
        <img src="images/add_new_student.png" alt="submit">
        <br>
        <p> 6. Select student record to update.</p>
        <br>
        <p> 7. Press save once done. </p>
        <img src="images/save.png" alt="submit">
    </div>
    <hr>
    <div class="content" id="search">
        <h1>How to search for a student?</h1>
        <br><br>
        <p> This function allows user to search for student record by entering student ID or student name.
        </p>
        <br>
        <p> 1. Go to search box.</p>
        <br>
        <p><img src="images/search.png" alt="search_box"></p>
        <br>
        <p> 2. Enter the student ID or student name.</p>
        <br>
        <p>(Note: If using student ID, type # followed by student number. If using student name, type @ followed by
            student name.)</p>
        <br><br>
        <p> 3. Press Enter <img src="images/enter.jpg" alt="enter" style="width:80px;height:40px;"> or search tab
            button
            <img src="images/search_button.jpg" style="width:80px;height:40px;"></p>
        <br>
    </div>
    <hr>
    <div class="content" id="generateInvoice">
        <h1> How to generate invoice? </h1>
        <p> 1. Navigate to the 'Generate Invoice' page under the 'Export Documents' tab in the navigation bar </p>
        <img src="images/GenerateInvoice1.jpg" alt="Generate Invoice Step 1">

        <p> 2. Fill out the appropriate information for the invoice </p>
        <!-- Put information about the form here -->
        <img src="images/GenerateInvoice2.jpg" alt="Generate Invoice Step 2">
        <ul>
            <li><strong> Invoice Number: </strong> An autogenerated number is generated</li>
            <li><strong> Bill To: </strong> Full name of the recipient</li>
            <li><strong> Program: </strong> The program the recipient has enrolled in</li>
            <li><strong> Note: </strong> Any additional notes that may need to be added</li>
            <li><strong> Quantity: </strong> Quanity of the fee</li>
            <li><strong> Description: </strong> Description of the fee</li>
            <li><strong> Unit Price: </strong> Unit price of the fee</li>
            <li><strong> Total: </strong> Calculates the total amount of the fee. Autogenerated after 'Quantity' and
                'Unit Price' fields are filled
            </li>
            <li><strong> Send to this student: </strong> When checkbox is enabled, an input field will appear for you to
                enter the recipients email in. The invoice will be sent to them after the 'generate' button is clicked
            </li>
            <li><strong> Subtotal: </strong> Autogenerated when invoice is created</li>
            <li><strong> Total Fees: </strong> Autogenerated when invoice is created</li>
        </ul>
        <p> 3. Click the 'Preview' or 'Generate' button to generate invoice</p>
            <!-- Put information about the preview and generate button here -->
        <ul>
            <li><strong> Preview: </strong> Generates a pdf preview of the invoice in a new tab</li>
            <li><strong> Generate: </strong> Generates and downloads a pdf copy of the invoice</li>
        </ul>
    </div>
</div>

