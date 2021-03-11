<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";

$stuData = ((isset($_SESSION['student'])) ? $_SESSION['student'] : NULL);
unset($_SESSION['student']);
?>

<div id="mainContent">
    <?php
    $form = new Form('form-group col-lg-8', "reportForm", "v_report_preview", "POST", "Creating Report");

    $form::start_fieldset(['id' => 'id', 'class' => '']);
    $form::add_legend(['id' => "", 'value' => "Student Information"]);
    $form::add_label(['for' => "stuID", 'label' => "Student ID"]);
    $form::add_input(['id' => 'stuID', 'class' => 'form-control', 'name' => 'stu_id', 'type' => 'text', 'value' =>(
            ($stuData != NULL) ? $stuData['stu_id'] : ""), 'placeholder' => 'Enter Student ID']);
    $form::add_label(['for' => 'progID', 'label' => 'Program']);
    $form::add_input(['id' => 'progID', 'class' => 'form-control', 'name' => 'prog_id', 'type' => 'text',
        'value' =>  (($stuData != NULL) ? $stuData['prog_id'] : ""), 'placeholder' => 'Enter Program ID']);
    $form::end_fieldset();

    $form::start_fieldset(['id' => 'id', 'class' => 'class']);
    $form::add_legend(['id' => "", 'value' => "Including Information"]);

    $form::add_input(['id' => 'enrollBriefSum', 'value' => "ebs",'name'=> "include[]", 'type' => 'checkbox']);
    $form::add_label(['for' => 'enrollBriefSum', 'label' => 'Enrollment Brief Summary']);
 ?>
    <br>
    <?php
    $form::add_input(['id' => 'checkbox2', 'value' => "apsds",'name'=>"include[]" ,'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox1', 'label' => 'Admission Prior to Start Date']);
     ?>
    <br>
    <?php
    $form::add_input(['id' => 'checkbox3', 'value' => "ppes",'name' => "include[]", 'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox3', 'label' => 'Prior to Practice Education']);
    ?>
    <br>
    <?php
    $form::add_input(['id' => 'checkbox4', 'value' => "graduation",'name' => "include[]" ,'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox4', 'label' => 'Graduation']);
    echo "<br>";
    $form::add_input(['id' => 'checkbox5', 'value' => "payment",'name'=>"include[]", 'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox5', 'label' => 'Payment Tracking']);
    $form::end_fieldset();

    $form::start_fieldset(['id' => 'id', 'class' => 'class']);
    $form::add_legend(['id' => "", 'value' => "Export to:"]);
    $form::add_selection(['att' => ['id' => '', 'class' => '', 'name' => 'filetype'], 'options' => ['.docx', '.pdf']]);
    $form::end_fieldset();

    $form::add_input(['class' => 'btn btn-primary', 'name' => 'preview', 'type' => 'submit', 'value' => 'preview']);
    $form::add_input(['class' => 'btn btn-primary', 'name' => 'generate', 'type' => 'submit', 'value' => 'generate']);

    $form::end_form();
    ?>
</div>
