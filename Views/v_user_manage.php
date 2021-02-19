<?php
echo "<h1>USER MANAGEMENT INTERFACE</h1>";
$table = $model ->select_data ("Employees", 'Password');

$view -> show_table_with_manage_functions("","","v_edit_user","c_delete_user",$table);