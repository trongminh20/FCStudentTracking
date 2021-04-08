<?php
include "v_masterPage_header.php";
?>
<div id="mainContent">
    <h3>Enter your current Username</h3>
    <p class="text-warning">After requesting sent, you will receive a announcement email from administrator within 48 hours</p>
    <form class="form-group col-lg-8" action="?action=c_forgot_password" method="POST">
        <?php
        echo "<p class='text-danger'>" . ((isset($_SESSION['forget_password'])) ? $_SESSION['forget_password'] : "") . "</p>";
        unset($_SESSION['forget_password']);
        ?>
        <input class="form-control" type="text" name="username" placeholder="Your username" required="required">
        <br>
        <input class="btn btn-default" type="submit" name="submit" value="Send Request">
    </form>
</div>