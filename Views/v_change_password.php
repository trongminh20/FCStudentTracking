<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<div id="mainContent" style="margin-left:50px;">
    <h3> Enter your new password </h3>
    <?php
    if (!empty($_SESSION['change_password_announce'])) {
        echo $_SESSION['change_password_announce'];
        unset($_SESSION['change_password_announce']);
    }
    $form = new Form(['class'=>'col-lg-8',
        'action' => "?action=c_change_pass",
        'method' => "POST"]);
    $form->add_input(['type' => "password",
        'placeholder' => "Enter your new password",
        'name' => "new_pass",
        'class'=>"form-control",
        'id'=>'txtPwd',
        'required' => "required"]);
    echo "<br>";
    $form->add_input(['id'=>'showPass','type'=>'checkbox', 'value'=>"",'onchange' => "showPassword();"]);
    $form->add_label([],'Show password');
    echo "<br>";
    $form->add_input(['class'=>'btn btn-primary',
        'type' => "submit",
        'name' => "change_pass",
        'value' => "CHANGE"]);
    ?>
</div>
<script>

</script>