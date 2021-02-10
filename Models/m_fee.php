<?php


class Fee
{
    private $id;
    private $progID;
    private $feeName;
    private $domPrice;
    private $intPrice;

    /**
     * Fee constructor.
     * @param $id
     * @param $progID
     * @param $feeName
     * @param $domPrice
     * @param $intPrice
     */
    public function __construct($id, $progID, $feeName, $domPrice, $intPrice)
    {
        $this->id = $id;
        $this->progID = $progID;
        $this->feeName = $feeName;
        $this->domPrice = $domPrice;
        $this->intPrice = $intPrice;
    }

    /**
     * @return mixed
     */
    public function get_id()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function get_prog_ID()
    {
        return $this->progID;
    }


    /**
     * @return mixed
     */
    public function get_fee_name()
    {
        return $this->feeName;
    }


    /**
     * @return mixed
     */
    public function get_dom_price()
    {
        return $this->domPrice;
    }


    /**
     * @return mixed
     */
    public function get_int_price()
    {
        return $this->intPrice;
    }


    /**
     * @return array
     */
    public function to_array()
    {
        return [
            'ID' => $this->get_id(),
            'Prog_ID' => $this->get_prog_ID(),
            'Fee_Name' => $this->get_fee_name(),
            'Dom_Price' => $this->get_dom_price(),
            'Int_Price' => $this->get_int_price()
        ];
    }

}