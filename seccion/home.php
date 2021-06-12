 <!--Home-->
 <section class="page-section bg-light" id="portfolio">
     <div class="container">
         <div class="text-center">
             <h2 class="section-heading text-uppercase">Home</h2>
         </div>
         <div class="row">
             <?php
                require_once(DIR_BASE."business/productsBusiness.php");
                $limit = 0;

                // Agarro 10 productos y los muestro
                foreach (daoGetProducts() as $product) {
                    if ($product['isOutstanding'] == true && $limit < 10) { ?>
                     <div class="col-lg-4 col-sm-6 mb-4">
                         <div class="portfolio-item">
                             <a class="portfolio-link" data-toggle="modal">
                                 <div class="portfolio-hover">
                                     <div class="portfolio-hover-content"></div>
                                 </div>
                                 <a href="index.php?seccion=productDetail&productId=<?php echo $product["id"] ?>">
                                     <div class="home-gallery"><img class="img-fluid" src=<?php echo $product["url"] ?> alt="" /></div>
                                 </a>
                             </a>
                             <div class="portfolio-caption">
                                 <div class="portfolio-caption-heading"> <?php echo $product["name"] ?> </div>
                             </div>
                         </div>
                     </div>
             <?php
                        $limit++;
                    }
                }
                ?>

         </div>
     </div>
 </section>