<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table      = 'agenda';
    protected $useTimestamps = 'true';
    protected $dateFormat = 'date';
    protected $allowedFields = ['judul', 'slug', 'author', 'img', 'deskripsi', 'held_on', 'location'];

    public function getAgenda($slug = false)
    {
        if (!$slug) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
