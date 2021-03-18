<?php
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

