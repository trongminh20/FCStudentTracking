<?php
include "v_masterPage_header.php";
?>


<div class="container" style="padding-top: 20px">
    <div class="row">
        <div class="col-xs-12">
            <h2 style="padding-top: 10px">Enrollment Brief Summary</h2>

            <!--Form starts-->
            <form action="?action=c_add_student" method="POST">
                <div class="form-group" style="padding-top: 20px">
                    <label for="phone">Name:</label>
                    <input type="text" name="name" class="form-control" id="studentName"/>
                </div>
             <div class="form-group" style="padding-top: 20px">
                    <label for="phone">Student Id</label>
                    <input type="number" name="id" class="form-control" id="studentID"/>
                </div>
             <div class="form-group" style="padding-top: 20px">
                    <label for="phone">Program ID</label>
                    <input type="text" name="prog_id" class="form-control" id="programID"/>
                </div>
                <!--phone number-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="phone">Contact Number:</label>
                    <input type="text" name="phone" class="form-control" id="phone"/>
                </div>
                <!--email-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="Email">Email:</label>
                    <input type="text" name="email" class="form-control" id="email"/>
                </div>
                <div class="form-group" style="padding-top: 20px">
                    <label for="Email">Address:</label>
                    <input type="text" name="address" class="form-control" id="address"/>
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
                                <input name="Dom_OR_Int" id="DomORInt" value="international" type="radio"/> International
                            </label>
                        </div>
                    </div>
                </div>
                <!--enrollment notes-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="emrollmentNotes">Emrollment Notes:</label>
                    <textarea type="text" class="form-control" name="enroll_notes" id="emrollmentNotes"
                              rows="5"></textarea>
                </div>
                <div class="form-group" style="padding-top: 20px">
                    <label for="phone">Admission Status</label>
                    <input type="text" name="admin_status" class="form-control" id="phone"/>
                </div>
                <!--submit button-->
                <div class="form-group" style="padding-top: 20px">
                    <input class="btn btn-primary" id="btnAddNewStudent" type="submit" name="submit" value ='Add new
                    Student'>
                </div>
            </form>
        </div>
    </div>
</div>
