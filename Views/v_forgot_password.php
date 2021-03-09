<?php
?>

<form action="?action=c_forgot_password" method="POST">
    <h1>Enter your Username ( which was created by admin)</h1>
    <?php
        echo "<p>".((isset($_SESSION['forget_password'])) ?$_SESSION['forget_password'] : "")."</p>";
        unset($_SESSION['forget_password']);
    ?>
    <input type="text" name="username" placeholder="Your username" required="required">
    <input type="submit" name="submit" value="Submit">
</form>