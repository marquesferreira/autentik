<section class="hero">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 product__points">
                <div class="product__points__commande">1 commande = <img src="<?php echo get_template_directory_uri() . '/_assets/img/hero/tree.png' ?>" />1 planté</div>
                <div class="product__points__calls">
                    <div class="product__points__calls_a">
                        <h2><a href="#hero-slider-1" onclick="function_product_one()">01</a></h1>
                            <h6>Fondue</h6>
                    </div>
                    <div class="product__points__calls_b">
                        <h2><a href="#hero-slider-2" onclick="function_product_two()">02</a></h1>
                            <h6>Raciette</h6>
                    </div>

                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 product__slide">
                <div class="product__slide__images">
                    <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
                    <!-- <img class="product__image" src="<?php get_template_directory_uri(); ?>/wp-content/uploads/2021/08/produto.png" width="320"> -->
                    <div class="product__slide__images__circle">
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/uploads/2021/08/circulo.png" width="300">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 product__description">
                <p id="title" class="product__description__title">FROMAGE D'EXCEPTION</p>
                <p id="product" class="product__description__product">Pack Fondue</p>
                <p id="line-a" class="product__benefits"><a class="icon_box"></a>Livre le lendermain partout en suisse</p>
                <p id="line-b" class="product__benefits"><a class="icon_box2"></a>All inclusive, pas de frais caché</p>
                <p id="line-c" class="product__benefits"><a class="icon_box2"></a>Respect chaîne du froid certife</p>
                <p id="line-d" class="product__benefits"><a class="icon_mark"></a>Livré dans votre boite à lait</p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2 product__flag">
                <div class="product__flag__content">
                    <p id="price" class="product__flag__content__price">29.90<span class="product__flag__content__price-cur">CHF</span></p>
                    <p id="price-qty" class="product__flag__content__qty">Pour 2 personnes</p>
                    <p id="price-bonus" class="product__flag__content__bonus">Livraison gratuite!</p>
                </div>

            </div>

        </div>

        <div class="row">

            <div class="product__profiter col-sm-12 col-md-12 col-lg-12">
                <div class="product__profiter__button">
                    <a class="icon_cart"></a>
                    <a href="#">PROFITER DE L'OFFRE</a>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 product__decouvir">
                <div class="product__decouvir__button">
                    <a href="#">Découvir notre concept All-inclusive</a>
                    <a class="icon_decouvir"></a>
                </div>
            </div>

        </div>

    </div>

</section>

<script>
    function function_product_one() {
        document.getElementById("title").innerHTML = "FROMAGE D'EXCEPTION";
        document.getElementById("product").innerHTML = "Pack Fondue";
        document.getElementById("line-a").innerHTML = "Livre le lendermain partout en suisse";
        document.getElementById("line-b").innerHTML = "All inclusive, pas de frais caché";
        document.getElementById("line-c").innerHTML = "Respect chaîne du froid certife";
        document.getElementById("line-d").innerHTML = "Livré dans votre boite à lait";
        document.getElementById("price").innerHTML = "29.90";
        document.getElementById("price-qty").innerHTML = "Pour 2 personnes";
        document.getElementById("price-bonus").innerHTML = "Livraison gratuite!";
    }

    function function_product_two() {
        document.getElementById("title").innerHTML = "FROMAGE D'EXCEPTION";
        document.getElementById("product").innerHTML = "Raclete";
        document.getElementById("line-a").innerHTML = "Livre le lendermain partout en suisse";
        document.getElementById("line-b").innerHTML = "All inclusive, pas de frais caché";
        document.getElementById("line-c").innerHTML = "Respect chaîne du froid certife";
        document.getElementById("line-d").innerHTML = "Livré dans votre boite à lait";
        document.getElementById("price").innerHTML = "49.90";
        document.getElementById("price-qty").innerHTML = "Pour 4 personnes";
        document.getElementById("price-bonus").innerHTML = "Livraison gratuite!";
    }
</script>