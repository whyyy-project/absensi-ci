<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;

class ManageAccountController extends BaseController
{
    public function index()
    {
        //
    }
    public function createAccount()
    {
        // Mengambil data yang dikirim dari form
        $userData = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];

        // Melakukan validasi data
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ]);

        if ($validation->run($userData)) {
            // Membuat instance UserModel
            $userModel = new UserModel();

            // Menambahkan pengguna baru ke dalam database
            $newUserId = $userModel->insert($userData);

            if ($newUserId) {
                // Menambahkan pengguna ke grup yang ditentukan dalam form
                $authGroup = $this->request->getPost('auth_group');
                $auth = service('authorization');

                if ($auth->addUserToGroup($newUserId, $authGroup)) {
                    // Lakukan tindakan setelah berhasil membuat akun, seperti pengalihan halaman atau memberikan pesan sukses
                    return redirect()->to('/success-page')->with('success', 'Akun berhasil dibuat');
                } else {
                    // Jika terjadi kesalahan dalam menambahkan pengguna ke grup, hapus pengguna yang baru dibuat
                    $userModel->delete($newUserId);

                    // Lakukan tindakan jika terjadi kesalahan, seperti menampilkan pesan error atau pengalihan halaman kembali ke form pembuatan akun
                    return redirect()->back()->withInput()->with('error', 'Gagal menambahkan pengguna ke grup');
                }
            } else {
                // Lakukan tindakan jika terjadi kesalahan dalam membuat akun, seperti menampilkan pesan error atau pengalihan halaman kembali ke form pembuatan akun
                return redirect()->back()->withInput()->with('error', 'Gagal membuat akun');
            }
        } else {
            // Jika terjadi kesalahan validasi, tampilkan pesan kesalahan
            return redirect()->back()->withInput()->with('error', $validation->getErrors());
        }
    }
}
