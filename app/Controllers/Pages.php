<?php

namespace App\Controllers;

use \App\Models\AgendaModel;
use \App\Models\BeritaModel;
use \App\Models\PengumumanModel;

use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Pages extends BaseController
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
            'title' => '',
            'page_name' => 'beranda',
            'berita' => $this->beritaModel->getBerita(false, 4),
        ];
        // dd($data);
        return view('pages/beranda', $data);
    }

    public function akademik($subpage = '')
    {
        $data = [
            'title' => 'Akademik - ',
            'page_name' => 'akademik',
        ];
        switch ($subpage) {
            case 'Jurusan':
                echo 'Jurusan page';
                break;
            case 'Program':
                echo 'Program page';
                break;
            case 'PJJ':
                echo 'PJJ page';
                break;

            default:
                return view('pages/akademik', $data);
                break;
        }
    }

    public function layanan()
    {
        $data = [
            'title' => 'Layanan - ',
            'page_name' => 'layanan',
        ];
        return view('pages/layanan', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang PENS - ',
            'page_name' => 'tentang',
        ];
        return view('pages/tentang', $data);
    }

    public function berita()
    {
        $data = [
            'title' => 'Berita - ',
            'page_name' => 'berita',
            'berita' => $this->beritaModel->getBerita(),
        ];
        return view('pages/berita', $data);
    }

    public function cobs()
    {
        return view('pages/konten');
    }
}
