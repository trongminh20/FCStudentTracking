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

echo $ebs;

$arr = $model->select('students', ['id' => $studentID]);
?>
<table>
    <?php
    foreach ($arr as $k => $v) {
        echo "<tr>";
        echo "<td>".$k ."</td>";
        echo "<td>" . $v . "</td>";
    }
    ?>
</table>
<?php

echo $apsd;
$arr = $model -> select('apsds', ['student_id'=>$studentID]);
?>
<table>
    <?php
    foreach ($arr as $k => $v) {
        echo "<tr>";
        echo "<td>".$k ."</td>";
        echo "<td>" . $v . "</td>";
    }
    ?>
</table>
<?php
echo $ppe;
echo $graduation;
echo $payemntTracking;

