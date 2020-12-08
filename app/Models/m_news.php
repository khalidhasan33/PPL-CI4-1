<?php

namespace App\Models;

use CodeIgniter\Model;

class m_news extends Model
{
    protected $table = 'news';
    protected $useTimestamps = false;


    public function getAllNews()
    {
        $query =  $this->db->query("SELECT * FROM ".$this->table);
        $results = $query->getResult();
        return $results;
    }

    public function searchNews($keyword){
        $query =  $this->db->query("SELECT * FROM news WHERE newsTitle LIKE '%$keyword%'");
        $results = $query->getResult();
        return $results;
    }

    public function addNews($data)
    {
        $newsTitle = $data['newsTitle'];
        $newsContents = $data['newsContents'];
        $newsWriter = $data['newsWriter'];
        $newsThumbnail = $data['newsThumbnail'];
        try{
            $this->db->query("INSERT INTO news (newsTitle,newsContents,newsWriter,newsThumbnail) VALUES ('$newsTitle', '$newsContents', '$newsWriter', '$newsThumbnail')");
            return true;
        }catch(\Exception $e){
            return false;
        }
    }

    public function getNews($id)
    {
        $query =  $this->db->query("SELECT * FROM news WHERE newsId='$id'");
        $results = $query->getResult();
        return $results;
    }
}

?>