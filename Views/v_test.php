<?php
//print_r($_POST);

if(isset($_POST['add_apsds'])){
    $data = $_POST;
    $data['rmt_stu_materials'] = implode(", ", $data['rmt_stu_materials']);
    unset($data['add_apsds']);

    $database -> insert('apsds',$data );
}