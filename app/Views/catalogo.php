 <body>
    <div class="container-fluid">
    <h1>Productos</h1>
    <p>Filtros:</p>
    <hr>

    <section class="row gap-4 ms-5">
    <?php 

     $categoriaModel = model('App\Models\CategoriaModel');
     $productoModel = model('App\Models\ProductoModel');

     //$productos = $productoModel->where('estado_producto', 0)->join('categorias', 'categorias.id_categoria = productos.id_categoria')->find();
    
    foreach ($productos as $row) {

        $categoriaDesc = $row['categoria_descripcion'];
        $productoTitulo = $row['titulo_producto'];
        
        ?>
        
        <div class="card" >
            <a href="<?php echo base_url("/producto".'/'.$row['id_producto']);?>"><img src="<?php echo "public/images/products/$categoriaDesc/$productoTitulo/modelo_frente.webp" ?>" class="card-img-top" alt="..."></a>
            <div class="card-body">
                        <h5 class="card-title"><?php echo $row['titulo_producto']?></h5>

                        <?php if($row['precio_descuento'] == 0):?>
                            <p class="card-text">$<?php echo $row['precio_producto']?></p>
                            <?php else: ?>
                            <p class="card-text">$<?php echo $row['precio_producto']?></p>
                            <p>$ <?php echo $row['precio_descuento'] ?></p>
                        <?php endif ?>
                        
                        
                 <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                 <?php if (session('login')){
                    echo form_open('addToCart');
                        echo form_hidden('id',$row['id_producto']);
                        echo form_hidden('titulo',$row['titulo_producto']);
                        echo form_hidden('precio',$row['precio_producto']);
                        echo form_submit('comprar','Agregar al carrito',"class='btn btn-success d-inline-block'");
                        echo form_close();
                 }?>

                 
               
            </div>
    </div>
        <?php }?>

    </section>
</div>
</body>