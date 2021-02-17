<?php
include "v_masterPage_header.php";
//?>
<?php
include "v_masterPage_sidebar.php";
//?>
<div id="mainContent">
    <?php
        echo "<h3>Employees table</h3>";
        $data1 = $model->select_data('Employees');
        $view->display_as_table("", "", $data1);

        echo "<h3>Fees table</h3>";
        $data2 = $model -> select_data('fees');
        $view -> display_as_table("","", $data2);
    ?>
</div>
