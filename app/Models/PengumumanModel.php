<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table      = 'pengumuman';
    protected $useTimestamps = 'true';
    protected $dateFormat = 'date';
    protected $allowedFields = ['judul', 'slug', 'author', 'img', 'deskripsi', 'held_on'];

    public function getPengumuman($slug = false)
    {
        if (!$slug) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
