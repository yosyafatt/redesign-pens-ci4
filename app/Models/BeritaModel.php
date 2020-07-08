<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table      = 'berita';
    protected $useTimestamps = 'true';
    protected $dateFormat = 'date';
    protected $allowedFields = ['title', 'slug', 'author', 'img', 'content'];

    public function getBerita($slug = false, $limit = 0)
    {
        if (!$slug) {
            return $this->orderBy('id', 'DESC')->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
