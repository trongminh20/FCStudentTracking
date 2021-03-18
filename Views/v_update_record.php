<?php
/*
$labels = [
    "Student ID"
    "Photo ID"
    "Application Form"
    "Application Fee with Paid Invoice"
    "Application Essay"
    "Character Reference Letter"
    "Resume"
    "Intro of Massage Course Day One from"
    "Intro of Massage Course Day One to"
    "Intro of Message fee with paid invoice"
    "Intro of message Course Complete"
    "Welcome Letter Sent"
    "English test result (for non-english speaker)"
    "English Language Competency"
    "High School Diploma & Transcipt (Or above)"
    "CRC result"
    "Medical notes from Physican"
    "Interview Date and Time"
    "Interview Approved"
    "Student Email"
    "Letter of Acceptance Issued Date"
    "Enrollment Contract"
    "Student & program handbooks"
    "Ackmowledgement & Agreement Form Received Date:"
    "Photography Waiver Form Receive Date:"
    "Self-Declaration of Health Notice Receive Date:"
    "Payment Options"
    "Student ID Card Issued"
    "RMT Student Learning Materials"
];
*/
$studentID = ['student_id' => $_POST['student_id']];
$table = $_POST['select_section'];

//echo $studentID;
echo $table;

$rawData = $model->select($table, $studentID);
$data = $rawData[0];
print_r($data);

$form = new Form("", "", "c_update_record", "POST", "Update Record", "");

foreach ($data as $k => $v) {
    $form->add_label(['for' => "", 'label' => $k]);
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
    } else {
        $form->add_input(['name' => $k, 'value' => $v]);
    }
    echo "<br>";
}
$form->add_input(['name' => 'update_record', 'value' => 'Save', 'type' => 'submit']);
$form->end_form();


