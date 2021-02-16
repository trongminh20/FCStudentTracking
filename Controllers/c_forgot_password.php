<?php
$username = $_POST['username'];

$request = new Request($username, 'Reset password');

$model -> request_reset_password($request);

$_SESSION['error'] = 'YOU REQUEST HAS SENT';

header("Location:?action=v_login");