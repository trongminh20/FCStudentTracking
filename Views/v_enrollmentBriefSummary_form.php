<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Enrollment Brief Summary Form</title>
    <link rel="stylesheet" href="css/css_reset.css"/>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<!-- Enrollment Brief Summary Section -->
<body style="background-color: #f2f2f2">
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
</body>