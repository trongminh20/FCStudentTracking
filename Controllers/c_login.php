<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $success = $model->sign_in($username, $password);
    
    if ($success == 1) {
        $data = $model->select_user($username);

        if($data['admin'] == 1){
            $user = new Admin();
        } else if($data['admin'] == 0){
            $user = new Employee();
        }

        $user->set_id($data['ID']);
        $user->set_username($data['Username']);
        $user->set_email($data['Email']);
        $user->set_phone_number($data['Phone']);
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
