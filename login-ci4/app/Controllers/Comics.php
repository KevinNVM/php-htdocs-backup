<?php

namespace App\Controllers;

use App\Models\ComicsModel;
use mysqli;

class Comics extends BaseController
{
    protected $comicsModel;
    public function __construct()
    {
        $this->comicsModel = new ComicsModel();
    }

    public function index()
    {
        $data = [
            'tabs' => 'list',
            'title' => 'Comics',
            'comics' => $this->comicsModel->getComic()
    ];

        // WRONG USES
        // $db = \Config\Database::connect();
        // $comic = $db->query("SELECT * FROM comics");
        // foreach ($comic->getResultArray() as $row) {
        //     d($row);
        // };


        return view('comics/index', $data);
    }

    public function create()
    {
        
        $data = [
            'tabs' => 'new',
            'title' => 'Add New Comics',
            'validation' => \Config\Services::validation()
        ];

        return view('comics/create', $data);
    }

    public function details($slug)
    {
        $comic = $this->comicsModel->getComic($slug);

        // Jika Komik tidak ada di tabel
        if (empty($comic)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Unknown Comics "' . $slug . '"');
        }
        
        $data = [
            'tabs' => 'details',
            'title' => $comic['title']."'s ". 'Details',
            'comic' => $comic
        ];
        // dd($comic);
        
        return view('comics/details', $data);
    }

    public function edit($slug)
    {
       $data = [
            'tabs' => 'edit',
            'title' => 'Edit Existing Comic',
           'validation' => \Config\Services::validation(),
           'comic' => $this->comicsModel->getComic($slug)
       ];

       return view('comics/edit', $data);
    }

    public function update($id)
    {
        // check title
        $comicOld = $this->comicsModel->getComic($this->request->getVar('slug'));
        if ($comicOld['title'] == $this->request->getVar('title')) {
            $rule_title = 'required';
        } else {
            $rule_title = 'required|is_unique[comics.title]';
        }

        // input validation
        $val = $this->validate([
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik tidak boleh kosong!'
                ]
            ],
            'cover' => [
                'rules' => 'max_size[cover,1048]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png,image/webp]',
                'errors' => [
                    'max_size' => 'ukuran {field} komik yang dipilih terlalu besar max=1mb',
                    'is_image' => '{field} komik yang dipilih bukan gambar',
                    'mime_in' => '{field} komik yang dipilih bukan gambar'
                ]
            ]
        ]);
        if (!$val) {

        // $validation = \Config\Services::validation();
        // session()->setFlashdata('msg', $validation['errors']);
        // return redirect()->to('/comics/create')->withInput()->with('validation', $validation);
        return redirect()->to('/comics/edit/' . $this->request->getVar('slug'))->withInput();
        }

        #MOVE UPLOADED FILES TO IMG FOLDER
        $fileCover = $this->request->getFile('cover');
        // check for uploaded img
        if($fileCover->getError() == 4) {
            $coverName = $this->request->getVar('coverOld');
        } else {
            // generate unique id for name
            $coverName = uniqid() . '.' . $fileCover->getExtension();
            // move to img folder
            $fileCover->move('img', $coverName);
            // delete old cover
            
            // unlink('img/' . $this->request->getVar('coverOld'));
            (file_exists('img/' . $this->request->getVar('coverOld'))) ? unlink('img/' . $this->request->getVar('coverOld')) : '';
        }

        $this->comicsModel->update($id, [
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'publisher' => $this->request->getVar('publisher'),
            'cover' => $coverName,
            'slug' => url_title($this->request->getVar('title'), '-', true)
        ]);

        session()->setFlashdata('err', 'Edit Successful!');

        return redirect()->to('/comics');
    }

    public function delete($id)
    {
        // delete img
        $comic = $this->comicsModel->find($id);
        // check for default image
        if ($comic['cover'] != 'default.jpg') {
            unlink('img/' . $comic['cover']);
        }
        // delete column
        $this->comicsModel->delete(['id' => $id]);

        session()->setFlashdata('err', 'Comic Has Been Deleted');        
        return redirect()->to('/comics');
    }

    public function save()
    {
        
        // input validation
        $val = $this->validate([
            'title' => [
                'rules' => 'required|is_unique[comics.title]',
                'errors' => [
                    'required' => '{field} komik tidak boleh kosong!',
                    'is_unique' => '{field} komik sudah terdaftar'
                ]
            ],
            'cover' => [
                'rules' => 'max_size[cover,1048]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png,image/webp]',
                'errors' => [
                    'max_size' => 'ukuran {field} komik yang dipilih terlalu besar max=1mb',
                    'is_image' => '{field} komik yang dipilih bukan gambar',
                    'mime_in' => '{field} komik yang dipilih bukan gambar'
                ]
            ]
        ]);
        if (!$val) {

        // $validation = \Config\Services::validation();
        // session()->setFlashdata('msg', $validation['errors']);
        // return redirect()->to('/comics/create')->withInput()->with('validation', $validation);
        return redirect()->to('/comics/create')->withInput();
        }

        #MOVE UPLOADED FILES TO IMG FOLDER
        $fileCover = $this->request->getFile('cover');
        // check for uploaded img
        if($fileCover->getError() == 4) {
            $coverName='default.jpg';
        } else {
            // generate unique id for name
            $coverName = uniqid() . '.' . $fileCover->getExtension();
            // move to img folder
            $fileCover->move('img', $coverName);
        }

        $this->comicsModel->save([
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'publisher' => $this->request->getVar('publisher'),
            'cover' => $coverName,
            'slug' => url_title($this->request->getVar('title'), '-', true)
        ]);

        session()->setFlashdata('err', 'New Comic Has Been Added!');

        return redirect()->to('/comics');
    }


}