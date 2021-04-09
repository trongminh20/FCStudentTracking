<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";

$stuData = ((isset($_SESSION['student'])) ? $_SESSION['student'] : NULL);
unset($_SESSION['student']);

$program = $model->select('programs',[]);
?>

<div id="mainContent" style="margin-left:50px;">

    <?php
    echo ((isset($_SESSION['report_info']) ? $_SESSION['report_info'] : ""));
    unset($_SESSION['report_info']);
    $form = new Form(['class'=>'form form-group col-lg-8',
        'id'=> "reportForm",
        'action'=> "?action=v_report_generate",
        'method'=> "POST",
        'target'=>'_blank'], "CREATING NEW REPORT");

    $form->add_fieldset([]);
    $form->add_legend([],"Student Information");
    $form->add_label(['for' => "stuID"], 'Student ID');
    $form->add_input(['id' => 'stuID',
        'class' => 'form-control',
        'name' => 'stu_id',
        'type' => 'number',
        'value' =>(($stuData != NULL) ? $stuData['stu_id'] : ""),
        'placeholder' => 'Enter Student ID',
        "required"=>""]);
    $form->add_label(['for' => 'progID'],'Program');
    $form->add_input(['id' => 'progID',
        'class' => 'form-control',
        'name' => 'prog_id',
        'type' => 'text',
        'value' =>  (($stuData != NULL) ? $stuData['prog_id'] : ""),
        //'placeholder' => 'Enter Program ID',
        'readonly'=>'readonly']);
    $form->end_fieldset();
    ?>
<div class="form-group">
    <?php
    $form->add_fieldset([]);
    $form->add_legend(['id' => ""], "Including Information");

    $form->add_input(['id' => 'enrollBriefSum', 'value' => "ebs",'name'=> "include[]", 'type' => 'checkbox']);
    $form->add_label(['for' => 'enrollBriefSum'],'Enrollment Brief Summary');
 ?>
    <br>
    <?php
    $form->add_input(['id' => 'apsds', 'value' => "apsds",'name'=>"include[]" ,'type' => 'checkbox']);
    $form->add_label(['for' => 'apsds'], 'Admission Prior to Start Date');
     ?>
    <br>
    <?php
    $form->add_input(['id' => 'ppes', 'value' => "ppes",'name' => "include[]", 'type' => 'checkbox']);
    $form->add_label(['for' => 'ppes'],'Prior to Practice Education');
    ?>
    <br>
    <?php
    $form->add_input(['id' => 'graduation', 'value' => "graduations",'name' => "include[]" ,'type' => 'checkbox']);
    $form->add_label(['for' => 'graduation'], 'Graduation');
    echo "<br>";
    $form->add_input(['id' => 'paymentTracking', 'value' => "payment_tracking",'name'=>"include[]", 'type' => 'checkbox']);
    $form->add_label(['for' => 'paymentTracking'],'Payment Tracking');
    $form->end_fieldset();
    ?>
    </div>
    <div class="form-group">
    <?php
    $form->add_input(['class' => 'btn btn-primary', 'name' => 'preview', 'type' => 'submit', 'value' => 'preview']);
    $form->add_input(['class' => 'btn btn-primary', 'name' => 'generate', 'type' => 'submit', 'value' => 'generate']);
    ?></div>
    <?php
    $form->end_form();
    ?>
</div>
