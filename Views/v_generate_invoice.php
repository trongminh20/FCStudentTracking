<?php
$data = $_POST;

$quantity = $data['quantity'];
$description = $data['description'];
$unitPrice = $data['unitPrice'];
$total = $data['total'];
$subtotal = $data['subtotal'];

?>

<table id="invoice_table">
    <thead>
    <tr>
        <td>Quantity</td>
        <td>Description</td>
        <td>Unit Price</td>
        <td>Total</td>
    </tr>
    </thead>
    <tbody>
        <?php
            for($i = 0; $i < count($quantity); $i++){
                echo "<tr>";
                echo "<td>$quantity[$i]</td>";
                echo "<td>$description[$i]</td>";
                echo "<td>$unitPrice[$i]</td>";
                echo "<td>$total[$i]</td>";
                echo "</tr>";
            }
        ?>
    <tbody>
    <tfoot>
    <tr>
    <td></td>
        <td></td>
        <td>SUBTOTAL</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>TOTAL</td>
        <td></td>
    </tr>
    </tfoot>
</table>



