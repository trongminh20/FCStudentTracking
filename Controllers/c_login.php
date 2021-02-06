<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];

    if ($username = 'minh') {
        $_SESSION['username'] = $username;
        require $controller -> index('v_home');
    } else {
        header("location:?action=v_login");
    }
}