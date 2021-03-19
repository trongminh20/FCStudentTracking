<?php
include "v_masterPage_header.php";
include "v_masterPage_sidebar.php";
?>

<div class="container" id="mainContent" style="padding-top: 20px">
    <div class="row">
        <div class="col-xs-12">
            <h2 style="padding-top: 10px">Payment Tracking</h2>
            <!--Form starts-->
            <form action="?action=c_add_payment" method="POST">
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
            	<!--choose student type-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="DomORInt">Domestic OR International:</label>
                    <div name="Dom_OR_Int" id="DomORInt" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="Dom_OR_Int" id="DomORInt" value="domestic" type="radio"/> Domestic
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="Dom_OR_Int" id="DomORInt" value="international" type="radio"/> International
                            </label>
                        </div>
                    </div>
                </div>
                <!--application fee-->
                <div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="applicationFee">Application Fee:</label>
            		<input type="number" class="form-control" id="applicationFee" name="application_Fee" placeholder="$"/>
          		</div>
                <!--scholarships OR subsidy-->
                <div class="form-group" style="padding-top: 20px"> 
                    <label class="control-label" for="scholarships">Scholarships OR Subsidy:</label>
                    <input type="number" class="form-control" id="scholarships" name="scholarships" placeholder="$"/>
                </div>
          		<!--intro to massage fee-->
          		<div id="rmtOnlyIntroPay" class="form-group" style="padding-top: 20px; display: none;"> 
            		<label class="control-label" for="introToMassageFee">Intro to Massage Fee:</label>
            		<input type="number" class="form-control" id="introToMassageFee" name="intro_to_message_fee"
                           placeholder="$"/>
          		</div>
          		<!--course materials fee-->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="courseMaterialsFee">Course Materials Fee:</label>
            		<input type="number" class="form-control" id="courseMaterialsFee" name="course_materials_fee" 
                           placeholder="$"/>
          		</div>
          		<!--textbook fee-->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="textbookFee">Textbook Fee:</label>
            		<input type="number" class="form-control" id="textbookFee" name="textbook_fee" placeholder="$"/>
          		</div>
          		<!--admin fee-->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="adminFee">Administration Fee:</label>
            		<input type="number" class="form-control" id="adminFee" name="admin_fee" placeholder="$"/>
          		</div>
          		<!--tuition fee-->
          		<div class="form-group" style="padding-top: 20px">
            		<label for="tuitionFee">Tuition Fee:</label>
            		<div name="tuition_Fee" id="tuitionFee" class="row" style="padding-top: 10px">
            			<!--1st payment-->
                        <div class="col-sm-6">
                            <label name="1st_payment" id="1stPayment" class="control-label">1st Payment:</label>
                        </div>
                        <div class="col-sm-6">
    						<input type="number" class="form-control" name="1st_payment" id="1stPayment" placeholder="$">
                        </div>
                        <!--2nd payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="2nd_payment" id="2ndPayment" class="control-label">2nd Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="2nd_payment" id="2ndPayment" placeholder="$">
                        </div>
                        <!--3rd payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="3rd_payment" id="3rdPayment" class="control-label">3rd Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="3rd_payment" id="3rdPayment" placeholder="$">
                        </div>
                        <!--4th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="4th_payment" id="4thPayment" class="control-label">4th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="4th_payment" id="4thPayment" placeholder="$">
                        </div>
                        <!--5th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="5th_payment" id="5thPayment" class="control-label">5th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="5th_payment" id="5thPayment" placeholder="$">
                        </div>
                        <!--6th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="6th_payment" id="6thPayment" class="control-label">6th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="6th_payment" id="6thPayment" placeholder="$">
                        </div>
                        <!--7th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="7th_payment" id="7thPayment" class="control-label">7th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="7th_payment" id="7thPayment" placeholder="$">
                        </div>
                        <!--8th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="8th_payment" id="8thPayment" class="control-label">8th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="8th_payment" id="8thPayment" placeholder="$">
                        </div>
                        <!--9th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="9th_payment" id="9thPayment" class="control-label">9th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="9th_payment" id="9thPayment" placeholder="$">
                        </div>
                        <!--10th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="10th_payment" id="10thPayment" class="control-label">10th Payment:</label>
                        </div>
                        <!--10th payment_input-->
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="10th_payment" id="10thPayment" placeholder="$">
                        </div>
                    </div>
				</div>
                <!--total-->
                <div class="form-group" style="padding-top: 20px"> 
                    <label class="control-label" for="total">Total:</label>
                    <input type="number" class="form-control" id="total" name="total" placeholder="$"/>
                </div>
                <!--remaining payment-->
                <div class="form-group" style="padding-top: 20px"> 
                    <label class="control-label" for="remainingPayment">Remaining Payment:</label>
                    <input type="number" class="form-control" id="remainingPayment" name="remaining_payment" placeholder="$"/>
                </div>
				<!--submit button-->
                <div class="form-group" style="padding-top: 20px; padding-bottom: 10px">
                    <input type="submit" name="add_payment_tracking" class="btn btn-primary" value="ADD">
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
                $("#rmtOnlyIntroPay").show();
            }else{
                $("#rmtOnlyIntroPay").hide();
            }
        });
    });
</script>