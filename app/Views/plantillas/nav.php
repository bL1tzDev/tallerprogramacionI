<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand my-1" href="<?php echo base_url("/");?>">
        <img src="public\images\icon.png" alt="Logo" width="30" height="30" class="logo d-inline-block ">
        Clothing store
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto justify-content-center ">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo base_url("/");?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url("/#ofertas");?>">Ofertas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url("/#destacado");?>">Destacado</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="<?php echo base_url("products");?>">Catalogo completo</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Remeras</a></li>
                  <li><a class="dropdown-item" href="#">Buzos</a></li>
                  <li><a class="dropdown-item" href="#">Camperas</a></li>
                  <li><a class="dropdown-item" href="#">Pantalones</a></li>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto justify-content-center">
        <li class="nav-item">
          <?php
          if (session('login')){
          $cart = Config\Services::cart();?>

        <button title="Carrito" class="btn nav-link " data-bs-toggle="modal" data-bs-target="#cartModal"><i class="bi bi-cart"></i> <span style="font-size:14px;" class="nav-link badge text-bg-primary"><?php echo $cart->totalItems()?></span></button>
          <?php }?>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php  if (session('login')){?>
            <i class="bi bi-person-circle"></i><?php echo session('nombre').session('apellido')?>
            <?php } else { ?>
              <i class="bi bi-person-circle"></i> Cuenta
              <?php }?>
            </a>
            <ul class="dropdown-menu">

            <?php if (session('login')) {?>
                <?php if (session('perfil') == 2) {?>
                <li><a class="dropdown-item" href="<?php echo base_url('admin')?>">Vista de admin</a></li>
                <?php } ?>
                <li><a class="dropdown-item" href="<?php echo base_url('misCompras')?>">Mis compras</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?php echo base_url('logout')?>">Cerrar sesesion</a></li>

              <?php } else { ?>
                <li><a class="dropdown-item" id="login-btn" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesion</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" id="register-btn" href="/" data-bs-toggle="modal" data-bs-target="#registerModal">Registrarse</a></li>
              
              <?php } ?>
            </ul>
          </li>
      </ul>
    </div>
  </div>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="loginModalLabel">Inicia sesión</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <?php if (session('login_error')): ?>
              <script defer>
                
                setTimeout(function(){
                    const loginModal = document.getElementById('login-btn');
                    const loginInputs = document.querySelectorAll('.loginInput');

                      loginInputs.forEach((element) => {

                        if (element.value === ''){
                          element.classList.add('is-invalid');
                        } 
                      
                      });

                    loginModal.click();
                  }, 300);
              </script>
                                <div class="alert alert-danger my-3" role="alert">
                                    <p>Usuario y/o contraseña incorrectos</p>
                                </div>
                            <?php endif ?>

                <?php echo form_open('iniciar_sesion');?>
                
                  <div class="form-floating mb-3">
                    <?php
                    
                    $data = array(
                      'type'  => 'mail',
                      'value' => old('email'),
                      'name'  => 'email',
                      'id'    => 'floatingInput',
                      'placeholder' => 'nombre@dominio.com',
                      'class' => 'form-control loginInput'
                      );
                    
                    echo form_input($data) ?>
                    <label for="floatingInput">Direccion de email</label>
                    
                  </div>
                  <div class="form-floating">

                    <?php 
                    $data = array(
                      'name'  => 'pass',
                      'id'    => 'floatingPassword',
                      'placeholder' => 'Password',
                      'class' => 'form-control loginInput',
                    );
                    echo form_password($data);?>
                  
                    <label for="floatingPassword">Contraseña</label>
                  
                    <p class="mt-2">¿Olvidaste tu contraseña? <a href="#">Restablecer contraseña</a> </p>
                  </div>
                      
                    <?php 
                      $data = array(
                        'type'  => 'submit',
                        'value' => 'Iniciar sesion',
                        'class' => 'btn btn-primary ms-auto'
                      );
                      echo form_submit($data);?>

                     
                <?php echo form_close();?>

            </div>
            </div>
        </div>
        </div>
</nav>

<!-- Notifications -->

