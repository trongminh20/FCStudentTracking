<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";


$students = ((isset($_SESSION['search_result'])) ? $_SESSION['search_result'] : []);
unset($_SESSION['search_result']);

?>

<div id='mainContent'>
    <h5 style="color:#8b0000;"><?php
        if (isset($_SESSION['search_error'])) {
            echo $_SESSION['search_error'];
            unset($_SESSION['search_error']);
        } else {
            echo "";
        }
        ?></h5>
    <table class="table">
        <thead>
        <tr>
            <>ID</>
            <td>Program ID</td>
            <td>Name</td>
            <td>phone</td>
            <td>email</td>
            <td>address</td>
            <td>Dom OR Int</td>
            <td>Enroll note</td>
            <td>status</td>
        </tr>
        </thead>
        <tbody>
        <?php

            for ($i = 0; $i < count($students); $i++):
            ?>
            <tr>
                <td><?= $students[$i]['id'] ?></td>
                <td><?= $students[$i]['prog_id'] ?></td>
                <td><?= $students[$i]['name'] ?></td>
                <td><?= $students[$i]['phone'] ?></td>
                <td><?= $students[$i]['email'] ?></td>
                <td><?= $students[$i]['address'] ?></td>
                <td><?= $students[$i]['dom_or_int'] ?></td>
                <td><?= $students[$i]['enroll_notes'] ?></td>
                <td><?= $students[$i]['admin_status'] ?></td>
                <td>
                    <form action="?action=c_to_report" method="POST">
                        <input type="hidden" name='stu_id' value="<?= $students[$i]['id']; ?>">
                        <input type="hidden" name='prog_id' value="<?= $students[$i]['prog_id']; ?>">
                        <input type="submit" name="submit" value="Report">
                    </form>
                </td>
            </tr>
        <?php
        endfor;

        ?>
        </tbody>
    </table>
</div>