<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\user;
use App\Models\Admin;
use App\Models\Negara;
use CodeIgniter\Database\MySQLi\Builder;

class Users extends BaseController
{
    // // Deklarasi variabel untuk model
    // protected $userModel;
    // protected $adminModel;
    // protected $negaraModel;
    // // konstruktor
    // public function __construct()
    // {
    //     $this->userModel = new \App\Models\user();
    //     $this->adminModel = new \App\Models\Admin();
    //     $this->negaraModel = new \App\Models\Negara();
    // }
    // // controller untuk view utama menu user
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, password_hash, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data = [
            'users' => $query->getResult()
        ];
        return view('user/index', $data);
    }
    // -------------------------------------------------------------------------------------------------
    // tambah
    // public function tambah()
    // {
    //     return view('user/tambah');
    // }

    // public function save()
    // {
    //     $user = new \Myth\Auth\Models\UserModel();

    //     $data = [
    //         'username' => $this->request->getPost('uname'),
    //         'email' => $this->request->getPost('email'),
    //         'password_hash' => md5($this->request->getPost('password')),
    //     ];
    //     $user->save($data);

    //     return redirect()->to('/users');
    // }
    // public function tambahCustomer()
    // {
    //     $data = [
    //         'negara' => $this->negaraModel->getNegara()
    //     ];
    //     return view('user/tambahCustomer', $data);
    // }
    // public function saveCustomer()
    // {
    //     $this->userModel->save([
    //         'nama' => $this->request->getPost('nama'),
    //         'username' => $this->request->getPost('uname'),
    //         'nik' => $this->request->getPost('nik'),
    //         'id_negara' => $this->request->getPost('negara'),
    //         'email' => $this->request->getPost('email'),
    //         'no_hp' => $this->request->getPost('noHp'),
    //         'password' => $this->request->getPost('password'),
    //     ]);

    //     return redirect()->to('/users');
    // }
    // // hapus
    // public function hapusCustomer($id)
    // {
    //     $this->userModel->delete($id);
    //     return redirect()->to('/users');
    // }
    // // edit
    // public function editCustomer($id)
    // {
    //     $data = [
    //         'customer' => $this->userModel->find($id),
    //         'negara' => $this->negaraModel->getNegara()
    //     ];
    //     return view('user/editCustomer', $data);
    // }
    // public function updateCustomer($id)
    // {
    //     $this->userModel->save([
    //         'id' => $id,
    //         'nama' => $this->request->getPost('nama'),
    //         'username' => $this->request->getPost('uname'),
    //         'nik' => $this->request->getPost('nik'),
    //         'id_negara' => $this->request->getPost('negara'),
    //         'email' => $this->request->getPost('email'),
    //         'no_hp' => $this->request->getPost('noHp'),
    //         'password' => $this->request->getPost('password'),
    //     ]);
    //     return redirect()->to('/users');
    // }
    // // ----------------------------------------------------------------------------------

    // public function tambahAdmin()
    // {
    //     return view('user/tambahAdmin');
    // }

    // public function saveAdmin()
    // {
    //     $this->adminModel->save([
    //         'nama' => $this->request->getPost('nama'),
    //         'username' => $this->request->getPost('uname'),
    //         'email' => $this->request->getPost('email'),
    //         'no_hp' => $this->request->getPost('noHp'),
    //         'password' => $this->request->getPost('password'),
    //     ]);

    //     return redirect()->to('/users');
    // }

    // public function hapusAdmin($id)
    // {
    //     $this->adminModel->delete($id);
    //     return redirect()->to('/users');
    // }

    // public function editAdmin($id)
    // {
    //     $data = [
    //         'admin' => $this->adminModel->find($id)
    //     ];
    //     return view('user/editAdmin', $data);
    // }
    // public function updateAdmin($id)
    // {
    //     $this->adminModel->save([
    //         'id' => $id,
    //         'nama' => $this->request->getPost('nama'),
    //         'username' => $this->request->getPost('uname'),
    //         'email' => $this->request->getPost('email'),
    //         'no_hp' => $this->request->getPost('noHp'),
    //         'password' => $this->request->getPost('password'),
    //     ]);
    //     return redirect()->to('/users');
    // }
}
