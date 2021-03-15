<?php
    $data = $_POST;
arr_print($data);

//if (isset($_POST['add_apsds'])) {
    if (isset($data['rmt_stu_materials'])) {
        $data['rmt_stu_materials'] = implode(", ", $data['rmt_stu_materials']);
    }
    unset($data['add_apsds']);

    $arN = array();

    foreach ($data as $k => $v) {
        if (empty($data[$k])) {
            array_push($arN, $k);
        }
    }
    for ($i = 0; $i < count($arN); $i++) {
        foreach ($data as $k => $v) {
            if ($k == $arN[$i]) {
                $data[$k] = NULL;
            }
        }
    }


        $model->insert('apsds', $data);
//}
arr_print($data);


