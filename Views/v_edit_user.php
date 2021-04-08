<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<?php
$data = $_POST;
unset($data['edit_user_info']);
?>
<div id="mainContent" style="margin-left:50px;">
    <h1>Form for edit user information</h1>
    <form id="" class="col-lg-8" action="?action=c_update_user_info" method="POST">
        <?php
        foreach ($data as $k => $v):
            ?>
            <label><?= $k ?></label>
            <?php
            if ($k === 'phone') {
                echo "<br><label id='validateWarning'></label>";
            }
            if ($k === 'email') {
                echo "<br><label id='emailValidateWarn'></label>";
            }
            if ($k === 'admin') {
                ?>
                <br>
                <label><input type="radio" value="admin" name="admin"> Admin</label>
                <br>
                <label><input type="radio" value="user" name="admin"> User</label>
                <?php
            } else {
                ?>
                <input class="form-control"
                       name="<?= $k ?>"
                       id="<?php
                       if ($k === 'phone') {
                           echo "tel";
                       } else if ($k === 'email') {
                           echo 'email';
                       } else {
                           echo "";
                       }
                       ?>"
                       onchange="<?php
                       if ($k === 'phone') {
                           echo "validate_phoneNumber();";
                       } else if ($k === 'email') {
                           echo "validate_email()";
                       } else {
                           echo "";
                       } ?>"
                       value="<?= $v ?>">
                <?php
            }
            ?>
            <br>
        <?php
        endforeach;
        ?>
        <input class='btn btn-primary' id="submit" type="submit" value="SAVE" name="edit">
    </form>
</div>

