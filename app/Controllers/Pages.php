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
            'page_name' => '',
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
            case 'prodi-d3':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'prodi-d4':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'prodi-s2':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'jurusan-elka':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'jurusan-telkom':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'jurusan-elin':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'jurusan-it':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'jurusan-meka':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'jurusan-tekkom':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'jurusan-mmb':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'jurusan-spe':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'jurusan-game':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'dept-elektro':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'dept-tik':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'dept-multimedia':
                return view('pages/akademik/' . $subpage, $data);
                break;
            case 'dept-mekanergi':
                return view('pages/akademik/' . $subpage, $data);
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

    public function akademik_konten()
    {
        $data = [
            'title' => 'cobs - ',
            'page_name' => ''
        ];
        return view('pages/akademik/akademik-konten', $data);
    }
}
