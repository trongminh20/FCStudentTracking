<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<div id="mainContent">
    <h1>USER MANAGEMENT INTERFACE</h1>

    <?php

    if (!empty($_SESSION['reset'])) {
        echo "<h4>" . $_SESSION['reset'] . "</h4>";
        unset($_SESSION['reset']);
    }

    $loadTable = $model->select_data("Employees", 'Password');
    $view->show_table_with_manage_functions("", "table", "v_edit_user", "c_delete_user", "c_reset_pass", $loadTable);

    ?>

    <h1>Adding new User</h1>

    <?php

    $addInfo = $model->get_type("Employees");
    $view->display_form("formAddUser", "form_add_user", "c_add_user", "POST", $addInfo);

    ?>
</div>
