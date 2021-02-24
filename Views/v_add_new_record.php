<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<div id="mainContent">
    <h4>add new records</h4>
    <?php
    $studentTrackingTable = $model->get_type('studenttracking');
    $view->display_form("","form","Student Tracking table","","",$studentTrackingTable);
    ?>

    <?php
    $studentTable = $model->get_type('students');
    $view->display_form("","form","Student table","","",$studentTable);
    ?>
</div>