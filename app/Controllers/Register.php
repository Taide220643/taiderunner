<?php

namespace App\Controllers;
use App\Models\RegisterModel;

class Register extends BaseController
{
    public function regis()
    {
        $regisModel = new RegisterModel();
        $data = [
            'id_card'=> $this-> request->getVar('id_card01'),
            'name'=> $this-> request->getVar('name'),
            'age'=> $this-> request->getVar('age'),
            'email'=> $this-> request->getVar('email'),
            'password'=> md5($this-> request->getVar('password01'))
        ];
        $regisModel->insert($data);


    }

}