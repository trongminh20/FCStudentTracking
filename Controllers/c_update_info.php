<?php
$data = $_POST;
unset($data['edit']);
//print_r($data['ID']);

$model ->change_info('employees', $data, $data['ID']);
header("Location:?action=v_user_manage");
exit();
