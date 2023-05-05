<body>
    <main class="principal container-fuid cs-productRevContainer">
        <section class="row row-cols-1 row-cols-md-2">
            <article class="mb-4 cs-productReview">
                <div id="carouselExample" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                        <img src="public\images\products\remeras\nike-jordan\modelo-frente.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="public\images\products\remeras\nike-jordan\modelo-cerca.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="public\images\products\remeras\nike-jordan\modelo-espalda.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </article>

            <article class="col"> 
                <h1>Remera Nike jordan</h1>
                <hr>

                <p class="fs-3"><strong>$7100</strong></p>
                <p>Talle:</p>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" >
                    <label class="btn btn-outline-dark disabled" for="btnradio1">XS</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off"checked>
                    <label class="btn btn-outline-dark" for="btnradio2">S</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btnradio3">M</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btnradio4">L</label>

                </div>

                    <a href="#" class="mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver guia de talles</a>

                <div class="my-4">

                <p>Cantidad:</p>
                    <select style="max-width:6rem;" class="form-select" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                </div>

                <div class="my-4">
                    <a href="#" class="my-2 btn btn-primary disabled"> Agregar al carrito</a>
                    <a href="#" class="my-2 btn btn-danger disabled">  <i class="bi bi-heart"></i>  Agregar a favoritos</a>
                </div>

                <h3>Descripcion</h3>
                
                    <ul> 
                        <li> Material: Jersey 28/1. 100% Algodón. </li>
                        <li>Color: Negro.</li>
                        <li>Corte Holgado.</li>
                        <li>Cuello: Redondo con ribb.</li>
                        <li>Mangas cortas, ruedo clásico.</li>
                        <li>Estampa serigrafiada frente y espalda.</li>
                    </ul>
                <hr>


                <div class="my-4 accordion accordion-flush bg-primary" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Envios
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Los pedidos se despachan de lunes a viernes dentro de las 24 y 48hs. hábiles desde la confirmación de pago. Una vez despachado el pedido enviamos un mensaje con tu número de seguimiento para que puedas rastrear la encomienda. El tiempo aproximado de entrega es de entre 3 y 10 días hábiles, dependiendo de la localidad y la demora del correo.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Politica de devolcion
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Si tu producto llegó con fallas, querés cambiar el talle, o hubo un error en la entrega del pedido, podés realizar 1 (un) cambio sin cargo. Una vez que recibiste el producto, tenés 7 (siete) días para ponerte en contacto con nosotros a través de nuestro WhatsApp 379 4024212 o por correo electrónico a ventas@clothinstore.com, indicando tu nombre, número del pedido y el artículo que quieres cambiar, detallando el motivo de cambio.</div>
                        </div>
                    </div>
                    
                </div>
               
                
             </article>

        </section>

        <section class="container-fluid mt-4 mb-4 " id="destacado">
        <h1 class="text-center cs-destacado mt-5">Productos relacionados</h1>

        <div class=" row row-cols-1 row-cols-sm-2 row-cols-md-4 cs-cards gap-4 ">

        <div class="card" >
            <a href="<?php echo base_url("/product");?>"><img src="public\images\products\remeras\nike-jordan\modelo-frente.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                        <h5 class="card-title">Remera Nike Jordan</h5>
                        <p class="card-text">$7.100</p>
                 <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                <a href="#" class="btn btn-secondary disabled" >Comprar</a>
            </div>
        </div>

            <div class="card" >
                <a href="<?php echo base_url("/product");?>"><img src="public\images\products\remeras\kotc-manifest\ed05b31e-306b-47d4-bd5d-9bf5df42d405-7a12846fe04c9d0c0016785611310276-640-0.webp" class="card-img-top" alt="..."></a>
                    <div class="card-body ">
                        <h5 class="card-title">Remera manifest</h5>
                        <p class="card-text">$6.500</p>
                        <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                        <a href="#" class="btn btn-secondary disabled" >Comprar</a>
                    </div>
            </div>

            <div class="card" >
                <a href="<?php echo base_url("/product");?>"><img src="public\images\products\buzos\buzo-nike-rosa\test.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Buzo Nike Rosa</h5>
                        <p class="card-text">$ 8.400</p>
                        <a href="<?php echo base_url("/product");?>" class="btn btn-primary" >Ver</a>
                        <a href="#" class="btn btn-secondary disabled" >Comprar</a>
                    </div>
            </div>

            <div class="card" >
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

    <div class="row cs-pagos mt-5">
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Guia de talles</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <img class="img-fluid" src="public\images\products\guiaTalles.png" alt="guia de talles">

               <table class="table table-striped table-dark">
                <thead>
                    <th>Talles</th>
                    <th>Hombro</th>
                    <th>Siza</th>
                    <th>Manga</th>
                    <th>Cadera</th>
                    <th>Largo</th>
                    
                </thead>
                <tbody>
                    <tr>
                    <td>XS</td>
                        <td>43 cm.</td>
                        <td>51 cm.</td>						                                            
                        <td>18 cm.</td>			
                        <td>53 cm.</td>						                                            
                        <td>71 cm.</td>							
                    </tr>
					<tr>
                        <td>S</td>
                        <td>44 cm.</td>
                        <td>54 cm.</td>						                                            
                        <td>18,5 cm.</td>			
                        <td>53 cm.</td>						                                            
                        <td>73,5 cm.</td>							
                    </tr>
                    <tr>
                        <td>M</td>
                        <td>46 cm.</td>
                        <td>55,5 cm.</td>						                                            
                        <td>20 cm.</td>			
                        <td>56 cm.</td>						                                            
                        <td>75 cm.</td>							
                    </tr>
                    <tr>
                        <td>L</td>
                        <td>46,5 cm.</td>
                        <td>58 cm.</td>						                                            
                        <td>20 cm.</td>			
                        <td>59 cm.</td>						                                            
                        <td>78 cm.</td>							
                    </tr>					                                           					       
			</tbody>
            </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
        </div>
    </main>
</body>