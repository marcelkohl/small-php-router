<?php
namespace models;

/**
 * Base Controller
 */
class BaseController
{
    public function __construct()
    {
        $this->recoverSession(); //sample method to use session
    }

    /**
     * dummy index action for controllers who don't have a default index
     */
    public function IndexAction()
    {
    }

    /**
     * recover session and data relevant to the enviroment
     */
    public function recoverSession()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }
}
