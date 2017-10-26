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
            $this->template->content = View::forge('top/index');
	}

}
