<?php

namespace App\Controllers;

public function registrarConsulta(){
    $validation = \Config\Services::validation();
    $request = \Config\Services::request();


    $validation->setRules([
        'nombre'=>'required',
        'telefono'=>'required',
        'email'=>'required'|valid_email,
        'motivo'=>'required',
        'consulta'=>'required',]);

        if($validation->withRequest($this->request)->run()){

            //to-do
        } else {
            $data['errors'] = $validation->getErrors();
        }

        $data['titulo'] = 'Error';
        return  view('plantillas\head',$data).view('plantillas\nav').view('index').view('plantillas\footer');
}
?>