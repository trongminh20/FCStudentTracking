<?php
include "v_masterPage_header.php";
include "v_masterPage_sidebar.php";

?>

<div class="container" id="mainContent" style="padding-top: 20px; margin-left:50px;">

    <div class="row">

        <div class="col-xs-12">
            <h2 id="formTitle" style="padding-top: 10px">Enrollment Brief Summary</h2>
            <?php
            if (isset($_SESSION['add_student_announcement'])) {
                echo "<div class='text-center' style='color: #4cae4c'>" . $_SESSION['add_student_announcement'] . "</div>";
                unset($_SESSION['add_student_announcement']);
            } else {
                echo "";
            }
            ?>
            <!--Form starts-->
            <form action="?action=c_add_student" method="POST">
                <div class="form-group" style="padding-top: 20px">
                    <label for="name">Name*:</label>
                    <input type="text" name="name" class="form-control" id="studentName"
                           onchange="validate_txt(this.id);"/>
                </div>
                <!--id-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="phone">Student ID:</label>
                    <input type="number" name="id" class="form-control" id="studentID"/>
                </div>
                <!--cohort-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="cohort">Cohort*:</label>
                    <input type="text" name="cohort" class="form-control" id="cohort"
                           onchange="validate_txt(this.id);"/>
                </div>
                 <!--program id-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="phone">Program ID*:</label>
                    <select name="prog_id" class="form-control" id="programID">
                        <option>-- Select one --</option>
                        <?php
                        $options = $model->select('programs', NULL);
                        foreach ($options as $op):
                            ?>
                            <option value="<?= $op['id'] ?>"><?= $op['id'] . " -- " . $op['prog_name'] ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>
                </div>
                <!--phone number-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="phone">Contact Number:</label>
                    <br><label id="validateWarning"></label>
                    <input type="text" onchange="validate_phoneNumber();" name="phone" class="form-control" id="tel"/>
                </div>
                <!--DOB-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="birthdate">Date of Birth:</label>
                    <input type="date" name="birthdate" class="form-control" id="birthdate"/>
                </div>
                <!--email-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="Email">Email:</label>
                    <br><label id="emailValidateWarn"></label>
                    <input type="text" onchange="validate_email();" name="email" class="form-control" id="email"/>
                </div>
                <div class="form-group" style="padding-top: 20px">
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" id="address"
                           onchange="validate_txt(this.id);"/>
                </div>
                <!--dom or int student radio button-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="DomORInt">Domestic OR International:</label>
                    <div id="DomORInt" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="Dom_OR_Int" id="DomORInt" value="domestic" type="radio"/> Domestic
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="Dom_OR_Int" id="DomORInt" value="international" type="radio"/>
                                International
                            </label>
                        </div>
                    </div>
                </div>
                <!--enrollment notes-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="emrollmentNotes">Enrollment Notes:</label>
                    <textarea type="text" class="form-control" name="enroll_notes" id="emrollmentNotes"
                              rows="5"  onchange="validate_txt(this.id);"></textarea>
                </div>
                <div class="form-group" style="padding-top: 20px">
                    <label for="adminStatus">Admission Status:</label>
                    <input type="text" name="admin_status" class="form-control" id="adminStatus"/>
                </div>
                <!--submit button-->
                <div class="form-group" style="padding-top: 20px">
                    <input class="btn btn-primary" id="submit" type="submit" name="add_student"
                           value='Add new Student'>
                </div>
            </form>
        </div>
    </div>
</div>
<!--add more record Modal-->
