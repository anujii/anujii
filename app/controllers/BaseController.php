<?php

class BaseController extends Controller {

	/**
	 * @var Illuminate\Http\Request
	 */
	protected $request;

	/**
	 * @var Illuminate\Session\Store
	 */
	protected $session;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	/*protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}*/


	function __construct() {
		$this->request = Request::instance();
		$this->session = $this->request->getSessionStore();
	}
}