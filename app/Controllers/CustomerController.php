<?php

namespace App\Controllers;
use App\Models\CustomerModel;
use CodeIgniter\Controller;

class CustomerController extends Controller
{



    public function index(): string
    {
        return view('CustomerHome');
    }

    public function customrecord(): string
    {
        return view('CustomerRecords');
    }

    public function addrecord(): string
    {
        return view('addrecords');
    }

    public function record()
    {
        $model = new CustomerModel();
        $data['customers'] = $model->findAll();

        return view('CustomerRecords', $data);
    }

    public function save()
    {
        $model = new CustomerModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'contactNo' => $this->request->getPost('contactNo'),
            'gender' => $this->request->getPost('gender'),
        ];

        $model->insert($data);

        return redirect()->to(base_url('addrecords'))->with('success', 'Room added successfully');
    }
}