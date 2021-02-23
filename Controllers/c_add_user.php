<?php
$id = $_POST['ID'];
$username  = $_POST['Username'];
$password  = $_POST['Password'];
$email  = $_POST['Email'];
$phone  = $_POST['Phone'];
$department  = $_POST['Department'];

$user = new Employee();
$user -> Employee($id, $username, $password, $email, $phone, $department);
$model->create_user('Employees', $user);

header("Location:?action=v_user_manage");
