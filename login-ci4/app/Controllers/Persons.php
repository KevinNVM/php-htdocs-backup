<?php

namespace App\Controllers;

use App\Models\PersonsModel;
use mysqli;

class Persons extends BaseController
{
    protected $personsModel;
    public function __construct()
    {
        $this->personsModel = new PersonsModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_persons') ? $this->request->getVar('page_persons') : 1;
        
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->personsModel->search($keyword);
        } else {
            $orang = $this->personsModel;
        }

        $data = [
            'tabs' => 'list',
            'title' => 'Persons',
            // 'persons' => $this->personsModel->findAll()
            'persons' => $orang->paginate(10, 'persons'),
            'pager' => $this->personsModel->pager,
            'currentPage' => $currentPage
    ];

        return view('persons/index', $data);
    }

    public function create()
    {
        $data = [
            'tabs' => 'add',
            'title' => 'Add New',
            'validation' => \Config\Services::validation()
        ];

        return view('persons/create', $data);
    }

    public function edit($name)
    {

        $data = [
            'tabs' => 'update',
            'title' => 'Edit Existing Comic',
           'validation' => \Config\Services::validation(),
           'person' => $this->personsModel->getPerson($name)
       ];

       return view('persons/edit', $data);
    }

    public function update($id)
    {

        // input validation
        $val = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik tidak boleh kosong!'
                ]
            ]
        ]);
        if (!$val) {

        // $validation = \Config\Services::validation();
        // session()->setFlashdata('msg', $validation['errors']);
        // return redirect()->to('/persons/create')->withInput()->with('validation', $validation);
        return redirect()->to('/persons');
        }

        $this->personsModel->update($id, [
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address'),
            'email' => $this->request->getVar('email'),
        ]);

        session()->setFlashdata('err', 'Edit Successful!');

        return redirect()->to('/persons');
    }

    public function save()
    {
        
        // input validation
        $val = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!',
                ]
            ]
        ]);
        if (!$val) {
        return redirect()->to('/persons/create')->withInput();
        }

        $this->personsModel->save([
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address'),
            'email' => $this->request->getVar('email'),
        ]);

        session()->setFlashdata('err', 'New Person Has Been Added!');

        return redirect()->to('/persons');
    }

    public function details($name)
    {
        $data = [
            'tabs' => 'detail',
            'title' => "Person's Details",
            'person' => $this->personsModel->getPerson($name)
        ];

        return view('persons/details', $data);
    }

    public function delete($name)
    {
        // delete img
        $person = $this->personsModel->find($name);
        // delete column
        $this->personsModel->delete(['name' => $name]);

        session()->setFlashdata('err', 'Person Has Been Deleted');        
        return redirect()->to('/persons');
    }

}