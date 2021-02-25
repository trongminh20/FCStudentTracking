<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>

<div id="mainContent">
<h1>Report Generation</h1>
    <form class="form-group col-lg-8" method="POST" action="?action=v_generate_report">
    <fieldset>
        <legend>Student Info</legend>
        <input class="form-control" id='studentId' type="text" placeholder="Student ID"
               required="required"><br>
        <input class="form-control" type="text" id="program" placeholder="Program" required="required">
    </fieldset>
    <fieldset>
        <legend>Including Information</legend>
        <label><input type="checkbox"> Enrollment Brief Summary</label>
        <label><input type="checkbox"> Enrollment Brief Summary</label>
        <label><input type="checkbox"> Enrollment Brief Summary</label>
        <br>
        <label><input type="checkbox"> Enrollment Brief Summary</label>
        <label><input type="checkbox"> Enrollment Brief Summary</label>
        <label><input type="checkbox"> Enrollment Brief Summary</label>
    </fieldset>
    <fieldset>
        <select class="form-control" >
            <option>.docx</option>
            <option>.pdf</option>
        </select><br><br>
        <input type="submit" name="preview" value="preview">
        <input type="submit" name="generate" value="generate">
    </fieldset>
</form>
</div>