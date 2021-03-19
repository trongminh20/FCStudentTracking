<?php
//include "v_masterPage_header.php";
//include  "v_masterPage_sidebar.php";
$labels = [
    "Student ID"    => 'student_id',
    'student ID'    => 'id',
    "Program ID"    => 'prog_id',
    "Photo ID"      => 'photo_id',
    "Resume"        => 'resume',
    "CRC result"    => 'crc_result',
    "Application Form"  => 'app_form',
    "Application Essay" => 'aap_essay',
    "Student Email"     => 'stu_email',
    "Payment Options"   => 'pay_option',
    "Welcome Letter Sent" => 'welcome_letter',
    "Enrollment Contract" => 'enroll_contract',
    "Application Fee with Paid Invoice" => 'app_fee',
    "Character Reference Letter"        => 'refer_letter',
    "English Language Competency"       => 'eng_com_form',
    "Photography Waiver Form Receive Date"  => 'photo_waiver_date',
    "Intro of Massage Course Day One from"  => 'intro_of_msg_day1_from',
    "Intro of Massage Course Day One to"    => 'intro_of_msg_day1_from',
    "Intro of Massage Course Day two from"  => 'intro_of_msg_day2_from',
    "Intro of Massage Course Day two to"    => 'intro_of_msg_day2_from',
    "Intro of Message fee with paid invoice"    => 'intro_fee',
    "Intro of message Course Complete"          => 'intro_msg_complete',
    "English test result (for non-english speaker)" => 'eng_test_result',
    "High School Diploma & Transcipt (Or above)"    => 'dips_and_trans',
    "Medical notes from Physican" => 'medical_notes',
    "Interview Date and Time"     => 'interview_date',
    "Interview Approved"          => 'interview_approved',
    "Student ID Card Issued"      => 'received_card',
    "Letter of Acceptance Issued Date" => 'accept_letter_date',
    "Student & program handbooks"      => 'sut_prog_handbook_notes',
    "RMT Student Learning Materials"    => 'rmt_stu_materials',
    "Acknowledgement & Agreement Form Received Date" => 'stu_ack_and_agr',
    "Self-Declaration of Health Notice Receive Date" => 'health_check_date',
    'Student Name'  => 'name',
    'Date of birth' => 'birthdate',
    'Phone number'  => 'phone',
    'Email'   => 'email',
    'Address' => 'address',
    'Cohor'   => 'cohort',
    'Name Tag' => 'name_tag',
    'SPECO'    => 'speco',
    'Domestic or International' => 'dom_or_int',
    'Enrollment Notes' => 'enroll_notes',
    'Admission status' => 'admin_status',
    'Clinic/Uniform Shirt Size' => 'clinic_shirt_size',
    'Order Date:'  => 'order_date',
    'Pick-up Date' => 'pickup_date',
    'First Aid & CPR Date & Time'        => 'fa_and_cpr_dt',
    'First Aid & CPR Location & Contact' => 'fa_and_cpr_contact',
    'Certificate of First Aid & CPR Receive Date' => 'cert_fa_cpr_receive',
    'FoodSafe Date & Time' => 'foodsafe_dt',
    'Certificate of FoodSafe Receive Date' => 'cert_foodsafe_receive',
    'Clinic Hankbook Receive Date'         => 'cli_handbook_receive',
    'Acknowledgement and Agreement Form Signed' => 'cli_ack_and_agr',
    'Medical File (Vaccinations) Received'      => 'medical_file',
    'Criminal Record Check (CRC)' => 'crc_notes',
    'FoodSafe Location & Contact' => 'foodsafe_contact'
    //grad

    student_id
prog_id
tuition_paid
official_transcript
completion_letter
signed_diploma
exam_date
T2202A
employment

];


$table = $_POST['select_section'];
if ($table == 'students') {
    $studentID = ['id' => $_POST['student_id']];
} else {
    $studentID = ['student_id' => $_POST['student_id']];
}


$rawData = $model->select($table, $studentID);

$data = $rawData[0];

$form = new Form("", "", "c_update_record", "POST", "Update Record", "");
?>
<div id="mainContent">
    <?php
    foreach ($data as $k => $v) { // data from database
        $form->add_label(['for' => "", 'label' => array_search($k, $labels)]);
        echo "<br>";
        if ($v == 'yes' || $v == 'no') {
            if ($v === 'yes') {
                $form->add_input(['name' => $k, 'value' => 'yes', 'type' => 'radio', 'checked' => '']);
                $form->add_label(['for' => "", 'label' => 'yes']);
                $form->add_input(['name' => $k, 'value' => 'no', 'type' => 'radio']);
                $form->add_label(['for' => "", 'label' => 'no']);
            } else {
                $form->add_input(['name' => $k, 'value' => 'yes', 'type' => 'radio']);
                $form->add_label(['for' => "", 'label' => 'yes']);
                $form->add_input(['name' => $k, 'value' => 'no', 'type' => 'radio', 'checked' => 'checked']);
                $form->add_label(['for' => "", 'label' => 'no']);
            }
            echo "<br>";
        } elseif ($k == 'rmt_stu_materials') {
            $selected = explode(", ", $v);
            $options = ['Sheet Set', 'Laptop or Learning Support', 'Goniometer', 'Oil Holster', 'Bottle'];
            echo "<select name='rmt_stu_materials[]' multiple>";
            foreach ($options as $op) {
                if (in_array($op, $selected)) {
                    echo "<option value='" . $op . "' selected>" . $op . "</option>";
                } else {
                    echo "<option value='" . $op . "'>" . $op . "</option>";
                }
            }
            echo "</select>";
        } else {
            $form->add_input(['name' => $k, 'value' => $v]);
        }
        echo "<br>";
    }
    $form->add_input(['name' => 'update_record', 'value' => 'Save', 'type' => 'submit']);
    $form->end_form();
    ?>
</div>

