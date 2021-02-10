<?php


class Session
{
    private $id;
    private $userID;
    private $in;

    /**
     * Session constructor.
     * @param $id
     * @param $userID
     */
    public function __construct($id, $userID, $in)
    {
        $this->id = $id;
        $this->userID = $userID;
        // check in time may need to change to curr_date()
        $this->in = $in;
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
    public function get_user_ID()
    {
        return $this->userID;
    }


    public function to_array()
    {
        return ['sessionID' => $this->get_id(), 'userID' => $this->get_user_ID(), 'created' => '', 'logout' => ''];

    }

}