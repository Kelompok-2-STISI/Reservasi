<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class booking extends BaseController
{
    protected $kamarModel;
    protected $jenisModel;
    protected $negaraModel;
    protected $customerModel;
    protected $photoModel;
    protected $bookingModel;
    protected $cek;

    public function __construct()
    {
        $this->kamarModel = new \App\Models\kamar();
        $this->jenisModel = new \App\Models\jenis();
        $this->negaraModel = new \App\Models\Negara();
        $this->customerModel = new \App\Models\customer();
        $this->photoModel = new \App\Models\PhotoModel();
        $this->bookingModel = new \App\Models\booking();
        $this->cek = new \App\Controllers\Home();
    }

    public function index()
    {
        $this->cek->check_kamar();

        $db = \Config\Database::connect();
        $builder = $db->table('booking');
        $builder->select('*, booking.id as id_bo');
        $builder->join('kamar', 'kamar.id = booking.id_kamar');
        $builder->join('jenis_kamar', 'jenis_kamar.id = kamar.id_jenis_kamar');
        $builder->join('customer', 'customer.id = booking.id_customer');
        $builder->join('negara', 'customer.id_negara = negara.id_country');
        $builder->join('users', 'users.id = booking.id_user');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $data['bo'] = $builder->get()->getResultArray();
        // dd(
        //     $data
        // );
        return view('booking', $data);
    }
}
