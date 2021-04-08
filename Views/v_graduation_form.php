<?php
include "v_masterPage_header.php";
include "v_masterPage_sidebar.php";

if(isset($_POST['student_id'])){
    $id = $_POST['student_id'];
}else{
    $id="";
}
?>


<!-- Graduation Section -->
  <div class="container" id="mainContent" style="padding-top: 20px; margin-left:50px;">
    <div class="row">
      <div class="col-xs-12">
        <h2 id="formTitle">Graduation</h2>
        <!--Form starts-->
        <form class="col-lg-8" action="?action=c_add_grad" method="POST">
          <div class="form-group">
              <label for="student_id">Student ID:</label><br>
              <input class="form-control" type="number" name="student_id" placeholder="Enter student ID"
                     value="<?=$id?>" required="required">
          </div>
          <div class="form-group" style="padding-top: 20px">
                    <label for="phone">Program ID:</label>
                    <select class="form-control" name="prog_id" id="programID">
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
          <!--tuition paid in full radio button-->
          <div class="form-group" style="padding-top: 20px">
              <label for="tuitionPaid">Tuition Paid in Full:</label>
                <div name="tuition_Paid" id="tuitionPaid" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="tuition_paid" id="tuitionPaid" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="tuition_paid" id="tuitionPaid" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--official transcript issued radio button-->
          <div class="form-group" style="padding-top: 20px">
              <label for="officialTranscript">Official Student Transcript Issued:</label>
                <div  id="officialTranscript" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="official_transcript" id="officialTranscript" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="official_transcript" id="officialTranscript" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--official completion letter issued radio button-->
          <div class="form-group" style="padding-top: 20px">
              <label for="officialCompletionLetter">Official Completion Letter Issued:</label>
                <div name="official_Completion_Letter" id="officialCompletionLetter" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="completion_letter" id="officialCompletionLetter" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="completion_letter" id="officialCompletionLetter" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--copy of signed diploma issued radio button-->
          <div class="form-group" style="padding-top: 20px">
              <label for="copyOfSignedDiploma">Copy of signed Diploma Issued:</label>
                <div name="copy_Of_Signed_Diploma" id="copyOfSignedDiploma" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="signed_diploma" id="copyOfSignedDiploma" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="signed_diploma" id="copyOfSignedDiploma" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--tax form issued radio button-->
          <div class="form-group" style="padding-top: 20px">
              <label for="copyOfT2202A">Copy of T2202A (Tax Form) Issued:</label>
                <div name="T2202A" id="copyOfT2202A" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="T2202A" id="copyOfT2202A" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="T2202A" id="copyOfT2202A" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--board exam date-->
          <div id="rmtOnlyExamDt" class="form-group" style="padding-top: 20px; display: none;"> 
            <label class="control-label" for="boardExamDate">Board Exam Date:</label>
            <input type="datetime-local" class="form-control" name="exam_date" id="boardExamDate"/>
          </div>
          <!--employment follow up notes-->
          <div class="form-group" style="padding-top: 20px">
            <label for="employmentFollowUp">Employment Follow Up:</label>
            <textarea type="text" class="form-control" name="employment" id="employmentFollowUp" rows="5"></textarea>
          </div>
          <!--submit button-->
          <div class="form-group" style="padding-top: 20px; padding-bottom: 10px">
              <input type="submit" name="add_grad" class="btn btn-primary" value="ADD">
          </div>
      </form>
    </div>
  </div>
</div>
<!--JS code show different section based on the program selection-->
<script type="text/javascript">
    $(document).ready(function(){
        $("#programID").on('change', function() {
            if ( this.value == 'RMT'){
                $("#rmtOnlyExamDt").show();
            }else{
                $("#rmtOnlyExamDt").hide();
            }
        });
    });
</script>