<?php

namespace App\Controllers;

use CodeIgniter\Models;
use App\Models\ProductoModel;

class ProductController extends BaseController{

    private function agregarImagenes($nombre, $categoria){

        $categoriaModel = model('App\Models\CategoriaModel');
        $categoriaDesc = $categoriaModel->find($categoria)['categoria_descripcion'];
        $nombreProducto = $nombre;

        if (!is_dir(ROOTPATH. "public/images/products/$categoriaDesc/$nombreProducto")){ // Si no existe el directorio para la imagen
            mkdir(ROOTPATH. "public/images/products/$categoriaDesc/$nombreProducto"); //Crea directorio para la nueva imagen
        }
        


        //obtiene las imagenes de los campos
        $img1 = $this->request->getFile('imagen_modelo');
        $img2 = $this->request->getFile('imagen_frente');
        $img3 = $this->request->getFile('imagen_reverso');

       //Las mueve al directorio creado
        $img1->move(ROOTPATH."public/images/products/$categoriaDesc/$nombreProducto","modelo_frente.webp");
        $img2->move(ROOTPATH."public/images/products/$categoriaDesc/$nombreProducto","producto_frente.webp");
        $img3->move(ROOTPATH."public/images/products/$categoriaDesc/$nombreProducto","producto_reverso.webp");
    }

    private function actualizarImagen($nombre, $categoria, $nombre_img, $orientacion){

        $categoriaModel = model('App\Models\CategoriaModel');
        $categoriaDesc = $categoriaModel->find($categoria)['categoria_descripcion'];
        $nombreProducto = $nombre;
        
        if(file_exists("public/images/products/$categoriaDesc/$nombreProducto/$nombre_img")){//verifica si la imagen existe
            unlink("public/images/products/$categoriaDesc/$nombreProducto/$nombre_img"); // Si la imagen existe se elimina
        } 


        //obtiene la nueva imagen del campo especifico
        $img1 = $this->request->getFile($orientacion);
        

       //La mueve al directorio 
        $img1->move(ROOTPATH."public/images/products/$categoriaDesc/$nombreProducto",$nombre_img);
    }

    public function agregarProducto(){
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();


        $validation->setRules([
            'tituloProducto'=>'required|max_length[35]',
            'descripcionProducto'=>'required|max_length[290]',
            'precioProducto'=>'required|greater_than[0]',
            'cantidadProducto'=>'required|is_natural',
            'tallesDisponibles' => 'required',
            'precioDescuento' => 'permit_empty|numeric',
            'imagen_modelo'=>'uploaded[imagen_modelo]|max_size[imagen_modelo,3072]|is_image[imagen_modelo]',
            'imagen_frente'=>'uploaded[imagen_frente]|max_size[imagen_frente,3072]|is_image[imagen_frente]',
            'imagen_reverso'=>'uploaded[imagen_reverso]|max_size[imagen_reverso,3072]|is_image[imagen_reverso]',
            'categoria'=>'required|is_natural_no_zero'
        
        ],[ // Errors
            'categoria' => [
                'is_natural_no_zero' => 'Debe seleccionar una categoria valida!',
            ],
            'tallesDisponibles' => [
                'required' => 'Debe seleccionar almenos una opcion.',
            ]
            ]);

            if($validation->withRequest($this->request)->run()){

                $talles = implode(',',$request->getPost('tallesDisponibles')); //Conviete los talles en string para guardarlos en la base de datos

                $datos = [
                    'titulo_producto' => $request->getPost('tituloProducto'),
                    'descripcion_producto'=>$request->getPost('descripcionProducto'),
                    'precio_producto'=>$request->getPost('precioProducto'),
                    'precio_descuento' =>$request->getPost('precioDescuento') ? $request->getPost('precioDescuento') : 0, 
                    'stock_producto'=>$request->getPost('cantidadProducto'),
                    'talles_producto'=>$talles,
                    'id_categoria'=>$request->getPost('categoria'),
                    'imagen_modelo'=>'modelo_frente.webp',
                    'imagen_frente'=>'imagen_frente.webp',
                    'imagen_reverso'=>'imagen_reverso.webp',
                    'estado_producto'=> $request->getPost('switch_estado') ? 1 : 0 // 1 = privado, 0 = publico
                ];
               
                
              $this->agregarImagenes($this->request->getPost('tituloProducto'),$request->getPost('categoria'));
                
                $agregarNuevoProducto = new ProductoModel();
                $agregarNuevoProducto->insert($datos);

                return redirect()->to('agregarProducto')->with('msg','Producto Agregado correctamente!');

            } else {
                return redirect()->back()->with('agregarProducto_error',$validation->getErrors())->withInput();
                //$data['errors'] = $validation->getErrors();
            }

         //   return redirect()->back()->with('error','validtaion error');

            
         
            //$data['titulo'] = 'Error';
           // return  view('plantillas\head',$data).view('plantillas\nav_admin').view('admin\agregarProducto').view('plantillas\footer');
    }

