<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $success = $model->sign_in($username, $password);

    if ($success == 1) {
        $data = $model->select_user($username);
        $user = new Employee();
        $user->set_username($data['username']);
        $user->set_email($data['email']);
        $user->set_id($data['id']);
        $user->set_phone_number($data['phone']);
        $user->set_department($data['Department']);
        $user->set_role($data['admin']);
// assign User's information from database -> $_SESSION
        $_SESSION['user'] = $user->to_array();
        header("Location:?action=v_home");
    } else {
        $_SESSION['error'] = 'invalid password or username';
        header("location:?action=v_login");
    }
}
