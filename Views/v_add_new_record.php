<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<div id="mainContent">
    <h4>add record to Student tracking</h4>
    <?php
    $studentTrackingTable = $model->get_type('StudentTracking');
    $view->display_form("","form","Student Tracking table","","",$studentTrackingTable);
    ?>

    <h4>add Student</h4>
    <?php
    $studentTable = $model->get_type('Students');
    $view->display_form("","form","Student table","","",$studentTable);
    ?>
</div>