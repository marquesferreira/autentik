<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header('shop'); ?>

<body <?php body_class(); ?>>
	<div class="container-fluid">
			<div class="row row__breadcrumbs">
				<div class="col-lg-6">
					<div class="d-inline-flex align-items-center justify-content-center justify-content-lg-start w-100">
					<svg xmlns="http://www.w3.org/2000/svg" width="21.623" height="8.038" viewBox="0 0 21.623 8.038">
						<g id="Group_88" data-name="Group 88" transform="translate(-915.824 -548.481)">
							<path id="Path_121" data-name="Path 121" d="M18.947,0H0" transform="translate(918.5 552.5)" fill="none" stroke="#848484" stroke-width="2"/>
							<path id="Path_122" data-name="Path 122" d="M473.849,6738.3l2.6-2.552,2.6,2.552" transform="translate(-5818.528 1028.954) rotate(-90)" fill="none" stroke="#848484" stroke-linecap="round" stroke-width="2"/>
						</g>
					</svg>

					<span class="row__breadcrumbs__back">Retour aux Packs Fondue<span>
					</div>
				</div>
				<div class="col-lg-6">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
			<div class="row row-blue">
				<div class="col lg-6">
					<a class="d-inline-flex align-items-center">
						<svg xmlns="http://www.w3.org/2000/svg" width="63" height="2" viewBox="0 0 63 2">
							<path id="Path_121" data-name="Path 121" d="M63,0H0" transform="translate(0 1)" fill="none" stroke="#fff" stroke-width="2"/>
						</svg>
						<p >Fondue 100% Vacherin AOP</p>
					</a>
				</div>
				<div class="col lg-6  ml-auto">
					<a href="#" class=" d-inline-flex align-items-center w-100"> 
						<p class="ml-auto">Fondue Vacherin Alpage</p>
						<svg xmlns="http://www.w3.org/2000/svg" width="65.676" height="8.038" viewBox="0 0 65.676 8.038">
							<g id="Group_57" data-name="Group 57" transform="translate(981.5 556.519) rotate(180)">
								<path id="Path_121" data-name="Path 121" d="M63,0H0" transform="translate(918.5 552.5)" fill="none" stroke="#fff" stroke-width="2"/>
								<path id="Path_122" data-name="Path 122" d="M473.849,6738.3l2.6-2.552,2.6,2.552" transform="translate(-5818.528 1028.954) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
							</g>
						</svg>	
					</a>		
				</div>
			</div>
	</div>
