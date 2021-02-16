<?php
class Request{
    private $username;
    private $request;

    /**
     * Request constructor.
     * @param $username
     * @param $request
     */
    public function __construct($username, $request)
    {
        $this->username = $username;
        $this->request = $request;
    }

    /**
     * @return mixed
     */
    public function get_username()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function get_request()
    {
        return $this->request;
    }

    public function to_array(){
        return ['username' => $this->get_username(),
            'request' => $this->get_request()
        ];
    }
}