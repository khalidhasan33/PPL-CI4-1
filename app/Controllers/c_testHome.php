<?php namespace App\Controllers;

use CodeIgniter\Controller;

class c_testHome extends Controller
{
	public function index()
	{
		return view('template_test/v_home');
	}

	//--------------------------------------------------------------------

}