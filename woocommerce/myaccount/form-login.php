<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<div class="container" id="customer_login">
	<div class="row">

	<div class="u-column1 col-12 col-lg-6">

<?php endif; ?>

		<h2><?php esc_html_e( 'Login', 'woocommerce' ); ?></h2>

		<form class="woocommerce-form woocommerce-form-login login " method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>
			<div class="form__title">
				<span>SE CONNECTER</span>
				<h3>Vous êtes déjà client?</h3>
			</div>
		<div class="d-inline-flex form__row">
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="Votre adresse email" id="username" placeholder="Votre adresse email" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" placeholder="Mot de passe" id="password" autocomplete="current-password" />
			</p>

			</div>
			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit d-inline-flex align-items-center" name="login" value="">
				<svg id="Component_4_1" data-name="Component 4 – 1" xmlns="http://www.w3.org/2000/svg" width="40.134" height="40" viewBox="0 0 40.134 40">
					<rect id="bg" width="40.134" height="40" rx="20" fill="#fff" opacity="0.758"/>
					<g id="Group_163" data-name="Group 163" transform="translate(14.785 7.162)">
						<path id="Path_92" data-name="Path 92" d="M-85.1-291.43a5.286,5.286,0,0,1-5.28-5.28,5.286,5.286,0,0,1,5.28-5.28,5.286,5.286,0,0,1,5.28,5.28A5.286,5.286,0,0,1-85.1-291.43Zm0-9.1a3.821,3.821,0,0,0-3.817,3.817,3.821,3.821,0,0,0,3.817,3.817,3.821,3.821,0,0,0,3.817-3.817A3.821,3.821,0,0,0-85.1-300.526Z" transform="translate(90.379 301.989)" fill="#363944"/>
					</g>
					<g id="Group_164" data-name="Group 164" transform="translate(8.311 18.808)">
						<path id="Path_93" data-name="Path 93" d="M-125.152-188.17a.732.732,0,0,1-.714-.575,10.592,10.592,0,0,0-3.651-5.92,10.574,10.574,0,0,0-6.659-2.366,10.574,10.574,0,0,0-6.659,2.366,10.592,10.592,0,0,0-3.651,5.92.732.732,0,0,1-.871.558.731.731,0,0,1-.558-.871,12.061,12.061,0,0,1,4.156-6.741,12.041,12.041,0,0,1,7.583-2.694,12.041,12.041,0,0,1,7.583,2.694,12.061,12.061,0,0,1,4.156,6.741.731.731,0,0,1-.558.871A.74.74,0,0,1-125.152-188.17Z" transform="translate(147.932 198.493)" fill="#363944"/>
					</g>
				</svg>
				<p class="f__montserrat">Se connecter</p>
				</button>
			</p>
			<div class="form__bottom"></div>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ">
				<a href="#">
				<div class="d-inline-flex align-items-center form__footer ">
					<svg id="Component_2_1" data-name="Component 2 – 1" xmlns="http://www.w3.org/2000/svg" width="40.134" height="40" viewBox="0 0 40.134 40">
						<rect id="bg" width="40.134" height="40" rx="20" fill="#fff" opacity="0.758"/>
						<path id="Path_217" data-name="Path 217" d="M0,6.176,6.3,0l6.3,6.176" transform="translate(24.859 12.5) rotate(90)" fill="none" stroke="#363944" stroke-linecap="round" stroke-width="2"/>
					</svg>
						<span>Acheter sans inscription</span>
					</div>
				<a>
			</p>
			<p class="woocommerce-LostPassword lost_password">
			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	</div>

	<div class="u-column2 col-12 col-lg-6">

		<h2><?php esc_html_e( 'Register', 'woocommerce' ); ?></h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

			<?php do_action( 'woocommerce_register_form_start' ); ?>
			<div class="form__title">
				<span>S’INSCRIR</span>
				<h3>C’est votre première fois?</h3>
			</div>
			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
					 id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<!--
				backup do campo de emal do woocomerce
				 <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>
			 -->
			 <div class="d-inline-flex form__row">
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="Votre nom" id="username" placeholder="Votre adresse email" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="Votre prénom" placeholder="Votre prénom" id="Votre prénom" autocomplete="current-password" />
			</p>

			</div>
			<div class="d-inline-flex form__row">
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="Votre adresse email" id="username" placeholder="Votre adresse email" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="Mot de passe" placeholder="Mot de passe" id="password" autocomplete="current-password" />
			</p>

			</div>
			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
				</p>

			<?php else : ?>

	

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-form-row form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit"
				 name="register">
					<svg id="Component_3_1" data-name="Component 3 – 1" xmlns="http://www.w3.org/2000/svg" width="40.134" height="40" viewBox="0 0 40.134 40">
						<rect id="bg" width="40.134" height="40" rx="20" opacity="0.448"/>
						<line id="Line_30" data-name="Line 30" y2="16.208" transform="translate(20.067 11.896)" fill="none" stroke="#eaeaea" stroke-linecap="round" stroke-width="1.5"/>
						<line id="Line_31" data-name="Line 31" y2="16.208" transform="translate(28.171 20) rotate(90)" fill="none" stroke="#eaeaea" stroke-linecap="round" stroke-width="1.5"/>
						</svg>
					<span>Créer mon compte</span>
				</button>
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
