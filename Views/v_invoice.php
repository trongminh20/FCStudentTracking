<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<div id="mainContent">
    <form class="" id="" action="?action=v_generate_invoice" method="POST">
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

            <tr>
                <td>
                    <input id='' class='' type='number' name='quantity[]' value=''>
                </td>
                <td>
                    <input id='' class='' type='text' name='description[]' value=''>
                </td>
                <td>
                    <input id='' class='' type='number' name='unitPrice[]' value=''>
                </td>
                <td>
                    <input id='' class='' type='number' name='total[]' value=''>
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
                    <input id='' class='' type='number' name='subtotal' value=''>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>TOTAL FEES</td>
                <td>
                    <input id="" class="" type="number" name="totalFees" value="">
                </td>
            </tr>
            </tfoot>

        </table>
        <input id="" class="btn btn-primary" type="submit" name="submit" value="Generate">
    </form>
</div>
<script>
    function add_fields() {
        var loc = document.getElementById("invoice_table").getElementsByTagName('tbody')[0].insertRow(-1).innerHTML = "<tr>" +
            "<td><input id='' class='' type='number' name='quantity[]' value=''></td>" +
            "<td><input id='' class='' type='text' name='description[]' value=''></td>" +
            "<td><input id='' class='' type='number' name='unitPrice[]' value=''></td>" +
            "<td><input id='' class='' type='number' name='total[]' value=''></td>" + "</tr>";
    }

</script>