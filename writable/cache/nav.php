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
            <a class="nav-link disabled"><i class="bi bi-cart"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> Cuenta
            </a>
            <ul class="dropdown-menu">

            <?php if (session('login')) {?>

                <li><a class="dropdown-item" href="#"><?php echo session('nombre').session('apellido')?></a></li>
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

                <?php echo form_open('iniciar_sesion');?>
                
                  <div class="form-floating mb-3">
                    <?php
                    
                    $data = array(
                      'type'  => 'mail',
                      'name'  => 'email',
                      'id'    => 'floatingInput',
                      'placeholder' => 'nombre@dominio.com',
                      'class' => 'form-control'
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
                      'class' => 'form-control',
                    );
                    echo form_password($data);?>
                    
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>

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

        <!-- register Modal -->
              
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="registerModalLabel">Registrarse</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            

            <?php if (!empty($errors)  &&(current_url() == base_url("/registrar_usuario")) ): ?>
              <script defer>
                
                setTimeout(function(){
                    const registerModal = document.getElementById('register-btn');

                    registerModal.click();
                }, 200);
              </script>
                                <div class="alert alert-danger my-3" role="alert">
                                    <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach ?>
                                    </ul>
                                </div>
                            <?php endif ?>

                <?php echo form_open('registrar_usuario');?>
                    <div class="mb-3">
                        <label for="registerInputNombre" class="form-label">Nombre:</label>
                        <?php 

                        $data = array(
                          'name' => 'nombre',
                          'type'  => 'text',
                          'id' => 'registerInputNombre',
                          'placeholder' => 'Nombre',
                          'class' => 'form-control is-invalid'
                        );
                        echo form_input($data);?>

                        <p class="form-text text-danger">a<?=session('errors.nombre')?></p>
                        
                    </div>

                    <div class="mb-3">
                        <label for="registerInputApellido" class="form-label">Apellido:</label>
                        <?php 

                        $data = array(
                          'name' => 'apellido',
                          'type'  => 'text',
                          'id' => 'registerInputApellido',
                          'placeholder' => 'Apellido',
                          'class' => 'form-control'
                        );
                        echo form_input($data);?>
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="registerInputEmail1" class="form-label">Dirección de email</label>


                    <?php 
                    $data = array(
                      'type'  => 'email',
                      'name' => 'email',
                      'aria-describedby'  => 'emailHelp',
                      'id'    => 'registerInputEmail1',
                      'placeholder' => 'email@dominio.com',
                      'class' => 'form-control',
                    );
                    echo form_input($data);?>
                        
                    </div>
                    <div class="mb-3">
                        <label for="registerInputPassword1" class="form-label">Contraseña</label>
                        

                    <?php 
                    $data = array(
                      'name'  => 'pass',
                      'id'    => 'registerInputPassword1',
                      'placeholder' => 'Contraseña',
                      'class' => 'form-control',
                    );
                    echo form_password($data);?>
                        
                    </div>

                    <div class="mb-3">
                        <label for="registerInputPassword2" class="form-label">Contraseña</label>
                        

                    <?php 
                    $data = array(
                      'name'  => 'repass',
                      'id'    => 'registerInputPassword2',
                      'placeholder' => 'Contraseña',
                      'class' => 'form-control',
                    );
                    echo form_password($data);?>
                        
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