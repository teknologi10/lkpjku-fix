<?php

namespace App\Controllers;

class Opd extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('login2', $data);
    }

    public function dashboard()
    {
        $data = [
            'judul' => 'Daftar Komik'
        ];

        return view('opd/dashboard', $data);
    }

    public function tanggapan()
    {
        $data = [
            'judul' => 'Daftar Komik'
        ];

        return view('opd/tanggapan', $data);
    }

    public function verifikasi()
    {
        $data = [
            'judul' => 'Daftar Komik'
        ];

        return view('opd/verifikasi', $data);
    }
    //--------------------------------------------------------------------

}
