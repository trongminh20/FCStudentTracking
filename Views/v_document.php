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
        <p> Admin will review your request for a password reset and send an email containing your new
            password within 2 business days </p>
        <br>
        <p> 1. Click on the 'Forgot your password?' link on the login page </p>
        <img src="images/ResetPass1.jpg" alt="Reset Password Step 1">
        <br>
        <p> 2. Enter your username and click submit </p>
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
        <br>
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
        <h1> How to Generate an Invoice? </h1>
        <p> This function allows the user to generate a pdf invoice for a student. You can also email a copy the invoice to the student. </p>
        <br>
        <p> 1. Navigate to the 'Generate Invoice' page under the 'Export Documents' tab in the navigation bar </p>
        <img src="images/GenerateInvoice1.jpg" alt="Generate Invoice Step 1">
        <p> 2. Fill out the appropriate information for the invoice </p>
        <img src="images/GenerateInvoice2.jpg" alt="Generate Invoice Step 2">
        <br>
        <ul>
            <li><span> Invoice Number: </span> An autogenerated number is generated</li>
            <br>
            <li><span> Bill To: </span> Full name of the recipient</li>
            <br>
            <li><span> Program: </span> The program the recipient has enrolled in</li>
            <br>
            <li><span> Note: </span> Any additional notes that may need to be added</li>
            <br>
            <li><span> Quantity: </span> Quanity of the fee</li>
            <br>
            <li><span> Description: </span> Description of the fee</li>
            <br>
            <li><span> Unit Price: </span> Unit price of the fee</li>
            <br>
            <li><span> Total: </span> Calculates the total amount of the fee. Autogenerated after 'Quantity' and
                'Unit Price' fields are filled
            </li>
            <br>
            <li><span> Send to this student: </span> When checkbox is enabled, an input field will appear for you to
                enter the recipients email in. The invoice will be sent to them after the 'generate' button is clicked
            </li>
            <li><strong> Subtotal: </strong> Autogenerated when invoice is created <li>
            <li><strong> Total Fees: </strong> Autogenerated when invoice is created </li>
        </ul>
        <br><br>
        <p> 3. Click the 'Preview' or 'Generate' button to generate invoice</p>
            <br>
        <ul>
            <li><span> Preview: </span> Generates a pdf preview of the invoice in a new tab</li>
            <br>
            <li><span> Generate: </span> Generates and downloads a pdf copy of the invoice</li>
        </ul>
    </div>
    <hr>
    <div class="content" id="generateReport">
        <h1> How to Generate a Report? </h1>   
        <p> This function allows the user to generate a pdf report for a student based off previously filled forms </p>
        <br>    
        <p> 1. Navigate to the 'Generate Report' page under the 'Export Documents' tab in the navigation bar </p>
        <img src="images/GenerateReport1.jpg" alt="Generate Report Step 1">
        <p> 2. Fill out the appropriate information for the report </p>
        <img src="images/GenerateReport2.jpg" alt="Generate Report Step 2"> 
        <ul>
            <li> Enter the ID of the student you'd like to make a report for </li>
            <br>
            <li> Select which forms you would like to include in the report </li>
        </ul>
        <br><br>
        <p> 3. Click the 'Preview' or 'Generate' button to generate report </p>
        <ul>
            <li><span> Preview: </span> Generates a pdf preview of the report in a new tab</li>
            <br>
            <li><span> Generate: </span> Generates and downloads a pdf copy of the report </li>
        </ul>
        <br><br>
        <p> Please note if you generate a report that contains a form that hasn't been added with a student then you will get the following on the report </p>
        <img src="images/GenerateReport3.jpg" alt="Generate Report Missing Section">
    </div>
    <hr>
    <div class="content" id="manageUserAddEmployee">
        <h1> How to Add a New Employee? </h1>
        <p> This function allows an admin to add an employee to the system </p>
        <br>
        <p> 1. Click the user icon in the upper right corner and navigate to the 'Manage User' page </p>
        <img src="images/manageUser.jpg" alt="Add Employee Step 1">
        <p> 2. Scroll down the page to find the 'ADD NEW EMPLOYEE' form </p>
        <p> 3. Fill out the appropriate information for the form </p>
        <img src="images/manageUserAddEmployee1.jpg" alt="Add Employee Step 3">
        <p> 4. Click the 'Clear Form' button if you would like to clear all of the fields in the form </p>
        <p> 5. Click the 'Add User' button to add the employee to the system </p>
    </div>
    <hr>
    <div class="content" id="manageUserRemoveEmployee">
        <h1> How to Remove an Employee? </h1>
        <p> This function allows an admin to remove an employee from the system </p>
        <br>
        <p> 1. Click the user icon in the upper right corner and navigate to the 'Manage User' page </p>
        <img src="images/manageUser.jpg" alt="Remove Employee Step 1">

        <p> 2. Click the 'Delete' button next to the employee you would like to remove from the system </p>
        <img src="images/manageUserRemoveEmployee1.jpg" alt="Remove Employee Step 2">
    </div>
    <hr>
    <div class="content" id="manageUserResetEmployee">
        <h1> How to Reset an Employee's Password? </h1>
        <p> This function allows an admin to reset an employees password </p>
        <br>
        <p> 1. View password requests on the dashboard under the 'Received Requests' section </p>
        <img src="images/manageUserResetEmployee1.jpg" alt="Reset Employee Step 1">
        <p> 2. Click the user icon in the upper right corner and navigate to the 'Manage User' page </p>
        <img src="images/manageUser.jpg" alt="Reset Employee Step 2">
        <p> 3. Click the 'Reset' button next to the employee whose password you would like to reset </p>
        <img src="images/manageUserResetEmployee2.jpg" alt="Reset Employee Step 3">
    </div>
    <hr>
    <div class="content" id="manageUserEditEmployee">
        <h1> How to Edit an Employee's User Information? </h1>
        <p> This function allows an admin to edit an existing employees user information </p>
        <br>
        <p> 1. Click the user icon in the upper right corner and navigate to the 'Manage User' page </p>
        <img src="images/manageUser.jpg" alt="Edit Employee Step 1">
        <p> 2. Click the 'Edit' button of whichever employee whose information you would like to edit </p>
        <img src="images/manageUserEditEmployee2.jpg" alt="Edit Employee Step 2">
        <p> 3. Adjust user information </p>
        <img src="images/manageUserEditEmployee3.jpg" alt="Edit Employee Step 3">
        <p> 4. Click the 'Save' button to save changes made to the users information </p>
    </div>
</div>

