<?php
include "v_masterPage_header.php";
include "v_masterPage_sidebar.php";
?>

<!-- Prior to Practice Education Section -->
<div class="container" id="mainContent" style="padding-top: 20px; margin-left:50px;">
    <div class="row">
        <div class="col-xs-12">
            <h2 id="formTitle">Prior to Practice Education</h2>
            <!--Form starts-->
            <form class="col-lg-8" action="?action=c_add_ppes" method="POST">
                <div class="form-group">
                    <label for="student_id">Student ID:</label><br>
                    <input class="form-control" type="number" name="student_id" placeholder="Enter student ID"
                           required="required">
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
          <!--name tag -->
          <div id="RHCtag" class="form-group" style="padding-top: 20px;">
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
          <div id="RHUni" class="form-groupRH" style="padding-top: 20px; margin-bottom: 15px; display: none;">
            <label for="ClinicShirtSize">Clinic/Uniform Shirt Size:</label>
              <select class="form-control" name="clinic_shirt_size" id="ClinicShirtSize">
                <option value="Extra Small">Extra Small</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Extra Large">Extra Large</option>
              </select>
          </div>
          <!--shirt order date-->
          <div id="RHOrdDt" class="form-groupRH" style="padding-top: 20px; margin-bottom: 15px; display: none;">
            <label class="control-label" for="shirtOrderDate">Order Date:</label>
            <input type="date" class="form-control" name="order_date" id="ShirtOrderDate" name="shirt_Order_Date"/>
          </div>
          <!--pick up date-->
          <div id="RHPicDt" class="form-groupRH" style="padding-top: 20px; margin-bottom: 15px; display: none;">
            <label class="control-label" for="pickUpDate">Pick-up Date:</label>
            <input type="date" class="form-control" id="PickUpDate" name="pickup_date"/>
          </div>
          <!--first aid & cpr date & time -->
          <div id="RHCFirAidDt" class="form-group" style="padding-top: 20px;">
            <label class="control-label" for="FirstAidandCPRDateandTime">First Aid & CPR Date & Time:</label>
            <input type="datetime-local" class="form-control" id="FirstAidandCPRDateandTime" name="fa_and_cpr_dt"/>
          </div>
          <!--first aid & cpr location & contact -->
          <div id="RHCFirAidLoc" class="form-group" style="padding-top: 20px;">
            <label for="FirstAidandCPRLocandContact">First Aid & CPR Location & Contact: </label>
            <textarea type="text" class="form-control" id="FirstAidandCPRLocandContact" name="fa_and_cpr_contact"
                      rows="3"></textarea>
          </div>
          <!--certificate of first aid & cpr received date-->
          <div id="RHCFirAidCert" class="form-group" style="padding-top: 20px;">
            <label for="FirstAidandCPRCertificateReceiveDate">Certificate of First Aid & CPR Receive Date:</label>
            <input type="date" class="form-control" id="FirstAidandCPRCertificateReceiveDate" name="cert_fa_cpr_receive"/>
          </div>
          <!--foodsafe date & time (need to add to db)-->
          <div id="HCFoodSafeDt" class="form-groupHC" style="padding-top: 20px; margin-bottom: 15px; display: none;">
            <label class="control-label" for="foodsafeDateandTime">FoodSafe Date & Time:</label>
            <input type="datetime-local" class="form-control" id="foodsafeDateandTime" name="foodsafe_dt"/>
          </div>
          <!--foodsafe location & contact (need to add to db)-->
          <div id="HCFoodSafeLoc" class="form-groupHC" style="padding-top: 20px; margin-bottom: 15px; display: none;">
            <label for="foodsafeLocandContact">FoodSafe Location & Contact: </label>
            <textarea type="text" class="form-control" id="foodsafeLocandContact" name="foodsafe_contact"
                      rows="3"></textarea>
          </div>
          <!--certificate of foodsafe received date (need to add to db)-->
          <div id="HCFoodSafeCert" class="form-groupHC" style="padding-top: 20px; margin-bottom: 15px; display: none;">
            <label for="foodsafeCertificateReceiveDate">Certificate of FoodSafe Receive Date:</label>
            <input type="date" class="form-control" id="foodsafeCertificateReceiveDate" name="cert_foodsafe_receive"/>
          </div>
          <!--CRC notes (need to add to db)-->
          <div id="HCcrc" class="form-groupHC" style="padding-top: 20px; margin-bottom: 15px; display: none;">
            <label for="crcNotes">Criminal Record Check (CRC): </label>
            <input type="text" class="form-control" id="crcNotes" name="crc_notes"></input>
          </div>
          <!--SPECO radio button (need to add to db)-->
          <div id="hcaOnlySPECO" class="form-groupH" style="padding-top: 20px;">
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
          <div id="rmtOnlyCli" class="form-groupRMT" style="padding-top: 20px; margin-bottom: 15px; display: none;">
            <label class="control-label" for="ClinicHankbookReceiveDate">Clinic Hankbook Receive Date:</label>
            <input type="date" class="form-control" id="ClinicHankbookReceiveDate" name="cli_handbook_receive"/>
          </div>
          <!--clinic acknowledgement and agreement form signed (changed name)-->
          <div id="rmtOnlyAck" class="form-groupRMT" style="padding-top: 20px; margin-bottom: 15px; display: none;">
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
            <div id="rmtOnlyMed" class="form-groupRMT" style="padding-top: 20px; margin-bottom: 15px; display: none;">
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
            <div id="submitBTN" class="form-group" style="padding-top: 20px; padding-bottom: 10px">
              <input type="submit" name="add_ppes" class="btn btn-primary" value="ADD">
            </div>
        </form>
      </div>
    </div>
  </div>
<!--JS code show different section based on the program selection-->
<script type="text/javascript">
    $(document).ready(function(){
        $("#programID").on('change', function() {
            if (this.value == 'RMT'){
              $(".form-groupRH").show();
              $(".form-groupRMT").show();
              $(".form-groupHC").hide();
              $("#hcaOnlySPECO").hide();
            }else if (this.value == 'HCA'){
              $(".form-groupRH").show();
              $(".form-groupHC").show();
              $(".form-groupH").show();
              $(".form-groupRMT").hide();
            }else if (this.value == 'CSW'){
              $(".form-groupRH").hide();
              $(".form-groupHC").show();
              $("#hcaOnlySPECO").hide();
            }
        });
    });
</script>
