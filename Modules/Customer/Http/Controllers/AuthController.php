<?php namespace Modules\Customer\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class AuthController extends Controller {

	public function index()
	{
		return View::make('customer::index');
	}
	
}