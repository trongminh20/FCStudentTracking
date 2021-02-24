<?php
include "v_masterPage_header.php";

?>
<?php
include "v_masterPage_sidebar.php";
?>

  <div class="container" style="padding-top: 20px">
    <div class="row">
      <div class="col-xs-12">
        <h2 style="text-align: center; padding-top: 10px">Enrollment Brief Summary</h2>
        <!--Form starts-->
        <form action="" method="">
          <!--phone number-->
          <div class="form-group" style="padding-top: 20px">
            <label for="phone">Contact Number:</label>
            <input name="phone" class="form-control" id="phone"/>
          </div>
          <!--email-->
          <div class="form-group" style="padding-top: 20px">
            <label for="Email">Email Address:</label>
            <input name="Email" class="form-control" id="email"/>
          </div>
          <!--dom or int student radio button-->
          <div class="form-group" style="padding-top: 20px">
              <label for="DomORInt">Domestic OR International:</label>
                <div id="DomORInt" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="Dom_OR_Int" id="DomORInt" type="radio"/> Domestic</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="Dom_OR_Int" id="DomORInt" type="radio"/> International</label>
                  </div>
                </div>
          </div>
          <!--enrollment notes-->
          <div class="form-group" style="padding-top: 20px">
            <label for="emrollmentNotes">Emrollment Notes:</label>
            <textarea name="Enroll_Notes" class="form-control" id="emrollmentNotes" rows="5"></textarea>
          </div>
          <!--submit button-->
          <div class="form-group" style="padding-top: 20px">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
