<?php

namespace App\Controllers;

use App\Models\Model_Rekomendasi;

class Admin extends BaseController
{
    protected $Model_Rekomendasi;
    public function __construct()
    {
        $this->Model_Rekomendasi = new Model_Rekomendasi();
    }

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
            'data_rekomendasi' => $this->Model_Rekomendasi->get_data_rekomendasi(),
        ];
        return view('pemerintahan/dashboard', $data);
    }

    public function tanggapan()
    {
        $data = [
            'opd' => $this->Model_Rekomendasi->get_data_opd(),
        ];
        return view('pemerintahan/tanggapan', $data);
    }

    public function save_tanggapan()
    {
        //proteksi halaman
        // if (session()->get('username') == '') {
        //     session()->setFlashdata('gagal', 'Anda belum login !');
        //     return redirect()->to(base_url('login'));
        // }
        //end proteksi halaman
        if ($this->request->getPost('asal_rekomendasi') == '-') {
            session()->setflashdata('gagal', 'Asal Rekomendasi belum dipilih !');
            return redirect()->to(base_url('Admin/tanggapan'));
        } else if ($this->request->getPost('opd') == '-') {
            session()->setflashdata('gagal', 'OPD Pengampu belum dipilih !');
            return redirect()->to(base_url('Admin/tanggapan'));
        } else {
            $data = [
                'id_opd' => $this->request->getPost('opd'),
                'rekomendasi' => $this->request->getPost('rekomendasi'),
                'asal_rekomendasi' => $this->request->getPost('asal_rekomendasi'),
                'tgl_rekomendasi' => date('Y-m-d'),
            ];
            $this->Model_Rekomendasi->insert_data_rekomendasi($data);


            $data2 = [
                'id_rekomendasi' => 1,
                'id_opd' => $this->request->getPost('opd'),
            ];
            $this->Model_Rekomendasi->insert_data_detail_rekomendasi($data2);
            session()->setflashdata('success', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('Admin/dashboard'));
        }
    }
    public function edit_tanggapan($id_rekomendasi)
    {
        // //proteksi halaman
        // if (session()->get('username') == '') {
        //     session()->setFlashdata('gagal', 'Anda belum login !');
        //     return redirect()->to(base_url('login'));
        // }
        //end proteksi halaman
        $data = [
            'data_rekomendasi' => $this->Model_Rekomendasi->edit_data_rekomendasi($id_rekomendasi),
            'get_opd' => $this->Model_Rekomendasi->get_data_opd(),
        ];
        return view('pemerintahan/edit_tanggapan', $data);
    }

    public function update_tanggapan($id_rekomendasi)
    {
        //proteksi halaman
        // if (session()->get('username') == '') {
        //     session()->setFlashdata('gagal', 'Anda belum login !');
        //     return redirect()->to(base_url('login'));
        // }
        //end proteksi halaman
        if ($this->request->getPost('opd') == '-') {
            session()->setflashdata('gagal', 'OPD Pengampu belum dipilih !');
            return redirect()->to(base_url('Admin/edit_tanggapan'));
        } else {
            $data = [
                'id_opd' => $this->request->getPost('opd'),
                'rekomendasi' => $this->request->getPost('rekomendasi'),
            ];
            $this->Model_Rekomendasi->update_data_rekomendasi($data, $id_rekomendasi);
            session()->setflashdata('success', 'Data Berhasil Diubah');
            return redirect()->to(base_url('Admin/dashboard'));
        }
    }

    public function hapus_tanggapan($id_rekomendasi)
    {
        //proteksi halaman
        // if (session()->get('username') == '') {
        //     session()->setFlashdata('gagal', 'Anda belum login !');
        //     return redirect()->to(base_url('login'));
        // }
        //end proteksi halaman
        $this->Model_Rekomendasi->delete_data_rekomendasi($id_rekomendasi);
        session()->setflashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('Admin/dashboard'));
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
