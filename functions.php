<?php

/**
 * Kaipi - Website functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kaipi_-_Website
 */


if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}
add_action('wp_enqueue_scripts', 'kaipi_scripts');

if (!function_exists('kaipi_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kaipi_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Kaipi - Website, use a find and replace
		 * to change 'kaipi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('kaipi', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'kaipi'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'kaipi_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		//Adiciona suporte ao Woocommerce
		add_theme_support('woocommerce', array(
			'thumbnail_image_width'	=> 255,
			'single_image_width'	=> 255,
			'product_grid'			=> array(
				'default_rows'		=> 10,
				'min_rows'			=> 10,
				'max_rows'			=> 20,
				'default_columns' 	=> 2,
				'min_columns'		=> 1,
				'max_columns'		=> 4,
			)
		));
		add_theme_support('wc-product-gallery-zoom');
		add_theme_support('wc-product-gallerylightbox');
		add_theme_support('wc-product-gallery-slider');
	}
endif;
add_action('after_setup_theme', 'kaipi_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kaipi_content_width()
{
	$GLOBALS['content_width'] = apply_filters('kaipi_content_width', 640);
}
add_action('after_setup_theme', 'kaipi_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kaipi_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'kaipi'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'kaipi'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'kaipi_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function kaipi_scripts()
{

	//Google Fonts

	wp_enqueue_style('kaipi-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('kaipi-style', 'rtl', 'replace');

	wp_enqueue_script('kaipi-navigation', get_template_directory_uri() . '/_assets/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'kaipi_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/_config/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/_config/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/_config/jetpack.php';
}

/*** CUSTOM _ KAIPI _**/
wp_enqueue_style('framework', get_template_directory_uri() . '/_assets/css/bootstrap.css');
wp_enqueue_style('general', get_template_directory_uri() . '/_assets/css/main.css');
wp_enqueue_style('shop', get_template_directory_uri() . '/_assets/css/shop/shop.css');

/**
 * Registro Menu
 */
function register_navwalker()
{
	require_once get_template_directory() . '/_config/custom-menu.php';
}
add_action('after_setup_theme', 'register_navwalker');

register_nav_menus(array(
	'primary' => __('Header', 'KAIPI'),
	'secondary' => __('Footer', 'KAIPI'),
));

// Thumbnail support
add_theme_support('post-thumbnails');

//ACF Ale
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'Header Settings',
		'menu_slug' 	=> 'header-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

if (!isset($content_width)) {
	$content_width = 600;
}
/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'kaipi_woocommerce_header_add_to_cart_fragment');

function kaipi_woocommerce_header_add_to_cart_fragment($fragments)
{
	global $woocommerce;

	ob_start();

?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

/**
 * Remove related products output
 */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);

//Widget for Contact Form
register_sidebar(
	array(
		'name' 				=> 'Contact Form',
		'id'				=> 'contact',
		'before_widget'		=> '',
		'after_widget'		=> '',
	)
);

//Widget for Footer Adress
register_sidebar(
	array(
		'name' 				=> 'Footer Adress',
		'id'				=> 'footer-adress',
		'before_widget'		=> '',
		'after_widget'		=> '',
	)
);


add_filter('mycred_woo_reward_mycred_payment', '__return_true');

//Redirect to MyAccount Kaipi after purchase product
/*add_action('template_redirect', 'kaipi_custom_redirect_after_purchase');

	function kaipi_custom_redirect_after_purchase() {
	
		global $wp;
	
		if (is_checkout() && !empty($wp->query_vars['order-received'])) {
	
			wp_redirect( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); // Redirect to your desired page here.
	
			exit;
		}
	}*/

//DISCOUNT PER ITEMS
add_action('woocommerce_cart_calculate_fees', 'cart_progressive_discount', 50, 1);
function cart_progressive_discount($cart)
{
	if (is_admin() && !defined('DOING_AJAX'))
		return;

	// For 1 item (quantity 2) we EXIT;
	if ($cart->get_cart_contents_count() <= 2)
		return;

	$cart_items_count = $cart->get_cart_contents_count();
	$cart_lines_total = $cart->get_subtotal();
	$cart_individual_prices = $cart_lines_total / $cart_items_count;



	// Progressive discount from items
	$discount_text .=  ' (' . '-' . $cart_individual_prices . ')';
	$items_div = ($cart_items_count / 3);
	$discount_text = __('Quantity discount', $items_div);
	$discount =  floor($items_div) * $cart_individual_prices;
	$cart->add_fee($discount_text, -floor($discount));
}
//DISCOUNT PER ITEMS - FINAL
//
//DISCOUNT PER PERCENTAGE
/*
	add_action( 'woocommerce_cart_calculate_fees', 'cart_progressive_discount', 50, 1 );
	function cart_progressive_discount( $cart ) {
		if ( is_admin() && ! defined( 'DOING_AJAX' ) )
			return;
		
		// For 1 item (quantity 1) we EXIT;
		if( $cart->get_cart_contents_count() == 1 )
			return;
	
		## ------ Settings below ------- ##
	
		$percent = 5; // Percent rate: Progressive discount by steps of 5%
		$max_percentage = 50; // 50% (so for 10 items as 5 x 10 = 50)
		$discount_text = __( 'Quantity discount', 'woocommerce' ); // Discount Text
	
		## ----- ----- ----- ----- ----- ##
	
		$cart_items_count = $cart->get_cart_contents_count();
		$cart_lines_total = $cart->get_subtotal() - $cart->get_discount_total();
	
		// Dynamic percentage calculation
		$percentage = $percent * ($cart_items_count - 1);
	
		// Progressive discount from 5% to 45% (Between 2 and 10 items)
		if( $percentage < $max_percentage ) {
			$discount_text .=  ' (' . $percentage . '%)';
			$discount = $cart_lines_total * $percentage / 100;
			$cart->add_fee( $discount_text, -$discount );
		}
		// Fixed discount at 50% (11 items and more)
		else {
			$discount_text .=  ' (' . $max_percentage . '%)';
			$discount = $cart_lines_total * $max_percentage / 100;
			$cart->add_fee( $discount_text, -$discount );
		}
	}
	*/
//DISCOUNT PER PERCENTAGE - FINAL

//DISPLAY ATTRIBUTES ON COMPOSITE PRODUCTS PAGE
function nt_product_attributes()
{
	global $product;
	if ($product->has_attributes()) {

		$attributes = (object) array(
			'personnes'              => $product->get_attribute('personnes'),
			'gramas'            => $product->get_attribute('gramas'),
		);
		return $attributes;
	}
}

/** Remove Additional Information Tab @ WooCommerce Non-composite Product Page */
add_filter('woocommerce_product_tabs', 'kaipi_remove_product_tabs', 9999);
function kaipi_remove_product_tabs($tabs)
{
	global $product;

	if ($product->is_type('composite')) {
		unset($tabs['additional_information']);
		unset($tabs['reviews']);
	}
	return $tabs;
}


//SHOW WEIGHT FOR VARIABLE PRODUCTS
add_filter('woocommerce_available_variation', 'display_variation_weight', 10, 3);
function display_variation_weight($variation_data, $product, $variation)
{
	$variation_data['price_html'] .= '<p class="weight">Weight: ' . $variation_data['weight_html'] . '</p>';

	return $variation_data;
}

//PRODUCT SHORTCODE TO SHOW PRODUCTS BY QUANTITY OF PERSONS

function woo_product_categories_dropdown()
{
	// HERE below, define your Product category names
	$term_names = array('Composite');

	// The WP_Query
	$query = new WP_Query(array(
		'posts_per_page' => -1,
		'post_type' => 'product',
		'post_status' => 'publish',
		'hide_empty' => 0,
		'orderby' => 'title',
		'tax_query' => array(array(
			'taxonomy' => 'product_cat', // for a Product category (or 'product_tag' for a Product tag)
			'field'    => 'name',        // can be 'name', 'slug' or 'term_id'
			'terms'    => $term_names,
		)),
		'echo' => '0'
	));
	$attributes = nt_product_attributes();
	$personnes = $attributes->personnes;
	$output = '<select id="scPersonnes"><option>' . $personnes . ' personnes</option>';
	// foreach ( $products as $product ) {
	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post();

			$permalink = get_permalink($query->post->ID);
			//$title = $query->post->post_title;
			$attributes = nt_product_attributes();
			$person = $attributes->personnes;
			if ($person <> $personnes) {
				$output .= '<option value="' . $permalink . '">' . $person . ' personnes</option>';
			}


		endwhile;

		wp_reset_postdata();

		$output .= '</select>';
	else :

		$output = '<p>No products found<p>';

	endif;

	return $output;
}

add_shortcode('product_categories_dropdown', 'woo_product_categories_dropdown');



/*
 ==================
 Ajax Search
======================	 
*/
// add the ajax fetch js
add_action('wp_footer', 'ajax_fetch');
function ajax_fetch()
{
?>
	<script type="text/javascript">
		function fetch() {

			jQuery.ajax({
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
				type: 'post',
				data: {
					action: 'data_fetch',
					keyword: jQuery('#keyword').val()
				},
				success: function(data) {
					jQuery('#datafetch').html(data);
				}
			});

		}
	</script>

	<?php
}

// the ajax function
add_action('wp_ajax_data_fetch', 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch', 'data_fetch');
function data_fetch()
{

	$the_query = new WP_Query(array('posts_per_page' => -1, 's' => esc_attr($_POST['keyword']), 'post_type' => array('product')));
	if ($the_query->have_posts()) :

		while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<?php $product = wc_get_product(get_the_ID()); /* get the WC_Product Object */ ?>
			<div class="__products">
				<div class="__item">
					<a href="<?php echo get_permalink(get_the_ID()); ?>">
						<img src='<?php echo wp_get_attachment_url($product->get_image_id()); ?> ' alt="fondue pack">
					</a>
				</div>
				<div class="__item__description">
					<a href="<?php echo get_permalink(get_the_ID()); ?>">
						<h6><?php the_title(); ?></h6>
						<p>Dès
							<?php echo $product->get_price_html(); ?>chf</p>
					</a>
				</div>
			</div>

		<?php endwhile;

		wp_reset_postdata();
	endif;

	die();
}

/**
 * This function modifies the main WordPress query to include an array of 
 * post types instead of the default 'post' post type.
 *
 * @param object $query The main WordPress query.
 */
function mukto_post_type_include($query)
{
	if ($query->is_main_query() && $query->is_search() && !is_admin()) {
		$query->set('post_type', array('post', 'page', 'custom_post_type'));
	}
}
add_action('pre_get_posts', 'mukto_post_type_include');

//FILTER SHOWING CUSTOM MESSAGE PRODUCT CART
add_filter('woocommerce_add_to_cart_message', 'custom_add_to_cart_message');
function custom_add_to_cart_message()
{
	global $woocommerce;
	// Output success messages
	if (get_option('woocommerce_cart_redirect_after_add') == 'yes') :
		$return_to = get_permalink(woocommerce_get_page_id('shop'));

		$message = sprintf('<a href="%s" class="button">%s</a> %s', $return_to, __('Continue Shopping &rarr;', 'woocommerce'), __('Product successfully added to your cart.', 'woocommerce'));

	else :
		$message = sprintf('<a href="%s" class="button">%s</a> %s', get_permalink(woocommerce_get_page_id('cart')), __('View Cart &rarr;', 'woocommerce'), __('Product successfully added to your cart.', 'woocommerce'));

	endif;
	return $message;
}
function your_woo_ajax_solution($translation, $text, $domain)
{
	if ($domain == 'woocommerce') {
		if ($text == 'View Cart') {
			$translation = 'Product successfully added to your cart.';
		}
	}
	return $translation;
}
add_filter('gettext', 'your_woo_ajax_solution', 10, 3);

/** @snippet Update Cart Automatically */
add_action('wp_footer', 'programa_wp_atualizar_qtd_carrinho');
function programa_wp_atualizar_qtd_carrinho()
{
	if (is_cart()) {
		?>
		<script type="text/javascript">
			jQuery('div.woocommerce').on('click', 'input.qty', function() {
				jQuery("[name='update_cart']").trigger("click");
			});
		</script>
<?php
	}
}
