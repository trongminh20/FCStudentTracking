<?php
include "v_masterPage_header.php";
include "v_masterPage_sidebar.php";

$numberID = $_POST['stu_id'];

$rawData = $model->select('students', ['id' => $numberID]);

?>
<div id="mainContent">
    <h3> Student Detail Information </h3>
    <ul>
        <li><strong>Student Name:</strong> <?= $rawData[0]['name'] ?></li>
        <li><strong>Student ID:</strong> <?= $rawData[0]['id'] ?></li>
        <li><strong>Student Email:</strong> <?= $rawData[0]['email'] ?></li>
        <li><strong>Phone Number:</strong> <?= $rawData[0]['phone'] ?></li>
    </ul>
    <br>

    <h3 class="text-center">STUDENT'S RECORD</h3>
    <br>
    <table class="table table-striped">
        <tr class="text-center text-uppercase">

            <th>Admission Prior To Start Date</th>
            <th>Prior to Practice Education</th>
            <th>Enrollment Brief Summary</th>
            <th>Payment tracking</th>
            <th>Graduations</th>

        </tr>
        <tbody>
        <tr class="text-center">
            <td>
                <?php
                $apsds = count($database->select_count_record('apsds', 'student_id', $rawData[0]['id']));
                echo(($apsds === 0) ? 'Empty' : "Recorded");
                if ($apsds < 1) {
                    $form = new Form(['method' => 'POST', 'action' => '?action=v_admPriorToStartDate_form', 'target' => '_blank']);
                    $form->add_input(['type' => 'hidden', 'name' => 'student_id', 'value' => $rawData[0]['id']]);
                    $form->add_input(['class' => 'btn btn-link', 'type' => 'submit', 'name' => 'add_record', 'value' => 'Add new record']);
                    $form->end_form();

                } else {
                    $form = new Form(['method' => 'POST', 'action' => '?action=v_update_record', 'target' => '_blank']);
                    $form->add_input(['type' => 'hidden', 'name' => 'student_id', 'value' => $rawData[0]['id']]);
                    $form->add_input(['type' => 'hidden', 'name' => 'select_section', 'value' => 'apsds']);
                    $form->add_input(['class' => 'btn btn-link', 'type' => 'submit', 'name' => 'update_record', 'value' => 'Update']);
                    $form->end_form();
                }
                ?>
            </td>
            <td><?php
                $ppes = count($database->select_count_record('ppes', 'student_id', $rawData[0]['id']));
                echo(($ppes === 0) ? "Empty" : "Recorded");
                if ($ppes < 1) {
                    $form = new Form(['method' => 'POST', 'action' => '?action=v_priorToPracticeEducation_form', 'target' => '_blank']);
                    $form->add_input(['type' => 'hidden', 'name' => 'student_id', 'value' => $rawData[0]['id']]);
                    $form->add_input(['class' => 'btn btn-link', 'type' => 'submit', 'name' => 'add_record', 'value' => 'Add new record']);
                    $form->end_form();
                } else {
                    $form = new Form(['method' => 'POST', 'action' => '?action=v_update_record', 'target' => '_blank']);
                    $form->add_input(['type' => 'hidden', 'name' => 'student_id', 'value' => $rawData[0]['id']]);
                    $form->add_input(['type' => 'hidden', 'name' => 'select_section', 'value' => 'ppes']);
                    $form->add_input(['class' => 'btn btn-link', 'type' => 'submit', 'name' => 'update_record', 'value' => 'Update']);
                    $form->end_form();
                }

                ?></td>
            <td><?php
                $stu = count($database->select_count_record('students', 'id', $rawData[0]['id']));
                echo(($stu === 0) ? "Empty" : "Recorded");
                if ($stu < 1) {
                    $form = new Form(['method' => 'POST', 'action' => '?action=v_enrollmentBirefSummary_form', 'target' => '_blank']);
                    $form->add_input(['type' => 'hidden', 'name' => 'student_id', 'value' => $rawData[0]['id']]);
                    $form->add_input(['class' => 'btn btn-link', 'type' => 'submit', 'name' => 'add_record', 'value' => 'Add new record']);
                    $form->end_form();
                } else {
                    $form = new Form(['method' => 'POST', 'action' => '?action=v_update_record', 'target' => '_blank']);
                    $form->add_input(['type' => 'hidden', 'name' => 'student_id', 'value' => $rawData[0]['id']]);
                    $form->add_input(['type' => 'hidden', 'name' => 'select_section', 'value' => 'students']);
                    $form->add_input(['class' => 'btn btn-link', 'type' => 'submit', 'name' => 'update_record', 'value' => 'Update']);
                    $form->end_form();
                }
                ?></td>
            <td><?php
                $payment = count($database->select_count_record('payment_tracking', 'student_id', $rawData[0]['id']));
                echo(($payment === 0) ? "Empty" : "Recorded");

                if ($payment < 1) {
                    $form = new Form(['method' => 'POST', 'action' => '?action=v_paymentTracking_form', 'target' => '_blank']);
                    $form->add_input(['type' => 'hidden', 'name' => 'student_id', 'value' => $rawData[0]['id']]);
                    $form->add_input(['class' => 'btn btn-link', 'type' => 'submit', 'name' => 'add_record', 'value' => 'Add new record']);
                    $form->end_form();
                } else {
                    $form = new Form(['method' => 'POST', 'action' => '?action=v_update_record', 'target' => '_blank']);
                    $form->add_input(['type' => 'hidden', 'name' => 'student_id', 'value' => $rawData[0]['id']]);
                    $form->add_input(['type' => 'hidden', 'name' => 'select_section', 'value' => 'payment_tracking']);
                    $form->add_input(['class' => 'btn btn-link', 'type' => 'submit', 'name' => 'update_record', 'value' => 'Update']);
                    $form->end_form();
                }
                ?></td>
            <td><?php

                $grad = count($database->select_count_record('graduations', 'student_id', $rawData[0]['id']));
                echo(($grad === 0) ? "Empty" : "Recorded");
                if ($grad < 1) {
                    $form = new Form(['method' => 'POST', 'action' => '?action=v_graduation_form', 'target' => '_blank']);
                    $form->add_input(['type' => 'hidden', 'name' => 'student_id', 'value' => $rawData[0]['id']]);
                    $form->add_input(['class' => 'btn btn-link', 'type' => 'submit', 'name' => 'add_record', 'value' => 'Add new record']);
                    $form->end_form();

                } else {
                    $form = new Form(['method' => 'POST', 'action' => '?action=v_update_record', 'target' => '_blank']);
                    $form->add_input(['type' => 'hidden', 'name' => 'student_id', 'value' => $rawData[0]['id']]);
                    $form->add_input(['type' => 'hidden', 'name' => 'select_section', 'value' => 'graduations']);
                    $form->add_input(['class' => 'btn btn-link', 'type' => 'submit', 'name' => 'update_record', 'value' => 'Update']);
                    $form->end_form();
                }
                ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>
