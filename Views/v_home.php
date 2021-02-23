<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
 <div id="mainContent">
    <table>
        <tr>
            <td>
                <img src="images/img_avatar.png" alt="logo" width="300px" height="300px">
            </td>
            </tr>
        <tr>
            <td><?=$_SESSION['user']['username']?></td>
        </tr>
        <tr>
            <td><?=$_SESSION['user']['phone']?></td>
        </tr>
        <tr>
            <td><?=$_SESSION['user']['email']?></td>
        </tr>
    </table>
 </div>