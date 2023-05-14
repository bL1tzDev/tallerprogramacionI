<?php

namespace App\Controllers;

use CodeIgniter\Models;
use App\Models\ConsultaModel;
use App\Models\RegistroModel;

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
            return  view('plantillas\head',$data).view('plantillas\nav').view('contacto').view('plantillas\footer');
    }

    public function registrarUsuario(){

        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules([
            'nombre'=>'required',
            'apellido'=>'required',
            'email'=>'required|valid_email',
            'pass'=>'required|min_length[8]',
            'repass'=>'required|min_length[8]|matches[pass]',]);


            if($validation->withRequest($this->request)->run()){

                $datos = [
                    'nombre_usuario' => $request->getPost('nombre'),
                    'apellido_usuario' => $request->getPost('apellido'),
                    'email_usuario'=>$request->getPost('email'),   
                    'contrasena_usuario'=>password_hash($request->getPost('pass'),PASSWORD_BCRYPT),    
                    'estado_usuario'=>1
                
            ];

                $registro_usuario= new RegistroModel();

                $registro_usuario->insert($datos);

                return redirect()->to('/');

            } else {
                $data['errors'] = $validation->getErrors();
            }

            $data['titulo'] = 'Error';
            return  view('plantillas\head',$data).view('plantillas\nav').view('index').view('plantillas\footer');


    }
}
?>