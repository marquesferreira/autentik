<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */
?>
<div class="container account-ranks">
	<div class="row">
		<div class="account-level-information col-12 col-lg-3 text-center">
			<?php
			echo "Parabéns, você está no:";
			echo "<br><br>";
			echo do_shortcode("[mycred_my_rank show_title=1 show_logo=1 first=0]");
			//Points balance
			$totalbalance = do_shortcode("[mycred_my_balance wrapper=0]");
			$mytotalbalance = str_replace('<div>', '', $totalbalance);
			$mytotalbalance = str_replace('</div>', '', $mytotalbalance);
			// Trees planted balance
			$totaltrees = do_shortcode("[mycred_my_balance type='mycred_trees' wrapper=0]");
			$mytotaltrees = str_replace('<div>', '', $totaltrees);
			$mytotaltrees = str_replace('</div>', '', $mytotaltrees);

			?>
		</div>
		<div class="account-mypoints-information col-12 col-lg-3 text-center">
		    <span>Pontos Atuais</span><br>
			<span class="myaccount-myrank-points"><?php echo $mytotalbalance; ?></span><br>
			<span>Árvores plantadas</span><br>
			<span class="myaccount-myrank-trees"><?php echo $totaltrees; ?></span>
		</div>
		<div class="account-mypoints-status col-12 col-lg-6 text-center">
			<span>
			<?php
				echo "Confira seu progresso para o próximo nível:";
				echo "<br><br>";
				echo do_shortcode("[mycred_my_ranks_progress animate=0 show_logo='no' bgcolor='#000000'  prefix_max='Próximo nível'  show_labels=1 show_rank_title=0]");
				echo "Continue comprando para avançar!";
				?>
			</span>
		</div>
	</div>
</div> 
<?php
defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
?>

<?php
do_action( 'woocommerce_account_navigation' ); ?>



<div class="woocommerce-MyAccount-content">
	<div class="container">
	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
	</div>
</div>

