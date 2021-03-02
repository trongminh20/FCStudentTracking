<?php

// admission prior to start date
class APSD
{

    private $photoID;
    private $appForm;
    private $appFee;
    private $appEssay;
    private $referLetter;
    private $resume;
    private $introOfMessage;
    private $feePaidInvoice;
    private $welcLetterSent;
    private $completed;
    private $englishTestResult;
    private $crc;
    private $medicalNote;
    private $interview;
    private $approved;
    private $diplomaAndTranscript;
    private $studentEmail;
    private $acceptLetterDate;
    private $enrollContract;
    private $handbookNote;
    private $paymentOption;
    private $ackAndAgr;
    private $receiveCard;
    private $rmtStuMatterial;

    /**
     * APSD constructor.
     * @param $photoID
     * @param $appForm
     * @param $appFee
     * @param $appEssay
     * @param $referLetter
     * @param $resume
     * @param $introOfMessage
     * @param $feePaidInvoice
     * @param $welcLetterSent
     * @param $completed
     * @param $englishTestResult
     * @param $crc
     * @param $medicalNote
     * @param $interview
     * @param $approved
     * @param $diplomaAndTranscript
     * @param $studentEmail
     * @param $acceptLetterDate
     * @param $enrollContract
     * @param $handbookNote
     * @param $paymentOption
     * @param $ackAndAgr
     * @param $receiveCard
     * @param $rmtStuMatterial
     */
    public function __construct($photoID, $appForm, $appFee, $appEssay, $referLetter, $resume, $introOfMessage, $feePaidInvoice, $welcLetterSent, $completed, $englishTestResult, $crc, $medicalNote, $interview, $approved, $diplomaAndTranscript, $studentEmail, $acceptLetterDate, $enrollContract, $handbookNote, $paymentOption, $ackAndAgr, $receiveCard, $rmtStuMatterial)
    {
        $this->photoID = $photoID;
        $this->appForm = $appForm;
        $this->appFee = $appFee;
        $this->appEssay = $appEssay;
        $this->referLetter = $referLetter;
        $this->resume = $resume;
        $this->introOfMessage = $introOfMessage;
        $this->feePaidInvoice = $feePaidInvoice;
        $this->welcLetterSent = $welcLetterSent;
        $this->completed = $completed;
        $this->englishTestResult = $englishTestResult;
        $this->crc = $crc;
        $this->medicalNote = $medicalNote;
        $this->interview = $interview;
        $this->approved = $approved;
        $this->diplomaAndTranscript = $diplomaAndTranscript;
        $this->studentEmail = $studentEmail;
        $this->acceptLetterDate = $acceptLetterDate;
        $this->enrollContract = $enrollContract;
        $this->handbookNote = $handbookNote;
        $this->paymentOption = $paymentOption;
        $this->ackAndAgr = $ackAndAgr;
        $this->receiveCard = $receiveCard;
        $this->rmtStuMatterial = $rmtStuMatterial;
    }

    /**
     * @return mixed
     */
    public function get_photo_ID()
    {
        return $this->photoID;
    }

    /**
     * @param mixed $photoID
     */
    public function set_photo_ID($photoID)
    {
        $this->photoID = $photoID;
    }

    /**
     * @return mixed
     */
    public function get_app_form()
    {
        return $this->appForm;
    }

    /**
     * @param mixed $appForm
     */
    public function set_app_form($appForm)
    {
        $this->appForm = $appForm;
    }

    /**
     * @return mixed
     */
    public function get_app_fee()
    {
        return $this->appFee;
    }

    /**
     * @param mixed $appFee
     */
    public function set_app_fee($appFee)
    {
        $this->appFee = $appFee;
    }

    /**
     * @return mixed
     */
    public function get_app_essay()
    {
        return $this->appEssay;
    }

    /**
     * @param mixed $appEssay
     */
    public function set_app_essay($appEssay)
    {
        $this->appEssay = $appEssay;
    }

    /**
     * @return mixed
     */
    public function get_refer_letter()
    {
        return $this->referLetter;
    }

    /**
     * @param mixed $referLetter
     */
    public function set_refer_letter($referLetter)
    {
        $this->referLetter = $referLetter;
    }

    /**
     * @return mixed
     */
    public function get_resume()
    {
        return $this->resume;
    }

    /**
     * @param mixed $resume
     */
    public function set_resume($resume)
    {
        $this->resume = $resume;
    }

    /**
     * @return mixed
     */
    public function get_intro_of_message()
    {
        return $this->introOfMessage;
    }

    /**
     * @param mixed $introOfMessage
     */
    public function set_intro_of_message($introOfMessage)
    {
        $this->introOfMessage = $introOfMessage;
    }

    /**
     * @return mixed
     */
    public function get_fee_paid_invoice()
    {
        return $this->feePaidInvoice;
    }

    /**
     * @param mixed $feePaidInvoice
     */
    public function set_fee_paid_invoice($feePaidInvoice)
    {
        $this->feePaidInvoice = $feePaidInvoice;
    }

    /**
     * @return mixed
     */
    public function get_welc_letter_sent()
    {
        return $this->welcLetterSent;
    }

    /**
     * @param mixed $welcLetterSent
     */
    public function set_welc_letter_sent($welcLetterSent)
    {
        $this->welcLetterSent = $welcLetterSent;
    }

    /**
     * @return mixed
     */
    public function get_completed()
    {
        return $this->completed;
    }

