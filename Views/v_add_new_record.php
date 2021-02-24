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
    $view->display_form("","form","Student Tracking table","","",'studenttracking',$model);
    ?>

    <?php
    $studentTable = $model->get_type('students');
    $view->display_form("","form","Student table","","",'students',$model);
    ?>
</div>