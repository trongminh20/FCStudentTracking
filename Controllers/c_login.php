<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];

    if ($username = 'minh') {
        $_SESSION['username'] = $username;
        $success = $controller -> sign_in($username, 'ronminh');
        echo $success;
    } else {
        header("location:?action=v_login");
    }
}