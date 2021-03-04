<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";

$stuData = $_POST;

?>

<div id="mainContent">
    <?php
    $form = new Form('form-group col-lg-8', "reportForm", "v_generate_report", "POST", "Creating Report");

    $form::start_fieldset(['id' => 'id', 'class' => '']);
    $form::add_legend(['id' => "", 'value' => "this is legend"]);
    $form::add_label(['for' => "stuID", 'label' => "Student ID"]);
    $form::add_input(['id' => 'stuID', 'class' => 'form-control', 'name' => 'stuId', 'type' => 'text', 'value' => "'"
        . (($stuData != NULL) ? $stuData['stuID'] : "") . "'", 'placeholder' => 'Enter Student ID']);
    $form::add_label(['for' => 'progID', 'label' => 'Program']);
    $form::add_input(['id' => 'progID', 'class' => 'form-control', 'name' => 'progId', 'type' => 'text',
        'value' => "'" . (($stuData != NULL) ? $stuData['progID'] : "") . "'", 'placeholder' => 'Enter Program ID']);
    $form::end_fieldset();

    $form::start_fieldset(['id' => 'id', 'class' => 'class']);
    $form::add_legend(['id' => "", 'value' => "Including Information"]);
    $form::add_input(['id' => 'checkbox1', 'value' => "checkbox1", 'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox1', 'label' => 'checkbox 1']);
    $form::add_input(['id' => 'checkbox2', 'value' => "checkbox2", 'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox1', 'label' => 'checkbox 2']);
    $form::add_input(['id' => 'checkbox3', 'value' => "checkbox1", 'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox3', 'label' => 'checkbox 3']);
    $form::add_input(['id' => 'checkbox4', 'value' => "checkbox1", 'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox4', 'label' => 'checkbox 4']);
    echo "<br>";
    $form::add_input(['id' => 'checkbox5', 'value' => "checkbox1", 'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox5', 'label' => 'checkbox 5']);
    $form::add_input(['id' => 'checkbox6', 'value' => "checkbox1", 'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox6', 'label' => 'checkbox 6']);
    $form::add_input(['id' => 'checkbox7', 'value' => "checkbox1", 'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox7', 'label' => 'checkbox 7']);
    $form::add_input(['id' => 'checkbox8', 'value' => "checkbox1", 'type' => 'checkbox']);
    $form::add_label(['for' => 'checkbox8', 'label' => 'checkbox 8']);
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
