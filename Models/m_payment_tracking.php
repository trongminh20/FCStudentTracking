<?php

class Payment
{
    private $student_id;
    private $domestic;
    private $international;
    private $app_fee;
    private $intro_msg_fee;
    private $materials_fee;
    private $textbook_fee;
    private $admin_fee;
    private $_1st_payment;
    private $_2nd_payment;
    private $_3rd_payment;
    private $_4th_payment;
    private $_5th_payment;
    private $_6th_payment;
    private $_7th_payment;
    private $_8th_payment;
    private $_9th_payment;
    private $_10th_payment;
    private $total;

    /**
     * Payment constructor.
     * @param $student_id
     * @param $domestic
     * @param $international
     * @param $app_fee
     * @param $intro_msg_fee
     * @param $materials_fee
     * @param $textbook_fee
     * @param $admin_fee
     * @param $_1st_payment
     * @param $_2nd_payment
     * @param $_3rd_payment
     * @param $_4th_payment
     * @param $_5th_payment
     * @param $_6th_payment
     * @param $_7th_payment
     * @param $_8th_payment
     * @param $_9th_payment
     * @param $_10th_payment
     * @param $total
     */
    public function __construct($student_id, $domestic, $international, $app_fee, $intro_msg_fee, $materials_fee, $textbook_fee, $admin_fee, $_1st_payment, $_2nd_payment, $_3rd_payment, $_4th_payment, $_5th_payment, $_6th_payment, $_7th_payment, $_8th_payment, $_9th_payment, $_10th_payment, $total)
    {
        $this->student_id = $student_id;
        $this->domestic = $domestic;
        $this->international = $international;
        $this->app_fee = $app_fee;
        $this->intro_msg_fee = $intro_msg_fee;
        $this->materials_fee = $materials_fee;
        $this->textbook_fee = $textbook_fee;
        $this->admin_fee = $admin_fee;
        $this->_1st_payment = $_1st_payment;
        $this->_2nd_payment = $_2nd_payment;
        $this->_3rd_payment = $_3rd_payment;
        $this->_4th_payment = $_4th_payment;
        $this->_5th_payment = $_5th_payment;
        $this->_6th_payment = $_6th_payment;
        $this->_7th_payment = $_7th_payment;
        $this->_8th_payment = $_8th_payment;
        $this->_9th_payment = $_9th_payment;
        $this->_10th_payment = $_10th_payment;
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function get_student_id()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student_id
     */
    public function set_student_id($student_id)
    {
        $this->student_id = $student_id;
    }

    /**
     * @return mixed
     */
    public function get_domestic()
    {
        return $this->domestic;
    }

    /**
     * @param mixed $domestic
     */
    public function set_domestic($domestic)
    {
        $this->domestic = $domestic;
    }

    /**
     * @return mixed
     */
    public function get_international()
    {
        return $this->international;
    }

    /**
     * @param mixed $international
     */
    public function set_international($international)
    {
        $this->international = $international;
    }

    /**
     * @return mixed
     */
    public function get_app_fee()
    {
        return $this->app_fee;
    }

    /**
     * @param mixed $app_fee
     */
    public function set_app_fee($app_fee)
    {
        $this->app_fee = $app_fee;
    }

    /**
     * @return mixed
     */
    public function get_intro_msg_fee()
    {
        return $this->intro_msg_fee;
    }

    /**
     * @param mixed $intro_msg_fee
     */
    public function set_intro_msg_fee($intro_msg_fee)
    {
        $this->intro_msg_fee = $intro_msg_fee;
    }

    /**
     * @return mixed
     */
    public function get_materials_fee()
    {
        return $this->materials_fee;
    }

    /**
     * @param mixed $materials_fee
     */
    public function set_materials_fee($materials_fee)
    {
        $this->materials_fee = $materials_fee;
    }

    /**
     * @return mixed
     */
    public function get_textbook_fee()
    {
        return $this->textbook_fee;
    }

    /**
     * @param mixed $textbook_fee
     */
    public function set_textbook_fee($textbook_fee)
    {
        $this->textbook_fee = $textbook_fee;
    }

    /**
     * @return mixed
     */
    public function get_admin_fee()
    {
        return $this->admin_fee;
    }

    /**
     * @param mixed $admin_fee
     */
    public function set_admin_fee($admin_fee)
    {
        $this->admin_fee = $admin_fee;
    }

    /**
     * @return mixed
     */
    public function get_1st_payment()
    {
        return $this->_1st_payment;
    }

    /**
     * @return mixed
     */
    public function get_2nd_payment()
    {
        return $this->_2nd_payment;
    }

    /**
     * @param mixed $2nd_payment
     */

    public function get_3rd_payment()
    {
        return $this->_3rd_payment;
    }

    /**
     * @param mixed $3rd_payment
     */

    public function get_4th_payment()
    {
        return $this->_4th_payment;
    }

    /*
     * @return mixed
     */
    public function get_5th_payment()
    {
        return $this->_5th_payment;
    }

    /**
     * @param mixed $5th_payment
     */

    public function get_6th_payment()
    {
        return $this->_6th_payment;
    }

    /**
     * @param mixed $6th_payment
     */

    public function get_7th_payment()
    {
        return $this->_7th_payment;
    }

    /**
     * @param mixed $7th_payment
     */

    public function get_8th_payment()
    {
        return $this->_8th_payment;
    }

    /**
     * @param mixed $8th_payment
     */

    public function get_9th_payment()
    {
        return $this->_9th_payment;
    }

    /**
     * @param mixed $9th_payment
     */

    public function get_10th_payment()
    {
        return $this->_10th_payment;
    }

    /**
     * @param mixed $10th_payment
     */

    public function get_total()
    {
        return $this->total;
    }

    public function to_array()
    {
        return [
            'student_id' => $this->get_student_id(),
            'domestic' => $this->get_domestic(),
            'international' => $this->get_international(),
            'app_fee' => $this->get_app_fee(),
            'intro_msg_fee' => $this->get_intro_msg_fee(),
            'materials_fee' => $this->get_materials_fee(),
            'textbook_fee' => $this->get_textbook_fee(),
            'admin_fee' => $this->get_admin_fee(),
            '1st_payment' => $this->get_1st_payment(),
            '2nd_payment' => $this->get_2nd_payment(),
            '3rd_payment' => $this->get_3rd_payment(),
            '4th_payment' => $this->get_4th_payment(),
            '5th_payment' => $this->get_5th_payment(),
            '6th_payment' => $this->get_6th_payment(),
            '7th_payment' => $this->get_7th_payment(),
            '8th_payment' => $this->get_8th_payment(),
            '9th_payment' => $this->get_9th_payment(),
            '10th_payment' => $this->get_10th_payment(),
            'total' => $this->get_total()];
    }

}














