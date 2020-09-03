<?php

namespace App\Controllers;

class Nama extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function Saya()
    {
        $data = [
            'nama' => 'Sahl',
            'kelas' => 'XII',
            'jurusan' => 'Rekayasa Perangkat Lunak'
        ];

        return view('saya', $data);
    }
}
