<body>
    <main class="principal container mt-3" style="min-height:52vh;">

    <h1>Productos</h1>
    <hr>

    <div class="table-responsive">

          <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th style="width:200px;" scope="col">Titulo</th>
            <th scope="col">Imagen</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
            <th scope="col">Stock</th>
            <th scope="col">Precio</th>
            <th scope="col">Descuento</th>
            <th scope="col">Oculto</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
        
          <?php
          
          
          foreach ($productos as $row) {

            $producto = $row['titulo_producto'];
            $categoria = $row['categoria_descripcion'];

            ?>
          <tr>
          
            <th scope="row"><?php echo $row['titulo_producto']?></th>
            <td ><img style="max-width:100px;" src="<?php echo base_url("public/images/products/$categoria/$producto/modelo_frente.webp?".rand(1,32000))?>" alt=""></td>
            <td ><?php echo $row['descripcion_producto']?></td>
            <td ><?php echo $categoria ?></td>
            <td ><?php echo $row['stock_producto']?></td>
            <td >$<?php echo $row['precio_producto']?></td>
            <td >$<?php echo $row['precio_descuento']?></td>
            <td ><?php echo ($row['estado_producto'])? '<span class="badge text-bg-danger"><i class="bi bi-eye-slash"></i> Oculto</span>' : '<span class="badge text-bg-success"><i class="bi bi-eye"></i> Visible</span>'?></td>
            <td > <a class="btn btn-info" href="<?php echo base_url("editarProducto/".$row['id_producto']) ?>">Editar</a></td>
          </tr>
          <?php }?>
        </tbody>
      </table>

    </div>


    </main>    



</body>