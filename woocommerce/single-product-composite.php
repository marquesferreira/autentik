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

get_header('shop');

?>

<<<<<<< HEAD
<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_single_product' );
	?>
=======
>>>>>>> 924f08055c18e4ce4ed043f4c7f715eab220e4e1
<body <?php body_class(); ?>>

	<div class="container shop-content">
		<div class="row">

			<div class="composite-product col-12">

				<?php do_action('woocommerce_before_main_content');	?>

				<?php while (have_posts()) : ?>
					<?php the_post(); ?>

					<?php wc_get_template_part('content', 'composite-product'); ?>

				<?php endwhile; // end of the loop. 
				?>

			</div>

			<div class="products__composition col-12">
				<?php do_action('kaipi_woocommerce_composite_add_to_cart'); ?>

				<div class="col-12 col-lg-4">
					<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" onclick="alert(window.open('<?php echo get_template_directory_uri() . '/checkout-redirect.php'; ?>'));" id="oneclick-composite-cart" class="single_add_to_cart_button button alt"><img class='single_add_to_cart_icon' src="<?php echo get_template_directory_uri(); ?>/_assets/img/shop/one-click-cart.svg"> Achat en um click!</button>
				</div>
			</div>

			<div class="col-lg-12" id="exTab1">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Informations</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Composition</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Recette villageoise</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Livraison</a>
					</li>
				</ul><!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="tabs-1" role="tabpanel">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>

					<div class="tab-pane" id="tabs-2" role="tabpanel">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
					</div>
					<div class="tab-pane" id="tabs-3" role="tabpanel">
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
					</div>
					<div class="tab-pane" id="tabs-4" role="tabpanel">
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.</p>
					</div>
				</div>
			</div>
		</div>
		<?php do_action('woocommerce_after_main_content');	?>
		</form>
	</div>
	</div>
	</div>

	<?php get_footer('shop');
	/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
	?>

	<script>
		//Botão para listagem
		function productList() {
			var image = document.getElementsByClassName("wooco_component_product_image");
			var qtyinput = document.getElementsByClassName("wooco_component_product_qty");
			var prodname = document.getElementsByClassName("wooco_component_name");
			var i;
			for (i = 0; i < image.length; i++) {
				image[i].style.visibility = "hidden";
				image[i].style.height = "60px";
				qtyinput[i].style.margin = "0";
				qtyinput[i].style.marginLeft = "-30px";
				prodname[i].style.visibility = "visible";
				prodname[i].style.backgroundColor = "#363944";
				prodname[i].style.padding = "10px";
				prodname[i].style.margin = "10px";
				prodname[i].style.textAlign = "center";
				prodname[i].style.color = "white";
			}
		}

		function productImage() {
			var image = document.getElementsByClassName("wooco_component_product_image");
			var qtyinput = document.getElementsByClassName("wooco_component_product_qty");
			var prodname = document.getElementsByClassName("wooco_component_name");
			var i;
			for (i = 0; i < image.length; i++) {
				image[i].style.visibility = "visible";
				prodname[i].style.visibility = "hidden";

				if (window.innerWidth <= 699) {
					qtyinput[i].style.margin = "370px 0 0 0";
					image[i].style.height = "auto";
				} else {
					qtyinput[i].style.margin = "280px 0 0 0";
					image[i].style.height = "240px";
				}
			}
		}
	</script>
	<script>
		$(document).ready(function() {

			$('#scPersonnes').on('change', function() {
				var url = $(this).val();
				if (url) {
					window.open(url, '_parent');
				}
				return false;
			});
		});
	</script>