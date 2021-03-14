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
<div id="mainContent">
<h1>Form for edit user information</h1>
<form id="" class="" action="?action=c_update_user_info" method="POST">
    <?php
        foreach($data as $k => $v):
    ?>
        <label><?=$k?></label><input class="form-control" name="<?=$k?>" value="<?=$v?>"> <br>
    <?php
        endforeach;
        ?>
    <input class='btn btn-primary' type="submit" value = "SAVE" name ="edit">
</form>
</div>

