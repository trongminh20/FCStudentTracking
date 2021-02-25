<?php
$data = $_POST;
print_r($data);
?>

<table>
    <thead>
        <tr>
            <?php
                foreach($data as $key => $val){
                    echo "<td>$key</td>";
                    echo"<tr>";
                    foreach($val as $k => $v){

                        echo "<td>$v</td>";

                    }
                    echo "</tr>";
                }
            ?>
        </tr>
    </thead>

</table>