    /**
     * @param mixed $completed
     */
    public function set_completed($completed)
    {
        $this->completed = $completed;
    }

    /**
     * @return mixed
     */
    public function get_english_test_result()
    {
        return $this->englishTestResult;
    }

    /**
     * @param mixed $englishTestResult
     */
    public function set_english_test_result($englishTestResult)
    {
        $this->englishTestResult = $englishTestResult;
    }

    /**
     * @return mixed
     */
    public function get_crc()
    {
        return $this->crc;
    }

    /**
     * @param mixed $crc
     */
    public function set_crc($crc)
    {
        $this->crc = $crc;
    }

    /**
     * @return mixed
     */
    public function get_medical_note()
    {
        return $this->medicalNote;
    }

    /**
     * @param mixed $medicalNote
     */
    public function set_medical_note($medicalNote)
    {
        $this->medicalNote = $medicalNote;
    }

    /**
     * @return mixed
     */
    public function get_interview()
    {
        return $this->interview;
    }

    /**
     * @param mixed $interview
     */
    public function set_interview($interview)
    {
        $this->interview = $interview;
    }

    /**
     * @return mixed
     */
    public function get_approved()
    {
        return $this->approved;
    }

    /**
     * @param mixed $approved
     */
    public function set_approved($approved)
    {
        $this->approved = $approved;
    }

    /**
     * @return mixed
     */
    public function get_diploma_and_transcript()
    {
        return $this->diplomaAndTranscript;
    }

    /**
     * @param mixed $diplomaAndTranscript
     */
    public function set_diploma_and_transcript($diplomaAndTranscript)
    {
        $this->diplomaAndTranscript = $diplomaAndTranscript;
    }

    /**
     * @return mixed
     */
    public function get_student_email()
    {
        return $this->studentEmail;
    }

    /**
     * @param mixed $studentEmail
     */
    public function set_student_email($studentEmail)
    {
        $this->studentEmail = $studentEmail;
    }

    /**
     * @return mixed
     */
    public function get_accept_letter_date()
    {
        return $this->acceptLetterDate;
    }

    /**
     * @param mixed $acceptLetterDate
     */
    public function set_accept_letter_date($acceptLetterDate)
    {
        $this->acceptLetterDate = $acceptLetterDate;
    }

    /**
     * @return mixed
     */
    public function get_enroll_contract()
    {
        return $this->enrollContract;
    }

    /**
     * @param mixed $enrollContract
     */
    public function set_enroll_contract($enrollContract)
    {
        $this->enrollContract = $enrollContract;
    }

    /**
     * @return mixed
     */
    public function get_handbook_note()
    {
        return $this->handbookNote;
    }

    /**
     * @param mixed $handbookNote
     */
    public function set_handbook_note($handbookNote)
    {
        $this->handbookNote = $handbookNote;
    }

    /**
     * @return mixed
     */
    public function get_payment_option()
    {
        return $this->paymentOption;
    }

    /**
     * @param mixed $paymentOption
     */
    public function set_payment_option($paymentOption)
    {
        $this->paymentOption = $paymentOption;
    }

    /**
     * @return mixed
     */
    public function get_ack_and_agr()
    {
        return $this->ackAndAgr;
    }

    /**
     * @param mixed $ackAndAgr
     */
    public function set_ack_and_agr($ackAndAgr)
    {
        $this->ackAndAgr = $ackAndAgr;
    }

    /**
     * @return mixed
     */
    public function get_receive_card()
    {
        return $this->receiveCard;
    }

    /**
     * @param mixed $receiveCard
     */
    public function set_receive_card($receiveCard)
    {
        $this->receiveCard = $receiveCard;
    }

    /**
     * @return mixed
     */
    public function get_rmt_stu_matterial()
    {
        return $this->rmtStuMatterial;
    }

    /**
     * @param mixed $rmtStuMatterial
     */
    public function set_rmt_stu_matterial($rmtStuMatterial)
    {
        $this->rmtStuMatterial = $rmtStuMatterial;
    }


    function to_array()
    {
        return [
            'photo_id'  => $this->get_photo_ID(),
            'app_form'  => $this->get_app_form(),
            'app_fee'   => $this->get_app_fee(),
            'app_essay' => $this->get_app_essay(),
            'refer_letter' => $this->get_refer_letter(),
            'resume'       => $this->get_resume(),
            'intro_of_msg' => $this->get_intro_of_message(),
            'fee_paid_inv' => $this->get_fee_paid_invoice(),
            'w_letter_sent' => $this->get_welc_letter_sent(),
            'completed'     => $this->get_completed(),
            'eng_test_res'  => $this->get_english_test_result(),
            'crc'           => $this->get_crc(),
            'medical_note'  => $this->get_medical_note(),
            'interview'     => $this->get_interview(),
            'approved'      => $this->get_approved(),
            'diploma_and_trans' => $this->get_diploma_and_transcript(),
            'stu_email'         => $this->get_student_email(),
            'accept_letter_date' => $this->get_accept_letter_date(),
            'enroll_contract'    => $this->get_enroll_contract(),
            'handbook_notes'     => $this->get_handbook_note(),
            'payment_option'     => $this->get_payment_option(),
            'ack_and_agr'   => $this->get_ack_and_agr(),
            'receive_card'  => $this->get_receive_card(),
            'rmt_stu_matt'  => $this->get_rmt_stu_matterial()
        ];
    }
}