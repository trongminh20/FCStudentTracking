<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>

<div class="container" id="mainContent">
    <h4>Add New Student Records</h4>
    <div class="row">
        <div class="col-xs-12">
            <!--form starts-->
    		<form class="col-lg-8" action="?action=c_add_new_record" method="POST">
                <!--select program-->
                <div class="form-group" id="rmt" style="padding-top: 20px;">
                    <label for="selectSection">Select Section to Insert:</label>
                    <select class="form-control" name="select_section" id="selectSection">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="Enrollment Brief Summary">Enrollment Brief Summary</option>
                        <option value="Admission Prior to Start Date">Admission Prior to Start Date</option>
                        <option value="Prior to Practice Education">Prior to Practice Education</option>
                        <option value="Graduation">Graduation</option>
                        <option value="Payment Tracking">Payment Tracking</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name='add_record' value='Submit' class="btn btn-primary">
                </div>
			</form>
		</div>
	</div>
</div>

<!--
    <a href="?action=v_priorToPracticeEducation_form">Add practice to education </a><br>
    <a href="?action=v_admPriorToStartDate_form">Add admission Prior to Start Date </a><br>
    <a href="?action=v_graduation_form">Add graduation </a><br>
-->