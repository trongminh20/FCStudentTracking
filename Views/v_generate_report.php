<?php
//print_r($_POST);

$studentID = $_POST['stu_id'];
$programID = $_POST['prog_id'];

//$include = array_values($_POST['include']);

$ebs = $_POST['include'][0];
$apsd = $_POST['include'][1];
$ppe = $_POST['include'][2];
$graduation = $_POST['include'][3];
$payemntTracking = $_POST['include'][4];

echo "<h3>Student brief summary</h3>";
$view->display_as_table_single_row('students', ['id' => $studentID], $model);
echo "<br>";

echo "<h3>Admission perior to start date</h3>";
$view -> display_as_table_single_row('apsds', ['student_id' => $studentID], $model);

echo "<h3>Perior Practice education</h3>";
$view -> display_as_table_single_row('ppes', ['student_id' => $studentID], $model);

echo "<h3>Payment tracking</h3>";




