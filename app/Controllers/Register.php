<?php

namespace App\Controllers;
use App\Models\RegisterModel;
use App\Models\CategoryModel;
use App\Models\RunModel;
use App\Models\statusModel;


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
        return view('login');


    }

    public function login(){
        $regisModel = new RegisterModel();
        $session=session();

        $idc=$this-> request->getVar('id_card01');
        $pass=md5($this-> request->getVar('password01'));

        $login=$regisModel->where('id_card',$idc)->where('password',$pass)->findAll();
        if($login != ''){
            $session->set('id_card',$login[0]['id_card']);
            $session->set('name',$login[0]['name']);
            $session->set('age',$login[0]['age']);
            $session->set('email',$login[0]['email']);
            $session->set('password',$login[0]['password']);
            return view('welcome_message');
            //return  json_encode($session->get('user'));
        }
    }

    public function callcategary(){
        $cateModel = new CategoryModel();
        $data['cate']= $cateModel->findAll();
        //return json_encode($data['cate']);
        return view('regisRun',$data);
    }
    public function regisruning(){
        $runModel = new RunModel();
        $session=session();
        
            $db = \Config\Database::connect();
    
            $sql = "SELECT MAX(CAST(SUBSTRING(ID, 4, 10) AS UNSIGNED)) AS maxid FROM regis";
            $query = $db->query($sql);
            $row = $query->getResult();
            $maxid = $row[0]->maxid;
            $code = '';
    
           if($maxid == null)
             {
                $code = 'RUN0000001';
             }else{
                    $id = (string) $maxid + 1;
                    $fullid =   str_pad($id,7,'0',STR_PAD_LEFT);
                    $code = 'RUN'.$fullid;
             }


             $data=[
                'ID'=> $code,
                'member'=> $session->get('id_card'),
                'category_run' =>$this->request->getVar('category_run'),
                'status_id'=>1
             ];

             $runModel->insert($data);
        
            
        return view('welcome_message');
    }

    public function comfrimRunPage(){
        $runModel = new RunModel();
        $staModel = new statusModel();
        $id=$this-> request->getVar('ID');
        $data['myrun']= $runModel->join('member','member.id_card = regis.member')->join('category','category.category_id = regis.category_run')->join('fr_status','fr_status.s_id = regis.status_id')
        ->where('ID',$id)->findAll();
        // $id=$this->request->getVar('ID');
        $data02['stt']= $staModel->findAll();

        $datalist['test']=[
            $data['myrun'],
            $data02['stt']
        ];
        //return json_encode($datalist)  ;
        return view('updateForm',$datalist);
        // $runModel->where('ID',$id)->update('status_id',2);
    }

    public function updateRunning(){
        $runModel = new RunModel();
        $session=session();
        $id=$this-> request->getVar('ID');
        $data=[
            'ID'=>$id,
            'member'=>$session->get('id_card'),
            'category_run'=>$this->request->getVar('cate_id'),
            'status_id'=>$this-> request->getVar('S_id')
        ];
        $runModel->update($id,$data);
        //return json_encode($id) ;
        return view('welcome_message');
    }

}