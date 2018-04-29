<?php
use models\BaseController;

/**
 * Sample controller
 * @example your-server-address/public/Sample
 * @example your-server-address/public/Sample/showSomeInfo
 */
class Sample extends BaseController
{
    /**
     * Index action. When user does not put any kind of parameter
     */
    public function indexAction()
    {
    }

    /**
     * sample action to show some info
     */
    public function showSomeInfoAction()
    {
        echo 'some info should be here';
    }

    /**
     * another action to show info
     * examplify the use of a view file
     */
    public function anotherInfoAction()
    {
        // do some code here
        // ...
        // This action have a view file and will be shown automatically
    }
}
