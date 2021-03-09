<?php

//prior to practice education
class PPES
{

    private $clinicShirtSize;
    private $firstAidLoc;
    private $FirstAidContact;
    private $orderDate;
    private $pickupDate;
    private $firstAidAndCpr;
    private $certMarkReceive;
    private $handbookReceived;
    private $ackAndAgr;
    private $medicalFile;

    /**
     * PPES constructor.
     * @param $clinicShirtSize
     * @param $firstAidLoc
     * @param $FirstAidContact
     * @param $oderDate
     * @param $pickupDate
     * @param $firstAidAndCpr
     * @param $certMarkReceive
     * @param $handbookReceived
     * @param $ackAndAgr
     * @param $medicalFile
     */
    public function __construct($clinicShirtSize, $firstAidLoc, $FirstAidContact, $oderDate, $pickupDate, $firstAidAndCpr, $certMarkReceive, $handbookReceived, $ackAndAgr, $medicalFile)
    {
        $this->clinicShirtSize = $clinicShirtSize;
        $this->firstAidLoc = $firstAidLoc;
        $this->FirstAidContact = $FirstAidContact;
        $this->orderDate = $oderDate;
        $this->pickupDate = $pickupDate;
        $this->firstAidAndCpr = $firstAidAndCpr;
        $this->certMarkReceive = $certMarkReceive;
        $this->handbookReceived = $handbookReceived;
        $this->ackAndAgr = $ackAndAgr;
        $this->medicalFile = $medicalFile;
    }

    /**
     * @return mixed
     */
    public function get_clinic_shirt_size()
    {
        return $this->clinicShirtSize;
    }

    /**
     * @param mixed $clinicShirtSize
     */
    public function set_clinic_shirt_size($clinicShirtSize)
    {
        $this->clinicShirtSize = $clinicShirtSize;
    }

    /**
     * @return mixed
     */
    public function get_first_aid_loc()
    {
        return $this->firstAidLoc;
    }

    /**
     * @param mixed $firstAidLoc
     */
    public function set_first_aid_loc($firstAidLoc)
    {
        $this->firstAidLoc = $firstAidLoc;
    }

    /**
     * @return mixed
     */
    public function get_first_aid_contact()
    {
        return $this->FirstAidContact;
    }

    /**
     * @param mixed $FirstAidContact
     */
    public function set_first_aid_contact($FirstAidContact)
    {
        $this->FirstAidContact = $FirstAidContact;
    }

    /**
     * @return mixed
     */
    public function get_order_date()
    {
        return $this->orderDate;
    }

    /**
     * @param mixed $orderDate
     */
    public function set_order_date($orderDate)
    {
        $this->orderDate = $orderDate;
    }

    /**
     * @return mixed
     */
    public function get_pickup_date()
    {
        return $this->pickupDate;
    }

    /**
     * @param mixed $pickupDate
     */
    public function set_pickup_date($pickupDate)
    {
        $this->pickupDate = $pickupDate;
    }

    /**
     * @return mixed
     */
    public function get_first_aid_and_cpr()
    {
        return $this->firstAidAndCpr;
    }

    /**
     * @param mixed $firstAidAndCpr
     */
    public function set_first_aid_and_cpr($firstAidAndCpr)
    {
        $this->firstAidAndCpr = $firstAidAndCpr;
    }

    /**
     * @return mixed
     */
    public function get_cert_mark_receive()
    {
        return $this->certMarkReceive;
    }

    /**
     * @param mixed $certMarkReceive
     */
    public function set_cert_mark_receive($certMarkReceive)
    {
        $this->certMarkReceive = $certMarkReceive;
    }

    /**
     * @return mixed
     */
    public function get_handbook_received()
    {
        return $this->handbookReceived;
    }

    /**
     * @param mixed $handbookReceived
     */
    public function set_handbook_received($handbookReceived)
    {
        $this->handbookReceived = $handbookReceived;
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
    public function get_medical_file()
    {
        return $this->medicalFile;
    }

    /**
     * @param mixed $medicalFile
     */
    public function set_medical_file($medicalFile)
    {
        $this->medicalFile = $medicalFile;
    }


    public function to_array()
    {
        return ['clinic_shirt_size' => $this->get_clinic_shirt_size(),
            'first_aid_loc'         => $this ->get_first_aid_loc(),
            'first_aid_contact'     => $this->get_first_aid_contact(),
            'order_date'  => $this->get_order_date(),
            'pickup_date' => $this->get_pickup_date(),
            'first_aid_and_cpr'  => $this->get_first_aid_and_cpr(),
            'cert_mark_received' => $this->get_cert_mark_receive(),
            'handbook_received'  => $this->get_handbook_received(),
            'ack_and_agr'  => $this->get_ack_and_agr(),
            'medical_file' => $this->get_medical_file()
        ];
    }
}