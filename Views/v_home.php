<?php
//include "v_masterPage_header.php";
////?>
<?php
//include "v_masterPage_sidebar.php";
////?>
<div id="mainContent">
    <?php
    echo "<h2>Emp table </h2>";
    $table = $model->select_data('Employees');
    $view->display_as_table("", "", $table);

    echo "<h2>Insert new Emp form </h2>";

    $formData = $model->get_type('Employees');


    $view->display_as_form("formAddEmployee", "form-add-emp", "c_add", "POST", $formData);

    echo "<h2>studentracking table </h2>";
    $table = $model->select_data('Studenttracking');
    $view->display_as_table("", "", $table);
    echo "<h2>Studentractking form </h2>";

    $formData = $model->get_type('Studenttracking');
    $view->display_as_form("formAddEmployee", "form-add-emp", "c_add", "POST", $formData);

    echo "<h2>fees table </h2>";
    $table = $model->select_data('fees');
    $view->display_as_table("", "", $table);
    echo "<h2>Insert new fees form </h2>";

    $formData = $model->get_type('fees');
    $view->display_as_form("formAddEmployee", "form-add-emp", "c_add", "POST", $formData);


    ?>
</div>
