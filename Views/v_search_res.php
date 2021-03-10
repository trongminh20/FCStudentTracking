<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";


$students = ((isset($_SESSION['search_result'])) ? $_SESSION['search_result'] : NULL);
unset($_SESSION['search_result']);

?>

<div id='mainContent'>
    <h5 style="color:#8b0000;"><?php
            if(isset($_SESSION['search_error'])){
                echo $_SESSION['search_error'];
                unset($_SESSION['search_error']);
            }else{
                echo "";
            }
        ?></h5>
    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
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

        <tr>
            <td><?= $students[0]['id'] ?></td>
            <td><?= $students[0]['prog_id'] ?></td>
            <td><?= $students[0]['name'] ?></td>
            <td><?= $students[0]['phone'] ?></td>
            <td><?= $students[0]['email'] ?></td>
            <td><?= $students[0]['address'] ?></td>
            <td><?= $students[0]['dom_or_int'] ?></td>
            <td><?= $students[0]['enroll_notes'] ?></td>
            <td><?= $students[0]['admin_status'] ?></td>
            <td>
                <form action="?action=c_to_report" method="POST">
                    <input type="hidden" name='stu_id' value="<?= $students['id']; ?>">
                    <input type="hidden" name='prog_id' value="<?= $students['prog_id']; ?>">
                    <input type="submit" name="submit" value="Report">
                </form>
            </td>
        </tr>
        </tbody>
    </table>
</div>