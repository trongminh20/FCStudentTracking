<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>

<div id="mainContent">
    <h4>add new records</h4>
    <?php
    //    $studentTrackingTable = $model->get_type('studenttracking');
    //    $view->display_table_to_form("","form","Student Tracking table","","",'studenttracking',$model);
    ?>
    <?php

    $inputList = [
        [
            'label' => ['for' => 'input1', 'label' => 'label 1'],
            'input' => ['id' => 'input1', 'class' => 'form-control', 'name' => 'req_id', 'type' => 'text']
        ],
        [
            'label' => ['id' => 'labeltest', 'for' => 'input2', 'label' => 'label 2'],
            'input' => ['id' => 'input2', 'class' => 'form-control', 'name' => 'req_id', 'type' => 'text']
        ],

        [
            'label' => ['for' => 'textarea', 'label' => 'textarea'],
            'textarea' => ['name' => 'textarea', 'cols' => 10, 'rows' => 5]
        ],
        [
            'label' => ['for' => 'droplist', 'label' => 'droplist'],
            'selection' => [
                'attributes' => ['id' => 'id', 'name' => 'name'],
                'options' => [1, 2, 3, 4]
            ]
        ],
        [
            'label' => ['for' => '', 'label' => ''],
            'input' => ['type' => 'submit', 'value' => 'submit']
        ]

    ];
    $view->display_customized_form("", "form-group", $inputList, "POST", "c_add_student", "Add to Student Tracking");
    ?>

    <?php
    //    $studentTable = $model->get_type('students');
    //    $view->display_table_to_form("","form","Student table","","",'students',$model);
    ?>
</div>