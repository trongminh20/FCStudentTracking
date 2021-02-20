<?php
if(isset($_POST['delete_user'])){
    $id = $_POST['ID'];
    $table = 'Employees';
    $model->delete($table, $id);
}