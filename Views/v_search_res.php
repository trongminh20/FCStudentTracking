<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";

if (isset($_SESSION['search_result'])) {
    $students = $_SESSION['search_result'];
} else {
    $students = NULL;
}
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
            <td><?= $students['id'] ?></td>
            <td><?= $students['prog_id'] ?></td>
            <td><?= $students['name'] ?></td>
            <td><?= $students['phone'] ?></td>
            <td><?= $students['email'] ?></td>
            <td><?= $students['address'] ?></td>
            <td><?= $students['dom_or_int'] ?></td>
            <td><?= $students['enroll_notes'] ?></td>
            <td><?= $students['admin_status'] ?></td>
            <td>
                <form action="?action=v_report" method="POST">
                    <input type="hidden" name='stuID' value="<?= $students['ID']; ?>">
                    <input type="hidden" name='progID' value="<?= $students['Prog_ID']; ?>">
                    <input type="submit" name="submit" value="Report">
                </form>
            </td>
        </tr>
        </tbody>
    </table>
</div>
