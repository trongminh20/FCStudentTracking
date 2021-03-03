<?php
include "v_masterPage_header.php";
?>

<!-- Graduation Section -->
  <div class="container" style="padding-top: 20px">
    <div class="row">
      <div class="col-xs-12">
        <h2 style="padding-top: 10px">Graduation</h2>
        <!--Form starts-->
        <form action="" method="">
          <!--tuition paid in full radio button-->
          <div class="form-group" style="padding-top: 20px">
              <label for="tuitionPaid">Tuition Paid in Full:</label>
                <div name="tuition_Paid" id="tuitionPaid" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="tuition_Paid" id="tuitionPaid" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="tuition_Paid" id="tuitionPaid" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--official transcript issued radio button-->
          <div class="form-group" style="padding-top: 20px">
              <label for="officialTranscript">Official Student Transcript Issued:</label>
                <div name="official_Transcript" id="officialTranscript" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="official_Transcript" id="officialTranscript" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="official_Transcript" id="officialTranscript" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--official completion letter issued radio button-->
          <div class="form-group" style="padding-top: 20px">
              <label for="officialCompletionLetter">Official Completion Letter Issued:</label>
                <div name="official_Completion_Letter" id="officialCompletionLetter" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="official_Completion_Letter" id="officialCompletionLetter" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="official_Completion_Letter" id="officialCompletionLetter" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--copy of signed diploma issued radio button-->
          <div class="form-group" style="padding-top: 20px">
              <label for="copyOfSignedDiploma">Copy of signed Diploma Issued:</label>
                <div name="copy_Of_Signed_Diploma" id="copyOfSignedDiploma" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="copy_Of_Signed_Diploma" id="copyOfSignedDiploma" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="copy_Of_Signed_Diploma" id="copyOfSignedDiploma" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--board exam date-->
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="boardExamDate">Board Exam Date:</label>
            <input type="datetime-local" class="form-control" name="board_Exam_Date" id="boardExamDate"/>
          </div>
          <!--tax form issued radio button-->
          <div class="form-group" style="padding-top: 20px">
              <label for="copyOfT2202A">Copy of T2202A (Tax Form) Issued:</label>
                <div name="copy_Of_T2202A" id="copyOfT2202A" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="copy_Of_T2202A" id="copyOfT2202A" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="copy_Of_T2202A" id="copyOfT2202A" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--enrollment follow up notes-->
          <div class="form-group" style="padding-top: 20px">
            <label for="emrollmentFollowUp">Emrollment Follow Up:</label>
            <textarea type="text" class="form-control" name="emrollment_FollowUp" id="emrollmentFollowUp" rows="5"></textarea>
          </div>
          <!--submit button-->
          <div class="form-group" style="padding-top: 20px">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>