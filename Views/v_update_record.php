<?php
include "v_masterPage_header.php";
include "v_masterPage_sidebar.php";
$labels = [
    "Student ID" => 'student_id',
    "student ID" => 'id',
    "Program ID" => 'prog_id',
    "Photo ID" => 'photo_id',
    "Resume" => 'resume',
    "CRC result" => 'crc_result',
    "Application Form" => 'app_form',
    "Application Essay" => 'app_essay',
    "Student Email" => 'stu_email',
    "Payment Options" => 'pay_option',
    "Welcome Letter Sent" => 'welcome_letter',
    "Enrollment Contract" => 'enroll_contract',
    "Application Fee with Paid Invoice" => 'app_fee',
    "Character Reference Letter" => 'refer_letter',
    "English Language Competency" => 'eng_com_form',
    "Photography Waiver Form Receive Date" => 'photo_waiver_date',
    "Intro of Massage Course Day One from" => 'intro_of_msg_day1_from',
    "Intro of Massage Course Day One to" => 'intro_of_msg_day1_to',
    "Intro of Massage Course Day two from" => 'intro_of_msg_day2_from',
    "Intro of Massage Course Day two to" => 'intro_of_msg_day2_to',
    "Intro of Message fee with paid invoice" => 'intro_fee',
    "Intro of message Course Complete" => 'intro_msg_complete',
    "English test result (for non-english speaker)" => 'eng_test_result',
    "High School Diploma & Transcipt (Or above)" => 'dips_and_trans',
    "Medical notes from Physican" => 'medical_notes',
    "Interview Date and Time" => 'interview_date',
    "Interview Approved" => 'interview_approved',
    "Student ID Card Issued" => 'received_card',
    "Letter of Acceptance Issued Date" => 'accept_letter_date',
    "Student & program handbooks" => 'sut_prog_handbook_notes',
    "RMT Student Learning Materials" => 'rmt_stu_materials',
    "Acknowledgement & Agreement Form Received Date" => 'stu_ack_and_agr',
    "Self-Declaration of Health Notice Receive Date" => 'health_check_date',
    "Student Name" => 'name',
    "Date of birth" => 'birthdate',
    "Phone number" => 'phone',
    'Email' => 'email',
    "Address" => 'address',
    "Cohort" => 'cohort',
    "Name Tag" => 'name_tag',
    "SPECO" => 'speco',
    'Domestic or International' => 'dom_or_int',
    'Enrollment Notes' => 'enroll_notes',
    'Admission status' => 'admin_status',
    'Clinic/Uniform Shirt Size' => 'clinic_shirt_size',
    'Order Date (YYY-mm-dd)' => 'order_date',
    'Pick-up Date (YYY-mm-dd)' => 'pickup_date',
    'First Aid & CPR Date & Time' => 'fa_and_cpr_dt',
    'First Aid & CPR Location & Contact' => 'fa_and_cpr_contact',
    'Certificate of First Aid & CPR Receive Date' => 'cert_fa_cpr_receive',
    'FoodSafe Date & Time' => 'foodsafe_dt',
    'Certificate of FoodSafe Receive Date' => 'cert_foodsafe_receive',
    'Clinic Hankbook Receive Date' => 'cli_handbook_receive',
    'Acknowledgement and Agreement Form Signed' => 'cli_ack_and_agr',
    'Medical File (Vaccinations) Received' => 'medical_file',
    'Criminal Record Check (CRC)' => 'crc_notes',
    'FoodSafe Location & Contact' => 'foodsafe_contact',
    'Student & Program Handbooks' => 'stu_prog_handbook_notes',
    'Tuition Paid in Full(Yes /No)' => 'tuition_paid',
    'Official Student Transcript Issued (Yes / No))' => 'official_transcript',
    'Official Completion Letter Issued (Yes/No)' => 'completion_letter',
    'Copy of signed Diploma Issued (Yes / No)' => 'signed_diploma',
    'Board Exam Date' => 'exam_date',
    'Copy of T2202A (Tax Form) Issued (Yes / No)' => 'T2202A',
    'Employment Follow Up' => 'employment',
    'Application Fee' => 'application_fee',
    'Intro to Massage Fee' => 'intro_to_message_fee',
    'Course Materials Fee' => 'course_materials_fee',
    'Textbook Fee' => 'textbook_fee',
    'Domestic OR International' => 'dom_or_int',
    'Scholarships OR Subsidy' => 'scholarships',
    'Administration Fee' => 'admin_fee',
    '1st payment' => '1st_payment',
    '2nd payment' => '2nd_payment',
    '3rd payment' => '3rd_payment',
    '4th payment' => '4th_payment',
    '5th payment' => '5th_payment',
    '6th payment' => '6th_payment',
    '7th payment' => '7th_payment',
    '8th payment' => '8th_payment',
    '9th payment' => '9th_payment',
    '10th payment' => '10th_payment',
    'Total' => 'total',
    'Remaining Payment' => 'remaining_payment'
];

