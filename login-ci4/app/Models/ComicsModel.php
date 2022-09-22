<?php

namespace App\Models;

use CodeIgniter\Model;

class ComicsModel extends Model
{
    protected $table = 'comics';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'slug', 'author', 'publisher', 'cover'];

    public function getComic($slug = false)
    {
        if ($slug !== false) {
            return $this->where(['slug' => $slug])->first();
        } else {
            return $this->findAll();
        }
    }
}