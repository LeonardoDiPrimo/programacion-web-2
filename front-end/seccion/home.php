 <!--Home-->
 <section class="page-section bg-light" id="portfolio">
     <div class="container">
         <div class="text-center">
             <h2 class="section-heading text-uppercase">Home</h2>
             <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
         </div>
         <div class="row">

             <?php
                // Libreria que sirve para acceder a los archivos Json
                require_once("../php-json-file-decode/json-file-decode.class.php");

                $read = new json_file_decode();
                $json = $read->json("../data/loadProducts.json");

                $limit = 0;
                // Agarro 10 productos y los muestro
                foreach ($json["products"] as $rkey => $product) :
                    if ($product['isOutstanding'] == true && $limit < 10) { ?>
                     <div class="col-lg-4 col-sm-6 mb-4">
                         <div class="portfolio-item">
                             <a class="portfolio-link" data-toggle="modal">
                                 <!--borro el href -->
                                 <div class="portfolio-hover">
                                     <div class="portfolio-hover-content"></div>
                                 </div>
                                 <a href="index.php?seccion=productDetail&productId=<?= $product["id"]; ?>">
                                     <div class="home-gallery"><img class="img-fluid" src="<?= $product["url"]; ?>" alt="" /></div>
                                 </a>
                             </a>
                             <div class="portfolio-caption">
                                 <div class="portfolio-caption-heading"> <?= $product["name"]; ?> </div>
                             </div>
                         </div>
                     </div>
             <?php
                        $limit++;
                    }
                endforeach;
                ?>

         </div>
     </div>
 </section>