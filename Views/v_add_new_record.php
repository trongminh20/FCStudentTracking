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
                        <option disabled selected value> -- select an option --</option>
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

    <h4>Update Existed record</h4>
    <div class="row">
        <div class="col-xs-12">
            <!--form starts-->
            <form class="col-lg-8" action="?action=v_update_record" method="POST">
                <div class="form-group" style="padding-top: 20px;">
                    <label for="student_id">Student ID</label>
                    <input name="student_id" id="" class="form-control" type="number" placeholder="Enter Student ID"
                           required="required">
                </div>
                <!--select program-->
                <div class="form-group" style="padding-top: 20px;">
                    <label for="selectSection">Select Section to update:</label>
                    <select class="form-control" name="select_section" id="selectSection">
                        <option disabled selected value> -- select an option --</option>
                        <option value="students">Enrollment Brief Summary</option>
                        <option value="apsds">Admission Prior to Start Date</option>
                        <option value="ppes">Prior to Practice Education</option>
                        <option value="graduations">Graduation</option>
                        <option value="payment_tracking">Payment Tracking</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name='update_record' value='Submit' class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

