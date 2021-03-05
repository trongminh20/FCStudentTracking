<?php


class Graduation
{
    private $tuitionPaid;
    private $transcript;
    private $completionletter;
    private $signedDiploma;
    private $examDate;
    private $T2202A;
    private $employment;

    /**
     * Graduation constructor.
     * @param $tuitionPaid
     * @param $transcript
     * @param $completionletter
     * @param $signedDiploma
     * @param $examDate
     * @param $T2202A
     * @param $employment
     */
    public function __construct($tuitionPaid, $transcript, $completionletter, $signedDiploma, $examDate, $T2202A, $employment)
    {
        $this->tuitionPaid = $tuitionPaid;
        $this->transcript = $transcript;
        $this->completionletter = $completionletter;
        $this->signedDiploma = $signedDiploma;
        $this->examDate = $examDate;
        $this->T2202A = $T2202A;
        $this->employment = $employment;
    }

    /**
     * @return mixed
     */
    public function get_tuition_paid()
    {
        return $this->tuitionPaid;
    }

    /**
     * @param mixed $tuitionPaid
     */
    public function set_tuition_paid($tuitionPaid)
    {
        $this->tuitionPaid = $tuitionPaid;
    }

    /**
     * @return mixed
     */
    public function get_transcript()
    {
        return $this->transcript;
    }

    /**
     * @param mixed $transcript
     */
    public function set_transcript($transcript)
    {
        $this->transcript = $transcript;
    }

    /**
     * @return mixed
     */
    public function get_completionletter()
    {
        return $this->completionletter;
    }

    /**
     * @param mixed $completionletter
     */
    public function set_completionletter($completionletter)
    {
        $this->completionletter = $completionletter;
    }

    /**
     * @return mixed
     */
    public function get_signed_diploma()
    {
        return $this->signedDiploma;
    }

    /**
     * @param mixed $signedDiploma
     */
    public function set_signed_diploma($signedDiploma)
    {
        $this->signedDiploma = $signedDiploma;
    }

    /**
     * @return mixed
     */
    public function get_exam_date()
    {
        return $this->examDate;
    }

    /**
     * @param mixed $examDate
     */
    public function set_exam_date($examDate)
    {
        $this->examDate = $examDate;
    }

    /**
     * @return mixed
     */
    public function get_T220A()
    {
        return $this->T2202A;
    }

    /**
     * @param mixed $T2202A
     */
    public function set_T220A($T2202A)
    {
        $this->T2202A = $T2202A;
    }

    /**
     * @return mixed
     */
    public function get_employment()
    {
        return $this->employment;
    }

    /**
     * @param mixed $employment
     */
    public function set_employment($employment)
    {
        $this->employment = $employment;
    }


    public function to_array()
    {
        return ['tuition_paid' => $this->get_tuition_paid(),
            'transcript' => $this->get_transcript(),
            'completion_letter' => $this->get_completionletter(),
            'signed_diploma' => $this->get_signed_diploma(),
            'exam_date' => $this->get_exam_date(),
            'T2202A' => $this->get_T220A(),
            'employment' => $this->get_employment()
        ];
    }
}