<div style="z-index:11000; transform: scale(1.40);"class="position-absolute top-30 start-50 translate-middle toast text-bg-primary bg-success align-items-center fade hide " role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
      <i class="bi bi-check-circle me-2"></i> <?=session('msg')?>
      </div>
      <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
  <?php if (session('msg')){ ?>

<script defer>
    
    setTimeout(function(){
        let myAlert = document.querySelector('.toast');
        let bsAlert = new bootstrap.Toast(myAlert);
        bsAlert.show();
    },300);
</script>

<?php }?>

        <!-- register Modal -->
              
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="registerModalLabel">Registrarse</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            

            <?php if (session('register_error')): ?>
              <script defer>

                setTimeout(function(){
                    const registerModal = document.getElementById('register-btn');
                    const regInputs = document.querySelectorAll('.registerInput');

                    regInputs.forEach((element) => {

                      
                      if (element.value === ''){
                        element.classList.add('is-invalid');
                      } else {
                        element.classList.add('is-valid');
                      }
                    
                    });

                    registerModal.click();
                }, 200);
              </script>
                                <div class="alert alert-danger my-3" role="alert">
                                    <p>Debe completar los siguentes campos</p>
                                </div>
                            <?php endif ?>

                <?php echo form_open('registrar_usuario');?>
                    <div class="mb-3">
                        <label for="registerInputNombre" class="form-label">Nombre:</label>
                        <?php 

                        $data = array(
                          'name' => 'nombre',
                          'value' => old('nombre'),
                          'type'  => 'text',
                          'id' => 'registerInputNombre',
                          'placeholder' => 'Nombre',
                          'class' => 'form-control registerInput'
                        );
                        echo form_input($data);?>

                        <p class="form-text text-danger"><?=session('register_error.nombre')?></p>
                        
                    </div>

                    <div class="mb-3">
                        <label for="registerInputApellido" class="form-label">Apellido:</label>
                        <?php 

                        $data = array(
                          'name' => 'apellido',
                          'value' => old('apellido'),
                          'type'  => 'text',
                          'id' => 'registerInputApellido',
                          'placeholder' => 'Apellido',
                          'class' => 'form-control registerInput'
                        );
                        echo form_input($data);?>

                        <p class="form-text text-danger"><?=session('register_error.apellido')?></p>
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="registerInputEmail1" class="form-label">Dirección de email</label>


                    <?php 
                    $data = array(
                      'type'  => 'email',
                      'value' => old('email'),
                      'name' => 'email',
                      'id'    => 'registerInputEmail1',
                      'placeholder' => 'email@dominio.com',
                      'class' => 'form-control registerInput',
                    );

                    
                    echo form_input($data);?>

                      <p class="form-text text-danger"><?=session('register_error.email')?></p>
                        
                    </div>
                    <div class="mb-3">
                        <label for="registerInputPassword1" class="form-label">Contraseña</label>
                        

                    <?php 
                    $data = array(
                      'name'  => 'pass',
                      'id'    => 'registerInputPassword1',
                      'placeholder' => 'Contraseña',
                      'class' => 'form-control registerInput',
                    );
                    echo form_password($data);?>
                    <p class="form-text text-danger"><?=session('register_error.pass')?></p>
                        
                    </div>

                    <div class="mb-3">
                        <label for="registerInputPassword2" class="form-label">Contraseña</label>


                    <?php 
                    $data = array(
                      'name'  => 'repass',
                      'id'    => 'registerInputPassword2',
                      'placeholder' => 'Contraseña',
                      'class' => 'form-control registerInput',
                    );
                    echo form_password($data);?>

                      <p class="form-text text-danger"><?=session('register_error.repass')?></p>
                        
                    </div>

                    <div class="col-auto">
                      <span id="passwordHelpInline" class="form-text">
                        La contraseña debe tener al menos ocho caracteres y una mayuscula.
                      </span>
                    </div>
                    
                    

                    <?php 
                      $data = array(
                        'type'  => 'submit',
                        'value' => 'Registrarse',
                        'class' => 'mt-4 btn btn-primary ms-auto'
                      );
                      echo form_submit($data);?>
                    <?php echo form_close();?>
            </div>
            </div>
        </div>
        </div>

<!-- Cart Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="cartModalLabel">Carrito</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <?php $cart = Config\Services::cart();?>

            <?php if ($cart->contents() == NULL) { ?>
              <p class="text-center mt-2 fs-3 text-body-secondary"> <i class="bi bi-cart-x"></i> El carrito está vacio</p>
            <?php } ?>

            <?php if ($cart1 = $cart->contents()) { ?>

              <table class="table table-bordred">

              <thead>
                <td>Item</td>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Subtotal</td>
                <td>#</td>
              </thead>

              <tbody class="table-group-divider">
              <?php 
                $total = 0;
                $i = 1;
                foreach ($cart1 as $item): ?>
                  <tr >
                    <td><?php echo $i++;?></td>
                    <td><?php echo $item['name']?></td>
                    <td>$<?php echo $item['price'];?></td>
                    <td><?php echo $item['qty'];?></td>
                    <td>$<?php echo $item['qty'] * $item['price']; ?></td>
                    <td><?php echo anchor('quitarItem/'.$item['rowid'],'<i class="bi bi-trash"></i> Eliminar',"class='text-decoration-none'")?></td>
                  </tr>
                  <?php endforeach;?>

                  <tr class="table-group-divider">
                    <td colspan='3'></td>
                    <td class="mt-2"><b>Total</b></td>
                    <td class="mt-2">$<?php echo $cart->total() ?></td>
                    <td> <a class="text-decoration-none" href="<?php echo base_url('vaciarCarrito')?>"> <i class="bi bi-cart-dash"></i> Vaciar Carrito</a></a></td>
                  </tr>

              </tbody>
              </table>


              <?php  } ?>

      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >Seguir comprando</button>
        <?php if ($cart->contents() != NULL ) {?>
        <a  href="<?php echo base_url('#')?>"class="btn btn-success" >Realizar compra</a>
        <?php }?>
      </div>
    </div>
  </div>
</div>