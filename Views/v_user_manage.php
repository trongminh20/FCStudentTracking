<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<div id="mainContent">
    <h1>USER MANAGEMENT INTERFACE</h1>
    <?php
    if (!empty($_SESSION['manage_info'])) {
        echo "<h4>" . $_SESSION['manage_info'] . "</h4>";
        unset($_SESSION['manage_info']);
    }
    //the cols that are not displayed

    $unsetCols = ['Password'];

    $loadTable = $model->select_displayed_data("employees",$unsetCols);

    $view->show_table_with_manage_functions("", "table", "v_edit_user", "c_delete_user", "c_reset_pass", $loadTable);
    ?>
    <?php
    $list =[
            'att' => ['id' =>'id', 'name'=> 'name', 'class' => 'class'],
            'options' => ['val1', 'val2']

    ];
    echo "<form>";
    $select = "<select ";
        foreach($list as $k => $vs){
            if($k == 'att'){
                foreach($vs as $at => $v) {
                    $select .= " ".$at." = '".$v."'";
                }
            }
        }
        $select .=" >";
        echo $select;
        foreach($list as $k => $vs){
            if($k == 'options'){
                foreach($vs as $a){
                    echo "<option value='".$a."'>".$a."</option>";
                }
            }
        }
        echo "</select>";

    ?>

    <?php

    $addInfo = $model->get_type("employees");
    $view->display_table_to_form("formAddUser", " form form_add_user", "Adding new Employee", "c_add_user", "POST", 'employees',$model);


    ?>
</div>
