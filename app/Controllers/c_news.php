<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_news;

class c_news extends Controller
{

	public function __construct()
	{
		$this->newsModel = new m_news();
    }
    
	public function index()
	{
        $keyword = $this->request->getVar('keyword');
		if($keyword){
			$news = $this->newsModel->searchNews($keyword);
		}else{
			$news = $this->newsModel->getAllNews();
		}
		$data = [
			'title' => 'List News',
			'news' => $news
        ];
		if(!$news){
			session()->setFlashdata('pesan gagal search', 'News not found.');
		}
		return view('news/v_newsIndex', $data);
    }

	public function detail($id){
		$news = $this->newsModel->getNews($id); 
		$data = [
			'news' => $news
		];
		if($news==NULL){
			throw new \CodeIgniter\Exceptions\PageNotFoundException('News not found');
		}else{
			return view('news/v_newsDetail', $data);
		}
	}

	public function create()
	{
		return view('news/v_newsAdd');
	}

	public function save()
	{
		$model = new m_news();
        $fileGambar = $this->request->getFile('fileToUpload');
        $fileGambar->move('image/news');
        $namaGambar = $fileGambar->getName();
		$data = [
			'newsTitle' => $this->request->getPost('title'),
			'newsContents' => $this->request->getPost('content'),
			'newsWriter' => $this->request->getPost('writer'),
			'newsThumbnail' => $namaGambar,
		];
		$isSucceed = $model->addNews($data);
		if($isSucceed){
			session()->setFlashdata('pesan sukses', 'Data berhasil ditambahkan.');
		}else{
			session()->setFlashdata('pesan gagal', 'Data tidak berhasil ditambahkan.');
		}
		return redirect()->to('/v_news');
	}
}
