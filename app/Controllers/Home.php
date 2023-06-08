<?php

namespace App\Controllers;
//echo view(plantillas/nav)
class Home extends BaseController
{
    public function index()
    {
       // return view('index');
       $data['titulo'] = 'Pagina principal';
       echo view('plantillas\head',$data);
       echo view('plantillas\nav');
       echo view('index');
       echo view('plantillas\footer');
    }


    public function terminos(){
        $data['titulo'] = 'Terminos y condiciones';
        echo view('plantillas\head',$data);
        echo view('plantillas\nav');
        echo view('terminos');
        echo view('plantillas\footer');
    }

    public function nosotros(){
        $data['titulo'] = 'Nosotros';
        echo view('plantillas\head',$data);
        echo view('plantillas\nav');
        echo view('about_us');
        echo view('plantillas\footer');
    }

    public function comercializacion(){
        $data['titulo'] = 'Comercializacion';
        echo view('plantillas\head',$data);
        echo view('plantillas\nav');
        echo view('comercializacion');
        echo view('plantillas\footer');
    }

    public function catalogo(){
        $data['titulo'] = 'Productos';
        echo view('plantillas\head',$data);
        echo view('plantillas\nav');

        $categoriaModel = model('App\Models\CategoriaModel');
        $productoModel = model('App\Models\ProductoModel');

        $data['productos'] = $productoModel->where('estado_producto', 0)->join('categorias', 'categorias.id_categoria = productos.id_categoria')->find();
        echo view('catalogo',$data);
        echo view('plantillas\footer');
    }

    public function contacto(){
        $data['titulo'] = 'Contacto';
        echo view('plantillas\head',$data);
        echo view('plantillas\nav');
        echo view('contacto');
        echo view('plantillas\footer');
    }

    public function productoReview(){
        $data['titulo'] = 'producto';
        echo view('plantillas\head',$data);
        echo view('plantillas\nav');
        echo view('productoReview');
        echo view('plantillas\footer');
    }

    public function iniciarsesion(){
        $data['titulo'] = 'Iniciar sesion';
        echo view('plantillas\head',$data);
        echo view('plantillas\nav');
        echo view('login');
        echo view('plantillas\footer');
    }


}
