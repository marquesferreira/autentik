<style>
	.product__composite__tab {
		min-height: 300px;
		background-image: url('https://via.placeholder.com/1366x300');
	}

	hr {
		color: black;
	}

	.wooco_component {
		margin-top: 20px;
		margin-bottom: 30px;
	}

	.wooco_components .wooco_component {
		padding: 0 !important;
		border-bottom: 0px !important;
	}

	.wooco_total,
	.wooco-total {
		visibility: hidden !important;
	}

	.wooco-wrap .wooco-text {
		display: block !important;
	}

	.wooco-qty-label,
	.wooco_component_product_checkbox,
	.wooco_component_product_info,
	.wooco_component_name,
	.wooco_component_desc,
	.wooco_ids .wooco-ids,
	.single-product .quantity,
	.wooco-checkbox,
	.woocommerce div.product div.summary {
		visibility: hidden;
	}

	.wooco_component_product {
		margin-left: 0 !important;
		margin-right: 0 !important;
		justify-content: center !important;
	}

	.wooco_component_product .wooco_component_product_qty {
		position: absolute;
		text-align: center !important;
		margin-top: 370px;
	}

	.single_add_to_cart_button {
		width: 90%;
		position: relative;
		text-align: left !important;
		background-color: white !important;
		border: none !important;
		color: black !important;
	}

	.product__composite__attributes__persons,
	.product__composite__attributes__price,
	.product__composite__attributes__gramms,
	.product__composite__attributes__affichage {
		margin-top: 20px;
		font-size: 16px;
		font-weight: 600;
		text-align: center;
	}

	.product__composite__attributes__price {
		color: #d84835;
	}

	.product__composite__attributes__affichage button {
		border: none;
		padding: 0;
		margin: 0;
	}

	.product__composite__attributes h6 {
		font-size: 10px;
		font-weight: 400;
		padding: 0;
		color: black;
	}

	.product__composite__tab__flag {
		margin-top: 20px;
	}

	.product__composite__tab__flag div {
		padding-right: 0;
		padding-left: 4px;
	}

	.product__composite__tab__flag h6 {
		font-size: 14px;
		font-weight: 600;
	}

	.product__composite__tab__flag p {
		font-size: 12px;
		margin-top: -6px;
	}

	.product__composite__content {
		padding: 16px;
		color: white;
	}

	.product__composite__content h2 {
		font-size: 20px;
		font-weight: 500;
	}

	.product__composite__content p {
		font-size: 16px;
		font-weight: 300;
	}

	.wooco_component_product .wooco_component_product_qty input {
		width: 80px !important;
		border: 0px !important;
		font-size: 2rem !important;
	}

	.wooco-minus,
	.wooco-plus {
		border: 0px !important;
		font-size: 3rem !important;
	}

	.wooco_component_product_image {
		min-width: 90vw !important;
	}

	.wooco_component_product_image img {
		min-width: 90vw !important;
		margin-left: -10px;
	}

	.tab-pane {
		border: 1px solid;
		border-left: none;
		border-right: none;
	}

	.tab-pane .active {
		display: inline-flex;
	}

	.tab-pane p {
		padding: 60px !important;
		max-width: 100% !important;
		-webkit-column-count: 2;
		-moz-column-count: 2;
		column-count: 2;
		-webkit-column-gap: 40px;
		-moz-column-gap: 40px;
		column-gap: 40px;
	}

	@media only screen and (min-width: 699px) {
		.product__composite__content {
			padding: 60px;
			color: white;
		}

		.wooco_component_product_image {
			min-width: 240px !important;
		}

		.wooco_component_product_image img {
			min-width: 240px !important;
		}

		.wooco_component_product .wooco_component_product_qty {
			margin-top: 280px;
		}

		.wooco-minus,
		.wooco-plus {
			border: 0px !important;
			font-size: 2rem !important;
		}

		.wooco_component_product .wooco_component_product_qty input {
			font-size: 1.2rem !important;
		}

		.single_add_to_cart_button {
			width: 90%;
			position: relative;
			text-align: right !important;
			background-color: white !important;
			border: none !important;
			color: black !important;
		}

		#scPersonnes {
			border-top: none;
			border-left: none;
			border-right: none;
		}

		#add-composite-cart,
		#oneclick-composite-cart {
			margin-top: -20px;
			margin-bottom: 60px;
		}
	}
</style>

	<?php
	defined('ABSPATH') || exit;

	global $product;

	/**
	 * Hook: woocommerce_before_single_product.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 */

		if (post_password_required()) {
			echo get_the_password_form(); // WPCS: XSS ok.
			return;
		}
	?>

	<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */

		?>
	</div>

<div class="container-fluid product__composite__composite">
	<div class="row product__composite__tab">
		<div class="col-12 col-lg-6 product__composite__content">
			<h2>Nos Raclettes aux 10 saveurs & son vin</h2>
			<p><?php echo $product->get_short_description(); ?></p>
		</div>
		<div class="col-12 col-lg-6 product__composite__tab__image" style="background-image:url('<?php echo get_template_directory_uri() . '/_assets/img/products/product-composto.jpg' ?>')">
			<!-- IMAGEM ORIGINAL DO PRODUTO? -->
		</div>
	</div>

	<div class="row product__composite__tab__flag">
		<div class="col-2 col-lg-9 text-right"><img src='<?php echo get_template_directory_uri() . '/_assets/img/products/active-icon.png' ?>' alt="livre dans"></div>
		<div class="col-10 col-lg-3">
			<h6>Livré dans votre boite à lait</h6>
			<p>Le lendermain pour les commandes avant 15h</p>
		</div>
	</div>

	<div class="row product__composite__attributes">
		<!-- ATTRIBUTES PANEL -->
		<div class="product__composite__attributes__persons col-12 col-lg-3">
			<h6>PERSONNES</h6>
			<?php
			echo do_shortcode("[product_categories_dropdown]");
			?>
		</div>
		<div class="product__composite__attributes__price col-4 col-lg-3">
			<h6>PRIX</h6>
			<?php
			echo "<p>" . $product->get_price() . "</p>";
			?>
		</div> 
		<div class="product__composite__attributes__affichage col-4 col-lg-3">
			<h6>AFFICHAGE</h6>
			<button id="change-product-image" class="product__composite__attributes__affichage__image" onclick="productImage()">
				<img src="<?php echo get_template_directory_uri() . '/_assets/img/shop/affichage-image.svg' ?>" alt="affichage-image">
			</button>
			<button id="change-product-list" class="product__composite__attributes__affichage __list" onclick="productList()">
				<img src="<?php echo get_template_directory_uri() . '/_assets/img/shop/affichage-list.svg' ?>" alt="affichage-list">
			</button>
		</div>
		<div class="product__composite__attributes__gramms col-4 col-lg-3">
			<h6>QUANTITY</h6>
			<?php
			$attributes = nt_product_attributes();
			$gram = $attributes->gramas;
			echo "<p>" . $gram . "</p>";
			?>
		</div>

	</div>
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */


	do_action('woocommerce_after_single_product_summary');
	?>

	<?php do_action('woocommerce_after_single_product'); ?>