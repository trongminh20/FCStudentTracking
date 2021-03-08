<?php
include "v_masterPage_header.php";
include "v_masterPage_sidebar.php";
?>

<!-- Prior to Practice Education Section -->
  <div class="container" id="mainContent" style="padding-top: 20px">
    <div class="row">
      <div class="col-xs-12">
        <h2 style="padding-top: 10px">Prior to Practice Education</h2>
        <!--Form starts-->
        <form action="?action=c_add_ppes" method="POST">
            <div class="form-group">
                <label for="student_id">Student ID</label><br>
                <input type="number" name="student_id" placeholder="Enter student ID" required="required">
            </div>
          <!--name tag -->
          <div class="form-group" style="padding-top: 20px">
              <label for="NameTag">Name Tag:</label>
                <div id="NameTag" name="name_tag" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="name_tag" id="NameTag" value="yes" type="radio"/> YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="name_tag" id="NameTag" value="no" type="radio"/> NO</label>
                  </div>
                </div>
          </div>
          <!--clinic shirt size-->
          <div class="form-group" style="padding-top: 20px">
            <label for="ClinicShirtSize">Clinic Shirt Size:</label>
              <select class="form-control" name="clinic_shirt_size" id="ClinicShirtSize">
                <option value="Extra Small">Extra Small</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Extra Large">Extra Large</option>
              </select>  
          </div>
          <!--shirt order date-->
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="shirtOrderDate">Order Date:</label>
            <input type="date" class="form-control" name="order_date" id="ShirtOrderDate" name="shirt_Order_Date"/>
          </div>
          <!--pick up date-->
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="pickUpDate">Pick-up Date:</label>
            <input type="date" class="form-control" id="PickUpDate" name="pickup_date"/>
          </div>
          <!--first aid & cpr date & time -->
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="FirstAidandCPRDateandTime">First Aid & CPR Date & Time:</label>
            <input type="datetime-local" class="form-control" id="FirstAidandCPRDateandTime" name="fa_and_cpr_dt"/>
          </div>
          <!--first aid & cpr location & contact -->
          <div class="form-group" style="padding-top: 20px">
            <label for="FirstAidandCPRLocandContact">First Aid & CPR Location & Contact: </label>
            <textarea type="text" class="form-control" id="FirstAidandCPRLocandContact" name="fa_and_cpr_contact"
                      rows="3"></textarea>
          </div>
          <!--certificate of first aid & cpr received date-->
          <div class="form-group" style="padding-top: 20px">
            <label for="CertificateReceiveDate">Certificate of First Aid & CPR Receive Date:</label>
            <input type="date" class="form-control" id="CertificateReceiveDate" name="cert_fa_cpr_receive"/>
          </div>
          <!--handbook receive date-->
          <div class="form-group" style="padding-top: 20px"> 
            <label class="control-label" for="HankbookReceiveDate">Hankbook Receive Date:</label>
            <input type="date" class="form-control" id="HankbookReceiveDate" name="handbook_receive"/>
          </div>
          <!--acknowledgement and agreement form signed -->
          <div class="form-group" style="padding-top: 20px">
            <label for="AcknowledgementAndAgreementSigned">Acknowledgement and Agreement Form Signed:</label>
              <div id="AcknowledgementAndAgreementSigned" class="row" style="padding-top: 10px">
                <div class="col-sm-6">
                  <label class="radio-inline">
                  <input name="ack_and_agr" id="AcknowledgementAndAgreementSigned" value="yes" type="radio"/>
                      YES</label>
                 </div>
                <div class="col-sm-6">
                  <label class="radio-inline">
                  <input name="ack_and_agr" id="AcknowledgementAndAgreementSigned" value="no" type="radio"/>
                      NO</label>
                </div>
              </div>
          </div>
          <!--medical file received-->
            <div class="form-group" style="padding-top: 20px">
              <label for="AcknowledgementAndMedicalFileReceived">Medical File (Vaccinations) Received:</label>
                <div name="acknowledgement_And_Medical_File_Received" id="AcknowledgementAndMedicalFileReceived" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="medical_file" id="AcknowledgementAndMedicalFileReceived" value="yes" type="radio"/>
                        YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="medical_file" id="AcknowledgementAndMedicalFileReceived" value="no" type="radio"/>
                        NO</label>
                  </div>
                </div>
            </div>
            <!--submit button-->
            <div class="form-group" style="padding-top: 20px; padding-bottom: 10px">
              <input type="submit" name="add_ppes" class="btn btn-primary" value="ADD">
            </div>
        </form>
      </div>
    </div>
  </div>
  