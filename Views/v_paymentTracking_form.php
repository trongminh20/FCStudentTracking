<?php
include "v_masterPage_header.php";
?>

<div class="container" style="padding-top: 20px">
    <div class="row">
        <div class="col-xs-12">
            <h2 style="padding-top: 10px">Payment Tracking</h2>
            <!--Form starts-->
            <form action="" method="">
            	<!--choose student type-->
                <div class="form-group" style="padding-top: 20px">
                    <label for="DomORInt">Domestic OR International:</label>
                    <div name="Dom_OR_Int" id="DomORInt" class="row" style="padding-top: 10px">
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="Dom_OR_Int" id="DomORInt" type="radio"/> Domestic
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input name="Dom_OR_Int" id="DomORInt" type="radio"/> International
                            </label>
                        </div>
                    </div>
                </div>
                <!--application fee-->
                <div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="applicationFee">Application Fee:</label>
            		<input type="number" class="form-control" id="applicationFee" name="application_Fee" placeholder="$"/>
          		</div>
          		<!--intro to massage fee-->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="introToMassageFee">Intro to Massage Fee:</label>
            		<input type="number" class="form-control" id="introToMassageFee" name="intro_To_Massage_Fee" placeholder="$"/>
          		</div>
          		<!--course materials fee-->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="courseMaterialsFee">Course Materials Fee:</label>
            		<input type="number" class="form-control" id="courseMaterialsFee" name="course_Materials_Fee" placeholder="$"/>
          		</div>
          		<!--textbook fee-->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="textbookFee">Textbook Fee:</label>
            		<input type="number" class="form-control" id="textbookFee" name="textbook_Fee" placeholder="$"/>
          		</div>
          		<!--admin fee-->
          		<div class="form-group" style="padding-top: 20px"> 
            		<label class="control-label" for="adminFee">Administration Fee:</label>
            		<input type="number" class="form-control" id="adminFee" name="admin_Fee" placeholder="$"/>
          		</div>
          		<!--tuition fee-->
          		<div class="form-group" style="padding-top: 20px">
            		<label for="tuitionFee">Tuition Fee:</label>
            		<div name="tuition_Fee" id="tuitionFee" class="row" style="padding-top: 10px">
            			<!--1st payment-->
                        <div class="col-sm-6">
                            <label name="1st_Payment" id="1stPayment" class="control-label">1st Payment:</label>
                        </div>
                        <div class="col-sm-6">
    						<input type="number" class="form-control" name="1st_Payment" id="1stPayment" placeholder="$">
                        </div>
                        <!--2nd payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="2nd_Payment" id="2ndPayment" class="control-label">2nd Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="2nd_Payment" id="2ndPayment" placeholder="$">
                        </div>
                        <!--3rd payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="3rd_Payment" id="3rdPayment" class="control-label">3rd Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="3rd_Payment" id="3rdPayment" placeholder="$">
                        </div>
                        <!--4th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="4th_Payment" id="4thPayment" class="control-label">4th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="4th_Payment" id="4thPayment" placeholder="$">
                        </div>
                        <!--5th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="5th_Payment" id="5thPayment" class="control-label">5th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="5th_Payment" id="5thPayment" placeholder="$">
                        </div>
                        <!--6th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="6th_Payment" id="6thPayment" class="control-label">6th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="6th_Payment" id="6thPayment" placeholder="$">
                        </div>
                        <!--7th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="7th_Payment" id="7thPayment" class="control-label">7th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="7th_Payment" id="7thPayment" placeholder="$">
                        </div>
                        <!--8th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="8th_Payment" id="8thPayment" class="control-label">8th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="8th_Payment" id="8thPayment" placeholder="$">
                        </div>
                        <!--9th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="9th_Payment" id="9thPayment" class="control-label">9th Payment:</label>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="9th_Payment" id="9thPayment" placeholder="$">
                        </div>
                        <!--10th payment-->
                        <div class="col-sm-6" style="padding-top: 10px">
                            <label name="10th_Payment" id="10thPayment" class="control-label">10th Payment:</label>
                        </div>
                        <!--10th payment_input-->
                        <div class="col-sm-6" style="padding-top: 10px">
    						<input type="number" class="form-control" name="10th_Payment" id="10thPayment" placeholder="$">
                        </div>
                    </div>
				</div>
				<!--submit button-->
                <div class="form-group" style="padding-top: 20px">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>