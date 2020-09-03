<?php

namespace App\Controllers;

class App extends BaseController
{
    private $categoryModel;
    private $postModel;

    public function __construct()
    {
        $this->categoryModel = new \App\Models\Category();
        $this->postModel = new \App\Models\Post();
    }
    public function index()
    {
        return view('home');
    }

    public function category()
    {
        return view('category');
    }

    public function post()
    {
        return view('post');
    }

    public function insert_category()
    {
        $titleCategory = $this->request->getPost('category');

        $data = ([
            "category_name" => $titleCategory
        ]);

        $this->categoryModel->insert($data);
        return redirect()->to(base_url('/category'));
    }

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