<div class="container-fluid">
<div class="row">
			<div class="single-product">
				
				<?php
				/**
				 * woocommerce_before_main_content hook.
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 80
				 */
				do_action('woocommerce_before_main_content');
				?>
				<h1><?php echo the_title( )?></h1>
				<?php while (have_posts()) : ?>
					<?php the_post(); ?>

					<?php wc_get_template_part('content', 'single-product'); ?>


				<?php endwhile; // end of the loop. 
				?>

				<?php
				/**
				 * woocommerce_after_main_content hook.
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action('woocommerce_after_main_content');
				?>

				<div class="col-12 col-lg-4">

					<?php do_action('woocommerce_buttons_buy_composite'); ?>
				</div>
			</div>
		</div>
	</div>
</div>	
<section class="tabPacks">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12" id="exTab1">
				<ul class="nav nav-tabs justify-content-between" role="tablist">
					<li class="nav-item">
						<a class="nav-link active " id="tabButton1" data-toggle="tab" href="#tabs-1" role="tab">Informations</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " id="tabButton2" data-toggle="tab" href="#tabs-2" role="tab">Composition</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " data-toggle="tab" href="#tabs-3" role="tab">Recette villageoise</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " data-toggle="tab" href="#tabs-4" role="tab">Livraison</a>
					</li>
				</ul><!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="tabs-1" role="tabpanel">
						<div class="row">
							<div class="col-md-6">
								<p class="f__montserrat">Nos fondues 100% artisanales sont soigneusement fabriquées par des maîtres fromagers et 
								répondent aux critères élevés de qualité de la branche fromagère suisse.</p>
							</div>
							<div class="col-md-6">
								<p class="f__montserrat">Nos fondues 100% artisanales sont soigneusement fabriquées par des maîtres fromagers et 
								répondent aux critères élevés de qualité de la branche fromagère suisse.</p>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<p class="f__montserrat">Nos fondues 100% artisanales sont soigneusement fabriquées par des maîtres fromagers et 
								répondent aux critères élevés de qualité de la branche fromagère suisse.</p>
							</div>
							<div class="col-md-6">
								<p class="f__montserrat">Nos fondues 100% artisanales sont soigneusement fabriquées par des maîtres fromagers et 
								répondent aux critères élevés de qualité de la branche fromagère suisse.</p>
							</div>
						</div>
						
					</div>

					<div class="tab-pane" id="tabs-2" role="tabpanel">
					<p class="f__montserrat">Second Panel</p>
					</div>
					<div class="tab-pane" id="tabs-3" role="tabpanel">
					<p class="f__montserrat">Third Panel</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="packs" id="single-packs">
	<div class="container">       
		<div class="row packs__titles">
			<div class="col-lg-6 order-2 order-lg-first">
				<div class="text-left">
					<h3>Découvrez aussi nos packs Fondue AOP et Vin Suisse</h3>
					<p class="">Un vin sélectionné avec soins pour la fondue</p>
				</div>
			</div>
		</div> <!-- packs__titles -->
<<<<<<< HEAD

		<div class="row packs-row">
			<div class="col-xs-3 col-sm-4 col-md-4  pack__item _icon-extra">
				<a href="#">
					<div class="pack__item__box">
						<img src='<?php echo get_template_directory_uri(). '/_assets/img/products/foundue.png' ?> '  alt="fondue pack">
					</div>
				
					<h6 class="f__montserrat">+ Pack Fondue </h6>
				</a>
			</div> <!-- pack__item -->

			<div class="col-xs-3 col-sm-4 col-md-4  pack__item">
				<a href="#">
					<div class="pack__item__box">
						<img src='<?php echo get_template_directory_uri(). '/_assets/img/products/wine_and_foundue.png' ?>'  alt="fondue pack">
					</div>
				
					<h6 class="f__montserrat">+ Pack Fondue & Vin </h6>
				</a>
			</div> <!-- pack__item -->

			<div class="col-xs-3 col-sm-4 col-md-4  pack__item _icon-extra">
				<a href="#">
					<div class="pack__item__box">
						<img src='<?php echo get_template_directory_uri(). '/_assets/img/products/wine_and_foundue.png' ?>' alt="fondue pack">
					</div>
				
					<h6 class="f__montserrat">+ Pack Raclette</h6>
				</a>
			</div> <!-- pack__item -->


		</div><!-- row packs items -->          
	</div>
</section>

<?php get_template_part( '/_inc/economisez');?> 
<?php get_template_part( '/_inc/post-list');?> 
<?php
	
get_footer('shop');

<<<<<<< HEAD
	/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
	?>
	</div>
	<!-- <script>
	$(".nav-tabs a").on('shown.bs.tab', function () {
    	alert('set_active = ' + $('.nav-tabs .active').text());
		var tabpane = document.querySelector('#tabs-2').click();
		setActive();
	});
	$(document).on('click', '.nav-tabs a', function() {
			hideTab($(this))
			console.log('cliquei')
	});
=======

		<div class="row packs-row">
			<div class="col-xs-3 col-sm-4 col-md-4  pack__item _icon-extra">
				<a href="#">
					<div class="pack__item__box">
						<img src='<?php echo get_template_directory_uri(). '/_assets/img/products/foundue.png' ?> '  alt="fondue pack">
					</div>
				
					<h6 class="f__montserrat">+ Pack Fondue </h6>
				</a>
			</div> <!-- pack__item -->

			<div class="col-xs-3 col-sm-4 col-md-4  pack__item">
				<a href="#">
					<div class="pack__item__box">
						<img src='<?php echo get_template_directory_uri(). '/_assets/img/products/wine_and_foundue.png' ?>'  alt="fondue pack">
					</div>
				
					<h6 class="f__montserrat">+ Pack Fondue & Vin </h6>
				</a>
			</div> <!-- pack__item -->

			<div class="col-xs-3 col-sm-4 col-md-4  pack__item _icon-extra">
				<a href="#">
					<div class="pack__item__box">
						<img src='<?php echo get_template_directory_uri(). '/_assets/img/products/wine_and_foundue.png' ?>' alt="fondue pack">
					</div>
				
					<h6 class="f__montserrat">+ Pack Raclette</h6>
				</a>
			</div> <!-- pack__item -->
>>>>>>> 924f08055c18e4ce4ed043f4c7f715eab220e4e1

	function setActive(){

<<<<<<< HEAD
			var tab = document.getElementById('#tabButton2').setAttribute("aria-selected", "true")
	}
	</script> -->

	<script>
			$(".nav-tabs a").on('shown.bs.tab', function () {

			eventFire(document.querySelector('.tab-content'),'click');
			console.log('clique');
		})


		function eventFire(el, etype){
		if (el.fireEvent) {
			el.fireEvent('on' + etype);
		} else {
			var evObj = document.createEvent('Events');
			evObj.initEvent(etype, true, false);
			el.dispatchEvent(evObj);
		}
		}
	</script>
=======
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>
</div>
>>>>>>> 5c40ae6fed6bf14ed1abcae879169a7dd4ae4e13
=======
		</div><!-- row packs items -->          
	</div>
</section>

<?php get_template_part( '/_inc/economisez');?> 
<?php get_template_part( '/_inc/post-list');?> 
<?php
	
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>
</div>
>>>>>>> 924f08055c18e4ce4ed043f4c7f715eab220e4e1
