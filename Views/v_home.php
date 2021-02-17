<?php
include "v_masterPage_header.php";
//?>
<?php
include "v_masterPage_sidebar.php";
//?>
<div id="mainContent">
    <?php
        $data = $model->select_data('Employees');
        $view->display_as_table("", "", $data);
    ?>
</div>
