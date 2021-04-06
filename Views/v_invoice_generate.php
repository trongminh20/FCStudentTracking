<?php

$data = $_POST;

$number = $data['number'];
$date = date('Y-m-d');
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
$pdf->Cell(43, 10, "$ " . array_sum($total), 0, 0, 'L');
$pdf->Ln();
$pdf->Cell(45, 10, "");
$pdf->Cell(45, 10, "");
$pdf->Cell(47, 10, "Total:");
$pdf->Cell(43, 10, "$ " . array_sum($total), 0, 0, 'L');
$pdf->Ln(20);

$pdf->Cell(50, 10, "Thank you for your choosing First College ");
$pdf->Ln();
$pdf->Cell(50, 10, "Welcome!");

if (isset($_POST['preview'])) {
    $pdf->Output("", $number . ".pdf", true);
} elseif (isset($_POST['generate'])) {
    $dataInsert = ['number' => $number, 'bill_to' => $billto, 'date' => $date, 'total' => array_sum($total), 'note' => $note];
    $pdf->Output("D", "invoices/" . $number . ".pdf", true);
    $pdf->Output("F", "invoices/" . $number . ".pdf", true);

    if (isset($data['send_to_student'])) {
        Mail::$fromAddress = "info.firstcollege@gmail.com";
        Mail::$fromPwd = "FCstudenttracking";
        Mail::$toAddress = $data['student_email'];
        Mail::$content = "<h1>Hello " . $billto . ",</h1><br>
                          <p>Please see the attachment bellow for your paid invoice.</p>
                          <p>Thank you for interest in the " . $program . " program. Please feel free to contact us if you have any questions.</p>
                          <br><br>
                          <p>Best regards,</p>
                          <br><p>__</p>
                          <table>
                            <tr>
                                <td>
                                    <img src='images/logo.png' width='50px' height='70px' alt='First College'>
                                </td>
                                <td>
                                    <h1>" . $_SESSION['fname'][0]['fname'] . "</h1>
                                    <p style='color: #2e6da4; font-size: 12px;'><span style='text-transform: uppercase; font-style: italic;'>"
                                        . $_SESSION['fname'][0]['role'] . "</span><a href='https://www.firstcollege.ca/'>FIRST COLLEGE</a> | Inspiring minds through education
                                        <br>P1. 778.478.6611 | P2. 778.754.2888 | E. " . $_SESSION['user']['email'] . "
                                        <br>F. 778.478.6610 | ADMIN OFFICE: 572 Leon Ave, 2nd floor, Kelowna, BC V1Y 6J6</p> 
                                </td>
                            </tr>
                          </table>";
        Mail::$attachment = "invoices/" . $number . ".pdf";
        Mail::$subject = 'Student Invoice';
        Mail::send_mail();
    }
//    $model->insert('invoices', $dataInsert);
    header("location:?action=v_invoice");
}


