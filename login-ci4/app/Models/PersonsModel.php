<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonsModel extends Model
{
    protected $table = 'persons';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'address', 'email'];

    public function search($keyword)
    {
        // $builder = $this->table('persons');
        // $builder->like('name', $keyword);
        // return $builder;
        return $this->table('persons')->like('name', $keyword)->orLike('address', $keyword)->orLike('email', $keyword);
    }

    public function getPerson($name = false)
    {
        if ($name !== false) {
            return $this->where(['name' => $name])->first();
        } else {
            return $this->findAll();
        }
    }

    
}