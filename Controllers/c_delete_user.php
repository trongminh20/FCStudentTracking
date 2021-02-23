<?php

$model -> delete('requests','username',$_POST['Username']);
$model -> delete('employees','ID', $_POST['ID']);

$_SESSION['manage_info'] = $_POST['Username']." has been deleted";

header("Location:?action=v_user_manage");