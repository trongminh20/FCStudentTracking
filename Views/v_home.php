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

     <?php
     echo "<h3>Received Requests</h3>";
     if($_SESSION['user']['admin'] == 1) {
         $data = $model -> select('requests',NULL);
         $view->display_as_table("requestsTable","", $data);
     }
     ?>

<<<<<<< HEAD
=======
     <?php

//        $data = $model -> select('sessions', ['user_id' => $_SESSION['user']['id']]);
//
//        $view-> display_as_table('sessions', ['user_id' => $_SESSION['user']['id']]);

     ?>
>>>>>>> 1bbbd435d9e88602e2507a1e2805de234bbd624c
 </div>

