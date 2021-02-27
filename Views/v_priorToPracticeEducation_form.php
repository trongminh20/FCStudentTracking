<?php
include "v_masterPage_header.php";
?>

<!-- Prior to Practice Education Section -->
  <div class="container" style="padding-top: 20px">
    <div class="row">
      <div class="col-xs-12">
        <h2 style="padding-top: 10px">Prior to Practice Education</h2>
        <!--Form starts-->
        <form action="" method="">
          <!--name tag -->
          <div class="form-group" style="padding-top: 20px">
              <label for="NameTag">Name Tag:</label>
                <div id="NameTag" name="name_Tag" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="name_Tag" id="NameTag" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="name_Tag" id="NameTag" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--clinic shirt size-->
          <div class="form-group" style="padding-top: 20px">
            <label for="ClinicShirtSize">Clinic Shirt Size:</label>
              <select class="form-control" name="clinic_Shirt_Size" id="ClinicShirtSize">
                <option>Extra Small</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>Extra Large</option>
              </select>  
          </div>
          <!--shirt order date-->
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="shirtOrderDate">Order Date:</label>
            <input class="form-control" id="ShirtOrderDate" name="shirt_Order_Date" placeholder="MM/DD/YYYY" type="text"/>
          </div>
          <!--pick up date-->
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="pickUpDate">Pick-up Date:</label>
            <input class="form-control" id="PickUpDate" name="pick_Up_Date" placeholder="MM/DD/YYYY" type="text"/>
          </div>
          <!--first aid & cpr date & time -->
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="FirstAidandCPRDateandTime">First Aid & CPR Date & Time:</label>
            <input class="form-control" id="FirstAidandCPRDateandTime" name="firstaid_and_CPR_Date_and_Time" placeholder="MM/DD/YYYY 00:00" type="text"/>
          </div>
          <!--first aid & cpr location & contact -->
          <div class="form-group" style="padding-top: 20px">
            <label for="FirstAidandCPRLocandContact">First Aid & CPR Location & Contact: </label>
            <textarea class="form-control" id="FirstAidandCPRLocandContact" name="firstaid_and_CPR_Loc_and_Contact" rows="3"></textarea>
          </div>
          <!--certificate receive mark-->
          <div class="form-group" style="padding-top: 20px">
            <label for="CertificateReceiveMark">Certificate Receive Mark:</label>
            <input type="mark" class="form-control" id="CertificateReceiveMark" name="certificate_Receive_Mark"/>
          </div>
          <!--handbook receive date-->
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="HankbookReceiveDate">Hankbook Receive Date:</label>
            <input class="form-control" id="HankbookReceiveDate" name="hankbook_Receive_Date" placeholder="MM/DD/YYYY" type="text"/>
          </div>
          <!--acknowledgement and agreement form signed -->
          <div class="form-group" style="padding-top: 20px">
            <label for="AcknowledgementAndAgreementSigned">Acknowledgement and Agreement Form Signed:</label>
              <div id="AcknowledgementAndAgreementSigned" name="acknowledgement_And_Agreement_Signed" class="row" style="padding-top: 10px">
                <div class="col-sm-6">
                  <label class="radio-inline">
                  <input name="acknowledgement_And_Agreement_Signed" id="AcknowledgementAndAgreementSigned" value="yes" type="radio"/> YES</label>
                 </div>
                <div class="col-sm-6">
                  <label class="radio-inline">
                  <input name="acknowledgement_And_Agreement_Signed" id="AcknowledgementAndAgreementSigned" value="no" type="radio"/> NO</label>
                </div>
              </div>
          </div>
          <!--medical file received-->
            <div class="form-group" style="padding-top: 20px">
              <label for="AcknowledgementAndMedicalFileReceived">Medical File (Vaccinations) Received:</label>
                <div name="acknowledgement_And_Medical_File_Received" id="AcknowledgementAndMedicalFileReceived" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="acknowledgement_And_Medical_File_Received" id="AcknowledgementAndMedicalFileReceived" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="acknowledgement_And_Medical_File_Received" id="AcknowledgementAndMedicalFileReceived" value="no" type="radio"/> NO</label>
                  </div>
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
  