<!--Agregar los archivos modificados 
git add .
Crear el commit
git commit -m "nombre de lo que hiciste"-->
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
    include_once("config/config.php");
    
    // Barra de navegación
    require_once(DIR_BASE."include/header.php");
    
    require_once(DIR_BASE."helpers/string.php");

    //  Navega entre las distintas secciones de la pagina
    if (!empty($_GET["seccion"])) {
        $form = $_GET["seccion"];
        if ($form == "home") :
            require("seccion/home.php");
        elseif ($form == "products") :
            require("seccion/list_products.php");
        elseif ($form == "contact") :
            require("seccion/contact.php");
        elseif ($form == "productDetail") :
            require("seccion/productDetail.php");
        else :
            require("seccion/home.php");
        endif;
    } else {
        require("seccion/home.php");
    }

    // Footer
    require_once(DIR_BASE."include/footer.php");
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