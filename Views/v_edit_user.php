<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<?php
$data = $_POST;
?>
<div id="mainContent">
<h1>Form for edit user information</h1>
<form id="" class="" action="c_update_data" method="POST">
    <?php
        foreach($data as $k => $v):
    ?>
        <label><?=$k?></label><input name="<?=$k?>" value="<?=$v?>"> <br>
    <?php
        endforeach;
        ?>
    <input type="submit" value = "SAVE" name ="edit">
</form>
</div>

