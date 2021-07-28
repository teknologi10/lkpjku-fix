<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('login2', $data);
    }

    public function auth()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} belum diisi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} belum diisi'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/produk_hukum/add')->withInput()->with('validation', $validation);
            return redirect()->to('/login2')->withInput();
        }

        $session = \Config\Services::session();
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));
        $user = $this->userModel->where('username', $username)->first();
        if (empty($user)) {
            session()->setFlashdata('pesan', 'Username Belum Terdaftar');
            return redirect()->to('/login2')->withInput();
        }
        if ($user['password'] != $password) {
            session()->setFlashdata('pesan', 'Password Salah');
            return redirect()->to('/login2')->withInput();
        }

        $session->set('username', $username);

        if (!session()->has('username')) {
            return redirect()->to('/login2');
        }
        $data = [
            'judul' => 'JDIH - Kabupaten Kulon Progo',
            'username' => $session->get('username'),
            'aktif' => $this->uri->getSegment(1)
            // return $this->orderBy('id', 'desc')->findAll();
        ];
        echo view('pemerintahan/header', $data);
        echo view('pemerintahan/dashboard', $data);
        echo view('pemerintahan/footer');
    }

    public function dashboard()
    {
        $data = [
            'judul' => 'Daftar Komik'
        ];
        return view('pemerintahan/dashboard', $data);
    }

    public function tanggapan()
    {
        $data = [
            'judul' => 'Daftar Komik'
        ];

        return view('pemerintahan/tanggapan', $data);
    }

    public function verifikasi()
    {
        $data = [
            'judul' => 'Daftar Komik'
        ];

        return view('pemerintahan/verifikasi', $data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/login2');
    }
    //--------------------------------------------------------------------

}
