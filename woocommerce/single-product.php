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

<<<<<<< HEAD
if (has_term('Composite', 'product_cat')) {
=======
if (has_term('Pack Fondue', 'product_cat') || has_term('Pack Fondue et Vins', 'product_cat') || has_term('Pack Raclete', 'product_cat')) {
>>>>>>> 924f08055c18e4ce4ed043f4c7f715eab220e4e1

	include_once "single-product-composite.php";

} else if (has_term('Gift-Card', 'product_cat')) {
	
	include_once "single-product-giftcard.php";

} else {
	
	include_once "single-product-default.php";

}
