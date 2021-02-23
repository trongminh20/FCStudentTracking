<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<div id="mainContent">
    <h3> Enter your new passowrd </h3>
    <?php
        if(!empty($_SESSION['change_password_announce'])){
            echo $_SESSION['change_password_announce'];
            unset($_SESSION['change_password_announce']);
        }?>
    <form id="" clas="" action="?action=c_change_pass" method="POST">
        <input type="password" placeholder="Enter your new password" name="new_pass" required="required">
        <input type="submit" name="change_pass" value="CHANGE">
    </form>
</div>
