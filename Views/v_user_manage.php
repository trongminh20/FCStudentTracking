<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<div id="mainContent" style="margin-left:50px;">
    <h1>USER MANAGEMENT INTERFACE</h1>

    <?php
    //display error or announcements if existed
    if (!empty($_SESSION['manage_info'])) {
        echo "<h4>" . $_SESSION['manage_info'] . "</h4>";
        unset($_SESSION['manage_info']);
    }
    //the cols that are not displayed
    $unsetCols = ['password'];
    $loadTable = $model->select_displayed_data("employees",$unsetCols);
    $view->show_table_with_manage_functions("", "table", "v_edit_user", "c_delete_user", "c_reset_pass", $loadTable);
    ?>


    <?php
    echo "<h3>Add New User</h3>";
    $addInfo = $model->get_type("employees");

    $view->display_table_to_form("formAddUser", " form form_add_user", "c_add_user",  "POST", 'employees',
        $model);
    ?>
</div>
