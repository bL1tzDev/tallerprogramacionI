<body>
    <main class="principal container mt-3 table-responsive" style="min-height:55vh;">

    <h1>Consultas</h1>
    <hr>

    <table class="table table-bordered">
  <thead>
    <tr>
      <th style="width:10%;" scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Motivo</th>
      <th scope="col">Consulta</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  
    <?php foreach ($consultas as $row) {?>
      <?php ($row['estado']) ? $rowState = 'table-success' : $rowState = 'table-secondary' ?>
    <tr class="<?php echo $rowState ?>">
      <th scope="row "><?php echo $row['id_mesaje']?></th>
      <td ><?php echo $row['nombre']?></td>
      <td ><?php echo $row['mail']?></td>
      <td><?php echo $row['asunto']?></td>
      <td><?php echo $row['consulta']?></td>
      <td ><?php echo ($row['estado']) ? '<span class="badge rounded-pill text-bg-success">Leido <i class="bi bi-check-circle-fill"></i></span>' :
       ' <span class="badge rounded-pill text-bg-danger">Sin leer <i class="bi bi-exclamation-circle-fill"> 
          </i></span>' ?> </td>
       <td> <a class="btn btn-info"href="<?php echo base_url("actConsulta/".$row['id_mesaje'])?>"><i class="bi bi-arrow-repeat"></i> Leido/No Leido</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>


    </main>    



</body>