<body>
    <main class="principal container mt-3" style="min-height:52vh; ">

    <h1>Editar producto</h1>
    <hr>
    <div class="mx-auto p-2" style="max-width: 850px;">
        <?php
            echo form_open_multipart('actualizar_producto');?>
                <div class="mb-3">

                
                    <label for="inputTitulo" class="form-label">Titulo del producto:</label>
                    <?php

                        echo form_hidden('id',$producto['id_producto']);
                        
                        $data = array(
                        'type'  => 'text',
                        'value' => $producto['titulo_producto'],
                        'name'  => 'tituloProducto',
                        'id'    => 'inputTitulo',
                        'placeholder' => '*Producto* *Marca* *Modelo*',
                        'class' => session('agregarProducto_error.tituloProducto') ?'form-control is-invalid' :'form-control'
                        );
        
                        echo form_input($data) ?>

                    <p class="form-text text-danger"><?=session('agregarProducto_error.tituloProducto')?></p>
                </div>

                <div class="my-3">
                    <label for="descProducto" class="form-label">Descripcion del producto:</label>
                    <?php 
                        $data = array(
                            'name'=>'descripcionProducto',
                            'rows'=>'4',
                            'placeholder'=>'Breve descripcion del producto, material, color etc',
                            'value' =>$producto['descripcion_producto'],
                            'class'=>session('agregarProducto_error.descripcionProducto') ?'form-control is-invalid' :'form-control'
                        );
                        echo form_textarea($data)?>

                    <p class="form-text text-danger"><?=session('agregarProducto_error.descripcionProducto')?></p>
                </div>

                <div class="mb-3">
                    <label for="inputTalles" class="form-label">Talles disponibles:  </label> <br>
                        
                    <div class="form-check form-check-inline">
                    <?php
                        $strTalles = $producto['talles_producto']; // Obtiene los talles en la base de datos

                        $talles = explode(',',$strTalles); // Lo combierte a array para comparar
                        
                        $data = array(
                        'type'  => 'checkbox',
                        'name'  => 'tallesDisponibles[]',
                        'id'    => 'inlineCheckbox1',
                        'value' => 'XS',
                        'checked'=> (in_array('XS',$talles)) ? true : false, // compara si existe el talle
                        'class' => 'form-check-input'
                        );
                        echo form_checkbox($data) ?>

                        <label class="form-check-label" for="inlineCheckbox1">XS</label>
                        </div>

                        <div class="form-check form-check-inline">
                        <?php
                            $data = array(
                            'type'  => 'checkbox',
                            'name'  => 'tallesDisponibles[]',
                            'id'    => 'inlineCheckbox2',
                            'value' => 'S',
                            'checked'=> (in_array('S',$talles))? true : false,
                            'class' => 'form-check-input'
                            );
                        echo form_checkbox($data) ?>
                            <label class="form-check-label" for="inlineCheckbox2">S</label>
                        </div>

                        <div class="form-check form-check-inline">
                        <?php
                            $data = array(
                            'type'  => 'checkbox',
                            'name'  => 'tallesDisponibles[]',
                            'id'    => 'inlineCheckbox3',
                            'value' => 'M',
                            'checked'=> (in_array('M',$talles))? true : false,
                            'class' => 'form-check-input'
                            );
                            echo form_checkbox($data) ?>
                        <label class="form-check-label" for="inlineCheckbox3">M</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <?php
                            $data = array(
                            'type'  => 'checkbox',
                            'name'  => 'tallesDisponibles[]',
                            'id'    => 'inlineCheckbox4',
                            'value' => 'L',
                            'checked'=> (in_array('L',$talles))? true : false,
                            'class' => 'form-check-input'
                            );
                            echo form_checkbox($data) ?>

                            <label class="form-check-label" for="inlineCheckbox4">L</label>
                        
                    </div>
                    <p class="form-text text-danger"><?=session('agregarProducto_error.tallesDisponibles')?></p>
                </div>

                <div class="row g-3">
                    <div class="mb-3 col">
                        <label for="InputPrecio" class="form-label">Precio:</label>
                        <?php
                            $data = array(
                            'type'  => 'number',
                            'value' => $producto['precio_producto'],
                            'name'  => 'precioProducto',
                            'id'    => 'inputPrecio',
                            'placeholder' => '*Precio en ARS$*',
                            'class' => session('agregarProducto_error.precioProducto') ?'form-control is-invalid' :'form-control'
                            );
            
                            echo form_input($data) ?>

                            <p class="form-text text-danger"><?=session('agregarProducto_error.precioProducto')?></p>
        
                    </div>
                    <div class="mb-3 col">
                        <label class="form-label">Descuento (opcional):</label>
                        <?php
                            $data = array(
                            'type'  => 'number',
                            'value' => $producto['precio_descuento'],
                            'name'  => 'precioDescuento',
                            'id'    => 'inputDescuento',
                            'placeholder' => '*Precio de descuento ARS$*',
                            'class' => session('agregarProducto_error.precioDescuento') ? 'form-control is-invalid' :'form-control'
                            );
            
                            echo form_input($data) ?>
                            <p class="form-text text-danger"><?=session('agregarProducto_error.precioDescuento')?></p>
                        
                        </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stock:</label>
                    <?php                    
                    
                        $data = array(
                        'type'  => 'number',
                        'value' => $producto['stock_producto'],
                        'name'  => 'cantidadProducto',
                        'id'    => 'inputCantidad',
                        'placeholder' => '*Cantidad inicial de producto*',
                        'class' => session('agregarProducto_error.cantidadProducto') ?'form-control is-invalid' :'form-control'
                        );
        
                        echo form_input($data) ?>

                        <p class="form-text text-danger"><?=session('agregarProducto_error.cantidadProducto')?></p>

                   
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col mb-3">
                        <?php 
                            $categoriaModel = model('App\Models\CategoriaModel');
                            $Nombreproducto = $producto['titulo_producto'];
                            $categoria = $categoriaModel->find($producto['id_categoria'])['categoria_descripcion'];

                        ?>
                        <p>Imagen Modelo</p>
                        <img style="max-width:200px;"src="<?php echo base_url("public/images/products/$categoria/$Nombreproducto/modelo_frente.webp?".rand(1,32000));?>" alt="">
                    </div>

                    <div class="col mb-3">
                        <p>Imagen Frente</p>
                        <img style="max-width:200px;"src="<?php echo base_url("public/images/products/$categoria/$Nombreproducto/producto_frente.webp?".rand(1,32000));?>" alt="">
                    </div>

                    <div class="col mb-3">
                        <p>Imagen Reverso</p>
                        <img style="max-width:200px;"src="<?php echo base_url("public/images/products/$categoria/$Nombreproducto/producto_reverso.webp?".rand(1,32000));?>" alt="">
                    </div>
                </div>
             
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col mb-3">
                        <label for="imagen_modelo" class="form-label">Imagen del modelo:</label>
                        <?php
                        $data = array(
                        'type'  => 'file',
                        'accept' => 'image/jpeg, image/gif, image/webp, image/png',
                        'name'  => 'imagen_modelo',
                        'class' => session('img1_val_error') ?'form-control is-invalid' :'form-control'
                        );
                        echo form_input($data) ?>

                        <p class="form-text text-danger"><?=session('img1_val_error')?  session('img1_val_error') : ' '?></p>

                    </div>

                    <div class="col mb-3">
                        <label for="imagen_frente" class="form-label">Imagen de frente del producto:</label>
                        <?php
                        $data = array(
                        'type'  => 'file',
                        'accept' => 'image/jpeg, image/gif, image/webp, image/png',
                        'name'  => 'imagen_frente',
                        'class' =>  session('img2_val_error') ?'form-control is-invalid' :'form-control'
                        );
                        echo form_input($data) ?>

                        <p class="form-text text-danger"><?=session('img2_val_error')?  session('img2_val_error') : ' '?></p>

                    </div>

                    <div class="col mb-3">
                        <label for="imagen_reverso" class="form-label">Imagen de reverso del producto:</label>
                        <?php
                        $data = array(
                        'type'  => 'file',
                        'accept' => 'image/jpeg, image/gif, image/webp, image/png',
                        'name'  => 'imagen_reverso',
                        'class' =>  session('img3_val_error') ?'form-control is-invalid' :'form-control'
                        );
                        echo form_input($data) ?>

                        <p class="form-text text-danger"><?=session('img3_val_error')?  session('img3_val_error') : ' '?></p>

                    </div>

                </div>

                <div class="mb-3">
                <label class="form-label">Categoria:</label>

                    <?php
                        $categoriasa = model('App\Models\CategoriaModel');
                        $categorias = $categoriasa->findAll();                        
                        $lista['0'] = 'Seleccione categoria';

                        foreach($categorias as $row){
                            $categoria_id = $row['id_categoria'];
                            $categoria_desc = $row['categoria_descripcion'];
                            $lista[$categoria_id] = $categoria_desc;
                        }

                        $value = $producto['id_categoria'];
                        echo form_dropdown('categoria',$lista,$value,'class="form-control"');
                    ?>


                    <p class="form-text text-danger"><?=session('agregarProducto_error.categoria')?></p>

                    
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Opciones de publicacion:</label>
                        <div class="form-check form-switch">
                            <?php if ($producto['estado_producto'] == 1){
                                $checked = 'checked';
                            } else {
                                $checked = 'none';}?>
                            <?php
                                $data = array(
                                'type'  => 'checkbox',
                                'role' => 'switch',
                                'name'  => 'switch_estado',
                                'class' => 'form-check-input',
                                );
                                echo form_input($data,true,$checked) ?>
                            <label class="form-check-label" for="flexSwitchCheckDefault">Ocuto</label>
                        </div>
                </div>
                <?php 
                    $data = array(
                    'type'  => 'submit',
                    'value' => 'Confirmar cambios',
                    'class' => 'btn btn-primary'
                    );
                    echo form_submit($data);?>
            </div>
        <?php echo form_close();?>

    </div>

   
    </main>



</body>