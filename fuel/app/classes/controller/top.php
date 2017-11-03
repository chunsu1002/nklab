<?php

class Controller_Top extends Controller_Base
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
//            $a = View::forge('top/index');
//            var_dump($a);die;
            $this->template->content = View::forge('top/index');
	}

}
