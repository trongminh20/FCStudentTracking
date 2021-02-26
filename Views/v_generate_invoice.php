<?php


$data = $_POST;

$billto = $data['billTo'];
$program = $data['program'];
$note = $data['note'];
$quantity = $data['quantity'];
$description = $data['description'];
$unitPrice = $data['unitPrice'];
$total = $data['total'];
$subtotal = $data['subtotal'];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>First College Management</title>
    <link rel="stylesheet" href="css/css_reset.css"/>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/master_page.css"/>
    <link rel="stylesheet" href="css/w3.css"/>
    <!-- jQuery CDN -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="invoiceContent" style="margin: auto; display: flex; flex-direction: column; justify-content: space-around;
align-items: center;">
    <table class="table" id="pageHeader">
        <tr>
            <td id="mainInfo">
                <?= $conf['INVOICE_INFO']['name'];?> <br>
                <?= $conf['INVOICE_INFO']['address'];?><br>
                Tel: <?= $conf['INVOICE_INFO']['tel'];?><br>
                Fax: <?= $conf['INVOICE_INFO']['fax'];?><br>
                Email: <?= $conf['INVOICE_INFO']['email']; ?><br>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td id="logo">
                <?="<img src='" . $conf['INVOICE_INFO']['logo'] . "' width='300px' height='200px'>";?>
            </td>
        </tr>
    </table>
    <table class="table">
        <thead>
        <tr>
            <td>
                INVOICE NUMBER XXXXXX (PAID)
            </td>
            <td></td>

            <td>DATE</td>
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
                <?=$billto;?>
            </td>
            <td>
                <?=$program;?>
            </td>
            <td>
                <?=$note;?>
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
        <?php
        for ($i = 0; $i < count($quantity); $i++) {
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
</div>
</body>