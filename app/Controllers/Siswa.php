<?php
namespace App\Controllers;

use App\Models\SiswaModel;
use CodeIgniter\Controller;

class Siswa extends BaseController
{

    function __construct()
    {
        helper('form');
        $this->uri = service('uri');
    }
    
    public function index()
    {
        $siswa = new SiswaModel();
        $data = [
            'tampildata' => $siswa->tampildata()->getResult()
        ];

        echo view('siswa', $data);
    }
    
    public function tambah()
    {
        echo view('siswa_tambah');
    }

    public function simpan()
    {
        $data = $this->request->getPost();

        $siswa = new SiswaModel();
        
        $simpan = $siswa->simpan($data);

        if ($simpan) {
            return redirect()->to('/siswa/index');
        }
    }

    public function hapus()
    {
        $id = $this->uri->getSegment('3');
        
        $siswa = new SiswaModel();

        $siswa->hapus($id);

        return redirect()->to('/siswa/index');
    }

    public function edit()
    {
        $id = $this->uri->getSegment('3');

        $siswa = new SiswaModel();

        $ambildata = $siswa->ambildata($id);

        if (count($ambildata->getResult()) > 0) {
            $data = $ambildata->getRow(); // array Object
        }

        echo view('siswa_edit', (array)$data );
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        
        $data = $this->request->getPost();
        unset($data['id']);

        $siswa = new SiswaModel();

        $update = $siswa->edit($data, $id);

        if ($update) {
            return redirect()->to('/siswa/index');
        }
    }
    
}