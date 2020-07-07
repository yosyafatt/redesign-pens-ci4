<?php

namespace App\Controllers;

use \App\Models\AgendaModel;
use \App\Models\BeritaModel;
use \App\Models\PengumumanModel;

class Admin extends BaseController
{
    protected $agendaModel;
    protected $beritaModel;
    protected $pengumumanModel;

    public function __construct()
    {
        $this->agendaModel = new AgendaModel();
        $this->beritaModel = new BeritaModel();
        $this->pengumumanModel = new PengumumanModel();
    }

    public function index()
    {
        $data = [
            'berita' => $this->beritaModel->getBerita(),
        ];

        return view('admin/vberita', $data);
    }

    public function createagenda()
    {
        return view('admin/cagenda');
    }
    public function createpengumuman()
    {
        return view('admin/cpengumuman');
    }

    public function createberita()
    {
        return view('admin/cberita');
    }

    public function saveberita()
    {
        $file = $this->request->getFile('image');
        $filename = $file->getRandomName();
        $file = $file->move(ROOTPATH . 'public/uploads', $filename);
        if ($file == true) {
            $slug = url_title($this->request->getVar('judul'), '-', true);
            $this->beritaModel->save([
                'title' => $this->request->getVar('judul'),
                'slug' => $slug,
                'author' => $this->request->getVar('author'),
                'img' => $filename,
                'content' => $this->request->getVar('artikelberita'),
            ]);

            session()->setFlashdata('status', 'Berhasil Menambahkan');
            return redirect()->to('/admin');
        }
        session()->setFlashdata('gagao', 'Gagal');
        return redirect()->to('/admin');
    }
    public function savepengumuman()
    {
        $path = $this->request->getFile('image')->store('pengumuman/');
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->pengumumanModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'author' => $this->request->getVar('author'),
            'img' => $path,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'location' => $this->request->getVar('lokasi'),
            'held_on' => $this->request->getVar('tanggal'),
        ]);

        session()->setFlashdata('status', 'Berhasil Menambahkan');
        return redirect()->to('/admin');
    }
    public function saveagenda()
    {
        $path = $this->request->getFile('image')->store('agenda/');
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->agendaModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'author' => $this->request->getVar('author'),
            'img' => $path,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'location' => $this->request->getVar('lokasi'),
            'held_on' => $this->request->getVar('tanggal'),
        ]);

        session()->setFlashdata('status', 'Berhasil Menambahkan');
        return redirect()->to('/admin');
    }

    public function listagenda()
    {
        $data = [
            'agenda' => $this->agendaModel->getAgenda(),
        ];
        return view('admin/vagenda', $data);
    }

    public function listpengumuman()
    {
        $data = [
            'pengumuman' => $this->pengumumanModel->getPengumuman(),
        ];
        return view('admin/vpengumuman', $data);
    }

    public function listberita()
    {
        $data = [
            'berita' => $this->beritaModel->getBerita(),
        ];
        return view('admin/vberita', $data);
    }

    public function delberita($id)
    {
        $this->beritaModel->delete($id);

        return redirect()->to('/admin');
    }
    public function delagenda($id)
    {
        $this->agendaModel->delete($id);

        return redirect()->to('/admin/listagenda');
    }
    public function delpengumuman($id)
    {
        $this->pengumumanModel->delete($id);

        return redirect()->to('/admin/listpengumuman');
    }
}
