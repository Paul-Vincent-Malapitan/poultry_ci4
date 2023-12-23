<?php

namespace App\Controllers;
use App\Models\UserModel;

use App\Controllers\BaseController;

class RegisterController extends BaseController
{
    public function index()
    {
        //
    }

    public function register_user()
    {
        helper(['form']);
		$data = [];
        return view ('register_user', $data);
    }

    public function save()
	{
		//include helper form
		helper(['form']);
		//set rules validation form
		$rules = [
			'name' 			=> 'required|min_length[3]|max_length[20]',
			'email' 		=> 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
			'password' 		=> 'required|min_length[6]|max_length[200]',
			'confpassword' 	=> 'matches[password]',
            'contact' 		=> 'numeric|min_length[10]|max_length[15]',
            'address' 		=> 'max_length[255]',
		];

		if($this->validate($rules)){
			$model = new UserModel();
			$data = [
				'name' 	=> $this->request->getVar('name'),
				'email' 	=> $this->request->getVar('email'),
				'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'contact'  => $this->request->getVar('contact'),
                'address' 	=> $this->request->getVar('address'),
			];
			$model->save($data);
			return redirect()->to('/login_user');
		}else{
			$data['validation'] = $this->validator;
			echo view('register_user', $data);
		}
		
	}
}
