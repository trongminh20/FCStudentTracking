<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>

<div class="container" style="padding-top: 20px">
    <div class="row">
        <div class="col-xs-12">
            <h2 style="padding-top: 70px">Admission Prior to Start Date</h2>
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
                  <div name="intro_To_Massage_Date_and_Time" id="introToMassageDateandTime" class="row" style="padding-top: 10px">
                    <!--from_textDisplay-->
                    <div class="col-sm-6">
                      <label for="from" class="sr-only">From:</label>
                      <input type="text" readonly class="form-control-plaintext" name="from" id="from" value="From:">
                    </div>
                    <!---from_datetimePicker-->
                    <div class="col-sm-6">
                      <input type="datetime-local" class="form-control" name="from" id="from">
                    </div>
                    <!--to_textDisplay-->
                    <div class="col-sm-6" style="padding-top: 10px">
                      <label for="to" class="sr-only">To:</label>
                      <input type="text" readonly class="form-control-plaintext" name="to" id="to" value="To:">
                    </div>
                    <!---to_datetimePicker-->
                    <div class="col-sm-6" style="padding-top: 10px">
                      <input type="datetime-local" class="form-control" name="to" id="to">
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
            		<input type="datetime-local" class="form-control" id="interviewDateandTime" name="interview_Date_and_Time"/>
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
            		<input type="datetime-local" class="form-control" id="acceptLetterDate" name="accept_Letter_Date"/>
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
              		<select class="form-control" name="pay_Options" id="payOptions" onChange="check();">
                		<option value="studentAidBC">Student Aid BC</option>
                		<option value="fullPayment">Full Payment</option>
                		<option value="monthlyPayment">Monthly Payment</option>
                		<option value="paymentPlan">Payment Plan</option>
                		<option value="others">Others</option>
              		</select>
                  <div id="otherPayOptions" style="display:none; padding-top: 10px">
                    <label>Enter Payment Method:
                      <input type="text" id="otherInput" class="form-control"></input>
                    </label>
                  </div>
          		</div>
          		<!--ackmowledgement & agreemtnt form received date-->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="ackAndAgrForm">Ackmowledgement & Agreemtnt Form Received Date:</label>
            		<input type="datetime-local" class="form-control" id="ackAndAgrForm" name="ack_And_Agr_Form"/>
          		</div>
          		<!--student id card issued radio button-->
            	<div class="form-group" style="padding-top: 20px">
                    <label for="stuID">Student ID Card Issued:</label>
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
              <!--RMT students material muulti select-->
				      <div class="form-group" style="padding-top: 20px">
                <label for="rmtStuMaterials">RMT Student Learning Materials:</label>
                <select class="form-control" name="rmt_Stu_Materials" id="rmtStuMaterials" multiple>
                    <option>Sheet Set</option>
                    <option>Laptop/Electronic Learning Support</option>
                    <option>Goniometer</option>
                    <option>Oil Holster</option>
                    <option>Bottle</option>
                </select>
				      </div>
				      <!--submit button-->
            	<div class="form-group" style="padding-top: 20px; padding-bottom: 10px">
              		<button type="submit" class="btn btn-primary">Submit</button>
            	</div>
            </form>
        </div>
    </div>
</div>
