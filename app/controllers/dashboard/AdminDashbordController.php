<?php

class AdminDashboardController extends BaseController {

	public function showLogin()
	{
		return View::make('dashboard.login');
	}

}
