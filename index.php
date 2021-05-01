 <?php
    // El index carga la barra de navegacion
    require_once("include/header.php");

    //Cargamos todos los php necesarios para generar los Json y que la pagina funcione
    require_once("data/load-products.php");
    require_once("data/comments.php");
    require_once("data/categorias.php");
    require_once("data/marcas.php");

    //  Navega entre las distintas secciones de la pagina
    if (!empty($_GET["seccion"])) {
        $form = $_GET["seccion"];
        if ($form == "services") :
            require("seccion/services.php");
        elseif ($form == "home") :
            require("seccion/home.php");
        elseif ($form == "products") :
            require("seccion/filter_products.php");
        elseif ($form == "about") :
            require("seccion/about.php");
        elseif ($form == "team") :
            require("seccion/team.php");
        elseif ($form == "contact") :
            require("seccion/contact.php");
        elseif ($form == "productDetail") :
            require("seccion/productDetail.php");
        else :
            require("seccion/error.php");
        endif;
    } else {
        require("seccion/home.php");
    }

    // El index carga el footer
    require_once("include/footer.php");
    ?>

 <!-- Bootstrap core JS-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
 <!-- Third party plugin JS-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
 <!-- Contact form JS-->
 <script src="assets/mail/jqBootstrapValidation.js"></script>
 <script src="assets/mail/contact_me.js"></script>
 <!-- Core theme JS-->
 <script src="js/scripts.js"></script>
 </body>

 </html>