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

                return redirect()->to('/')->with('Msg','Regisgistrado con exito.');

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
                    'estado_usuario'=>1,
                    'id_perfil'=>1
                
            ];

                $registro_usuario= new RegistroModel();

                $registro_usuario->insert($datos);

                return redirect()->to('/');

            } else {
              //  $data['errors'] = $validation->getErrors();
              return redirect()->back()->with('register_error',$validation->getErrors())->withInput();
            }

            $data['titulo'] = 'Error';
            return  view('plantillas\head',$data).view('plantillas\nav').view('index').view('plantillas\footer');


    }

    public function inciarSesion(){
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules([
            'email'=>'required|valid_email',
            'pass'=>'required|min_length[8]'
        ]);

        if($validation->withRequest($this->request)->run()){

            $session = session();
            $userModel = model('App\Models\RegistroModel');

            $mail = $request->getPost('email');
            $pass = $request->getPost('pass');

            $user = $userModel->asArray()->where('email_usuario', $mail)->first();


            if ($user){
                $pass_user = $user['contrasena_usuario'];
                $pass_verify = password_verify($pass,$pass_user);

                if ($pass_verify){
                    $data = [
                        'id'=> $user['id_usuario'],
                        'nombre'=> $user['nombre_usuario'],
                        'apellido'=> $user['apellido_usuario'],
                        'perfil'=> $user['id_perfil'],
                        'login' => TRUE
                    ];

                    $session->set($data);

                    switch (session('perfil')){
                        case '1': return redirect()->route('/')->with('msg','Sesion iniciada');//agregar mensaje
                        break;

                        case '2': return redirect()->route('/');//agregar mensaje
                        break;
                    }
                } else {  // verify if
                    return redirect()->back()->with('login_error',$validation->getErrors())->withInput();
                }
        
            } else { // user if
                return redirect()->route('/');
                $session->setFlashdata('login_error','Usuario y/o contraseña incorrecto');
            }

        } else { // validation if
            //  $data['errors'] = $validation->getErrors();
            return redirect()->back()->with('login_error',$validation->getErrors())->withInput();
          }
    }

    public function cerrarSesion(){
        
        $session = session();
        //$session->setFlashdata('msg','Se cerro la sesion.');
        $session-> destroy();
        return redirect()->route('/')->with('msg','Se cerro la sesion');
        
    }
}
?>