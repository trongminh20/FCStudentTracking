<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
$date = date('ymd');

$rows = $database->select_count('invoices', $date);

$number= count($rows) + 1;

$invoiceNumber = $date.$number;

?>
<div id="mainContent" style="margin-left:50px;">
    <form class="" id="" action="?action=v_invoice_generate" method="POST" target="_blank">
        <table class="table">
            <thead>
            <tr>
                <td>
                    INVOICE NUMBER <input type="number" name="number" value="<?= $invoiceNumber?>"
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
                    <input id='' class='total' type='number' name='total[]' value='' onchange="calculate_total();"
                           readonly>
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
                    <input id='' class='total' type='number' name='total[]' value='' onchange="calculate_total();"
                           readonly>
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
                    <input id='' class='total' type='number' name='total[]' value='' onchange="calculate_total();"
                           readonly>
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
                    <input id='' class='total' type='number' name='total[]' value='' onchange="calculate_total();"
                           readonly>
                </td>
            </tr>
            </tbody>
            <tr>
                <td>
                    <input type="button" id="addMoreRow" onclick="add_input_fields();" value="Add more row">
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
            <tr>
                <td>
                    <input type="email" name="student_email" id="studentEmail" placeholder="Enter student's email"
                           style="display: none"><br>
                    <label for="sendEmail"><input class="" id="sendEmail" type="checkbox"
                                                  name="send_to_student"
                                                  value="yes" onclick="add_email_input();">  Send to this
                        student</label>
                </td>
            </tr>
        </table>

        <input id="btnPreview" class="btn btn-primary" type="submit" name="preview" value="Preview">
        <input id="btnGenerate" class="btn btn-primary" type="submit" name="generate" value="Generate">
    </form>
</div>
<script>
    function add_input_fields() {
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

    function add_email_input() {
        var checkbox = document.getElementById('sendEmail');
        var studentEmail = document.getElementById('studentEmail');
        var btn = document.getElementById("btnGenerate");
        if (checkbox.checked == true) {
            studentEmail.style.display = "block";
            btn.setAttribute('value', "Send");
        } else {
            studentEmail.style.display = "none";

        }
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
