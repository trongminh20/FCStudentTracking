<?php
//print_r ($_SESSION['user']);
 $id = $_SESSION['user']['id'];
 $new_pass = 'trongminh';
 $table = 'Employees';
$_SESSION['user']['password'] = $new_pass;
 $data = $_SESSION['user'];

 print_r($data);
 if(!empty($new_pass)){
 	$model ->change_password($table, $data, $id);
 	$_SESSION['change_password_announce'] = 'Your password has been changed';
 }else{
     $_SESSION['change_password_announce'] = 'Your password has been changed';
 }
 header("Location:?action=v_change_password");
 exit();



