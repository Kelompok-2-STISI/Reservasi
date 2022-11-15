<?php

namespace App\Models;

use CodeIgniter\Model;

class user extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama', 'username', 'nik', 'kewarganegaraan', 'email', 'no_hp', 'tipe',];

    public function getUser()
    {
        return $this->findAll();
    }
}
