<?php
$student = $apsds = $ppes = $inputPayment = $grad = "";
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
        if ($_POST['include'][$i] === 'payment_tracking') {
            $inputPayment = 'payment_tracking';
        }
        if ($_POST['include'][$i] === 'graduations') {
            $grad = 'graduations';
        }
    }
}
////initialize
$report = new FPDF();
$report->AddPage();
$report->SetFont('Arial', '', 12);
$report->SetFillColor(64, 152, 219);
//ENROLLMENT BRIEF SUMMARY SECTION
if ($student != "") {
    $ebs_data = $model->select('students', ['id' => $student_id]);
    $detail = $ebs_data[0];
    //start section
    $report->Cell(30, 10, 'Student Name:');
    $report->Cell(150, 10, $detail['name'], 0, "", "", false);
    $report->Ln();
//Start Summary Section
    $report->Cell(180, 10, 'Enrollment Brief Summary', 0, "", "L", true);
    $report->Ln();
    $report->Cell(100, 10, 'Date of Birth:');
    $report->Cell(50, 10, $detail['birthdate'], 0, "", "", false);
    $report->Ln();
    $report->Cell(100, 10, 'Contact number:');
    $report->Cell(50, 10, $detail['phone'], 0, "", "", false);
    $report->Ln();
    $report->Cell(100, 10, "Contact Email:");
    $report->Cell(50, 10, $detail['email'], 0, "", "", false);
    $report->Ln();
    $report->Cell(100, 10, "Address:");
    $report->Cell(50, 10, $detail['address'], 0, "", "", false);
    $report->Ln();
    $report->Cell(100, 10, "Domestic Or International:");
    $report->Cell(50, 10, $detail['dom_or_int'], 0, "", "", false);
    $report->Ln();
    $report->Cell(100, 10, "Enrollment Notes:");
    $report->MultiCell(95, 10, $detail['enroll_notes']);
    $report->Ln();
    $report->Cell(100, 10, "Contact Email:");
    $report->Cell(50, 10, $detail['email'], 0, "", "", false);
    $report->Ln();
//end summary Section
}
//ADMISTION PERIOR TO START DATE SECTION
if ($apsds != "") {
    $apsds_data = $model->select('apsds', ['student_id' => $student_id]);
    $report->Cell(180, 10, 'Admission Prior to Start Date', "", "", "L", true);
    $report->Ln();

    if (!empty($apsds_data)) {
        $detail = $apsds_data[0];
        $report->Cell(100, 10, 'Photo ID:');
        $report->Cell(50, 10, $detail['photo_id'], "", "", "", false);
        $report->Ln();

        $report->Cell(100, 10, 'Application Form:');
        $report->Cell(50, 10, $detail['app_form'], "", "", "", false);
        $report->Ln();

        $report->Cell(100, 10, 'Application Fee and paid invoice:');
        $report->Cell(50, 10, $detail['app_fee'], "", "", "", false);
        $report->Ln();
        if ($student_prog === 'RMT') {
            $report->Cell(100, 10, 'Application Essay:');
            $report->Cell(50, 10, $detail['app_essay'], "", "", "", false);
            $report->Ln();
            $report->Cell(100, 10, 'Character Reference Letters:');
            $report->Cell(50, 10, $detail['refer_letter'], "", "", "", false);
            $report->Ln();

            $report->Cell(100, 10, 'Resume:');
            $report->Cell(50, 10, $detail['resume'], "", "", "", false);
            $report->Ln();

            $report->Cell(100, 10, 'Intro of message course Day one:');
            $report->Cell(50, 10, $detail['intro_of_msg_day1_from'], "", "", "", false);
            $report->Ln();

            $report->Cell(100, 10, 'Intro of message course day two:');
            $report->Cell(50, 10, $detail['intro_of_msg_day2_from'], "", "", "", false);
            $report->Ln();

            $report->Cell(100, 10, 'Intro of message fee with paid invoice:');
            $report->Cell(50, 10, $detail['intro_fee'], "", "", "", false);
            $report->Ln();

            $report->Cell(100, 10, 'Intro of message course complete:');
            $report->Cell(50, 10, $detail['intro_msg_complete'], "", "", "", false);
            $report->Ln();
        }
        $report->Cell(100, 10, 'welcome Letter sent:');
        $report->Cell(50, 10, $detail['welcome_letter'], "", "", "", false);
        $report->Ln();

        $report->Cell(100, 10, 'English test result (for non-english speaker):', "", "");
        $report->Cell(50, 10, $detail['eng_test_result'], "", "", "", false);
        $report->Ln();

        $report->Cell(100, 10, 'English Language Competency Self-Declaration:', "");
        $report->Cell(50, 10, $detail['eng_com_form'], "", "", "L", false);
        $report->Ln();

        $report->Cell(100, 10, 'High School Diploma & Transcript (Or Above):');
        $report->Cell(50, 10, $detail['dips_and_trans'], "", "", "", false);
        $report->Ln();
        if ($student_prog === 'RMT') {
            $report->Cell(100, 10, 'CRC result:');
            $report->Cell(50, 10, $detail['crc_result'], "", "", "", false);
            $report->Ln();
            $report->Cell(100, 10, 'Medical notes from physician:');
            $report->Cell(50, 10, $detail['medical_notes'], "", "", "", false);
            $report->Ln();

            $report->Cell(100, 10, 'Interview date and time:');
            $report->Cell(50, 10, $detail['interview_date'], "", "", "", false);
            $report->Ln();

            $report->Cell(100, 10, 'Interview Approved:');
            $report->Cell(50, 10, $detail['interview_approved'], "", "", "", false);
            $report->Ln();
        }
        $report->Cell(100, 10, 'Student Email:');
        $report->Cell(50, 10, $detail['stu_email'], "", "", "", false);
        $report->Ln();

        $report->Cell(100, 10, 'Letter of Acceptance:');
        $report->Cell(50, 10, $detail['accept_letter_date'], "", "", "", false);
        $report->Ln();

        $report->Cell(100, 10, 'Enrollment contract:');
        $report->Cell(50, 10, $detail['enroll_contract'], "", "", "", false);
        $report->Ln();

        $report->Cell(100, 10, 'Handbook notes:');
        $report->Cell(50, 10, $detail['stu_prog_handbook_notes'], "", "", "", false);
        $report->Ln();

        $report->Cell(100, 10, 'Payment option:');
        $report->Cell(50, 10, $detail['pay_option'], "", "", "", false);
        $report->Ln();

        $report->Cell(100, 10, 'Acknowledgement and agreement signed:');
        $report->Cell(50, 10, $detail['stu_ack_and_agr'], "", "", "", false);
        $report->Ln();

        $report->Cell(100, 10, 'Received ID card:');
        $report->Cell(50, 10, $detail['received_card'], "", "", "", false);
        $report->Ln();
        if ($student_prog === 'RMT') {
            $report->Cell(180, 10, 'RMT student materials', "", "", "", true);
            $report->Ln();
            $report->Cell(100, 10, 'Sheet Set:', "", "", "", false);
            $report->Cell(50, 10, ((strpos($detail['rmt_stu_materials'], "Sheet Set") !== false) ? "Yes" : "No"));
            $report->Ln();
            $report->Cell(100, 10, 'Laptop or Learning Support:', "", "", "", false);
            $report->Cell(50, 10, ((strpos($detail['rmt_stu_materials'], "Laptop or Learning Support")) ? "Yes" : "No"));
            $report->Ln();
            $report->Cell(100, 10, 'Goniometer:', "", "", "", false);
            $report->Cell(50, 10, ((strpos($detail['rmt_stu_materials'], "Goniometer")) ? "Yes" : "No"));
            $report->Ln();
            $report->Cell(100, 10, 'Oil Holster:', "", "", "", false);
            $report->Cell(50, 10, ((strpos($detail['rmt_stu_materials'], "Oil Holster")) ? "Yes" : "No"));
            $report->Ln();
            $report->Cell(100, 10, 'Bottle:', "", "", "", false);
            $report->Cell(50, 10, ((strpos($detail['rmt_stu_materials'], "Bottle")) ? "Yes" : "No"));
            $report->Ln();
        }
    } else {
        $report->Cell(60, 10, 'Not available');
        $report->Ln();
    }
}
//PRIOR TO PRACTICE EDUCATION
if ($ppes != "") {
    $ppes_data = $model->select('ppes', ['student_id' => $student_id]);

    $report->Cell(180, 10, 'Prior to Practice Education', "", "", "L", true);
    $report->Ln();

    if (!empty($ppes_data)) {
        $detail = $ppes_data[0];

        $report->Cell(100, 10, 'Name tag:');
        $report->Cell(50, 10, $detail['name_tag'], "", "", "", false);
        if ($student_prog === 'RMT' || $student_prog === 'HCA') {
            $report->Ln();
            $report->Cell(100, 10, 'Clinic Shirt size:');
            $report->Cell(50, 10, $detail['clinic_shirt_size'], "", "", "", false);
            $report->Ln();
            $report->Cell(100, 10, 'Order date:');
            $report->Cell(50, 10, $detail['order_date'], "", "", "", false);
            $report->Ln();
            $report->Cell(100, 10, 'Pick-up Date:');
            $report->Cell(50, 10, $detail['pickup_date'], "", "", "", false);
            $report->Ln();
        }
        $report->Cell(100, 10, 'First Aid & CPR Date & Time:');
        $report->Cell(50, 10, $detail['fa_and_cpr_dt'], "", "", "", false);
        $report->Ln();
        $report->Cell(100, 10, 'First Aid & CPR Location & Contact:');
        $report->Cell(50, 10, $detail['fa_and_cpr_contact'], "", "", "", false);
        $report->Ln();
        $report->Cell(100, 10, 'Certificate of First Aid & CPR Receive Date:');
        $report->Cell(50, 10, $detail['cert_fa_cpr_receive'], "", "", "", false);
        $report->Ln();
        if ($student_prog === 'CSW') {
            $report->Cell(100, 10, 'Foodsafe and CPR date time:');
            $report->Cell(50, 10, $detail['foodsafe_dt'], "", "", "", false);
            $report->Ln();
            $report->Cell(100, 10, 'Foodsafe location and contact:');
            $report->Cell(50, 10, $detail['foodsafe_contact'], "", "", "", false);
            $report->Ln();
            $report->Cell(100, 10, 'Certificate of Foodsafe receive date:');
            $report->Cell(50, 10, $detail['cert_foodsafe_receive'], "", "", "", false);
            $report->Ln();
        }
        if ($student_prog === 'CSW' || $student_prog === 'HCA') {
            $report->Cell(100, 10, 'Criminal record check (CRC):');
            $report->Cell(50, 10, $detail['crc_notes'], "", "", "", false);
            $report->Ln();
        }
        if ($student_prog === 'HCA') {
            $report->Cell(100, 10, 'SPECO:');
            $report->Cell(50, 10, $detail['speco'], "", "", "", false);
            $report->Ln();
        }
        if ($student_prog === 'RMT') {
            $report->Cell(100, 10, 'Hankbook Receive Date:');
            $report->Cell(50, 10, $detail['cli_handbook_receive'], "", "", "", false);
            $report->Ln();
            $report->Cell(100, 10, 'Acknowledgement and Agreement Form:');
            $report->Cell(50, 10, $detail['cli_ack_and_agr'], "", "", "", false);
            $report->Ln();
            $report->Cell(100, 10, 'Medical File (Vaccinations) Received:');
            $report->Cell(50, 10, $detail['medical_file'], "", "", "", false);
            $report->Ln();
        }
    } else {
        $report->Cell(60, 10, 'Not available');
        $report->Ln();
    }
}
//GRADUATION SECTION
if ($grad != "") {
    $grad_data = $model->select('graduations', ['student_id' => $student_id]);
    $report->Cell(180, 10, 'Graduation', "", "", "L", true);
    $report->Ln();
   if(!empty($grad_data)) {
       $detail = $grad_data[0];
       $report->Cell(100, 10, "Tuition paid in full:");
       $report->Cell(50, 10, $detail['tuition_paid']);
       $report->Ln();
       $report->Cell(100, 10, "Official Student Transcript issued:");
       $report->Cell(50, 10, $detail['official_transcript']);
       $report->Ln();
       $report->Cell(100, 10, "Official Completion Letter Issued:");
       $report->Cell(50, 10, $detail['completion_letter']);
       $report->Ln();
       $report->Cell(100, 10, "Copy of signed Diploma Issued:");
       $report->Cell(50, 10, $detail['signed_diploma']);
       $report->Ln();
       $report->Cell(100, 10, "Copy of T2202A (Tax Form) Issued:");
       $report->Cell(50, 10, $detail['T2202A']);
       $report->Ln();
       if ($student_prog === 'RMT') {
           $report->Cell(100, 10, "Board Exam Date:");
           $report->Cell(50, 10, $detail['exam_date']);
           $report->Ln();
       }
       $report->Cell(100, 10, "Employment Follow Up:");
       $report->Cell(50, 10, $detail['employment']);
       $report->Ln();
   }else{
          $report->Cell(60, 10, 'Not available');
        $report->Ln();
   }
}
//PAYMENT TRACKING SECTION
if ($inputPayment != "") {
    $payment_data = $model->select('payment_tracking', ['student_id' => $student_id]);
    $report->Cell(180, 10, 'Payment Tracking', "", "", "L", true);
    $report->Ln();
    if (!empty($payment_data)) {
        $detail = $payment_data[0];

        $report->Cell(100, 10, "Application Fee:");
        $report->Cell(50, 10, "$ " .$detail['application_fee']);
        $report->Ln();
        $report->Cell(100, 10, "Scholarships OR Subsidy:");
        $report->Cell(50, 10, "$ " .$detail['scholarships']);
        $report->Ln();
        if ($student_prog === 'RMT') {
            $report->Cell(100, 10, "Intro to Massage Fee:");
            $report->Cell(50, 10, "$ " .$detail['intro_to_message_fee']);
            $report->Ln();
        }
        $report->Cell(100, 10, "Course Materials Fee:");
        $report->Cell(50, 10, "$ " .$detail['course_materials_fee']);
        $report->Ln();
        $report->Cell(100, 10, "Textbook Fee:");
        $report->Cell(50, 10, "$ " .$detail['textbook_fee']);
        $report->Ln();
        $report->Cell(100, 10, "Administration Fee:");
        $report->Cell(50, 10, "$ " .$detail['admin_fee']);
        $report->Ln();
        $report->Cell(100, 10, "1st_payment:");
        $report->Cell(50, 10, "$ " .$detail['1st_payment']);
        $report->Ln();
        $report->Cell(100, 10, "2nd_payment:");
        $report->Cell(50, 10, "$ " .$detail['2nd_payment']);
        $report->Ln();
        $report->Cell(100, 10, "3rd_payment:");
        $report->Cell(50, 10, "$ " .$detail['3rd_payment']);
        $report->Ln();
        $report->Cell(100, 10, "4th_payment:");
        $report->Cell(50, 10, "$ " .$detail['4th_payment']);
        $report->Ln();
        $report->Cell(100, 10, "5th_payment:");
        $report->Cell(50, 10, "$ " .$detail['5th_payment']);
        $report->Ln();
        $report->Cell(100, 10, "6th_payment:");
        $report->Cell(50, 10, "$ " .$detail['6th_payment']);
        $report->Ln();
        $report->Cell(100, 10, "7th_payment:");
        $report->Cell(50, 10, "$ " .$detail['7th_payment']);
        $report->Ln();
        $report->Cell(100, 10, "8th_payment:");
        $report->Cell(50, 10, "$ " .$detail['8th_payment']);
        $report->Ln();
        $report->Cell(100, 10, "9th_payment:");
        $report->Cell(50, 10, "$ " .$detail['9th_payment']);
        $report->Ln();
        $report->Cell(100, 10, "10th_payment:");
        $report->Cell(50, 10, "$ " .$detail['10th_payment']);
        $report->Ln();
        $report->Cell(100, 10, "total:");
        $report->Cell(50, 10, "$ " .$detail['total']);
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





