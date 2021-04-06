<?php

print_r($_POST);
$data = $_POST;

        Mail::$fromAddress = "invoice.firstcollege@gmail.com";
        Mail::$fromPwd = "FCstudenttracking";
        Mail::$toAddress = $data['student_email'];
         Mail::$content = "<h1>This is testing email from invoice</h1>";
//        Mail::$content = "<h1>Hello " . $billto . ",</h1><br>
//                          <p>Please see the attachment bellow for your paid invoice.</p>
//                          <p>Thank you for interest in the " . $program . " program. Please feel free to contact us if you have any questions.</p>
//                          <br><br>
//                          <p>Best regards,</p>
//                          <p>__</p>
//                          <table>
//                            <tr>
//                                <td>
//                                    <img src='images/logo.png' width='100px' height='100px' alt='First College'>
//                                </td>
//                                <td>
//                                    <p style='color: #2e6da4; font-size: 12px;'><a href='https://www.firstcollege.ca/'>FIRST COLLEGE</a> | Inspiring minds through education
//                                    <br> ADMIN OFFICE: 572 Leon Ave, 2nd floor, Kelowna, BC V1Y 6J6</p>
//                                </td>
//                            </tr>
//                          </table>";
//        Mail::$attachment = "invoices/" . $number . ".pdf";
        Mail::$subject = 'Student Invoice';

//        var_dump(Mail::$fromAddress);
        echo "from:   ".Mail::$fromPwd;
        echo "<br>To:  ".Mail::$toAddress;
//        var_dump(Mail::$fromAddress);
//        try {
            Mail::send_mail();
//        }catch(Exception $e){
//            echo $e -> getMessage();
//        }
