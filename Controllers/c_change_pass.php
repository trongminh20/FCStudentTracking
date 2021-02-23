<?php
if(isset($_POST['change_pass'])) {
    $new = $_POST['new_pass'];
    $_SESSION['user']['password'] = $new ;
    $id = $_SESSION['user']['id'];
    $table = 'employees';
    $data = $_SESSION['user'];
    if (!empty($new)) {
        $model->change_info($table, $data, $id);
        $_SESSION['change_password_announce'] = 'Your password has been changed';
    } else {
        $_SESSION['change_password_announce'] = 'Your password has been changed';
    }

}
header("Location:?action=v_change_password");

