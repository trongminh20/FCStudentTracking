<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Graduation Form</title>
    <link rel="stylesheet" href="css/css_reset.css"/>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<!-- Graduation Section -->
<body style="background-color: #f2f2f2">
  <div class="container" style="padding-top: 20px">
    <div class="row" style="background-color: white; border-radius: 10px !important">
      <div class="col-xs-12">
        <h2 style="text-align: center; padding-top: 10px">Graduation</h2>
        <form action="" method="">
          <div class="form-group" style="padding-top: 20px">
            <div class="col-sm-6">
              <label for="tuitionPaid">Tuition Paid in Full:</label>
                <div id="tuitionPaid" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="y-or-n" id="yes" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="y-or-n" id="no" value="no" type="radio"/> NO</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <div class="col-sm-6">
              <label for="officialTranscript">Official Student Transcript Issued:</label>
                <div id="officialTranscript" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="y-or-n" id="yes" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="y-or-n" id="no" value="no" type="radio"/> NO</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <div class="col-sm-6">
              <label for="officialCompletionLetter">Official Completion Letter Issued:</label>
                <div id="officialCompletionLetter" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="y-or-n" id="yes" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="y-or-n" id="no" value="no" type="radio"/> NO</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <div class="col-sm-6">
              <label for="copyOfSignedDiploma">Copy of signed Diploma Issued:</label>
                <div id="copyOfSignedDiploma" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="y-or-n" id="yes" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="y-or-n" id="no" value="no" type="radio"/> NO</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="boardExamDate">Board Exam Date:</label>
            <input class="form-control" id="boardExamDate" name="boardExamDate" placeholder="MM/DD/YYYY" type="text"/>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <div class="col-sm-6">
              <label for="copyOfT2202A">Copy of T2202A (Tax Form) Issued:</label>
                <div id="copyOfT2202A" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="y-or-n" id="yes" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="y-or-n" id="no" value="no" type="radio"/> NO</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <label for="emrollmentFollowUp">Emrollment Follow Up:</label>
            <textarea class="form-control" id="emrollmentFollowUp" rows="5"></textarea>
          </div>
          <div class="form-group" style="padding-top: 20px; padding-bottom: 10px">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>