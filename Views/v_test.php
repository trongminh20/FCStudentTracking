<?php
$data = $model ->select('apsds', ['student_id'=> 3789000]);

$arr = explode(",",$data[0]['rmt_stu_materials']);

$arrSrc = ["Sheet Set", 'Laptop or Learning Support', 'Goniometer', 'Oil Holster', 'Bottle'];


//print_r($arr);
echo $data[0]['rmt_stu_materials'];
echo strpos($data[0]['rmt_stu_materials'],"Laptop or Learning Support");
