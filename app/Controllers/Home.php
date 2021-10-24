<?php

namespace App\Controllers;
use App\Models\RunModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function registerfrom()
    {
        return view('register');
    }
    public function loginfrom()
    {
        return view('login');
    }
    public function myrunfrom()
    {
        $session=session();
        $runModel = new RunModel();
        $mid=$session->get('id_card');
        $data['myrun']= $runModel->join('member','member.id_card = regis.member')->join('category','category.category_id = regis.category_run')->join('fr_status','fr_status.s_id = regis.status_id')
        ->where('member',$mid)->findAll();
        //return json_encode($data);
        return view('myrun',$data);
    }
    public function logoutfrom()
    {
        $session=session();
        $session->destroy();
        return view('login');
    }
}
