<?php
//TODO
// create new user with username
// set values with data from database


if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $success = $model-> sign_in($username, $password);

    if ($success == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header ("Location:?action=v_home");
    } else {
        $_SESSION['error'] = 'invalid password or username';
        header("location:?action=v_login");
    }
}
