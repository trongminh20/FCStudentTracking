<?php
print_r($_POST);
$id = $_POST['ID'];
$data = ['Password' => $_POST['Phone']];
$model->reset_password($id, $data);
$_SESSION['reset'] = $_POST['Username']."'s password has been reseted to phone number ";
header("Location:?action=v_user_manage");
?>



