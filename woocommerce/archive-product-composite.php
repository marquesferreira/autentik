<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

?>

<body <?php body_class(); ?>>

<?php
	/** TESTAR
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	do_action('woocommerce_before_main_content');
	?>

<section class="hero__shop">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8">
				<ul>
					<li><a href="#" class="f__montserrat"><span>Pack Fondue AOP</span></a></li>
					<li><a href="#" class="f__montserrat"><span>Pack Raclette</span></a></li>
					<li><a href="#" class="f__montserrat"><span>Pack Fondue & vin</span></a></li>
					<li><a href="#" class="f__montserrat"><span>Pack Raclette & vin</span></a></li>
				</ul>
			</div>
			<div class="col-lg-4 text-right">
				<ul>
					<li><a href="#" class="f__montserrat">Boutique</a></li>
				</ul>
			</div>
		</div><!-- row -->

		<div class="row hero__shop__raclette">
			<div class="col-lg-6 hero__shop__raclette__bg" style="background-image:url('<?php echo get_template_directory_uri();?>/_assets/img/shop/bg-temp-shop.jpg')">
			</div>

			<div class="col-lg-6 hero__shop__raclette__content txt__white">
				<h1>Une raclette ou une fondue demain soir? </h1>
				<h2><i>En quelques click avec Autentik!</i></h2>

				<div class="row hero__shop__raclette__details f__montserrat">
					<div class="col-lg-2 text-center">
						<img src="<?php echo get_template_directory_uri();?>/_assets/img/shop/icon-pack.svg"> 
					</div>
					<div class="col-lg-10 pr-0">
						<h6>Livré gratuitement le lendemain partout en suisse </h6>
						<p>Notre concept unique permet une livraison rapide et gratuite sur tous les packs</p>
					</div>
				</div><!--row secundaria-->
			</div><!-- col 6-->

		</div><!-- row -->
	</div>
</section>

<section class="nos-fondue">
	<div class="container-fluid py-5"></div>
	<div class="d-flex ml-auto">
		<svg class="ml-auto" width="65.676" height="8.038" viewBox="0 0 65.676 8.038">
			<g id="Component_2_1" data-name="Component 2 – 1" transform="translate(1.4 1.414)">
				<path id="Path_121" data-name="Path 121" d="M63,0H0" transform="translate(1.276 2.605)" fill="none" stroke="#020202" stroke-width="2"></path>
				<path id="Path_122" data-name="Path 122" d="M0,2.552,2.6,0l2.6,2.552" transform="translate(0 5.21) rotate(-90)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
			</g>
		</svg>
		<svg width="65.676" height="8.038" viewBox="0 0 65.676 8.038">
			<g id="Component_3_1" data-name="Component 3 – 1" transform="translate(0 1.414)">
				<g id="Group_57" data-name="Group 57" transform="translate(64.276 5.21) rotate(180)">
					<path id="Path_121" data-name="Path 121" d="M63,0H0" transform="translate(1.276 2.605)" fill="none" stroke="#020202" stroke-width="2"></path>
					<path id="Path_122" data-name="Path 122" d="M0,2.552,2.6,0l2.6,2.552" transform="translate(0 5.21) rotate(-90)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
				</g>
			</g>
		</svg>
	</div>
	<div class="container">
		<div class="row packs__titles">
			<div class="col-lg-12">
				<div class="text-center">
					<h3>Nos packs Fondue AOP</h3>
					<p>dans les respect de la tradition et de l'authenticité</p>
				</div>
			</div>
		</div> <!-- packs__titles -->
		<div class="row">
			<div class="owl-carousel owl-theme owl-fondue col-lg-12">

				<!-- PRODUCT  -->
				<div class=" item">
					<div class="ibox">

						<div class="ibox-content product-box _icon-extra">
							<div class="product-image">
								<img src="https://via.placeholder.com/150">
							</div>
							<div>
								<a href="#" class="product-name">Fondue moitié-mortier AOP</a>
								<strong>Dès 29.90chf</strong> <span>pour 2 pers.</span>
							</div>
						</div>
					</div>
				</div>
				<!-- END PRODUCT -->
				<!-- PRODUCT  -->
				<div class="item">
					<div class="ibox">
						<div class="ibox-content product-box _icon-extra">
							<div class="product-image">
								<img src="https://via.placeholder.com/150">
							</div>
							<div>
								<a href="#" class="product-name">Fondue pure Vacherin FR AOP</a>
								<strong>Dès 29.90chf</strong> <span>pour 2 pers.</span>
							</div>
						</div>
					</div>
				</div>
				<!-- END PRODUCT -->
				<!-- PRODUCT  -->
				<div class="item">
					<div class="ibox">
						<div class="ibox-content product-box _icon-extra">
							<div class="product-image">
								<img src="https://via.placeholder.com/150">
							</div>
							<div>
								<a href="#" class="product-name">Fondue Vacherin Alpage AOP</a>
								<strong>Dès 29.90chf</strong> <span>pour 2 pers.</span>
							</div>
						</div>
					</div>
				</div>
				<!-- END PRODUCT -->
			</div>
		</div>
	</div>
</section>

<section class="fondue_vin py-5">
	<div class="container-fluid">
		<div class="d-flex ml-auto">
			<svg class="ml-auto" width="65.676" height="8.038" viewBox="0 0 65.676 8.038">
				<g id="Component_2_1" data-name="Component 2 – 1" transform="translate(1.4 1.414)">
					<path id="Path_121" data-name="Path 121" d="M63,0H0" transform="translate(1.276 2.605)" fill="none" stroke="#020202" stroke-width="2"></path>
					<path id="Path_122" data-name="Path 122" d="M0,2.552,2.6,0l2.6,2.552" transform="translate(0 5.21) rotate(-90)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
				</g>
			</svg>
			<svg width="65.676" height="8.038" viewBox="0 0 65.676 8.038">
				<g id="Component_3_1" data-name="Component 3 – 1" transform="translate(0 1.414)">
					<g id="Group_57" data-name="Group 57" transform="translate(64.276 5.21) rotate(180)">
						<path id="Path_121" data-name="Path 121" d="M63,0H0" transform="translate(1.276 2.605)" fill="none" stroke="#020202" stroke-width="2"></path>
						<path id="Path_122" data-name="Path 122" d="M0,2.552,2.6,0l2.6,2.552" transform="translate(0 5.21) rotate(-90)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
					</g>
				</g>
			</svg>
		</div>
		<div class="container">
			<div class="row packs__titles">
				<div class="col-lg-12">
					<div class="text-center">
						<h3>Découvrez aussi nos packs</h3>
						<h3>Fondue AOP et Vin Suisse</h3>
						<p>Un vin sélectionné avec soins pour la fondue</p>
					</div>
<<<<<<< HEAD
				</div>
			</div> <!-- packs__titles -->
			<div class="row">
				<div class="owl-carousel owl-theme owl-fondue col-lg-12">
					<!-- PRODUCT  -->
					<div class=" item">
						<div class="ibox">
							<div class="ibox-content product-box _icon-extra">
								<div class="product-image">
									<img src="https://via.placeholder.com/150">
								</div>
								<div>
									<a href="#" class="product-name">Fondue moitié-mortier AOP</a>
									<strong>Dès 29.90chf</strong> <span>pour 2 pers.</span>
								</div>
							</div>
						</div>
					</div>
					<!-- END PRODUCT -->
					<!-- PRODUCT  -->
					<div class="item">
						<div class="ibox">
							<div class="ibox-content product-box _icon-extra">
								<div class="product-image">
									<img src="https://via.placeholder.com/150">
								</div>
								<div>
									<a href="#" class="product-name">Fondue pure Vacherin FR AOP</a>
									<strong>Dès 29.90chf</strong> <span>pour 2 pers.</span>
=======
				</div> <!-- packs__titles -->
				<div class="row">
					<div class="owl-carousel owl-theme owl-fondue col-lg-12">

						<!-- PRODUCT  -->
						<div class=" item">
							<div class="ibox">

								<div class="ibox-content product-box _icon-extra">
									<?php $product_DI = 73; //Product ID
									$proda1 = new WC_Product($product_DI);
									?>
									<div class="product-image">
										<?php echo $proda1->get_image($size = 'shop_thumbnail'); ?>
									</div>
									<div>
										<a href="<?php echo $proda1->get_permalink(); ?>" class="product-name"><?php echo $proda1->get_title(); ?></a>
										<strong>Dès <?php echo $proda1->get_price(); ?>chf</strong> <span>pour 2 pers.</span>
									</div>
								</div>
								</div>
							</div>
							<!-- END PRODUCT -->
							<!-- PRODUCT  -->
							<div class="item">
								<div class="ibox">
									<div class="ibox-content product-box _icon-extra">
									<?php $product_DI = 135; //Product ID
									$proda2 = new WC_Product($product_DI);
									?>
									<div class="product-image">
										<?php echo $proda2->get_image($size = 'shop_thumbnail'); ?>
									</div>
									<div>
										<a href="<?php echo $proda2->get_permalink(); ?>" class="product-name"><?php echo $proda2->get_title(); ?></a>
										<strong>Dès <?php echo $proda2->get_price(); ?>chf</strong> <span>pour 2 pers.</span>
										</div>
									</div>
								</div>
							</div>
							<!-- END PRODUCT -->
							<!-- PRODUCT  -->
							<div class="item">
								<div class="ibox">
									<div class="ibox-content product-box _icon-extra">
									<?php $product_DI = 132; //Product ID
									$proda3 = new WC_Product($product_DI);
									?>
									<div class="product-image">
										<?php echo $proda3->get_image($size = 'shop_thumbnail'); ?>
									</div>
									<div>
										<a href="<?php echo $proda3->get_permalink(); ?>" class="product-name"><?php echo $proda3->get_title(); ?></a>
										<strong>Dès <?php echo $proda3->get_price(); ?>chf</strong> <span>pour 2 pers.</span>
										</div>
									</div>
>>>>>>> 924f08055c18e4ce4ed043f4c7f715eab220e4e1
								</div>
							</div>
							<!-- END PRODUCT -->
						</div>
					</div>
<<<<<<< HEAD
					<!-- END PRODUCT -->
					<!-- PRODUCT  -->
					<div class="item">
						<div class="ibox">
							<div class="ibox-content product-box _icon-extra">
								<div class="product-image">
									<img src="https://via.placeholder.com/150">
								</div>
								<div>
									<a href="#" class="product-name">Fondue Vacherin Alpage AOP</a>
									<strong>Dès 29.90chf</strong> <span>pour 2 pers.</span>
								</div>
							</div>
=======
				</div>
		</section>

		<section class="fondue_vin py-5">
			<div class="container-fluid">
				<div class="d-flex ml-auto">
					<svg class="ml-auto" width="65.676" height="8.038" viewBox="0 0 65.676 8.038">
						<g id="Component_2_1" data-name="Component 2 – 1" transform="translate(1.4 1.414)">
							<path id="Path_121" data-name="Path 121" d="M63,0H0" transform="translate(1.276 2.605)" fill="none" stroke="#020202" stroke-width="2"></path>
							<path id="Path_122" data-name="Path 122" d="M0,2.552,2.6,0l2.6,2.552" transform="translate(0 5.21) rotate(-90)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
						</g>
					</svg>
					<svg width="65.676" height="8.038" viewBox="0 0 65.676 8.038">
						<g id="Component_3_1" data-name="Component 3 – 1" transform="translate(0 1.414)">
							<g id="Group_57" data-name="Group 57" transform="translate(64.276 5.21) rotate(180)">
								<path id="Path_121" data-name="Path 121" d="M63,0H0" transform="translate(1.276 2.605)" fill="none" stroke="#020202" stroke-width="2"></path>
								<path id="Path_122" data-name="Path 122" d="M0,2.552,2.6,0l2.6,2.552" transform="translate(0 5.21) rotate(-90)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
							</g>
						</g>
					</svg>
				</div>
				<div class="container">
					<div class="row packs__titles">
						<div class="col-lg-12">
							<div class="text-center">
								<h3>Découvrez aussi nos packs</h3>
								<h3>Fondue AOP et Vin Suisse</h3>
								<p>Un vin sélectionné avec soins pour la fondue</p>
							</div>
						</div>
					</div> <!-- packs__titles -->
					<div class="row">
						<div class="owl-carousel owl-theme owl-fondue col-lg-12">
							<!-- PRODUCT  -->
							<div class=" item">
								<div class="ibox">
									<div class="ibox-content product-box _icon-extra">
									<?php $product_DI = 144; //Product ID
									$proda11 = new WC_Product($product_DI);
									?>
									<div class="product-image">
										<?php echo $proda11->get_image($size = 'shop_thumbnail'); ?>
									</div>
									<div>
										<a href="<?php echo $proda11->get_permalink(); ?>" class="product-name"><?php echo $proda11->get_title(); ?></a>
										<strong>Dès <?php echo $proda11->get_price(); ?>chf</strong> <span>pour 2 pers.</span>
										</div>
									</div>
								</div>
							</div>
							<!-- END PRODUCT -->
							<!-- PRODUCT  -->
							<div class="item">
								<div class="ibox">
									<div class="ibox-content product-box _icon-extra">
									<?php $product_DI = 139; //Product ID
									$proda21 = new WC_Product($product_DI);
									?>
									<div class="product-image">
										<?php echo $proda21->get_image($size = 'shop_thumbnail'); ?>
									</div>
									<div>
										<a href="<?php echo $proda21->get_permalink(); ?>" class="product-name"><?php echo $proda21->get_title(); ?></a>
										<strong>Dès <?php echo $proda21->get_price(); ?>chf</strong> <span>pour 2 pers.</span>
										</div>
									</div>
								</div>
							</div>
							<!-- END PRODUCT -->
							<!-- PRODUCT  -->
							<div class="item">
								<div class="ibox">
									<div class="ibox-content product-box _icon-extra">
									<?php $product_DI = 136; //Product ID
									$proda31 = new WC_Product($product_DI);
									?>
									<div class="product-image">
										<?php echo $proda31->get_image($size = 'shop_thumbnail'); ?>
									</div>
									<div>
										<a href="<?php echo $proda31->get_permalink(); ?>" class="product-name"><?php echo $proda31->get_title(); ?></a>
										<strong>Dès <?php echo $proda31->get_price(); ?>chf</strong> <span>pour 2 pers.</span>
										</div>
									</div>
								</div>
							</div>
							<!-- END PRODUCT -->
>>>>>>> 924f08055c18e4ce4ed043f4c7f715eab220e4e1
						</div>
					</div>
					<!-- END PRODUCT -->
				</div>

			</div>
		</div>
	</div>
</section>

<!-- END PAGE TEMPLATE  -->
<?php get_template_part('/_inc/economisez'); ?>

<?php get_template_part('/_inc/post-list'); ?>

</div>
</div>
</div>

<?php
get_footer('shop');
?>

<script>
	$('.owl-fondue').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	})
</script>