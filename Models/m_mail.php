<?php
class Mail{
    public static $toAddress;
    public static $attachment;
    public static $content;
    /**
     * sending email =
     * @param $to
     * @param $from
     * @param $name
     * @param $subj
     * @param $content
     * @return bool
     * @throws phpmailerException
     */
    public static function send_mail()
    {

        $mail = new PHPMailer();
        $mail->IsSMTP();

        $mail->SMTPDebug = 0;

        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;

        $mail->Username = 'invoice.firstcollege@gmail.com';
        $mail->Password = 'FCstudenttracking';

        $mail->SetFrom('invoice.firstcollege@gmail.com');
        $mail->FromName = "First College";
        $mail->Subject = "Student Invoice";
        $mail->MsgHTML(self::$content);

        $mail->AddAddress(self::$toAddress, "");
        $mail->AddAttachment(self::$attachment);
        if (!$mail->Send()) {
            $_SESSION['mail_sending_error'] = $mail->ErrorInfo;
            exit();
        } else {
            return true;
        }
    }
}