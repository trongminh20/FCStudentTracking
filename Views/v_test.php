<?php
$data = $_POST;
$table = $data['table'];
if($table == 'students'){
    $id = ['id'=>$data['id']];
}else{
    $id = ['student_id'=>$data['student_id']];
}
print_r($data);
unset($data['table']);
unset($data['update_record']);

$model ->change_info($table, $data, $id);
