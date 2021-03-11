<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>

<div class="container" id="mainContent" style="padding-top: 20px">
    <div class="row">
        <div class="col-xs-12">
            <h2 style="padding-top: 10px">Admission Prior to Start Date</h2>
            <!--Form starts-->
            <form class="col-lg-8" action="?action=c_add_apsds" method="POST">
                <!--id-->
                <div class="form-group">
                    <label for="student_id">STUDENT ID</label><br>
                    <input class="form-control" type="number" name="student_id" value="" required="required">
                </div>
                <!--photo id radio button-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="photoID">Photo ID:</label>
                    <div name="photo_id" id="photoID" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="photo_id" id="photoID" value="yes" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="photo_id" id="photoID" value="no" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--application form received notes-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="appForm">Application Form:</label>
                    <input type="text" name="app_form" class="form-control" id="appForm"/>
                </div>
                <!--application fee notes-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="appFee">Application Fee with Paid Invoice:</label>
                    <input type="text" name="app_fee" class="form-control" id="appFee"/>
                </div>
                <!--application essay radio button-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="appEssay">Application Essay:</label>
                    <div id="appEssay" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="app_essay" id="appEssay" value="yes" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="app_essay" id="appEssay" value="no" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--reference letters notes-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="refLetters">Character Reference Letters:</label>
                    <input type="text" name="refer_letter" class="form-control" id="refLetters"/>
                </div>
                <!--resume radio button-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="resume">Resume:</label>
                    <div name="resume" id="resume" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="resume" id="resume" value="yes" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="resume" id="resume" value="no" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--intro to massage date & time day 1 -->
                <div class="form-group" style="padding-top: 20px">
                    <label class="control-label" for="introOfMsgDay1">Intro of Massage Course Day One:</label>
                    <div name="intro_of_msg" id="introOfMsgDay1" class="row" style="padding-top: 10px">
                        <!---from_datetimePicker-->
                        <div class="col-sm-6">
                            <label class="control-label" id="introOfMsgDay1From">From:</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="datetime-local" class="form-control" name="intro_of_msg_day1_from"
                                   id="introOfMsgDay1From">
                        </div>
                        <!---to_datetimePicker-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label class="control-label" id="introOfMsgDay1To">To:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
                            <input type="datetime-local" class="form-control" name="intro_of_msg_day1_to" id="introOfMsgDay1To">
                        </div>
                    </div>
                </div>
                <!--intro to massage date & time day 2 -->
                <div class="form-group" style="padding-top: 20px">
                    <label class="control-label" for="introOfMsgDay2">Intro of Massage Course Day Two:</label>
                    <div name="intro_of_msg" id="introOfMsgDay2" class="row" style="padding-top: 10px">
                        <!---from_datetimePicker-->
                        <div class="col-sm-6">
                            <label class="control-label" id="introOfMsgDay2From">From:</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="datetime-local" class="form-control" name="intro_of_msg_day2_from"
                                   id="introOfMsgDay2From">
                        </div>
                        <!---to_datetimePicker-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label class="control-label" id="introOfMsgDay2To">To:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
                            <input type="datetime-local" class="form-control" name="intro_of_msg_day2_to" id="introOfMsgDay2To">
                        </div>
                    </div>
                </div>
                <!--intro to massage fee notes-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="introFee">Intro of Massage Fee with Paid Invoice:</label>
                    <input type="text" name="intro_Fee" class="form-control" id="introFee"/>
                </div>
                <!--intro to massage completed notes -->
                <div class="form-group" style="padding-top: 20px">
                    <label for="introToMassageComp">Intro of Massage Course Completed:</label>
                    <input type="text" name="intro_msg_complete" class="form-control" id="introToMassageComp"/>
                </div>
                <!--welcome letter radio button-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="welcomeLetter">Welcome Letter Sent:</label>
                    <div name="welcome_Letter" id="welcomeLetter" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="welcome_Letter" id="welcomeLetter" value="yes" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="welcome_Letter" id="welcomeLetter" value="no" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--english test result notes -->
                <div class="form-group" style="padding-top: 20px">
                    <label for="engTestResult">English Test Result:</label>
                    <input type="text" name="eng_test_result" class="form-control" id="engTestResult"/>
                </div>
                <!--CRC result notes -->
                <div class="form-group" style="padding-top: 20px">
                    <label for="CRCResult">CRC Result:</label>
                    <input type="text" name="crc_result" class="form-control" id="CRCResult"/>
                </div>
                <!--medical notes radio button-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="medicalNotes">Medical Notes from Physician:</label>
                    <div name="medical_Notes" id="medicalNotes" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="medical_notes" id="medicalNotes" value="yes" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">

                                <input name="medical_notes" id="medicalNotes" value="no" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--interview date & time -->
                <div class="form-group" style="padding-top: 20px">
                    <label class="control-label" for="interviewDateandTime">Interview Date & Time:</label>
                    <input type="datetime-local" class="form-control" id="interviewDateandTime" name="interview_date"/>
                </div>
                <!--interview approved radio button-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="interviewApproved">Interview Approved:</label>
                    <div name="interview_Approved" id="interviewApproved" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="interview_approved" id="interviewApproved" value="yes" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="interview_approved" id="interviewApproved" value="no" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--high school diploma & transcript notes -->
                <div class="form-group" style="padding-top: 20px">
                    <label for="diplomaAndTranscript">High School Diploma & Transcript (Or Above):</label>
                    <input type="text" name="dips_and_trans" class="form-control" id="diplomaAndTranscript"/>
                </div>
                <!--student email -->
                <div class="form-group" style="padding-top: 20px">
                    <label for="stuEmail">Student Email:</label>
                    <input type="text" name="stu_email" class="form-control" id="stuEmail"/>
                </div>
                <div class="form-group" style="padding-top: 20px">
                    <label class="control-label" for="acceptLetterDate">Letter of Acceptance Issued Date:</label>
                    <input type="date" class="form-control" id="acceptLetterDate" name="accept_letter_date"/>
                </div>
                <!--enrollment contract notes -->
                <div class="form-group" style="padding-top: 20px">
                    <label for="enrollContract">Enrollment Contract:</label>
                    <input type="text" name="enroll_contract" class="form-control" id="enrollContract"/>
                </div>
                <!--Handbooks notes -->
                <div class="form-group" style="padding-top: 20px">
                    <label for="HandbooksNotes">Student Handbooks:</label>
                    <textarea type="text" class="form-control" name="handbook_notes" id="HandbooksNotes"
                              rows="5"></textarea>
                </div>
                <!--payment options-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="payOptions">Payment Options:</label>
                    <select class="form-control" name="pay_option" id="payOptions" onChange="check();">
                        <option value="Student Aid BC">Student Aid BC</option>
                        <option value="Full Payment">Full Payment</option>
                        <option value="Monthly Payment">Monthly Payment</option>
                        <option value="Payment Plan">Payment Plan</option>
                        <option value="Others">Others</option>
                    </select>
                    <div id="otherPayOptions" style="display:none; padding-top: 10px">
                        <label>Enter Payment Method:
                            <input type="text" id="otherInput" name='pay_option' class="form-control">
                        </label>
                    </div>
                </div>
                <!--ackmowledgement & agreemtnt form received date-->
                <div class="form-group" style="padding-top: 20px">
                    <label class="control-label" for="ackAndAgrForm">Ackmowledgement & Agreemtnt Form Received
                        Date:</label>
                    <input type="date" class="form-control" id="ackAndAgrForm" name="ack_and_agr"/>
                </div>
                <!--student id card issued radio button-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="stuID">Student ID Card Issued:</label>
                    <div id="stuID" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="received_card" id="stuID" value="yes" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="receive_card" id="stuID" value="no" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--RMT students material muulti select-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="rmtStuMaterials">RMT Student Learning Materials:</label>
                    <div style="color:red; font-size:10px;">
                        <p>To choose multiple values:</p>
                        <ul>
                            <li>hold <strong>Ctrl</strong> key if you are using Windows</li>
                            <li>hold <strong>Command</strong> key if you are using Macbook</li>
                        </ul>
                    </div>
                    <select class="form-control" name="rmt_stu_materials[]" id="rmtStuMaterials" multiple>
                        <option value="Sheet Set">Sheet Set</option>
                        <option value="Laptop or Learning Support">Laptop/Electronic Learning Support</option>
                        <option value="Goniometer">Goniometer</option>
                        <option value="Oil Holster">Oil Holster</option>
                        <option value="Bottle">Bottle</option>
                    </select>
                </div>
                <!--submit button-->
                <div class="form-group" style="padding-top: 20px; padding-bottom: 10px">
                    <input type="submit" name='add_apsds' value='ADD' class="btn
              		btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
