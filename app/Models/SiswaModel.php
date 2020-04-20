<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    function __construct()
    {
        $this->db = db_connect();
        $this->db2 = db_connect('alumni');
    }

    function tampildata()
    {
        return $this->db->table('siswa')->get();
    }

    function simpan($data)
    {
        return $this->db->table('siswa')->insert($data);
    }

    function hapus($id)
    {
        return $this->db->table('siswa')->delete(['id'=> $id]);
    }

    function ambildata($id)
    {
        return $this->db->table('siswa')->getWhere(['id'=> $id]);
    }

    function edit($data, $id)
    {
        return $this->db->table('siswa')->update($data, ['id'=>$id]);
    }
}