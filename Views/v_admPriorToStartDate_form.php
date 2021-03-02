<?php
include "v_masterPage_header.php";
?>

<div class="container" style="padding-top: 20px">
    <div class="row">
        <div class="col-xs-12">
            <h2 style="padding-top: 10px">Admission Prior to Start Date</h2>
            <!--Form starts-->
            <form action="" method="">
            	<!--photo id radio button-->
            	<div class="form-group" style="padding-top: 20px">
                    <label for="photoID">Photo ID:</label>
                    <div name="photo_ID" id="photoID" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="photo_id" id="photoID" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="photo_ID" id="photoID" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--application form received notes-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="appForm">Application Form:</label>
                    <input type="text" name="app_Form" class="form-control" id="appForm"/>
                </div>
                <!--application fee notes-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="appFee">Application Fee with Paid Invoice:</label>
                    <input type="text" name="app_Fee" class="form-control" id="appFee"/>
                </div>
                <!--application essay radio button-->
            	<div class="form-group" style="padding-top: 20px">
                    <label for="appEssay">Application Essay:</label>
                    <div name="app_Essay" id="appEssay" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="app_Essay" id="appEssay" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="app_Essay" id="appEssay" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--reference letters notes-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="refLetters">Character Reference Letters:</label>
                    <input type="text" name="ref_Letters" class="form-control" id="refLetters"/>
                </div>
                <!--resume radio button-->
            	<div class="form-group" style="padding-top: 20px">
                    <label for="resume">Resume:</label>
                    <div name="resume" id="resume" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="resume" id="resume" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="resume" id="resume" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--intro to massage date & time -->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="introToMassageDateandTime">Intro of Massage Course Date & Time:</label>
            		<input type="text" class="form-control" id="introToMassageDateandTime" name="intro_To_Massage_Date_and_Time" placeholder="MONTH DD - DD, YYYY"/>
          		</div>
          		<!--intro to massage fee notes-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="introFee">Intro of Massage Fee with Paid Invoice:</label>
                    <input type="text" name="intro_Fee" class="form-control" id="introFee"/>
                </div>
                <!--intro to massage completed notes -->
          		<div class="form-group" style="padding-top: 20px"> 
          			<label for="introToMassageComp">Intro of Massage Course Completed:</label>
                    <input type="text" name="intro_To_Massage_Comp" class="form-control" id="introToMassageComp"/>
          		</div>
          		<!--welcome letter radio button-->
            	<div class="form-group" style="padding-top: 20px">
                    <label for="welcomeLetter">Welcome Letter Sent:</label>
                    <div name="welcome_Letter" id="welcomeLetter" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="welcome_Letter" id="welcomeLetter" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="welcome_Letter" id="welcomeLetter" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--english test result notes -->
          		<div class="form-group" style="padding-top: 20px"> 
          			<label for="engTestResult">English Test Result:</label>
                    <input type="text" name="eng_Test_Result" class="form-control" id="engTestResult"/>
          		</div>
          		<!--CRC result notes -->
          		<div class="form-group" style="padding-top: 20px"> 
          			<label for="CRCResult">CRC Result:</label>
                    <input type="text" name="CRC_Result" class="form-control" id="CRCResult"/>
                </div>
                <!--medical notes radio button-->
            	<div class="form-group" style="padding-top: 20px">
                    <label for="medicalNotes">Medical Notes from Physician:</label>
                    <div name="medical_Notes" id="medicalNotes" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="medical_Notes" id="medicalNotes" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="medical_Notes" id="medicalNotes" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--interview date & time -->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="interviewDateandTime">Interview Date & Time:</label>
            		<input type="text" class="form-control" id="interviewDateandTime" name="interview_Date_and_Time" placeholder="MM/DD/YYYY 00:00"/>
          		</div>
          		<!--interview approved radio button-->
            	<div class="form-group" style="padding-top: 20px">
                    <label for="interviewApproved">Interview Approved:</label>
                    <div name="interview_Approved" id="interviewApproved" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="interview_Approved" id="interviewApproved" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="interview_Approved" id="interviewApproved" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--high school diploma & transcript notes -->
          		<div class="form-group" style="padding-top: 20px"> 
          			<label for="diplomaAndTranscript">High School Diploma & Transcript (Or Above):</label>
                    <input type="text" name="diploma_And_Transcript" class="form-control" id="diplomaAndTranscript"/>
                </div>
                <!--student email -->
          		<div class="form-group" style="padding-top: 20px"> 
          			<label for="stuEmail">Student Email:</label>
                    <input type="text" name="stu_Email" class="form-control" id="stuEmail"/>
          		</div>
          		<!--student number -->
          		<div class="form-group" style="padding-top: 20px"> 
          			<label for="stuNumber">Student Number:</label>
                    <input type="text" name="stu_Number" class="form-control" id="stuNumber"/>
          		</div>
          		<!--letter of acceptance date-->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="acceptLetterDate">Letter of Acceptance Issued Date:</label>
            		<input type="date" class="form-control" id="acceptLetterDate" name="accept_Letter_Date" placeholder="MM/DD/YYYY"/>
          		</div>
          		<!--enrollment contract notes -->
          		<div class="form-group" style="padding-top: 20px"> 
          			<label for="enrollContract">Enrollment Contract:</label>
                    <input type="text" name="enroll_Contract" class="form-control" id="enrollContract"/>
          		</div>
          		<!--Handbooks notes -->
          		<div class="form-group" style="padding-top: 20px">
                    <label for="HandbooksNotes">Student Handbooks:</label>
                    <textarea type="text" class="form-control" name="Handbooks_Notes" id="HandbooksNotes" rows="5"></textarea>
                </div>
                <!--payment options-->
          		<div class="form-group" style="padding-top: 20px">
            		<label for="payOptions">Payment Options:</label>
              		<select class="form-control" name="pay_Options" id="payOptions">
                		<option>Student Aid BC</option>
                		<option>Full Payment</option>
                		<option>Monthly Payment</option>
                		<option>Payment Plan</option>
                		<option>Others</option>
              		</select>
          		</div>
          		<!--ackmowledgement & agreemtnt form received date-->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="ackAndAgrForm">Ackmowledgement & Agreemtnt Form Received Date:</label>
            		<input type="date" class="form-control" id="ackAndAgrForm" name="ack_And_Agr_Form" placeholder="MM/DD/YYYY"/>
          		</div>
          		<!--student id radio button-->
            	<div class="form-group" style="padding-top: 20px">
                    <label for="stuID">Student ID Issued:</label>
                    <div name="stu_ID" id="stuID" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="stu_ID" id="stuID" type="radio"/> YES
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="stu_ID" id="stuID" type="radio"/> NO
                            </label>
                        </div>
                    </div>
                </div>
                <!--RMT students material checkbox-->
				<div class="form-group" style="padding-top: 20px">
                    <label for="rmtStuMaterials">RMT Student Learning Materials:</label>
                    	<!--sheet set-->
                		<div class="form-check form-check-inline">
  							<input class="form-check-input" type="checkbox" id="rmtStuMaterials" value="option1">
  							<label class="form-check-label" for="rmtStuMaterials">Sheet Set</label>
						</div>
						<!--laptop/Electronic Learning Support-->
						<div class="form-check form-check-inline">
  							<input class="form-check-input" type="checkbox" id="rmtStuMaterials" value="option2">
  							<label class="form-check-label" for="rmtStuMaterials">Laptop/Electronic Learning Support</label>
						</div>
						<!--goniometer-->
						<div class="form-check form-check-inline">
  							<input class="form-check-input" type="checkbox" id="rmtStuMaterials" value="option3">
  							<label class="form-check-label" for="rmtStuMaterials">Goniometer</label>
						</div>
						<!--oil holster-->
						<div class="form-check form-check-inline">
  							<input class="form-check-input" type="checkbox" id="rmtStuMaterials" value="option4">
  							<label class="form-check-label" for="rmtStuMaterials">Oil Holster</label>
						</div>
						<!--bottle-->
						<div class="form-check form-check-inline">
  							<input class="form-check-input" type="checkbox" id="rmtStuMaterials" value="option5">
  							<label class="form-check-label" for="rmtStuMaterials">Bottle</label>
						</div>
				</div>
				<!--submit button-->
            	<div class="form-group" style="padding-top: 20px; padding-bottom: 10px">
              		<button type="submit" class="btn btn-primary">Submit</button>
            	</div>
            </form>
        </div>
    </div>
</div>