<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_login;

class c_login extends Controller
{
	public function __construct()
	{
		$this->loginModel = new m_login();
		$this->session = session();
	}

	public function index()
	{
		return view('authentication/v_login.php');
	}
	
	public function login()
	{
		$data = [
			'username' => $this->request->getPost('username'),
			'password' => $this->request->getPost('password'),
		];
		$isSucceed = $this->loginModel->login($data);
		if($isSucceed){
			$data_session = array(
				'username' => $isSucceed->username,
				'role'=> $isSucceed->role,	
				'logged_in' => TRUE
			);
			$this->session->set($data_session);
			return redirect()->to('/v_news');
		}else{
			return view('authentication/v_login.php');
		}
	}

	public function logout()
	{
		$this->session->destroy();
		return view('authentication/v_login.php');
	}
}
