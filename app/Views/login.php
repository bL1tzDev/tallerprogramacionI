<body>
    <main class="principal container mt-5" style="min-height:52vh; ">

    <img class="text-center" src="public\images\icon.png" alt="logo">
    <h1 class="text-center"> Iniciar sesion</h1>

    <?php echo form_open('login', 'class="login-fm"');?>
                
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
              <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
    </main>



</body>