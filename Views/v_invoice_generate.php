<?php

$data = $_POST;

$number = $data['number'];
$date = date('d-m-Y');
$billto = $data['billTo'];
$program = $data['program'];
$note = $data['note'];

//array data
$quantity = $data['quantity'];
$description = $data['description'];
$unitPrice = $data['unitPrice'];
$total = $data['total'];
$subtotal = $data['subtotal'];
$footer = "Thank you for your choosing First College and Welcome!";

$pdf = new FPDF();
//basic initilize
$pdf->AddPage();
$pdf->SetFont('Arial', '', 14);
$pdf->SetFillColor(224, 235, 255);

$pdf->Cell(50, 20, $conf['INVOICE_INFO']['name']);
$pdf->Ln(6);
$pdf->Cell(50, 20, $conf['INVOICE_INFO']['address']);
$pdf->Ln(6);
$pdf->Cell(50, 20, $conf['INVOICE_INFO']['city']);
$pdf->Ln(6);
$pdf->Cell(50, 20, "Tel:" . $conf['INVOICE_INFO']['tel']);
$pdf->Ln(6);
$pdf->Cell(50, 20, "Fax:" . $conf['INVOICE_INFO']['fax']);
$pdf->Ln(6);
$pdf->Cell(50, 20, "Email:" . $conf['INVOICE_INFO']['email']);
$pdf->Ln(5);

$pdf->Image("images/logo.png", 150, 20, 40, 30);
$pdf->Ln(30);
$pdf->Cell(40, 10, 'Invoice Number:', 0, 0, "L", true);
$pdf->Cell(20, 10, $number, 0, 0, "", true);
$pdf->Cell(50, 10, '(PAID)', 0, 0, "", true);
$pdf->Cell(40, 10, 'Date:', 0, 0, "R", true);
$pdf->Cell(30, 10, $date, 0, 0, "", true);
$pdf->Ln(20);
$pdf->Cell(40, 10, 'Bill To:', 0, 0, "L", true);
$pdf->Cell(20, 10, '', 0, 0, "", true);
$pdf->Cell(50, 10, 'Program:', 0, 0, "", true);
$pdf->Cell(40, 10, 'Note:', 0, 0, "R", true);
$pdf->Cell(30, 10, '', 0, 0, "", true);
$pdf->Ln();
$pdf->Cell(40, 10, $billto, 0, 0, "L");
$pdf->Cell(20, 10, '', 0, 0, "");
$pdf->Cell(50, 10, $program, 0, 0, "");
$pdf->Cell(27, 10, '', 0, 0, "");
$pdf->Cell(43, 10, $note, 0, 0, "L");
$pdf->Ln(20);

//beginning of table
$pdf->Cell(45, 10, "Quantity:", 0, 0, 'L', 'true');
$pdf->Cell(45, 10, "Description:", 0, 0, 'L', 'true');
$pdf->Cell(47, 10, "Unit Price:", 0, 0, 'L', 'true');
$pdf->Cell(43, 10, "Total:", 0, 0, 'L', 'true');
$pdf->Ln();

for ($i = 0; $i < count($quantity); $i++) {
    $pdf->Cell(45, 10, $quantity[$i], 0, 0, 'L');
    $pdf->Cell(45, 10, $description[$i], 0, 0, 'L');
    $pdf->Cell(47, 10, $unitPrice[$i], 0, 0, 'L');
    $pdf->Cell(43, 10, $total[$i], 0, 0, 'L');
    $pdf->Ln();
}

$pdf->Cell(45, 10, "");
$pdf->Cell(45, 10, "");
$pdf->Cell(47, 10, "Subtotoal:");
$pdf->Cell(43, 10, "$ ".array_sum($total), 0, 0, 'L');
$pdf->Ln();
$pdf->Cell(45, 10, "");
$pdf->Cell(45, 10, "");
$pdf->Cell(47, 10, "Total:");
$pdf->Cell(43, 10, "$ ".array_sum($total), 0, 0, 'L');
$pdf->Ln(20);

$pdf->Cell(50, 10, "Thank you for your choosing First College ");
$pdf->Ln();
$pdf->Cell(50, 10, "Welcome!");

if(isset($_POST['preview'])){
    $pdf->Output("", $number . ".pdf", true);
}
elseif (isset($_POST['generate'])) {
    $pdf->Output( "D","invoices/".$number . ".pdf", true);
    $pdf->Output( "F","invoices/".$number . ".pdf", true);

    if(isset($data['send_to_student'])) {
        Mail::$fromAddress = "invoice.firstcollege@gmail.com";
        Mail::$fromPwd = 'FCstudenttracking';
        Mail::$toAddress = $data['student_email'];
        Mail::$content = "<h1>This is testing email from invoice</h1>";
        Mail::$attachment = "invoices/" . $number . ".pdf";
        Mail::$subject = 'Student Invoice';
        Mail::send_mail();
    }
    header("location:?action=v_invoice");
}


