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

defined( 'ABSPATH' ) || exit;

get_header('shop');
?>
<body <?php body_class(); ?> >

<!-- PAGE TEMPLATE  -->
<section class="breadcumbs">
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action('woocommerce_before_main_content');
	?>			
</section>

<?php get_template_part( '/_inc/shop-page/hero-shop');?> 

<section class="cta_shop">
	<div class="d-inline-flex justify-content-end w-100 mt-1 mb-1">
		<a href="#" class="d-inline-flex align-items-center justify-content-betweeen w-100 ">	
			<svg id="Component_2_1" class=" ml-auto" data-name="Component 2 – 1" xmlns="http://www.w3.org/2000/svg" width="32.969" height="32.969" viewBox="0 0 32.969 32.969">
				<circle id="Ellipse_12" data-name="Ellipse 12" cx="16.484" cy="16.484" r="16.484" fill="#9caf98"></circle>
				<g id="Group_95" data-name="Group 95" transform="translate(7.393 7.169)">
				<path id="Path_142" data-name="Path 142" d="M-543.106-66.283v10.669a.675.675,0,0,0,.675.675H-526.6a.675.675,0,0,0,.675-.675V-66.283a.675.675,0,0,0-.675-.675h-15.835A.675.675,0,0,0-543.106-66.283Z" transform="translate(543.106 71.519)" fill="#fff"></path>
				<path id="Path_143" data-name="Path 143" d="M-297.955-184.353H-302.5v-1.795h5.951Z" transform="translate(313.738 186.148)" fill="#fff"></path>
				<path id="Path_144" data-name="Path 144" d="M-297.955-150.989H-302.5v1.795h5.951Z" transform="translate(313.738 152.684)" fill="#fff"></path>
				<rect id="Rectangle_34" data-name="Rectangle 34" width="4.315" height="1.924" transform="translate(6.129 9.214) rotate(45)" fill="#9caf98"></rect>
				<rect id="Rectangle_35" data-name="Rectangle 35" width="6.988" height="1.924" transform="translate(12.803 8.767) rotate(135)" fill="#9caf98"></rect>
				</g>
			</svg>
			<p class="livre f__montserrat">Livré dans votre boîte aux lettres 
				<svg id="Component_2_1" data-name="Component 2 – 1" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
				<circle id="Ellipse_14" data-name="Ellipse 14" cx="8.5" cy="8.5" r="8.5" fill="#d1d1d1"></circle>
				<text id="i" transform="translate(6.5 14)" fill="#fff" font-size="13" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="0" y="0">i</tspan></text>
				</svg><br>
				<span >
					Tous nos packs marqués par cette icône
				</span>
			</p> 
		</a>
	</div>
</section>


<?php get_template_part( '/_inc/shop-page/fondue');?>
<?php get_template_part( '/_inc/shop-page/fondue-vin');?>  
<?php get_template_part( '/_inc/shop-page/raclette');?> 
<?php get_template_part( '/_inc/shop-page/raclette-wine');?> 
<?php get_template_part( '/_inc/cta-payments');?> 
<?php get_template_part( '/_inc/post-list');?> 
<!-- END PAGE TEMPLATE  -->

<?php
get_footer( 'shop' );
?>
</body>
