<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $success = $model->sign_in($username, $password);
    if ($success != NULL) {

        $user = new User();
        $user->set_username($success['username']);
        $user->set_email($success['email']);
        $user->set_id($success['id']);
        $user->set_phone_number($success['phone']);
        $user->set_department($success['Department']);
        $user->set_admin($success['admin']);

        $_SESSION['user'] = $user->to_array();

        header("Location:?action=v_home");
    } else {
        $_SESSION['error'] = 'invalid password or username';
        header("location:?action=v_login");
    }
}
