<?php
print_r($_POST);
$id = $_POST['ID'];
$data = ['Password' => $_POST['phone']];
$model->reset_password($id, $data);
$_SESSION['reset'] = $_POST['username']."'spassword has been resetted ";
header("Location:?action=v_user_manager");
?>



