<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";


$students = ((isset($_SESSION['search_result'])) ? $_SESSION['search_result'] : []);
unset($_SESSION['search_result']);

?>

<div id='mainContent' style="margin-left:50px;">
    <h5 style="color:#8b0000;"><?php
        if (isset($_SESSION['search_error'])) {
            echo $_SESSION['search_error'];
            unset($_SESSION['search_error']);
        } else {
            echo "";
        }
        ?></h5>
    <table id="searchRes" class="table table-condensed table-striped">

        <tr class="text-center">
            <th>STUDENT ID</th>
            <th>PROGRAM ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>ADDRESS</th>
            <th>DOM OR INT</th>
            <th>ENROLLMENT NOTE</th>
            <th>STATUS</th>
            <th colspan="2"></th>
        </tr>

        <tbody>
        <?php
        for ($i = 0; $i < count($students); $i++):
            ?>
            <tr class="text-center">
                <td class="shrinkable"><?= $students[$i]['id'] ?></td>
                <td class="shrinkable"><?= $students[$i]['prog_id'] ?></td>
                <td class="shrinkable"><?= $students[$i]['name'] ?></td>
                <td class="shrinkable"><?= $students[$i]['phone'] ?></td>
                <td class="shrinkable"><?= $students[$i]['email'] ?></td>
                <td class="shrinkable"><?= $students[$i]['address'] ?></td>
                <td class="shrinkable"><?= $students[$i]['dom_or_int'] ?></td>
                <td class="shrinkable" id="<?= 'enrollNote' . $i ?>"><?= $students[$i]['enroll_notes'] ?></td>
                <td class="shrinkable"><?= $students[$i]['admin_status'] ?></td>
                <td>
                    <form action="?action=v_student_detail" method="POST">
                        <input type="hidden" name='stu_id' value="<?= $students[$i]['id']; ?>">
                        <input class="btn btn-link" type="submit" name="submit" value="Detail">
                    </form>
                </td>
                <td>
                    <form action="?action=c_to_report" method="POST">
                        <input type="hidden" name='stu_id' value="<?= $students[$i]['id']; ?>">
                        <input type="hidden" name='prog_id' value="<?= $students[$i]['prog_id']; ?>">
                        <input class="btn btn-link" type="submit" name="submit" value="Report">
                    </form>
                </td>
            </tr>
        <?php
        endfor;

        ?>
        </tbody>
    </table>
</div>
<script>
    window.onload = function () {
        shrinkable();
    }

</script>