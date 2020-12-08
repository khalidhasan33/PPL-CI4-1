<?php

namespace App\Models;

use CodeIgniter\Model;

class m_login extends Model
{
    protected $useTimestamps = false;

    public function login($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $password = md5($password);
        $query =  $this->db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        $results = $query->getRow();
        return $results;
    }
}

?>