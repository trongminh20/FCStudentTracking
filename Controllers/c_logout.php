<?php
if(isset($_POST['logout'])){
    session_destroy();
    header("Location:?action=v_logout");
}