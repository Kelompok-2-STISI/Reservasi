<?php

namespace App\Models;

use CodeIgniter\Model;

class booking extends Model
{
    protected $table      = 'booking';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_user', 'id_kamar', 'id_customer', 'check-in', 'check-out', 'status'];

    public function getBook()
    {
        return $this->findAll();
    }
}
