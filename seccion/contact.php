<!-- Contacto -->
<?php

    require_once('config/config.php');
    require_once(DIR_BASE.'business/contactBusiness.php');

    if(!empty($_POST['email'])){
		// var_dump($_POST);
		sendMail($_POST);

	}

?>

<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contáctenos</h2>
            <!--  <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            <br>
        </div>
        <form id="contactForm" name="sentMessage" novalidate="novalidate" action="" method="post">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" name="name"  type="text" placeholder="Nombre y apellido" required="required" data-validation-required-message="Por favor, escriba su nombre." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" name="email" type="email" placeholder="Email" required="required" data-validation-required-message="Por favor, escriba su email." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <!-- Agrego el area de la empresa -->
                    <div class="form-group">
                        <input class="form-control" id="area" name="area" type="text" placeholder="Área de la empresa a quien se quiere mandar la consulta" required="required" data-validation-required-message="Por favor, escriba el área de la empresa." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" name="telefono" type="tel" placeholder="Teléfono" required="required" data-validation-required-message="Por favor, escriba su teléfono." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" name="mensaje" placeholder="Comentario" required="required" data-validation-required-message="Por favor, escriba su comentario."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar mensaje</button>
            </div>
        </form>
    </div>
</section>