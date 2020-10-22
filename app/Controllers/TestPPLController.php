<?php 

namespace App\Controllers;

use App\Models\mahasiswa;
use App\Models\mahasiswaModel;

class TestPPLController extends BaseController
{
	public function __construct()
	{
		$this->mhsModel = new mahasiswaModel();
	}
	
	public function index()
	{
		$mahasiswa = $this->mhsModel->getMahasiwa();
		$data = [
			'title' => 'Daftar Mahasiswa',
			'mahasiswa' => $mahasiswa
		];

		return view('Mahasiswa/index', $data);
	}

	public function create()
	{
		return view('Mahasiswa/create');
	}

	public function save()
	{
		$model = new mahasiswaModel();
		$data = [
			'id' => $this->request->getPost('id'),
			'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
			'nama_prodi' => $this->request->getPost('nama_prodi'),
			'tahun' => $this->request->getPost('tahun')
		];
		$model->addMahasiswa($data);
		return $this->index();
	}
}
