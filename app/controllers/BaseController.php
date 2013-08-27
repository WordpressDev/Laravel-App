<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function getUser()
	{
		if (Session::has('user')) {
			return Session::get('user');
		}
	}

	public function getCart()
	{
		if (Session::has('cart')) {
			return Session::get('cart');
		}
	}

}