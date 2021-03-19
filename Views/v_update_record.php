<?php

$labels = [
    "Student ID" => 'student_id',
    "program" => 'prog_id',
    "Photo ID" => 'photo_id',
    "Application Form" => 'app_form',
    "Application Fee with Paid Invoice" => 'app_fee',
    "Application Essay" => 'aap_essay',
    "Character Reference Letter" => 'refer_letter',
    "Resume" => 'resume',
    "Intro of Massage Course Day One from" => 'intro_of_msg_day1_from',
    "Intro of Massage Course Day One to" => 'intro_of_msg_day1_from',
    "Intro of Massage Course Day two from" => 'intro_of_msg_day2_from',
    "Intro of Massage Course Day two to" => 'intro_of_msg_day2_from',
    "Intro of Message fee with paid invoice" => 'intro_fee',
    "Intro of message Course Complete" =>'intro_msg_complete',
    "Welcome Letter Sent" => 'welcome_letter',
    "English test result (for non-english speaker)"=>'eng_test_result',
    "English Language Competency" => 'eng_com_form',
    "High School Diploma & Transcipt (Or above)" => 'dips_and_trans',
    "CRC result" => 'crc_result',
    "Medical notes from Physican" => 'medical_notes',
    "Interview Date and Time" => 'interview_date',
    "Interview Approved" => 'interview_approved',
    "Student Email" => 'stu_email',
    "Letter of Acceptance Issued Date" => 'accept_letter_date',
    "Enrollment Contract" => 'enroll_contract',
    "Student & program handbooks" => 'sut_prog_handbook_notes',
    "Ackmowledgement & Agreement Form Received Date" => 'stu_ack_and_agr',
    "Photography Waiver Form Receive Date" =>'photo_waiver_date',
    "Self-Declaration of Health Notice Receive Date" =>'health_check_date',
    "Payment Options" => 'pay_option',
    "Student ID Card Issued" => 'received_card',
    "RMT Student Learning Materials" => 'rmt_stu_materials'
];

$studentID = ['student_id' => $_POST['student_id']];
$table = $_POST['select_section'];

//echo $studentID;


$rawData = $model->select($table, $studentID);
$data = $rawData[0];

$form = new Form("", "", "c_update_record", "POST", "Update Record", "");

foreach ($data as $k => $v) { // data from database
    $form->add_label(['for' => "", 'label' => array_search($k, $labels)]);
    echo "<br>";
    if ($v == 'yes' || $v == 'no') {
        if ($v === 'yes') {
            $form->add_input(['name' => $k, 'value' => 'yes', 'type' => 'radio', 'checked' => '']);
            $form->add_label(['for' => "", 'label' => 'yes']);
            $form->add_input(['name' => $k, 'value' => 'no', 'type' => 'radio']);
            $form->add_label(['for' => "", 'label' => 'no']);
        }
        else {
            $form->add_input(['name' => $k, 'value' => 'yes', 'type' => 'radio']);
            $form->add_label(['for' => "", 'label' => 'yes']);
            $form->add_input(['name' => $k, 'value' => 'no', 'type' => 'radio', 'checked' => 'checked']);
            $form->add_label(['for' => "", 'label' => 'no']);
        }
        echo "<br>";
    }
    elseif($k == 'rmt_stu_materials'){
        $selected = explode(", ",$v);
        $options = ['Sheet Set', 'Laptop or Learning Support', 'Goniometer','Oil Holster','Bottle'];
        foreach($options as $op) {
            if(in_array($op, $selected)){
                $form->add_input(['type' => 'checkbox', 'name' => 'rmt_stu_materials[]', 'checked' =>'']);
                $form -> add_label(['for'=>'','label' => $op]);
            }else{
                $form->add_input(['type' => 'checkbox', 'name' => 'rmt_stu_materials[]', 'value' => $op]);
                $form -> add_label(['for'=>'','label' => $op]);
            }
        }
    }
    else {
        $form->add_input(['name' => $k, 'value' => $v]);
    }
    echo "<br>";
}
$form->add_input(['name' => 'update_record', 'value' => 'Save', 'type' => 'submit']);
$form->end_form();


