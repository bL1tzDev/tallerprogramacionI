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
                                
                            <?php 
                            
                            
                            
                            if (session('consulta_error')): ?>
                                <div class="alert alert-danger my-3" role="alert">
                                    Debe completar los siguientes campos
                                </div>
                            <?php endif ?>
                            
                                <label for="inputNombreContactForm" class="form-label">Nombre Completo</label>
                                <input type="text"
                                    name="nombre" 
                                    class="<?=session('consulta_error.nombre') ?'form-control is-invalid' :'form-control'?>"
                                    id="inputNombreContactForm" 
                                    placeholder="Nombre Completo"
                                    value="<?=old('nombre')?>"
                                   >
                                   <p class="form-text text-danger"><?=session('consulta_error.nombre')?></p>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Numero telefonico de contacto</label>
                                <input type="number"
                                    name="telefono"
                                    class="<?=session('consulta_error.telefono') ?'form-control is-invalid' :'form-control'?>"
                                    id="exampleFormControlInput1" 
                                    placeholder="Numero de telefono"
                                    value="<?=old('telefono')?>" >
                                    <p class="form-text text-danger"><?=session('consulta_error.telefono')?></p>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Direccion de email</label>
                                <input type="email"
                                    name="email" 
                                    class="<?=session('consulta_error.email') ?'form-control is-invalid' :'form-control'?>" 
                                    id="exampleFormControlInput2" 
                                    placeholder="name@example.com"
                                    value="<?=old('email')?>" >
                                    <p class="form-text text-danger"><?=session('consulta_error.email')?></p>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput4" class="form-label">Motivo de consulta</label>
                                <input type="text" 
                                name="motivo" 
                                class="<?=session('consulta_error.motivo') ?'form-control is-invalid' :'form-control'?>" 
                                id="exampleFormControlInput4" 
                                placeholder="Motivo" 
                                value="<?=old('motivo')?>" >
                                <p class="form-text text-danger"><?=session('consulta_error.motivo')?></p>
                            </div>
                            <div class="my-3">
                                <label for="exampleFormControlTextarea3" class="form-label">Consulta</label>
                                <textarea class="<?=session('consulta_error.consulta') ?'form-control is-invalid' :'form-control'?>" name="consulta" id="exampleFormControlTextarea3" rows="4"></textarea>
                                <p class="form-text text-danger"><?=session('consulta_error.consulta')?></p>
                            </div>
                            <button type="submit" class="btn btn-primary ">Enviar</button>
                        </div>
                        <?php echo form_close();?>

            </section>



        </div>
    </div>
</body>