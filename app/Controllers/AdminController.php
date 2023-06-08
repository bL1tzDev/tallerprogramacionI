<?php

namespace App\Controllers;
//echo view(plantillas/nav)
class AdminController extends BaseController
{

   public function index()
   {
      // return view('index');
      $data['titulo'] = 'Pagina principal';
      echo view('plantillas\head',$data);
      echo view('plantillas\nav_admin');
      echo view('index');
      echo view('plantillas\footer');
   }


   public function nuevoProducto()
   {
      $session = session();

      $is_admin = session()->get('perfil') == 2 ? true : false;
      
      if (!$is_admin){

        return redirect()->to('/');

      } else {

         // return view('index');
         $data['titulo'] = 'Agregar producto';
         echo view('plantillas\head',$data);
         echo view('plantillas\nav_admin');
         echo view('admin\agregarProducto');
         echo view('plantillas\footer');
      }

      
   }

   public function editarProducto()
   {
      $session = session();

      $is_admin = session()->get('perfil') == 2 ? true : false;
      
      if (!$is_admin){

        return redirect()->to('/');

      } else {

         // return view('index');
         $data['titulo'] = 'Agregar producto';
         echo view('plantillas\head',$data);
         echo view('plantillas\nav_admin');
         echo view('admin\editarProducto');
         echo view('plantillas\footer');
      }

      
   }

   public function listarConsultas(){

      $data['titulo'] = 'Consultas';
      echo view('plantillas\head',$data);
      echo view('plantillas\nav_admin');

      $consultaModel = model('App\Models\ConsultaModel');
      $data['consultas'] = $consultaModel->findAll();
      $data['noLeidos'] = count($consultaModel->where('estado',0)->find());
      
      echo view('admin\verConsultas',$data);
      echo view('plantillas\footer');
   }

   public function listarProductos(){

      $data['titulo'] = 'Productos';
      echo view('plantillas\head',$data);
      echo view('plantillas\nav_admin');

      $productoModel = model('App\Models\ProductoModel');
   
      $data['productos'] = $productoModel->join('categorias', 'categorias.id_categoria = productos.id_categoria')->findAll();

      echo view('admin\listarProductos',$data);
      echo view('plantillas\footer');
   }

   public function actualizarEstadoConsulta($id = null){
      $consulta = model('App\Models\ConsultaModel');
      $estado = $consulta->where('id_mesaje',$id)->first();

      
     if($estado['estado'] == 0){
         $data = array('estado'=> 1);
      } else {
         $data = array('estado'=> 0);
      }

      $consulta->update($id,$data);
      return redirect()->route('consultas');
   }

}
?>