<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";

$stuData = ((isset($_SESSION['student'])) ? $_SESSION['student'] : NULL);
unset($_SESSION['student']);
?>

<div id="mainContent" style="margin-left:50px;">

    <?php
    echo ((isset($_SESSION['report_info']) ? $_SESSION['report_info'] : ""));
    unset($_SESSION['report_info']);
    $form = new Form('form form-group col-lg-8', "reportForm", "v_report_generate", "POST", "", '_blank');

    $form::start_fieldset(['id' => 'id', 'class' => '']);
    $form::add_legend(['id' => "", 'value' => "Student Information"]);
    $form::add_label(['for' => "stuID", 'label' => "Student ID"]);
    $form::add_input(['id' => 'stuID', 'class' => 'form-control', 'name' => 'stu_id', 'type' => 'text', 'value' =>(
            ($stuData != NULL) ? $stuData['stu_id'] : ""), 'placeholder' => 'Enter Student ID']);
    $form::add_label(['for' => 'progID', 'label' => 'Program']);
    $form::add_input(['id' => 'progID', 'class' => 'form-control', 'name' => 'prog_id', 'type' => 'text',
        'value' =>  (($stuData != NULL) ? $stuData['prog_id'] : ""), 'placeholder' => 'Enter Program ID']);
    $form::end_fieldset();
    ?>
<div class="form-group">
    <?php
    $form::start_fieldset(['id' => 'id', 'class' => 'class']);
    $form::add_legend(['id' => "", 'value' => "Including Information"]);

    $form::add_input(['id' => 'enrollBriefSum', 'value' => "ebs",'name'=> "include[]", 'type' => 'checkbox']);
    $form::add_label(['for' => 'enrollBriefSum', 'label' => 'Enrollment Brief Summary']);
 ?>
    <br>
    <?php
    $form::add_input(['id' => 'apsds', 'value' => "apsds",'name'=>"include[]" ,'type' => 'checkbox']);
    $form::add_label(['for' => 'apsds', 'label' => 'Admission Prior to Start Date']);
     ?>
    <br>
    <?php
    $form::add_input(['id' => 'ppes', 'value' => "ppes",'name' => "include[]", 'type' => 'checkbox']);
    $form::add_label(['for' => 'ppes', 'label' => 'Prior to Practice Education']);
    ?>
    <br>
    <?php
    $form::add_input(['id' => 'graduation', 'value' => "graduations",'name' => "include[]" ,'type' => 'checkbox']);
    $form::add_label(['for' => 'graduation', 'label' => 'Graduation']);
    echo "<br>";
    $form::add_input(['id' => 'paymentTracking', 'value' => "payment_tracking",'name'=>"include[]", 'type' => 'checkbox']);
    $form::add_label(['for' => 'paymentTracking', 'label' => 'Payment Tracking']);
    $form::end_fieldset();
    ?>
    </div>
    <div class="form-group">
    <?php
    $form::add_input(['class' => 'btn btn-primary', 'name' => 'preview', 'type' => 'submit', 'value' => 'preview']);
    $form::add_input(['class' => 'btn btn-primary', 'name' => 'generate', 'type' => 'submit', 'value' => 'generate']);
    ?></div>
    <?php
    $form::end_form();
    ?>
</div>
