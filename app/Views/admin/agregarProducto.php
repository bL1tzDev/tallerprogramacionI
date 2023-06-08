<body>


    <main class="principal container mt-3" style="min-height:52vh; ">

    <h1>Agregar producto</h1>
    <hr>
    <div class="mx-auto p-2" style="max-width: 850px;">
        <?php
            echo form_open_multipart('agregar_producto');?>
                <div class="mb-3">
                <?php 
                  
                   
                ?>
                
                    <label for="inputTitulo" class="form-label">Titulo del producto:</label>
                    <?php
                        $data = array(
                        'type'  => 'text',
                        'value' => old('tituloProducto'),
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
                            'value' => old('descripcionProducto'),
                            'class'=>session('agregarProducto_error.descripcionProducto') ?'form-control is-invalid' :'form-control'
                        );
                        echo form_textarea($data)?>

                    <p class="form-text text-danger"><?=session('agregarProducto_error.descripcionProducto')?></p>
                </div>

                <div class="mb-3">
                    <label for="inputTalles" class="form-label">Talles disponibles:  </label> <br>
                        
                    <div class="form-check form-check-inline">
                    <?php
                        $data = array(
                        'type'  => 'checkbox',
                        'name'  => 'tallesDisponibles[0]',
                        'id'    => 'inlineCheckbox1',
                        'value' => 'XS',
                        'class' => 'form-check-input'
                        );
                        echo form_input($data) ?>

                        <label class="form-check-label" for="inlineCheckbox1">XS</label>
                        </div>

                        <div class="form-check form-check-inline">
                        <?php
                            $data = array(
                            'type'  => 'checkbox',
                            'name'  => 'tallesDisponibles[1]',
                            'id'    => 'inlineCheckbox2',
                            'value' => 'S',
                            'class' => 'form-check-input'
                            );
                        echo form_input($data) ?>
                            <label class="form-check-label" for="inlineCheckbox2">S</label>
                        </div>

                        <div class="form-check form-check-inline">
                        <?php
                            $data = array(
                            'type'  => 'checkbox',
                            'name'  => 'tallesDisponibles[2]',
                            'id'    => 'inlineCheckbox3',
                            'value' => 'M',
                            'class' => 'form-check-input'
                            );
                            echo form_input($data) ?>
                        <label class="form-check-label" for="inlineCheckbox3">M</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <?php
                            $data = array(
                            'type'  => 'checkbox',
                            'name'  => 'tallesDisponibles[3]',
                            'id'    => 'inlineCheckbox4',
                            'value' => 'L',
                            'class' => 'form-check-input'
                            );
                            echo form_input($data) ?>

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
                            'value' => old('precioProducto'),
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
                            //'value' => old('email'),
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
                    <label class="form-label">Stock Incial:</label>
                    <?php                    
                        $data = array(
                        'type'  => 'number',
                        'value' => old('cantiadProducto'),
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
                        <label for="imagen_modelo" class="form-label">Imagen del modelo:</label>
                        <?php
                        $data = array(
                        'type'  => 'file',
                        'accept' => 'image/jpeg, image/gif, image/webp, image/png',
                        'value'=> old('imagen_modelo'),
                        'name'  => 'imagen_modelo',
                        'class' => session('agregarProducto_error.imagen_modelo') ?'form-control is-invalid' :'form-control'
                        );
                        echo form_input($data) ?>

                        <p class="form-text text-danger"><?=session('agregarProducto_error.imagen_modelo')?></p>

                    </div>

                    <div class="col mb-3">
                        <label for="imagen_frente" class="form-label">Imagen de frente del producto:</label>
                        <?php
                        $data = array(
                        'type'  => 'file',
                        'accept' => 'image/jpeg, image/gif, image/webp, image/png',
                        'name'  => 'imagen_frente',
                        'class' => session('agregarProducto_error.imagen_frente') ?'form-control is-invalid' :'form-control'
                        );
                        echo form_input($data) ?>

                        <p class="form-text text-danger"><?=session('agregarProducto_error.imagen_frente')?></p>

                    </div>

                    <div class="col mb-3">
                        <label for="imagen_reverso" class="form-label">Imagen de reverso del producto:</label>
                        <?php
                        $data = array(
                        'type'  => 'file',
                        'accept' => 'image/jpeg, image/gif, image/webp, image/png',
                        'name'  => 'imagen_reverso',
                        'class' =>  session('agregarProducto_error.imagen_reverso') ?'form-control is-invalid' :'form-control'
                        );
                        echo form_input($data) ?>

                        <p class="form-text text-danger"><?=session('agregarProducto_error.imagen_reverso')?></p>

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

                        echo form_dropdown('categoria',$lista,['0'],'class="form-select"');
                    ?>


                    <p class="form-text text-danger"><?=session('agregarProducto_error.categoria')?></p>

                    
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Opciones de publicacion:</label>
                        <div class="form-check form-switch">
                            
                            <?php
                                $data = array(
                                'type'  => 'checkbox',
                                'role' => 'switch',
                                'default'=>'false',
                                'value' => 'true',
                                'name'  => 'switch_estado',
                                'class' => 'form-check-input'
                                );
                                echo form_input($data) ?>
                            <label class="form-check-label" for="flexSwitchCheckDefault">Publicar en oculto (opcional)</label>
                        </div>
                </div>
                <?php 
                    $data = array(
                    'type'  => 'submit',
                    'value' => 'Publicar',
                    'class' => 'btn btn-primary'
                    );
                    echo form_submit($data);?>
            </div>
        <?php echo form_close();?>

    </div>

   
    </main>



</body>