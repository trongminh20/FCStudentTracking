<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prior to Practice Education Form</title>
    <link rel="stylesheet" href="css/css_reset.css"/>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<!-- Prior to Practice Education Section -->
<body>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 style="text-align: center;">Prior to Practice Education</h2>
        <form action="" method="">
          <div class="form-group" style="padding-top: 20px">
            <div class="col-sm-6">
              <label for="nameTag">Name Tag:</label>
                <div id="nameTag" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input id="yes" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input id="no" value="no" type="radio"/> NO</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <label for="clinicShirtSize">Clinic Shirt Size:</label>
              <select class="form-control" id="clinicShirtSize">
                <option>Extra Small</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>Extra Large</option>
              </select>  
          </div>
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="shirtOrderDate">Order Date:</label>
            <input class="form-control" id="shirtOrderDate" name="shirtOrderDate" placeholder="MM/DD/YYYY" type="text"/>
          </div>
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="pickUpDate">Pick-up Date:</label>
            <input class="form-control" id="pickUpDate" name="pickUpDate" placeholder="MM/DD/YYYY" type="text"/>
          </div>
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="first-aid&CPR_date&time">First Aid & CPR Date & Time:</label>
            <input class="form-control" id="first-aid&CPR_date&time" name="first-aid&CPR_date&time" placeholder="MM/DD/YYYY 00:00" type="text"/>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <label for="first-aid&CPR_loc&contact">First Aid & CPR Location & Contact: </label>
            <textarea class="form-control" id="first-aid&CPR_loc&contact" rows="3"></textarea>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <label for="certificateReceiveMark">Certificate Receive Mark:</label>
            <input type="mark" class="form-control" id="certificateReceiveMark"/>
          </div>
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="hankbookReceiveDate">Hankbook Receive Date:</label>
            <input class="form-control" id="hankbookReceiveDate" name="hankbookReceiveDate" placeholder="MM/DD/YYYY" type="text"/>
          </div>
          <div class="form-group" style="padding-top: 20px">
            <div class="col-sm-6">
              <label for="acknowledgement&agreement_signed">Acknowledgement and Agreement Form Signed:</label>
                <div id="acknowledgement&agreement_signed" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input id="yes" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input id="no" value="no" type="radio"/> NO</label>
                  </div>
                </div>
            </div>
            <div class="form-group" style="padding-top: 20px">
            <div class="col-sm-6">
              <label for="medicalFileReceived">Medical File (Vaccinations) Received:</label>
                <div id="acknowledgement&medicalFileReceived" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input id="yes" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input id="no" value="no" type="radio"/> NO</label>
                  </div>
                </div>
            </div>
            <div class="form-group" style="padding-top: 20px">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</body>
