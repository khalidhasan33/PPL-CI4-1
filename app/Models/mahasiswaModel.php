<?php

namespace App\Models;

use CodeIgniter\Model;

class mahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $useTimestamps = false;


    public function getMahasiwa()
    {
        $query =  $this->db->query("SELECT * FROM ".$this->table);
        $results = $query->getResult();
        return $results;
    }

    public function addMahasiswa($data)
    {
        $id = $data['id'];
        $nama_mahasiswa = $data['nama_mahasiswa'];
        $nama_prodi = $data['nama_prodi'];
        $tahun = $data['tahun'];
        $this->db->query("INSERT INTO mahasiswa (id,nama_mahasiswa,nama_prodi,tahun_masuk) VALUES('$id', '$nama_mahasiswa', '$nama_prodi', '$tahun')");
    }
}

?>
