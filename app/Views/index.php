
<body>
    
<main class="principal">


<!--Carousel-->

    <section class="container-fliud ">
        <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner " style="max-height:calc(100vh - 200px);">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="public\images\carousel\15.png" class="d-block w-100" alt="...">
                
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="public\images\carousel\21.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="public\images\carousel\12.jpg" class="d-block w-100 h-80" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>

    <!--Banner-->

    <section class="container-fluid ">
        <div class="cs-banner row row-cols-1  row-cols-md-3 text-center">
            <div class="col pt-2"><svg style="max-width: 3rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"/></svg> <p class="fs-3"> Envios a todo el pais</p></div>
            <div class="col pt-2"><svg style="max-width: 2.2rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg> <p class="fs-3"> Compra segura</p></div>
            <div class="col pt-2"><svg style="max-width: 2.7rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg> <p class="fs-3">Calidad garantizada </p> </div>
        </div>
    </section>

    <!--Destacado-->

    <section class="container-fluid mt-4 mb-4 " id="destacado">
        <h1 class="text-center cs-destacado mt-5">Destacado</h1>

        <div class=" row row-cols-1 row-cols-sm-2 row-cols-md-4 cs-cards gap-4 ">

        <div class="card h-100" >
            <a href="<?php echo base_url("/product");?>"><img src="public\images\products\remeras\nike-jordan\modelo-frente.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                        <h5 class="card-title">Remera Nike Jordan</h5>
                        <div class="card-body">
                        <p class="card-text">$7.100</p>
                        <p class="card-text">$7.100</p>
                        </div>
                    <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                    <a href="#" class="btn btn-secondary disabled" >Comprar</a>
            </div>
        </div>

            <div class="card h-100" >
                <a href="<?php echo base_url("/product");?>"><img src="public\images\products\remeras\kotc-manifest\ed05b31e-306b-47d4-bd5d-9bf5df42d405-7a12846fe04c9d0c0016785611310276-640-0.webp" class="card-img-top" alt="..."></a>
                    <div class="card-body ">
                        <h5 class="card-title">Remera manifest</h5>
                        
                        <p class="card-text">$6.500</p>
                        <span class="badge rounded-pill text-bg-info">Info</span> <br>
                        <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                        <a href="#" class="btn btn-secondary disabled" >Comprar</a>
                        
                    </div>
            </div>

            <div class="card h-100" >
                <a href="<?php echo base_url("/product");?>"><img src="public\images\products\buzos\buzo-nike-rosa\test.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Buzo Nike Rosa</h5>
                        <p class="card-text">$ 8.400</p>
                        <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                        <a href="#" class="btn btn-secondary disabled" >Comprar</a>
                    </div>
            </div>

            <div class="card h-100" >
                <a href="<?php echo base_url("/product");?>"><img src="public\images\products\camperas\Nueva carpeta\campera-nikewhite.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Campera nike white</h5>
                        <p class="card-text">$12.000</p>
                        <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                        <a href="#" class="btn btn-secondary disabled" >Comprar</a>
                    </div>
            </div>

        </div>
    </section>

    <!--Categorias-->

    <section class="my-2 container-fluid cs-categorias" id="categorias" >
        <h1 class="text-center cs-destacado">Categorias</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 cs-cards">
            <div class="col cat-card ">
                <figure>
                     <img src="public\images\categories\remeras1.jpg" class="card-img" alt="...">
                     <button class="cat-btn position-absolute top-50 start-50 translate-middle">Remeras</button>
                </figure>
            </div>

            <div class="cat-card col ">
                <figure>
                     <img src="public\images\categories\buzos.jpg" class="card-img" alt="...">
                     <button class="cat-btn position-absolute top-50 start-50 translate-middle">Buzos</button>
                </figure>

               
            </div>

            <div class="cat-card col ">
                <figure>
                     <img src="public\images\categories\pantalones.webp" class="card-img" alt="...">
                     <button class="cat-btn position-absolute top-50 start-50 translate-middle">Pantalones</button>
                </figure>
            </div>

            <div class="cat-card col">
                 <figure>
                     <img src="public\images\categories\camperas.webp" class="card-img" alt="...">
                     <button class="cat-btn position-absolute top-50 start-50 translate-middle">Camperas</button>
                </figure>
        </div>
    </section>

    <!--Team Banner-->

    <section class="container-fluid ">
        <div class="cs-teams-banner row row-cols-1  row-cols-md-4 text-center py-2">
            <div class="col"><img src="public\images\teams\kotk.png" alt="king-of-the-kongo-logo"></div>
            <div class="col"><img src="public\images\teams\nike.png" alt="nike-logo"></div>
            <div class="col"><img src="public\images\teams\essentials1.png" alt="essentials-logo"></div>
            <div class="col"><img src="public\images\teams\lacoste.png" alt="lacoste-logo"></div>
        </div>
    </section>

    <!--Ofertas -->

    <section class="container-fluid mt-4 mb-4 " id="ofertas">
        <h1 class="text-center cs-destacado mt-5">Ofertas</h1>

        <div class=" row row-cols-1 row-cols-sm-2 row-cols-md-4 cs-cards gap-4 ">

        <div class="card" >
            <a href="<?php echo base_url("/product");?>"><img src="public\images\products\remeras\kotc-broken\broken-front.webp" class="card-img-top" alt="..."></a>
            <div class="card-body">
                        <h5 class="card-title">Remera Kongo white</h5>
                        <p class="card-text text-decoration-line-through">$12.500</p>
                        <p class="card-text">$6.300</p>
                 <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                <a href="#" class="btn btn-secondary disabled" >Comprar</a>
            </div>
        </div>

            <div class="card" >
                <a href="<?php echo base_url("/product");?>"><img src="public\images\products\remeras\kotc-manifest\ed05b31e-306b-47d4-bd5d-9bf5df42d405-7a12846fe04c9d0c0016785611310276-640-0.webp" class="card-img-top" alt="..."></a>
                    <div class="card-body ">
                        <h5 class="card-title">Remera Kongo Manifest</h5>
                        <p class="card-text text-decoration-line-through">$12.500</p>
                        <p class="card-text">$6.500</p>
                        <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                        <a href="#" class="btn btn-secondary disabled" >Comprar</a>
                    </div>
            </div>

            <div class="card" >
                <a href="<?php echo base_url("/product");?>"><img src="public\images\products\buzos\buzo-nike-rosa\test.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Buzo Nike Rosa</h5>
                        <p class="card-text text-decoration-line-through">$12.500</p>
                        <p class="card-text">$7.300</p>
                        <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                        <a href="#" class="btn btn-secondary disabled" >Comprar</a>
                    </div>
            </div>

            <div class="card" >
                <a href="<?php echo base_url("/product");?>"><img src="public\images\products\remeras\kotc-manifest\ed05b31e-306b-47d4-bd5d-9bf5df42d405-7a12846fe04c9d0c0016785611310276-640-0.webp" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Remera Kongo Manifest</h5>
                        <p class="card-text text-decoration-line-through">$12.500</p>
                        <p class="card-text">$6.500</p>
                        <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                        <a href="#" class="btn btn-secondary disabled" >Comprar</a>
                    </div>
            </div>

        </div>
    </section>

    <!--Preguntas-->

    <section class="container my-5 cs-preguntas">

            <h1 class="text-center my-4">¿Tenés alguna pregunta?</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">   
                        ¿Cómo puedo realizar una compra?
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Elegí tus artículos a medida que navegás por nuestra web y añadilos al carrito, seleccionando los talles que prefieras.
                            En el ícono del carrito, ubicado arriba a la derecha de la pantalla, podés ver el detalle y saldo parcial de tu pedido. Si seleccionás la opción “iniciar compra”, el sistema te redirigirá a la instancia final del proceso.
                            Importante: no te olvides de corroborar que todos los datos ingresados sean correctos.
                            Elegí el método de envío (a domicilio, retiro en sucursales de correo o retiro en alguno de nuestros locales) y el método de pago que te quede más cómodo.
                            ¡Listo! Una vez validada la información, recibirás un correo electrónico de confirmación de tu pedido para que puedas hacer el seguimiento del estado del mismo.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        ¿Puedo hacer el cambio de mi producto?
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                                Podrás realizar un cambio por el mismo producto en otra variante o por cualquier otro producto de la marca. Podés hacerlo hasta 30 (treinta) días corridos después de recibida tu compra.
                                Los productos deberán encontrarse en el mismo estado en que fueron remitidos, sin haber sido utilizados, y con el embalaje y etiquetas originales en buen estado.
                            <strong>No se realizan cambios de medias y ropa interior.</strong>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        ¿Puedo devolver mi compra?
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        
                            Podés realizar la devolución de tu compra dentro de los primeros 10 (diez) días corridos de recibida la misma. Pasados los diez días, no se aceptará la devolución ni se realizará el reintegro del dinero.
                            Para determinar el valor de la devolución, se toma el costo de la prenda que abonó el cliente al momento de realizar la compra.
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center mt-2">¿No encontras tu pregunta? Contactanos haciendo click <a href="<?php echo base_url("contact-us");?>">aqui</a></p>
        
            <div class="row cs-pagos my-5">
                <div class="col-md-auto p-2">
                    <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/visa@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/visa@2x.png" class="icon-logo lazyloaded" alt="visa" width="40" height="25">
                    <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/mastercard@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/mastercard@2x.png" class="icon-logo lazyloaded" alt="mastercard" width="40" height="25">
                    <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/amex@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/amex@2x.png" class="icon-logo lazyloaded" alt="amex" width="40" height="25">
                    <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/diners@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/diners@2x.png" class="icon-logo lazyloaded" alt="diners" width="40" height="25">
                    <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/paypal@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/paypal@2x.png" class="icon-logo lazyloaded" alt="paypal" width="40" height="25">
                    <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/banelco@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/banelco@2x.png" class="icon-logo lazyloaded" alt="ar_banelco" width="40" height="25">
                    <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/cabal@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/cabal@2x.png" class="icon-logo lazyloaded" alt="ar_cabal" width="40" height="25">
                    <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/tarjeta-naranja@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/tarjeta-naranja@2x.png" class="icon-logo lazyloaded" alt="ar_tarjeta-naranja" width="40" height="25">
                    <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/mercadopago@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/mercadopago@2x.png" class="icon-logo lazyloaded" alt="mercadopago" width="40" height="25">
                    <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/pagofacil@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/pagofacil@2x.png" class="icon-logo lazyloaded" alt="pagofacil" width="40" height="25">
                    <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/rapipago@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/rapipago@2x.png" class="icon-logo lazyloaded" alt="rapipago" width="40" height="25">
                </div>
                <p class="text-center mt-2">¿Tenes dudas con respecto a la compra? Revisa nuestros terminos de comercializacion <a href="<?php echo base_url("comerc");?>">aqui</a></p>
        
            </div>

    </section>
   
    </main>
</body>

</html>