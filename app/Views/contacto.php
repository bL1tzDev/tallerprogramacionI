<body>
    
    <div class="principal container" style="min-height: 51vh;">
        <h1 class="my-3">Contactanos</h1>
        <hr>
        <div class="row row-cols-1 row-cols-md-2 ">
            <section class="col ">
                <article>
                <h2>Informacion de contacto</h2>

                <p><i class="bi bi-envelope-fill"></i> Correo: ayuda@clothingstore.com</p>
                <p><i class="bi bi-telephone-fill"></i> Telefono: +54 3794024212</p>
                <p><i class="bi bi-geo-alt-fill"></i> Ubicacion: 9 Julio 1499</p>
                </article>

                <article class="mb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.0796761567763!2d-58.837088512714814!3d-27.466778755514614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456dfbe42afae7%3A0xfa3b183afdc6b74d!2s9%20de%20Julio%201449%2C%20W3400%20Corrientes!5e0!3m2!1ses-419!2sar!4v1682037111519!5m2!1ses-419!2sar" width="200" height="360" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </article>
            </section>

            <section class="col">
                    <h2>Formulario de contacto</h2>
                    <?php
                    $attributes = ['class' => 'needs-validation'];
                     echo form_open('formulario_contacto',$attributes);?>
                            <div class="mb-3">
                                
                            <?php if (! empty($errors)): ?>
                                <div class="alert alert-danger my-3" role="alert">
                                    <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach ?>
                                    </ul>
                                </div>
                            <?php endif ?>
                            
                                <label for="inputNombreContactForm" class="form-label">Nombre Completo</label>
                                <input type="text" name="nombre" class="form-control" id="inputNombreContactForm" placeholder="Nombre Completo" >
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Numero telefonico de contacto</label>
                                <input type="number" name="telefono" class="form-control" id="exampleFormControlInput1" placeholder="Numero de telefono" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Direccion de email</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput4" class="form-label">Motivo de consulta</label>
                                <input type="text" name="motivo" class="form-control" id="exampleFormControlInput4" placeholder="Motivo" required>
                            </div>
                            <div class="my-3">
                                <label for="exampleFormControlTextarea3" class="form-label">Consulta</label>
                                <textarea class="form-control" name="consulta" id="exampleFormControlTextarea3" rows="4"></textarea required>
                            </div>
                            <button type="submit" class="btn btn-primary ">Enviar</button>
                        </div>
                        <?php echo form_close();?>

                      

                        <div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex">
                                <div class="toast-body">
                                Hello, world! This is a toast message.
                                </div>
                                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                        

            </section>



        </div>
    </div>
</body>