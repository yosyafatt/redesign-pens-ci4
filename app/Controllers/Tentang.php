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
            'title' => 'Tentang PENS -',
            'page_name' => 'Tentang PENS',
        ];
        return view('pages/tentang', $data);
    }

    public function kalenderakademik()
    {
        return view('pages/tentang/kalender-akademik');
    }
}