    public function actualizarProducto(){
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();


        $validation->setRules([
            'tituloProducto'=>'required|max_length[35]',
            'descripcionProducto'=>'required|max_length[290]',
            'precioProducto'=>'required|greater_than[0]',
            'cantidadProducto'=>'required|is_natural',
            'tallesDisponibles' => 'required',
            'precioDescuento' => 'permit_empty|numeric',
            'imagen_modelo'=>'permit_empty|max_size[imagen_modelo,1024]|is_image[imagen_modelo]',
            'imagen_frente'=>'permit_empty|max_size[imagen_frente,1024]|is_image[imagen_frente]',
            'imagen_reverso'=>'permit_empty|max_size[imagen_reverso,1024]|is_image[imagen_reverso]',
            'categoria'=>'required|is_natural_no_zero'
        
        ],[ // Errors
            'categoria' => [
                'is_natural_no_zero' => 'Debe seleccionar una categoria valida.',
            ],
            'tallesDisponibles' => [
                'required' => 'Debe seleccionar almenos una opcion.',
            ]
            ]);

            if($validation->withRequest($this->request)->run()){

                $talles = implode(',',$request->getPost('tallesDisponibles')); //Conviete los talles en string para guardarlos en la base de datos

                $datos = [
                    'titulo_producto' => $request->getPost('tituloProducto'),
                    'descripcion_producto'=>$request->getPost('descripcionProducto'),
                    'precio_producto'=>$request->getPost('precioProducto'),
                    'precio_descuento' =>$request->getPost('precioDescuento') ? $request->getPost('precioDescuento') : 0, 
                    'stock_producto'=>$request->getPost('cantidadProducto'),
                    'talles_producto'=>$talles,
                    'id_categoria'=>$request->getPost('categoria'),
                    'imagen_modelo'=>'modelo_frente.webp',
                    'imagen_frente'=>'imagen_frente.webp',
                    'imagen_reverso'=>'imagen_reverso.webp',
                    'estado_producto'=> $request->getPost('switch_estado') ? 1 : 0 // 1 = privado, 0 = publico
                ];
               
                //$imgprueba = $this->request->getFile('imagen_modelo');
                

                
                $id = $request->getPost('id');

                $newImg1 = $this->request->getFile('imagen_modelo');
                $newImg2 = $this->request->getFile('imagen_frente');
                $newImg3 = $this->request->getFile('imagen_reverso');

                if(is_file($newImg1)){

                    $rules = [
                        'imagen_modelo'=>'max_size[imagen_modelo,3072]|is_image[imagen_modelo]',
                    ];

                    $isValid = $this->validate($rules);
                    if($isValid){
                       $this->actualizarImagen($this->request->getPost('tituloProducto'),$request->getPost('categoria'),'modelo_frente.webp','imagen_modelo');
                       
                    } else {
                        return redirect()->back()->with('img1_val_error','La imagen es demasiado grande o de un formato no soportado.');
                    }
                }

                if(is_file($newImg2)){

                    $rules = [
                        'imagen_frente'=>'max_size[imagen_frente,3072]|is_image[imagen_frente]',
                    ];

                    $isValid = $this->validate($rules);
                    if($isValid){
                        $this->actualizarImagen($this->request->getPost('tituloProducto'),$request->getPost('categoria'),'producto_frente.webp','imagen_frente');

                    } else {
                        return redirect()->back()->with('img2_val_error','La imagen es demasiado grande o de un formato no soportado.');
                    }
                }

                if(is_file($newImg3)){

                    $rules = [
                        'imagen_reverso'=>'max_size[imagen_reverso,3072]|is_image[imagen_reverso]',
                    ];

                    $isValid = $this->validate($rules);

                    if($isValid){
                        $this->actualizarImagen($this->request->getPost('tituloProducto'),$request->getPost('categoria'),'producto_reverso.webp','imagen_reverso');

                    } else {
                        return redirect()->back()->with('img3_val_error','La imagen es demasiado grande o de un formato no soportado.');
                    }
                }  
                //$this->actualizarImagen($this->request->getPost('tituloProducto'),$request->getPost('categoria'),'producto_reverso.webp');
                
                $editarProducto = new ProductoModel();
                $editarProducto->update($id,$datos);

                return redirect()->to('listaProductos')->with('msg','Producto actualizado!');

            } else {
                return redirect()->back()->with('agregarProducto_error',$validation->getErrors())->withInput();
                //$data['errors'] = $validation->getErrors();
            }

         //   return redirect()->back()->with('error','validtaion error');

            
         
            //$data['titulo'] = 'Error';
           // return  view('plantillas\head',$data).view('plantillas\nav_admin').view('admin\agregarProducto').view('plantillas\footer');
    }

    public function editarProducto($id){
        $productoModel = model('App\Models\ProductoModel');
        $categoriaModel = model('App\Models\CategoriaModel');
        $data['categorias'] = $categoriaModel->findAll();
        $data['producto'] = $productoModel->join('categorias', 'categorias.id_categoria = productos.id_categoria')->where('id_producto',$id)->first();
        $data['titulo'] = 'Editar producto';

        echo view('plantillas\head',$data);
        echo view('plantillas\nav_admin');
        echo view('admin\editarProducto');
        echo view('plantillas\footer');
    }

    public function mostrarProducto($id = 12){
        $productoModel = model('App\Models\ProductoModel');
        $categoriaModel = model('App\Models\CategoriaModel');
        $data['categorias'] = $categoriaModel->findAll();
        $data['producto'] = $productoModel->join('categorias', 'categorias.id_categoria = productos.id_categoria')->where('id_producto',$id)->first();
        $data['titulo'] = 'Producto';

        $session = session();

        $is_admin = session()->get('perfil') == 2 ? true : false;

       if(!$data['producto']['estado_producto'] || $is_admin){ // Si el producto No esta oculto

            echo view('plantillas\head',$data);
            echo view('plantillas\nav');
            echo view('productoReview');
            echo view('plantillas\footer');

        } else {
            return redirect()->to('products');
        }

        

    }
}
?>