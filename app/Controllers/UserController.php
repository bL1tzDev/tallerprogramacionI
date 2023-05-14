<?php

namespace App\Controllers;

use CodeIgniter\Models;
use App\Models\ConsultaModel;

class UserController extends BaseController{

    public function registrarConsulta(){
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();


        $validation->setRules([
            'nombre'=>'required',
            'telefono'=>'required',
            'email'=>'required|valid_email',
            'motivo'=>'required',
            'consulta'=>'required',]);

            if($validation->withRequest($this->request)->run()){

                $datos = [
                    'nombre' => $request->getPost('nombre'),
                    'mail'=>$request->getPost('email'),  
                    'telefono'=>$request->getPost('telefono'),  
                    'asunto'=>$request->getPost('motivo'),
                    'consulta'=>$request->getPost('consulta'),    
                
                
            ];

                $registroConsulta = new ConsultaModel();

                $registroConsulta->insert($datos);

                return redirect()->to('/');

            } else {
                $data['errors'] = $validation->getErrors();
            }

            $data['titulo'] = 'Error';
            return  view('plantillas\head',$data).view('plantillas\nav').view('index').view('plantillas\footer');
    }
}
?>