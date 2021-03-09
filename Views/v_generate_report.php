<?php
//print_r($_POST);

$studentID = $_POST['stu_id'];
$programID = $_POST['prog_id'];
$data = $model->select('students', ['id' => $studentID]);
?>
<table>
    <thead>
    <tr>
        <td><h4>Enrollment Brief Summary</h4></td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Student Name</td>
        <td><?= $data['name'] ?></td>
    </tr>
    <tr>
        <td>Student ID</td>
        <td><?= $data['id'] ?></td>
    </tr>
    <tr>
        <td>Contact Number</td>
        <td><?= $data['phone'] ?></td>

    </tr>
    <tr>
        <td>Contact Email</td>
        <td><?= $data['email'] ?></td>

    </tr>
    <tr>
        <td>Address</td>
        <td><?= $data['address'] ?></td>

    </tr>
    <tr>
        <td>Domestic OR International</td>
        <td><?= $data['dom_or_int'] ?></td>

    </tr>
    <tr>
        <td>Enrollment Notes</td>
        <td><?= $data['enroll_notes'] ?></td>
    </tr>
    </tbody>
</table><br>

<?php
$data = $model->select('apsds', ['student_id' => $studentID]);
?>
<table>
    <thead>
    <tr>
        <td><h4>Admission Prior to Start Date</h4></td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Photo ID</td>
        <td><?= $data['photo_id'] ?></td>
    </tr>
    <tr>
        <td>Application form</td>
        <td></td>
    </tr>
    <tr>
        <td>Application Fee with Paid Invoice</td>
        <td></td>
    </tr>
    <tr>
        <td>Application Essay</td>
        <td></td>
    </tr>
    <tr>
        <td>Application Essay</td>
        <td></td>
    </tr>
    <tr>
        <td>Character Reference Letters</td>
        <td></td>
    </tr>
    <tr>
        <td>Resume</td>
        <td></td>
    </tr>
    <tr>
        <td>Intro of Message Course Date and Time</td>
        <td></td>
    </tr>
    <tr>
        <td>From</td>
        <td></td>
    </tr>
    <tr>
        <td>Date</td>
        <td></td>
    </tr>
    <tr>
        <td>Intro of Message Fee with Paid invoice</td>
        <td></td>
    </tr>
    <tr>
        <td>Intro of Massage Course Completed</td>
        <td></td>
    </tr>
    <tr>
        <td>Welcome Letter Sent</td>
        <td></td>
    </tr>
    <tr>
        <td>English Test Result</td>
        <td></td>
    </tr>
    <tr>
        <td>CRC Result</td>
        <td></td>
    </tr>
    <tr>
        <td>Medical Notes from Physician</td>
        <td></td>
    </tr>
    <tr>
        <td>Interview Date & Time</td>
        <td></td>
    </tr>
    <tr>
        <td>Interview Approved</td>
        <td></td>
    </tr>
    <tr>
        <td>High School Diploma & Transcript (Or Above)</td>
        <td></td>
    </tr>
    <tr>
        <td>Student Email</td>
        <td></td>
    </tr>
    <tr>
        <td>Letter of Acceptance Issued Date</td>
        <td></td>
    </tr>
    <tr>
        <td>Enrollment Contract</td>
        <td></td>
    </tr>
    <tr>
        <td>Student Handbooks</td>
        <td></td>
    </tr>
    <tr>
        <td>Payment Options</td>
        <td></td>
    </tr>
    <tr>
        <td>Ackmowledgement & Agreemtnt Form Received Date</td>
        <td></td>
    </tr>
    <tr>
        <td>Student ID Card Issued</td>
        <td></td>
    </tr>
    <tr>
        <td>RMT Student Learning Materials:</td>
        <td></td>
    </tr>
    </tbody>
</table><br>

<?php
$ppes= $model->select('ppes', ['student_id' => $studentID]);
?>
<table>
    <thead>
    <tr>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Name Tag</td>
        <td></td>
    </tr>
    <tr>
        <td>Clinic Shirt Size</td>
        <td><?=$ppes['clinic_shirt_size']?></td>
    </tr>
    <tr>
        <td></td>
        <td><?=$ppes['first_aid_loc']?></td>
    </tr>
    <tr>
        <td></td>
        <td><?=$ppes['first_aid_contact']?></td>
    </tr>
    <tr>
        <td>Order Date:</td>
        <td><?=$ppes['order_date']?></td>
    </tr>
    <tr>
        <td>Pick-up Date:</td>
        <td><?=$ppes['pickup_date']?></td>
    </tr>
    <tr>
        <td>First Aid & CPR Date & Time</td>
        <td><?=$ppes['first_aid_and_cpr']?></td>
    </tr>
    <tr>
        <td></td>
        <td><?=$ppes['cert_mark_received']?></td>
    </tr>
    <tr>
        <td></td>
        <td><?=$ppes['handbook_received']?></td>
    </tr>
    <tr>
        <td></td>
        <td><?=$ppes['ack_and_agr']?></td>
    </tr>
    <tr>
        <td></td>
        <td><?=$ppes['medical_file']?></td>
    </tr>
    </tbody>
</table><br>
<?php
$grad = $model->select('graduations', ['student_id' => $studentID]);
?>
<table>
    <thead>
    <tr>
        <td><h4>Graduation</h4></td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Tuition Paid in Full </td>
        <td><?=$grad['tuition_paid']?></td>
    </tr>
    <tr>
        <td>Official Student Transcript Issued</td>
        <td><?=$grad['transcript']?></td>
    </tr>
    <tr>
        <td>Official Completion Letter Issued</td>
        <td><?=$grad['completion_letter']?></td>
    </tr>
    <tr>
        <td>Copy of signed Diploma Issued</td>
        <td><?=$grad['signed_diploma']?></td>
    </tr>
    <tr>
        <td>Board Exam Date</td>
        <td><?=$grad['exam_date']?></td>
    </tr>
    <tr>
        <td>Copy of T2202A (Tax Form) Issued</td>
        <td><?=$grad['T220A']?></td>
    </tr>
    <tr>
        <td>Employment Follow Up</td>
        <td><?=$grad['employment']?></td>
    </tr>
    </tbody>

</table><br>





