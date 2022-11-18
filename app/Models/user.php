<?php

namespace App\Models;

use CodeIgniter\Model;

class user extends Model
{
    protected $table      = 'customer';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama', 'username', 'nik', 'id_negara', 'email', 'no_hp', 'tipe',];

    public function getUser()
    {
        return $this->findAll();
    }
}