$tableNames = ["Admission Perior To Start Date" => 'apsds',
    "Perior To Practice Education" => 'ppes',
    "Enrollment Brief Summary" => 'students',
    "Graduations" => 'graduation',
    'Payment Tracking' => "payments_tracking"];

$table = $_POST['select_section'];

if ($table == 'students') {
    $studentID = ['id' => $_POST['student_id']];
} else {
    $studentID = ['student_id' => $_POST['student_id']];
}
?>
<div id="mainContent">
    <?php
    $rawData = $model->select($table, $studentID);
    $type = $model->get_type($table);
    if (empty($rawData)) {
        echo "<div id='formTitle'><h2>This record is unavailable</h2></div>";
    } else {
    $data = $rawData[0];
    ?>
    <?php
    //creating new form
    $form = new Form(["class" => "form-group col-lg-8",
        "id" => "updateForm",
        "action" => "?action=c_update_record",
        "method" => "POST"],
        "Update record in " . array_search($table, $tableNames));
    //store table name for action
    $form->add_input(['name' => 'table',
        'value' => $table,
        'type' => 'hidden',
        'id' => 'table',
        'readonly' => 'readonly']);
    //add input as cols in record
    foreach ($data as $k => $v) {
    // data from database
        $form->add_label(['class' => $k, 'for' => ""], array_search($k, $labels));
    // display list of programs
        if ($k === 'prog_id') {
        if ($table === 'students') {
            ?>
            <select class='form-control' name='prog_id'>
            <?php
            $programs = $model->select('programs', NULL);
            foreach ($programs as $prog):?>
                <option value="<?= $prog['id'] ?>" <?= (($v == $prog['id']) ? "selected" : "") ?>>
                    <?= $prog['id'] . " -- " . $prog['prog_name'] ?>
                </option>
            <?php
            endforeach;
            ?>
            </select><?php
        } else { //only students record is allowed to be updated
            $form->add_input(['class' => 'form-control',
                'id' => 'programID',
                'name' => $k,
                'value' => $v,
                'readonly' => 'readonly']);
        }
    }
        //display as radio button with selected value
        else if ($v === 'yes' || $v === 'no') {
        if ($v === 'yes') {
            echo '<br>';
            $form->add_input(['class' => 'form-check-input ',
                'name' => $k,
                'value' => 'yes',
                'type' => 'radio',
                'checked' => '']);
            $form->add_label(['class' => $k,
                'for' => "",
                'style' => 'padding-left:10px;'],
                "YES");
            echo '<br>';
            $form->add_input(['class' => 'form-check-input',
                'name' => $k,
                'value' => 'no',
                'type' => 'radio']);
            $form->add_label(['class' => $k,
                'for' => "",
                'style' => 'padding-left:10px;'],
                "NO");
            echo '<br>';
        } else {
            echo '<br>';
            $form->add_input(['class' => 'form-check-input',
                'name' => $k,
                'value' => 'yes',
                'type' => 'radio']);
            $form->add_label(['class' => $k,
                'for' => "",
                'style' => 'padding-left:10px;'],
                "YES");
            echo '<br>';
            $form->add_input(['class' => 'form-check-input',
                'name' => $k,
                'value' => 'no',
                'type' => 'radio',
                'checked' => 'checked']);
            $form->add_label(['class' => $k,
                'for' => "",
                'style' => 'padding-left:10px;'],
                "NO");
            echo '<br>';
        }
    }
        //display as drop list for pay options
        else if ($k === 'pay_option'){
    $payOptions = ["Full Payment", "Student Aid BC", "Monthly Payment", "Payment Plan", "Others"];
    ?>
    <select name="pay_option" class="form-control" id="payOptions" onchange="check();">
        <?php
        foreach ($payOptions as $op) {
            ?>
            <option value="<?= $op ?>" name="<?= $k ?>"
                <?php
                if (strtolower($v) === strtolower($op)) {
                    echo "selected";
                } else {
                    if (!in_array($v, $payOptions)) {
                        if ($op === "Others") {
                            echo "selected";
                        }
                    }
                    echo "";
                }
                ?>><?= $op ?></option>
            <?php
        }
        echo "</select>";
        ?>
        <div id="otherOptionDiv" style="display:none;">
            <label>Enter Payment Method:
                <input type="text" id="otherInput" class="form-control" value="<?php if (!in_array($v, $payOptions)
                    && $v !== '') {
                    echo $v;
                } ?>" onchange="validate_txt(this.id);">
            </label>
        </div>
        <?php
        }
        //display as the selection list
        else if ($k === 'rmt_stu_materials') {
            $selected = explode(", ", $v);
            $options = ['Sheet Set', 'Laptop or Learning Support', 'Goniometer', 'Oil Holster', 'Bottle']; ?>
            <select class='form-control' name='rmt_stu_materials[]' multiple>
                <?php foreach ($options as $op) { ?>
                    <option value="<?= $op ?>" <?php echo((in_array($op, $selected)) ? "selected" : "") ?>>
                        <?= $op ?>
                    </option>
                    <?php
                } ?>
            </select>
            <?php
        }
        //display Dom or In as the radio button
        else if ($k === 'dom_or_int') {
            echo "<br>";
            $values = ['domestic', 'international'];
            if ($v === 'domestic') {
                $form->add_input([
                    'class' => 'form-check-input ' . $k,
                    'type' => 'radio',
                    'name' => $k,
                    'value' => 'domestic',
                    "checked" => ""
                ]);
                $form->add_label(["class" => $k], 'Domestic');
                echo "<br>";
                $form->add_input([
                    'class' => 'form-check-input ' . $k,
                    'type' => 'radio',
                    'name' => $k,
                    'value' => 'international'
                ]);
                $form->add_label(['class' => $k], 'International');
                echo "<br>";
            } else if ($v === 'international') {
                echo "<br>";
                $form->add_input([
                    'class' => 'form-check-input ' . $k,
                    'type' => 'radio',
                    'name' => $k,
                    'value' => 'domestic',
                ]);
                $form->add_label(['class' => $k], 'Domestic');
                echo "<br>";
                $form->add_input([
                    'class' => 'form-check-input ' . $k,
                    'type' => 'radio',
                    'name' => $k,
                    'value' => 'international',
                    "checked" => ""
                ]);
                $form->add_label(['class' => $k], 'international');

                echo "<br>";
            } else {
                echo "<br>";
                $form->add_input([
                    'class' => 'form-check-input ' . $k,
                    'type' => 'radio',
                    'name' => $k,
                    'value' => 'domestic',
                ]);
                $form->add_label(['class' => $k], 'Domestic');
                echo "<br>";
                $form->add_input([
                    'class' => 'form-check-input ' . $k,
                    'type' => 'radio',
                    'name' => $k,
                    'value' => 'international',
                ]);
                $form->add_label(['class' => $k], 'international');

                echo "<br>";
            }
        }
        //student email in apsds
        else if ($k === 'stu_email') {
            echo "<br>";
            $form->add_label(['id' => 'emailValidateWarn'], "");
            $form->add_input(['id' => 'email',
                'class' => 'form-control ' . $k,
                'name' => $k,
                'type' => 'email',
                'value' => $v,
                'onchange' => 'validate_email();'
            ]);
        }
        //english test result
        else if($k === 'eng_test_result'){
            $form->add_input(['id' => 'ID' . $k,
                    'class' => 'form-control ' . $k,
                    'name' => $k,
                    'type' => 'number',
                    'value' => $v
                ]);
        }
        else {
            //value should be YES or NO , this is for the radio buttons without selected value
            if ($type[$k] == 'varchar(3)') {// if not selected value, then displaying in a radio button
                echo '<br>';
                $form->add_input(['class' => 'form-check-input', 'name' => $k, 'type' => 'radio', 'value' => 'Yes']);
                $form->add_label(['class' => $k, 'for' => ""], "YES");
                echo '<br>';
                $form->add_input(['class' => 'form-check-input', 'name' => $k, 'type' => 'radio', 'value' => 'No']);
                $form->add_label(['class' => $k, 'for' => ""], "NO");
                echo '<br>';
            } else if ($type[$k] == 'datetime') {
                $form->add_input(['class' => 'form-control ' . $k,
                    'name' => $k, 'type' => 'datetime-local',
                    'value' => $v]);
            }
            else if ($type[$k] == 'date') {
                $form->add_input(['class' => 'form-control ' . $k,
                    'name' => $k, 'type' => 'date',
                    'value' => $v]);
            }
            else {
                $form->add_input(['id' => 'ID' . $k,
                    'class' => 'form-control ' . $k,
                    'name' => $k,
                    'type' => ((strpos('varchar', $type[$k]) >= 0) ? "text" : $type[$k]),
                    'value' => $v,
                    'onchange' => ((strpos('varchar', $type[$k]) >= 0) ? 'validate_txt(this.id)' : "")
                ]);
            }
        }
    }
        echo "<br>";
        $form->add_input(['class' => 'btn btn-primary', 'id' => 'submit', 'name' => 'update_record', 'value' => 'Save', 'type' =>
            'submit']);
        $form->end_form();
        }
        ?>
</div>
<script type="text/javascript">
    window.onload = function () {
        display_input_fields();
    };
</script>



