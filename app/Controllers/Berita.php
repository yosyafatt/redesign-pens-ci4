<?php

namespace App\Controllers;

use \App\Models\AgendaModel;
use \App\Models\BeritaModel;
use \App\Models\PengumumanModel;

class Berita extends BaseController
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
            'title' => 'Berita - ',
            'page_name' => 'berita',
            'berita' => $this->beritaModel->getBerita(),
        ];
        return view('pages/berita', $data);
    }

    public function detail($slug)
    {
        $berita = $this->beritaModel->where(['slug' => $slug])->first();
        dd($berita);
    }
}
