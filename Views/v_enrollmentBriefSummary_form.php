<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>

<!-- Enrollment Brief Summary Section -->

  <div class="container" style="padding-top: 20px">
    <div class="row" style="background-color: white; border-radius: 10px !important">
      <div class="col-xs-12">
        <h2 style="text-align: center; padding-top: 10px">Enrollment Brief Summary</h2>
        <form action="" method="">
          <div class="form-group" style="padding-top: 20px">
            <label for="contactNumber">Contact Number:</label>
            <input type="contactNumber" class="form-control" id="contactNumber"/>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <label for="emailAddress">Email Address:</label>
            <input type="emailAddress" class="form-control" id="emailAddress"/>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <div class="col-sm-6">
              <label for="D_or_I">Domestic OR International:</label>
                <div id="D_or_I" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="student_type" id="domesticStudent" value="domesticStudent" type="radio"/> Domestic</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="student_type" id="internationalStudent" value="internationalStudent" type="radio"/> International</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <label for="emrollmentNotes">Emrollment Notes:</label>
            <textarea class="form-control" id="emrollmentNotes" rows="5"></textarea>
          </div>
          <div class="form-group" style="padding-top: 20px; padding-bottom: 10px">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
