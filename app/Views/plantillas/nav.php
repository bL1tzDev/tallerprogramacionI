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
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesion</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Registrarse</a></li>
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

                <?php echo form_open('login');?>
                
                  <div class="form-floating mb-3">
                    <?php
                    
                    $data = array(
                      'type'  => 'mail',
                      'name'  => 'email',
                      'id'    => 'floatingInput',
                      'placeholder' => 'nombre@dominio.com',
                      'class' => 'form-control needs-validation'
                      );
                    
                    echo form_input($data) ?>
                    <label for="floatingInput">Direccion de email</label>
                  </div>
                  <div class="form-floating">

                    <?php 

                    $data = array(
                      'type'  => 'password',
                      'name'  => 'pass',
                      'id'    => 'floatingPassword',
                      'placeholder' => 'Password',
                      'class' => 'form-control',
                    );
                    echo form_input($data);?>
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

                <?php echo form_open('register');?>
                    <div class="mb-3">
                        <label for="registerInputNombre" class="form-label">Nombre completo:</label>
                        <?php 

                        $data = array(
                          'type'  => 'text',
                          'id' => 'registerInputNombre',
                          'class' => 'form-control'
                        );
                        echo form_input($data);?>
                        
                    </div>
                    <div class="mb-3">
                        <label for="registerInputEmail1" class="form-label">Dirección de email</label>
                        <input type="email" class="form-control" id="registerInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="registerInputPassword1" class="form-label">Contraseña</label>
                        
                        <input type="password" class="form-control" id="registerInputPassword1">
                        
                    </div>
                    <div class="col-auto">
                      <span id="passwordHelpInline" class="form-text">
                        La contraseña debe tener al menos ocho caracteres y una mayuscula.
                      </span>
                    </div>
                    
                    <button type="submit" class="mt-4 btn btn-primary ms-auto">Registrarse</button>
                    <?php echo form_close();?>
            </div>
            </div>
        </div>
        </div>