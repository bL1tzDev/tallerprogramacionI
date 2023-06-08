<body>


    <main class="principal container mt-5" style="min-height:52vh; ">

    <div class="mx-auto toast text-bg-primary bg-success align-items-center fade hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
      <i class="bi bi-check-circle"></i> Sesion iniciada.
      </div>
      <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
    <img class="text-center" src="public\images\icon.png" alt="logo">
    <h1 class="text-center"> Iniciar sesion</h1>

    <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

    <button type="button" class="btn btn-primary position-relative">
  Inbox
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>
</button>

<div>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card ">
      <img src="public\images\products\Remeras\KOTK Broken White\modelo_frente.webp" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">$2000</p>
        <div class="mt-auto">
        <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                        <a href="#" class="btn btn-secondary disabled" >Comprar</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card ">
      <img src="public\images\products\Remeras\KOTK Broken White\modelo_frente.webp" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">$2000</p>
        <p class="card-text">$5521</p>
        <div class="mt-auto">
        <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                        <a href="#" class="btn btn-secondary disabled" >Comprar</a>
        </div>
      </div>

    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="public\images\products\Remeras\KOTK Broken White\modelo_frente.webp" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">$2000</p>
        <p class="card-text">$5521</p>
        <div class="mt-auto">
        <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                        <a href="#" class="btn btn-secondary disabled" >Comprar</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

   
    </main>



</body>


//let myAlert = document.querySelector('.toast');
//let bsAlert = new bootstrap.Toast(myAlert);
bsAlert.show();