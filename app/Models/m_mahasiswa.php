<?php

namespace App\Models;

use CodeIgniter\Model;

class m_mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $useTimestamps = false;


    public function getAllMahasiwa()
    {
        $query =  $this->db->query("SELECT * FROM ".$this->table);
        $results = $query->getResult();
        return $results;
    }

    public function getMahasiswa($id)
    {
        $query =  $this->db->query("SELECT * FROM mahasiswa WHERE id='$id'");
        $results = $query->getResult();
        return $results;
    }

    public function addMahasiswa($data)
    {
        $id = $data['id'];
        $nama_mahasiswa = $data['nama_mahasiswa'];
        $nama_prodi = $data['nama_prodi'];
        $tahun = $data['tahun'];
        try{
            $this->db->query("INSERT INTO mahasiswa (id,nama_mahasiswa,nama_prodi,tahun_masuk) VALUES('$id', '$nama_mahasiswa', '$nama_prodi', '$tahun')");
            return true;
        }catch(\Exception $e){
            return false;
        }
    }

    public function searchMahasiswa($keyword){
        $query =  $this->db->query("SELECT * FROM mahasiswa WHERE nama_mahasiswa LIKE '%$keyword%'");
        $results = $query->getResult();
        return $results;
    }
}

?>
