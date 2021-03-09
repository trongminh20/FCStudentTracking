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
$pdf->SetFillColor(224,235,255);

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

$pdf->Image("images/logo.png",120,6,70,50);
$pdf->Ln(30);
$pdf->Cell(50, 10, 'Invoice Number',0,0,"C",true);
$pdf->Cell(20, 10, $number,0,0,"",true);
$pdf->Cell(50, 10, '(PAID)',0,0,"",true);
$pdf->Cell(30, 10, 'Date:',0,0,"",true);
$pdf->Cell(30, 10, $date,0,0,"",true);
$pdf->Ln(20);
$pdf->Cell(60, 10, "Bill To", 0,0, 'C', 'true');
$pdf->Cell(60, 10, "Program",0,0, 'C', 'true');
$pdf->Cell(60, 10, "Note",0,0, 'C', 'true');
$pdf->Ln();
$pdf->Cell(60, 10, $billto, 0,0, 'C');
$pdf->Cell(60, 10, $program,0,0, 'C');
$pdf->Cell(60, 10, $note,0,0, 'C');
$pdf->Ln();

//beginning of table
$pdf->Cell(45, 10, "Quantity", 0,0, 'C', 'true');
$pdf->Cell(45, 10, "Description",0,0, 'C', 'true');
$pdf->Cell(45, 10, "Unit Price",0,0, 'C', 'true');
$pdf->Cell(45, 10, "Total",0,0, 'C', 'true');
$pdf->Ln();

for ($i = 0; $i < count($quantity); $i++) {
    $pdf->Cell(50, 10, $quantity[$i],0,0, 'C');
    $pdf->Cell(50, 10, $description[$i],0,0, 'C');
    $pdf->Cell(50, 10, $unitPrice[$i],0,0, 'C');
    $pdf->Cell(50, 10, $total[$i],0,0, 'C');
    $pdf->Ln();
}

$pdf->Cell(50, 10, "");
$pdf->Cell(50, 10, "");
$pdf->Cell(50, 10, "Subtotoal:");
$pdf->Cell(50, 10, array_sum($total),0,0,'C');
$pdf->Ln();
$pdf->Cell(50, 10, "");
$pdf->Cell(50, 10, "");
$pdf->Cell(50, 10, "Total:");
$pdf->Cell(50, 10, array_sum($total),0,0,'C');
$pdf->Ln();

$pdf->Cell(50, 10, "");
$pdf->Cell(50, 10, "");
$pdf->Cell(50, 10, "Thank you for your choosing First College,");
$pdf->Ln();

$pdf->Cell(50, 10, "");
$pdf->Cell(50, 10, "");
$pdf->Cell(50, 10, "Welcome");


$pdf->Output("",$number.".pdf",true);

