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
        <form class="col-lg-8" action="?action=c_add_ppes" method="POST">
            <div class="form-group">
                <label for="student_id">Student ID</label><br>
                <input class="form-control" type="number" name="student_id" placeholder="Enter student ID"
                       required="required">
            </div>
             <div class="form-group" style="padding-top: 20px">
                    <label for="phone">Program ID</label>
                    <select class="form-control" id="programID" value="">
                        <option>-- Select one --</option>
<?php
$options = $model->select('programs', NULL);
foreach ($options as $op):
?>
                            <option values="<?= $op['id'] ?>"><?= $op['id'] . " -- " . $op['prog_name'] ?></option>
<?php
  endforeach;
?>
                    </select>
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
            <label for="FirstAidandCPRCertificateReceiveDate">Certificate of First Aid & CPR Receive Date:</label>
            <input type="date" class="form-control" id="FirstAidandCPRCertificateReceiveDate" name="cert_fa_cpr_receive"/>
          </div>
          <!--foodsafe date & time (need to add to db)-->
          <div class="form-group" style="padding-top: 20px">
            <label class="control-label" for="foodsafeDateandTime">FoodSafe Date & Time:</label>
            <input type="datetime-local" class="form-control" id="foodsafeDateandTime" name="foodsafe_dt"/>
          </div>
          <!--foodsafe location & contact (need to add to db)-->
          <div class="form-group" style="padding-top: 20px">
            <label for="foodsafeLocandContact">FoodSafe Location & Contact: </label>
            <textarea type="text" class="form-control" id="foodsafeLocandContact" name="foodsafe_contact"
                      rows="3"></textarea>
          </div>
          <!--certificate of foodsafe received date (need to add to db)-->
          <div class="form-group" style="padding-top: 20px">
            <label for="foodsafeCertificateReceiveDate">Certificate of FoodSafe Receive Date:</label>
            <input type="date" class="form-control" id="foodsafeCertificateReceiveDate" name="cert_foodsafe_receive"/>
          </div>
          <!--CRC received date (need to add to db)-->
          <div class="form-group" style="padding-top: 20px">
            <label for="crcReceiveDate">Criminal Record Check Receive Date:</label>
            <input type="date" class="form-control" id="crcReceiveDate" name="crc_receive"/>
          </div>
          <!--SPECO radio button (need to add to db)-->
          <div class="form-group" style="padding-top: 20px">
            <label for="speco">SPECO:</label>
              <div id="speco" class="row" style="padding-top: 10px">
                <div class="col-sm-6">
                  <label class="radio-inline">
                  <input name="speco" id="speco" value="yes" type="radio"/>
                      YES</label>
                 </div>
                <div class="col-sm-6">
                  <label class="radio-inline">
                  <input name="speco" id="speco" value="no" type="radio"/>
                      NO</label>
                </div>
              </div>
          </div>
          <!--clinic handbook receive date (changed name)-->
          <div class="form-group" style="padding-top: 20px">
            <label class="control-label" for="ClinicHankbookReceiveDate">Clinic Hankbook Receive Date:</label>
            <input type="date" class="form-control" id="ClinicHankbookReceiveDate" name="cli_handbook_receive"/>
          </div>
          <!--clinic acknowledgement and agreement form signed (changed name)-->
          <div class="form-group" style="padding-top: 20px">
            <label for="ClinicAckAndAgrFormSigned">Acknowledgement and Agreement Form Signed:</label>
              <div id="ClinicAckAndAgrFormSigned" class="row" style="padding-top: 10px">
                <div class="col-sm-6">
                  <label class="radio-inline">
                  <input name="cli_ack_and_agr" id="ClinicAckAndAgrFormSigned" value="yes" type="radio"/>
                      YES</label>
                 </div>
                <div class="col-sm-6">
                  <label class="radio-inline">
                  <input name="cli_ack_and_agr" id="ClinicAckAndAgrFormSigned" value="no" type="radio"/>
                      NO</label>
                </div>
              </div>
          </div>
          <!--medical file received radio button-->
            <div class="form-group" style="padding-top: 20px">
              <label for="MedicalFileReceived">Medical File (Vaccinations) Received:</label>
                <div name="Medical_File_Received" id="MedicalFileReceived" class="row" style="padding-top: 10px">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="medical_file" id="MedicalFileReceived" value="yes" type="radio"/>
                        YES</label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                    <input name="medical_file" id="MedicalFileReceived" value="no" type="radio"/>
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

