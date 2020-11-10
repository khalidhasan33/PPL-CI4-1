<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_mahasiswa;

class c_mahasiswa extends Controller
{
	public function __construct()
	{
		$this->mhsModel = new m_mahasiswa();
	}
	
	public function index()
	{
		$keyword = $this->request->getVar('keyword');
		if($keyword){
			$mahasiswa = $this->mhsModel->searchMahasiswa($keyword);
		}else{
			$mahasiswa = $this->mhsModel->getAllMahasiwa();
		}
		$data = [
			'title' => 'Daftar Mahasiswa',
			'mahasiswa' => $mahasiswa
		];
		if(!$mahasiswa){
			session()->setFlashdata('pesan gagal search', 'Mahasiswa tidak berhasil ditemukan.');
		}
		return view('Mahasiswa/index', $data);
	}

	public function create()
	{
		return view('Mahasiswa/create');
	}

	public function save()
	{
		$model = new m_mahasiswa();
		$data = [
			'id' => $this->request->getPost('id'),
			'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
			'nama_prodi' => $this->request->getPost('nama_prodi'),
			'tahun' => $this->request->getPost('tahun')
		];
		$isSucceed = $model->addMahasiswa($data);
		if($isSucceed){
			session()->setFlashdata('pesan sukses', 'Data berhasil ditambahkan.');
		}else{
			session()->setFlashdata('pesan gagal', 'Data tidak berhasil ditambahkan.');
		}
		return redirect()->to('/');
	}

	public function detail($id){
		$mahasiswa = $this->mhsModel->getMahasiswa($id); 
		$data = [
			'mahasiswa' => $mahasiswa
		];
		if($mahasiswa==NULL){
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Mahasiswa Tidak ditemukan');
		}else{
			return view('Mahasiswa/detail', $data);
		}
	}
}
