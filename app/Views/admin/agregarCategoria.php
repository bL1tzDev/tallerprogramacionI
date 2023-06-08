<body>

    <main class="principal container mt-3" style="min-height:52vh; ">

    <h1>Agregar nueva categoria</h1>
    <hr>
    <div class="mx-auto p-2" style="max-width: 850px;">
        <?php
            echo form_open_multipart('agregar_categoria');?>
                <div class="mb-3">
                <?php
                if (! empty($errors)): ?>
                    <div class="alert alert-danger my-3" role="alert">
                        <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>
                
                    <label for="inputCategoria" class="form-label">Titulo de la categoria:</label>
                    <?php
                        $data = array(
                        'type'  => 'text',
                        //'value' => old('email'),
                        'name'  => 'tituloCategoria',
                        'id'    => 'inputCategoria',
                        'placeholder' => '*Producto* *Marca* *Modelo*',
                        'class' => 'form-control'
                        );
        
                        echo form_input($data) ?>
                </div>

                <div class="my-3">
                    <label for="descProducto" class="form-label">Descripcion del producto:</label>
                    <textarea class="form-control" name="descripcionProducto" id="descProducto" rows="4" placeholder="Breve descripcion del producto, material, color etc"></textarea required>
                </div>

                <div class="mb-3">
                    <label for="inputTalles" class="form-label">Talles disponibles:  </label> <br>
                        
                    <div class="form-check form-check-inline">
                    <?php
                        $data = array(
                        'type'  => 'checkbox',
                        'name'  => 'tallesDisponibles[]',
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
                            'name'  => 'tallesDisponibles[]',
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
                            'name'  => 'tallesDisponibles[]',
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
                            'name'  => 'tallesDisponibles[]',
                            'id'    => 'inlineCheckbox4',
                            'value' => 'L',
                            'class' => 'form-check-input'
                            );
                            echo form_input($data) ?>

                            <label class="form-check-label" for="inlineCheckbox4">L</label>
                        
                    </div>
                </div>

                <div class="row g-3">
                    <div class="mb-3 col">
                        <label for="InputPrecio" class="form-label">Precio:</label>
                        <?php
                            $data = array(
                            'type'  => 'number',
                            //'value' => old('email'),
                            'name'  => 'precioProducto',
                            'id'    => 'inputPrecio',
                            'placeholder' => '*Precio en ARS$*',
                            'class' => 'form-control'
                            );
            
                            echo form_input($data) ?>
        
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
                            'class' => 'form-control'
                            );
            
                            echo form_input($data) ?>
                        
                        </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stock Incial:</label>
                    <?php                    
                       // mkdir(ROOTPATH. "public/images/products/Remeras/nombres");
                        /*$path = 'public\images\products/';
                        $cat = 'Remeras';
                        $nom = 'Prueba';

                        $final = $path.$cat.$nom;

                        var_dump($final);die;*/

                        
                       /* $path = 'public\images\products';
                        $prueba = '\remeras\teest';
                        $teest = $path.$prueba;
                        mkdir($teest); var_dump($teest); die;*/
                        $data = array(
                        'type'  => 'number',
                        //'value' => old('email'),
                        'name'  => 'cantidadProducto',
                        'id'    => 'inputCantidad',
                        'placeholder' => '*Cantidad inicial de producto*',
                        'class' => 'form-control'
                        );
        
                        echo form_input($data) ?>
                   
                </div>
             
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col mb-3">
                        <label for="imagen_modelo" class="form-label">Imagen del modelo:</label>
                        <?php
                        $data = array(
                        'type'  => 'file',
                        'accept' => 'image/jpeg, image/gif, image/webp, image/png',
                        'name'  => 'imagen_modelo',
                        'class' => 'form-control'
                        );
                        echo form_input($data) ?>
                    </div>

                    <div class="col mb-3">
                        <label for="imagen_frente" class="form-label">Imagen de frente del producto:</label>
                        <?php
                        $data = array(
                        'type'  => 'file',
                        'accept' => 'image/jpeg, image/gif, image/webp, image/png',
                        'name'  => 'imagen_frente',
                        'class' => 'form-control'
                        );
                        echo form_input($data) ?>
                    </div>

                    <div class="col mb-3">
                        <label for="imagen_reverso" class="form-label">Imagen de reverso del producto:</label>
                        <?php
                        $data = array(
                        'type'  => 'file',
                        'accept' => 'image/jpeg, image/gif, image/webp, image/png',
                        'name'  => 'imagen_reverso',
                        'class' => 'form-control'
                        );
                        echo form_input($data) ?>
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

                            echo form_dropdown('categoria',$lista,['0'],'class="form-control"');
                            ?>




                    
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
                            <label class="form-check-label" for="flexSwitchCheckDefault">Publicar en oculto</label>
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