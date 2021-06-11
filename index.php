<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/estilos.css" rel="stylesheet" />
</head>

<body id="page-top">
    <?php
    // Barra de navegación
    require_once("include/header.php");

    //Cargamos todos los php necesarios para generar los Json y que la pagina funcione
    require_once("data/load-products.php");
    require_once("data/categorias.php");
    require_once("data/marcas.php");
    require_once("helpers/string.php");

    //  Navega entre las distintas secciones de la pagina
    if (!empty($_GET["seccion"])) {
        $form = $_GET["seccion"];
        if ($form == "services") :
            require("seccion/services.php");
        elseif ($form == "home") :
            require("seccion/home.php");
        elseif ($form == "products") :
            require("seccion/list_products.php");
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

    // Footer
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