<?php
echo "<h1>USER MANAGEMENT INTERFACE</h1>";

if(!empty($_SESSION['reset'])){
    echo "<h4>".$_SESSION['reset']."</h4>";
    unset($_SESSION['reset']);
}
$loadTable = $model ->select_data ("Employees", 'Password');

$view -> show_table_with_manage_functions("","","v_edit_user","c_delete_user","c_reset_pass",$loadTable);

?>
<h1>Adding new User</h1>

<?php

$addInfo = $model -> get_type("Employees");

$view -> display_form("formAddUser","form_add_user","c_add_user","POST",$addInfo);
?>