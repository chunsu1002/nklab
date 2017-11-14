<?php

use \Model\Zaifapi;

class Controller_Api_Bitflyerlightning extends Controller_Base
{

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {

        return Zaifapi::get_results();
    }

}
