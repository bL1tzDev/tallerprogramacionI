<?php

namespace App\Controllers;

class CartController extends BaseController
{

    public function verCarrito(){
        // $cart = Cart\src\Config\Services::cart();

        $data['titulo'] = 'Carrito de compra';

        echo view('plantillas\head',$data);
        echo view('plantillas\nav');
        echo view('carritoVista');
        echo view('plantillas\footer');
    }

    public function addItem(){
        $cart = \Config\Services::cart();
        $request =  \Config\Services::request();

        $data = array(
            'id'=>$request->getPost('id'),
            'name'=>$request->getPost('titulo'),
            'price'=>$request->getPost('precio'),
            'qty'=>1
        );

        $cart->insert($data);

        return redirect()->back()->with('msg','Ítem agregado al carrito ');
    }

    public function removeItem($id=null){
        $cart = \Config\Services::cart();
        $cart->remove($id);
        return redirect()->back()->with('msg','Se removio el ítem del carrito');
    }

    public function removeAll(){
        $cart = \Config\Services::cart();
        $cart->destroy();
        return redirect()->back()->with('msg','El carrito fue vaciado');
    }


}
