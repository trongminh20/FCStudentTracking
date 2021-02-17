<?php
//include "v_masterPage_header.php";
//?>
<?php
//include "v_masterPage_sidebar.php";
//?>

<?php
$data = $model->select_data('fees');
//print_r($data);
$view -> display_as_table("","",$data);