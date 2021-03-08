<?php
//print_r($_POST);

if(isset($_POST['add_ppes'])){
    $data = $_POST;
    unset($data['add_ppes']);
    foreach($data as $k => $v ):
        echo $k ." => " . $v."<br>";
    endforeach;
    $database -> insert('ppes',$data );
}