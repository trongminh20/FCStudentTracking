<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<div id="mainContent">
    <h1>USER MANAGEMENT INTERFACE</h1>

    <?php
    //display error or announcements if existed
    if (!empty($_SESSION['manage_info'])) {
        echo "<h4>" . $_SESSION['manage_info'] . "</h4>";
        unset($_SESSION['manage_info']);
    }
    //the cols that are not displayed
    $unsetCols = ['Password'];
    $loadTable = $model->select_displayed_data("employees",$unsetCols);
    $id = "";
    $class = "table";
    $actionForEditFunc = "v_edit_user";
    $actionForDelFunc = "c_delete_uer";
    $actionForResetPass = "c_reset_pass";

    $view->show_table_with_manage_functions($id, $class, $actionForEditFunc, $actionForDelFunc, $actionForResetPass, $loadTable);

    ?>

    <?php
    $addInfo = $model->get_type("employees");
    $id='formAddUser';
    $class= "form form_add_user";
    $fieldSet = "Add new Employees";
    $action = 'c_add_user';
    $method = 'POST';
    $table = 'employees';

    $view->display_form($id, $class, $fieldSet,$action,$method, $table,$model);
    ?>
</div>
