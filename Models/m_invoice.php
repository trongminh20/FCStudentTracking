<?php
class Invoice{
    private $number;
    private $billTo;
    private $total;
    private $date;
    private $note;/**
 * Invoice constructor.
 * @param $number
 * @param $billTo
 * @param $total
 * @param $date
 * @param $note
 */public function Invoice( $number, $billTo, $total, $note)
{
    $this->set_number($number);
    $this->billTo = $billTo;
    $this->total = $total;
    $this->set_date();
    $this->note = $note;
}

    public function __contruct(){}



    /**
     * @return mixed
     */
    public function get_number()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function set_number($number)
    {
        $this->number = date('ymd').$number ;
    }

    /**
     * @return mixed
     */
    public function get_bill_to()
    {
        return $this->billTo;
    }

    /**
     * @return mixed
     */
    public function get_date()
    {
        return $this->date;
    }


    /**
     * @return false|string
     */
    function set_date()
    {
        $this->date = date('Y-m-d');
    }

    /**
     * @param mixed $billTo
     */
    public function set_bill_to($billTo)
    {
        $this->billTo = $billTo;
    }

    /**
     * @return mixed
     */
    public function get_total()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function set_total($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function get_note()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function set_note($note)
    {
        $this->note = $note;
    }

    public function to_array(){
        return [
                'number' => $this->get_number(),
                'bill_to'=>$this->get_bill_to(),
                'date'   =>$this->get_date(),
                'total'  => $this->get_total(),
                'note'   => $this->get_note()
        ];
    }

}