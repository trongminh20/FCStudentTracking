<?php
$data = $model->select('apsds', ['student_id' => 3789000]);
$student = $data[0];
echo $student['pay_option'] . "<br><br><br>"; ///***
foreach ($student as $k => $v){
if ($k === 'pay_option'){
$options = ["Full Payment", "Student Aid BC", "Monthly Payment fee", "Payment Plan", "Others"];



?>
<br>
<select name="" class="" id="selectPayment">
    <?php
    foreach ($options as $op) {
        ?>
        <option value="<?= $op ?>" name="<?= $k ?>"
            <?php
            if (strtolower($v) === strtolower($op)) {
                echo "selected";
            } else {
                if (!in_array($v, $options)) {
                    if ($op === "Others") {
                        echo "selected";
                    }
                }
                echo "";
            }
            ?>><?= $op ?></option>
        <?php
    }
    echo "</select>";
echo "<div id ='otherPayment'> <label>Enter Payment Method</label>
    <input id='' class='' name='' value= ".((!in_array($v,$options) && $v === '')?'': $v)." >
</div>";
}
    }
    ?>


<script>
    function payment_track() {
        let select = document.getElementById("selectPayment");
        let otherPayment = document.getElementById("otherPayment");
        if (select.value !== "Others") {
            otherPayment.style.display = "none";
        }else{
            otherPayment.style.display = "block";
        }
    }
</script>


