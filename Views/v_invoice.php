<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
$number = $database->select_count('invoice');
?>
<div id="mainContent">
    <form class="" id="" action="?action=v_generate_invoice" method="POST">

        <table class="table">
            <thead>
            <tr>
                <td>
                    INVOICE NUMBER <input type="number" name="number" value="<?= date('ymd') . $number ?>"
                                          readonly>
                    (PAID)
                </td>
                <td></td>

                <td>Date: <?= date('d-m-Y') ?></td>
            </tr>
            <tr>
                <td>BILL TO</td>
                <td>PROGRAM</td>
                <td>NOTE</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input type="text" name="billTo">
                </td>
                <td>
                    <input type="text" name="program">
                </td>
                <td>
                    <input type="text" name="note">
                </td>
            </tr>
            </tbody>
        </table>

        <table class="table" id="invoice_table">
            <thead>
            <tr>
                <td>Quantity</td>
                <td>Description</td>
                <td>Unit Price</td>
                <td>Total</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input id='' class='quantity' type='number' name='quantity[]' value='' onchange="calculate_total
                    ();">
                </td>
                <td>
                    <input id='' class='' type='text' name='description[]' value=''>
                </td>
                <td>
                    <input id='' class='unit_price' type='number' name='unitPrice[]' step="0.01" value=''
                           onchange="calculate_total
                    ();">
                </td>
                <td>
                    <input id='' class='total' type='number' name='total[]' value='' onchange="calculate_total();" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <input id='' class='quantity' type='number' name='quantity[]' value='' onchange="calculate_total
                    ();">
                </td>
                <td>
                    <input id='' class='' type='text' name='description[]' value=''>
                </td>
                <td>
                    <input id='' class='unit_price' type='number' name='unitPrice[]' step="0.01" value=''
                           onchange="calculate_total
                    ();">
                </td>
                <td>
                    <input id='' class='total' type='number' name='total[]' value='' onchange="calculate_total();" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <input id='' class='quantity' type='number' name='quantity[]' value='' onchange="calculate_total
                    ();">
                </td>
                <td>
                    <input id='' class='' type='text' name='description[]' value=''>
                </td>
                <td>
                    <input id='' class='unit_price' type='number' name='unitPrice[]' step="0.01" value='' onchange="calculate_total
                    ();">
                </td>
                <td>
                    <input id='' class='total' type='number' name='total[]' value='' onchange="calculate_total();" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <input id='' class='quantity' type='number' name='quantity[]' value='' onchange="calculate_total
                    ();">
                </td>
                <td>
                    <input id='' class='' type='text' name='description[]' value=''>
                </td>
                <td>
                    <input id='' class='unit_price' type='number' name='unitPrice[]' step="0.01" value='' onchange="calculate_total
                    ();">
                </td>
                <td>
                    <input id='' class='total' type='number' name='total[]' value='' onchange="calculate_total();" readonly>
                </td>
            </tr>
            </tbody>
            <tr>
                <td>
                    <input type="button" id="addMoreRow" onclick="add_fields();" value="Add more row">
                </td>
            </tr>
            <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td>SUBTOTAL</td>
                <td>
                    <input id='subtotal' class='' type='number' name='subtotal' value='' readonly
                           onchange="calculate_total();">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>TOTAL FEES</td>
                <td>
                    <input id="" class="" type="number" name="totalFees" value="" disable>
                </td>
            </tr>
            </tfoot>

        </table>
        <input id="" class="btn btn-primary" type="submit" name="preview" value="Preview">
        <input id="" class="btn btn-primary" type="submit" name="Generate" value="Generate">

    </form>
</div>
<script>
    function add_fields() {
        var loc = document.getElementById("invoice_table").getElementsByTagName('tbody')[0].insertRow(-1).innerHTML = "<tr>" +
            "<td><input id='' class='quantity' type='number' name='quantity[]' value='' onchange='calculate_total();" +
            "'></td>" +
            "<td><input id='' class='' type='text' name='description[]' value='' ></td>" +
            "<td><input id='' class='unit_price' type='number' name='unitPrice[]' value='' onchange='calculate_total" +
            "();'></td>" +
            "<td><input id='' class='total' type='number' name='total[]' value=''onchange='calculate_total();' " +
            "readonly></td>"
            + "</tr>";
    }

    function calculate_total() {
        $("#invoice_table").on('change', 'input', function () {
            var row = $(this).closest('tr');
            var qty = parseInt(row.find(".quantity").val());
            var price = parseFloat(row.find(".unit_price").val());
            var total = qty * price;

            row.find(".total").val((isNaN(total) ? "" : total));
            qty = 0;
            price = 0;
            total = 0;

        });
    }
</script>