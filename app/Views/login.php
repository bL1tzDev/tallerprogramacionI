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

   
    </main>



</body>


//let myAlert = document.querySelector('.toast');
//let bsAlert = new bootstrap.Toast(myAlert);
bsAlert.show();