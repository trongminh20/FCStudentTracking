<?php
$student = $apsds = $ppes = $inputPayment = "";
//print_r($_POST);
$student_id = $_POST['stu_id'];
$student_prog = $_POST['prog_id'];

if (isset($_POST['include'])) {

    for ($i = 0; $i < count($_POST['include']); $i++) {
        if ($_POST['include'][$i] === 'ebs') {
            $student = 'students';
        }
        if ($_POST['include'][$i] === 'apsds') {
            $apsds = 'apsds';
        }
        if ($_POST['include'][$i] === 'ppes') {
            $ppes = 'ppes';
        }
        if ($_POST['include'][$i] === 'payment') {
            $inputPayment = 'payment';
        }
    }
}
////initialize
$report = new FPDF();
$report->AddPage();
$report->SetFont('Arial', '', 14);
$report->SetFillColor(64, 152, 219);

if ($student != "") {
    $ebs_data = $model->select('students', ['id' => $student_id]);
    $detail = $ebs_data[0];
    //start section
    $report->Cell(50, 10, 'Student Name');
    $report->Cell(50, 10, $detail['name'], "", "", "", false);
    $report->Ln();
//Start Summary Section
    $report->Cell(100, 10, 'Enrollment Brief Summary', "", "", "C", true);
    $report->Ln();
    $report->Cell(50, 10, 'Date of Birth');

    $report->Cell(50, 10, $detail['birthdate'], "", "", "", false);
    $report->Ln();
    $report->Cell(60, 10, 'Contact number');
    $report->Cell(50, 10, $detail['phone'], "", "", "", false);
    $report->Ln();
    $report->Cell(60, 10, "Contact Email");
    $report->Cell(50, 10, $detail['email'], "", "", "", false);
    $report->Ln();
    $report->Cell(60, 10, "Address");
    $report->Cell(50, 10, $detail['address'], "", "", "", false);
    $report->Ln();
    $report->Cell(60, 10, "Domestic Or International");
    $report->Cell(60, 10, $detail['dom_or_int'], "", "", "", false);
    $report->Ln();
    $report->Cell(60, 10, "Enrollment Notes");
    $report->Cell(50, 10, $detail['enroll_notes'], "", "", "", false);
    $report->Ln();
    $report->Cell(60, 10, "Contact Email");
    $report->Cell(50, 10, $detail['email'], "", "", "", false);
    $report->Ln();
//end summary Section
}
if ($apsds != "") {
    $apsds_data = $model->select('apsds', ['student_id' => $student_id]);
    $report->Cell(100, 10, 'Admission Prior to Start Date', "", "", "C", true);
    $report->Ln();

    if (!empty($apsds_data)) {
        $detail = $apsds_data[0];
        $report->Cell(60, 10, 'Photo ID');
        $report->Cell(50, 10, $detail['photo_id'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Application Form');
        $report->Cell(50, 10, $detail['app_form'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Application Fee');
        $report->Cell(50, 10, $detail['app_fee'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Application Essay');
        $report->Cell(50, 10, $detail['app_essay'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Refer letter');
        $report->Cell(50, 10, $detail['refer_letter'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Resume');
        $report->Cell(50, 10, $detail['resume'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Intro of message course from Date');
        $report->Cell(50, 10, $detail['intro_of_msg_from'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Intro of message course to date');
        $report->Cell(50, 10, $detail['intro_of_msg_to'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Intro Fee');
        $report->Cell(50, 10, $detail['intro_fee'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Intro of message course complete');
        $report->Cell(50, 10, $detail['intro_msg_complete'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'welcome Letter');
        $report->Cell(50, 10, $detail['welcome_letter'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'English test result');
        $report->Cell(50, 10, $detail['eng_test_result'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'CRC result');
        $report->Cell(50, 10, $detail['crc_result'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Medical notes from physician');
        $report->Cell(50, 10, $detail['medical_notes'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Interview date and time');
        $report->Cell(50, 10, $detail['interview_date'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Approved');
        $report->Cell(50, 10, $detail['interview_approve'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'High School Diploma & Transcript (Or Above)');
        $report->Cell(50, 10, $detail['dips_and_trans'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Student Email');
        $report->Cell(50, 10, $detail['stu_email'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Letter of Acceptance');
        $report->Cell(50, 10, $detail['accept_letter_date'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Enrollment contract');
        $report->Cell(50, 10, $detail['enroll_contract'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Handbook notes');
        $report->Cell(50, 10, $detail['handbook_notes'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Payment option');
        $report->Cell(50, 10, $detail['pay_option'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Acknowledgement and agreement signed');
        $report->Cell(50, 10, $detail['ack_and_agr'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'Received ID card');
        $report->Cell(50, 10, $detail['received_card'], "", "", "", false);
        $report->Ln();

        $report->Cell(60, 10, 'RMT student materials');
        $report->Cell(50, 10, $detail['rmt_stu_materials'], "", "", "", false);
        $report->Ln();
    } else {
        $report->Cell(60, 10, 'Not available');
        $report->Ln();
    }

}
if ($ppes != "") {
    $ppes_data = $model->select('ppes', ['student_id' => $student_id]);

    $report->Cell(100, 10, 'Prior to Practice Education', "", "", "C", true);
    $report->Ln();

    if (!empty($ppes_data)) {
        $detail = $ppes_data[0];

        $report->Cell(100, 10, 'Name tag');
        $report->Cell(50, 10, $detail['name_tag'], "", "", "", false);
        $report->Ln();
        $report->Cell(100, 10, 'Clinic Shirt size');
        $report->Cell(50, 10, $detail['clinic_shirt_size'], "", "", "", false);
        $report->Ln();
        $report->Cell(100, 10, 'Order date');
        $report->Cell(50, 10, $detail['order_date'], "", "", "", false);
        $report->Ln();
        $report->Cell(100, 10, 'Pick-up Date');
        $report->Cell(50, 10, $detail['pickup_date'], "", "", "", false);
        $report->Ln();
        $report->Cell(100, 10, 'First Aid & CPR Date & Time');
        $report->Cell(50, 10, $detail['fa_and_cpr_dt'], "", "", "", false);
        $report->Ln();
        $report->Cell(100, 10, 'First Aid & CPR Location & Contact');
        $report->Cell(50, 10, $detail['fa_and_cpr_contact'], "", "", "", false);
        $report->Ln();
        $report->Cell(100, 10, 'Certificate of First Aid & CPR Receive Date');
        $report->Cell(50, 10, $detail['cert_fa_cpr_receive'], "", "", "", false);
        $report->Ln();
        $report->Cell(100, 10, 'Hankbook Receive Date');
        $report->Cell(50, 10, $detail['handbook_receive'], "", "", "", false);
        $report->Ln();
        $report->Cell(100, 10, 'Acknowledgement and Agreement Form');
        $report->Cell(50, 10, $detail['ack_and_agr'], "", "", "", false);
        $report->Ln();
        $report->Cell(100, 10, 'Medical File (Vaccinations) Received');
        $report->Cell(50, 10, $detail['medical_file'], "", "", "", false);
        $report->Ln();
    } else {
        $report->Cell(60, 10, 'Not available');
        $report->Ln();
    }
}
if ($inputPayment != "") {
    $payment_data = $model->select('payment_tracking', ['student_id' => $student_id]);

    $report->Cell(100, 10, 'Payment Tracking', "", "", "C", true);
    $report->Ln();
    if (!empty($payment_data)) {
        $detail = $payment_data[0];
        $report->Cell(60, 10, "1st_payment");
        $report->Ln();
        $report->Cell(60, 10, "2nd_payment");
        $report->Ln();
        $report->Cell(60, 10, "3rd_payment");
        $report->Ln();
        $report->Cell(60, 10, "4th_payment");
        $report->Ln();
        $report->Cell(60, 10, "5th_payment");
        $report->Ln();
        $report->Cell(60, 10, "6th_payment");
        $report->Ln();
        $report->Cell(60, 10, "7th_payment");
        $report->Ln();
        $report->Cell(60, 10, "8th_payment");
        $report->Ln();
        $report->Cell(60, 10, "9th_payment");
        $report->Ln();
        $report->Cell(60, 10, "10th_payment");
        $report->Ln();
        $report->Cell(60, 10, "total");
        $report->Ln();

    } else {
        $report->Cell(60, 10, 'Not available');
        $report->Ln();
    }
}
if (isset($_POST['preview'])) {
    $report->Output("", $student_id . "_report.pdf");
} else if (isset($_POST['generate'])) {
    $report->Output("D", $student_id . "_report.pdf");
    $_SESSION['report_info'] = "The report has been generated";
}





