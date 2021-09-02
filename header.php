<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<?php wp_head();
  
 /* if ( is_account_page() ) { ?>

    <style type="text/css">
    
    .single .single-product div.product div.images.woocommerce-product-gallery, img{
      width: auto !important;
    }
    
    </style>
  
  <?php }*/ ?>
  
</head>

<?php wp_body_open(); ?>

<header>
    
<div class="nav-menu-total container">
  <div class="row">
    <nav class="navbar navbar-expand-lg fixed-top py-3 ">
      <div class="col-xs-6 col-sm-6  col-md-12 col-lg-4 d-inline-flex justify-content-between align-items-center justify-content-md-center">
        <div class="nav__item d-inline-flex align-items-center">
          <button type="button" id="menu_button" data-toggle="modal" data-target="#menuModal"
                  class="navbar-toggler navbar-toggler-right " onclick="trocaIcones()">              
              <div id="icon_menu_id" class="icon_menu"></div>
              <span>Menu </span>
          </button>
        </div>
        <div class="nav__item align-items-center d-flex d-lg-inline-flex">
            <button type="button" data-toggle="modal" id="products_button" data-target="#productsModal"
                    class="navbar-toggler navbar-toggler-right d-lg-inline-flex">
                    <div id="icon_products_id" class="icon_products"></div>
                    <span>Produits </span>  
            </button>
              
        </div>

          <!--- SEARCHG FORM-->
              <button type="submit" class="btn btn-default" id="search-button" data-toggle="modal" data-target="#searchModal">
                <svg width="16.396" height="16.983" viewBox="0 0 16.396 16.983">
                    <path id="search" d="M17.131,15.469l-4.042-4.2a6.854,6.854,0,1,0-5.248,2.449,6.783,6.783,0,0,0,3.928-1.241l4.073,4.236a.894.894,0,1,0,1.289-1.24ZM7.841,1.789A5.068,5.068,0,1,1,2.773,6.857,5.074,5.074,0,0,1,7.841,1.789Z" transform="translate(-0.984)"/>
                </svg>
              </button>
          <!-- END SEARCH FORM -->                 
      </div>   

      <div class="col-xs-6 col-sm-6  col-md-12 col-lg-4 navbar-brand ">
        <a href="<?php echo  home_url( '/' ); ?>">
          <?php  
            if(has_custom_logo()):
              the_custom_logo();  
            else:
              ?>
                <p class="site-title"><?php bloginfo('title'); ?></p>
                  
              <?php
            endif;
          ?> 
        </a> 
      </div>
      <div class="menu-items-woocommerce col-xs-6 col-sm-6 col-md-12 col-lg-4 text-right    d-lg-inline-flex">
          <div class="rocket ">
            <a href="#">Commande rapide
              <svg id="rocket"width="14.02" height="13.131" viewBox="0 0 14.02 13.131">
              <path id="Path_1" data-name="Path 1" d="M14.253,0A11.185,11.185,0,0,0,6.42,3.375,7.667,7.667,0,0,0,1.34,5.4a.262.262,0,0,0-.072.28.288.288,0,0,0,.236.185l2.251.3-.278.292a.261.261,0,0,0,.012.376l3.754,3.516a.307.307,0,0,0,.4.01l.311-.26.322,2.109a.28.28,0,0,0,.207.211.285.285,0,0,0,.084.012.342.342,0,0,0,.226-.088,6.72,6.72,0,0,0,2.144-4.74,9.856,9.856,0,0,0,3.6-7.337A.285.285,0,0,0,14.253,0ZM11.562,4.725a1.533,1.533,0,0,1-2.066,0,1.31,1.31,0,0,1,0-1.935,1.533,1.533,0,0,1,2.066,0A1.309,1.309,0,0,1,11.562,4.725Z" transform="translate(-0.521 -0.001)"/>
              <path id="Path_2" data-name="Path 2" d="M1.591,16.5c-.625.585-1.483,3.23-1.579,3.53a.262.262,0,0,0,.073.272.3.3,0,0,0,.207.08.318.318,0,0,0,.084-.011,15.565,15.565,0,0,0,3.768-1.479,1.618,1.618,0,0,0,0-2.392,1.9,1.9,0,0,0-2.553,0Z" transform="translate(0 -7.247)"/>
            </svg>
            </a>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              FR
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">EN</a>
            </div>
          </div>
 
        <?php if( class_exists( 'WooCommerce' ) ): ?>
          <?php if( is_user_logged_in() ): ?>
                <a class="nav-link-btn" href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>">Mon compte</a>
          <?php else: ?>
                <a class="nav-link-btn" href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>">
                  <svg width="32" height="32" viewBox="0 0 32 32">
                    <g id="Group_49" data-name="Group 49" transform="translate(154.141 311.933)">
                      <g id="Group_47" data-name="Group 47" transform="translate(-142.461 -301.989)">
                        <path id="Path_92" data-name="Path 92" d="M-85.918-293.07a4.465,4.465,0,0,1-4.46-4.46,4.465,4.465,0,0,1,4.46-4.46,4.465,4.465,0,0,1,4.46,4.46A4.465,4.465,0,0,1-85.918-293.07Zm0-7.684a3.228,3.228,0,0,0-3.224,3.224,3.228,3.228,0,0,0,3.224,3.224,3.228,3.228,0,0,0,3.224-3.224A3.228,3.228,0,0,0-85.918-300.753Z" transform="translate(90.378 301.989)"/>
                      </g>
                      <g id="Group_48" data-name="Group 48" transform="translate(-147.931 -292.152)">
                        <path id="Path_93" data-name="Path 93" d="M-128.69-189.773a.618.618,0,0,1-.6-.486,8.947,8.947,0,0,0-3.084-5,8.931,8.931,0,0,0-5.625-2,8.931,8.931,0,0,0-5.625,2,8.947,8.947,0,0,0-3.083,5,.618.618,0,0,1-.736.471.618.618,0,0,1-.471-.736,10.188,10.188,0,0,1,3.51-5.694,10.171,10.171,0,0,1,6.4-2.276,10.171,10.171,0,0,1,6.4,2.276,10.188,10.188,0,0,1,3.51,5.694.618.618,0,0,1-.471.736A.625.625,0,0,1-128.69-189.773Z" transform="translate(147.931 198.493)"/>
                      </g>
                    <g id="Path_97" data-name="Path 97" transform="translate(-154.141 -311.933)" fill="none">
                      <path d="M16,0A16,16,0,1,1,0,16,16,16,0,0,1,16,0Z" stroke="none"/>
                      <path d="M 16 1 C 11.99334907531738 1 8.226520538330078 2.560270309448242 5.393400192260742 5.393400192260742 C 2.560270309448242 8.226520538330078 1 11.99334907531738 1 16 C 1 20.00664901733398 2.560270309448242 23.77347946166992 5.393400192260742 26.60659980773926 C 8.226520538330078 29.43972969055176 11.99334907531738 31 16 31 C 20.00664901733398 31 23.77347946166992 29.43972969055176 26.60659980773926 26.60659980773926 C 29.43972969055176 23.77347946166992 31 20.00664901733398 31 16 C 31 11.99334907531738 29.43972969055176 8.226520538330078 26.60659980773926 5.393400192260742 C 23.77347946166992 2.560270309448242 20.00664901733398 1 16 1 M 16 0 C 24.8365592956543 0 32 7.163440704345703 32 16 C 32 24.8365592956543 24.8365592956543 32 16 32 C 7.163440704345703 32 0 24.8365592956543 0 16 C 0 7.163440704345703 7.163440704345703 0 16 0 Z" stroke="none" fill="#000"/>
                    </g>
                    </g>
                  </svg>
                </a>
          <?php endif; ?>										
                <a class="nav-cart" href="<?php echo wc_get_cart_url(); ?>">
                <svg id="Component_2_1" data-name="Component 2 – 1" xmlns="http://www.w3.org/2000/svg" width="40" height="37" viewBox="0 0 40 37">
                <svg id="Component_3_1" data-name="Component 3 – 1" xmlns="http://www.w3.org/2000/svg" width="40" height="37" viewBox="0 0 40 37">
                  <g id="Component_2_1" data-name="Component 2 – 1">
                    <g id="Path_98" data-name="Path 98" transform="translate(0 5)">
                      <path d="M 15.99999809265137 31.49999809265137 C 11.85979843139648 31.49999809265137 7.967408180236816 29.88771820068359 5.039838314056396 26.96014785766602 C 2.112277984619141 24.03258895874023 0.4999980926513672 20.14019775390625 0.4999980926513672 15.99999809265137 C 0.4999980926513672 11.85979843139648 2.112277984619141 7.967408180236816 5.039838314056396 5.039838314056396 C 7.967408180236816 2.112277984619141 11.85979843139648 0.4999980926513672 15.99999809265137 0.4999980926513672 C 20.14019775390625 0.4999980926513672 24.03258895874023 2.112277984619141 26.96014785766602 5.039838314056396 C 29.88771820068359 7.967408180236816 31.49999809265137 11.85979843139648 31.49999809265137 15.99999809265137 C 31.49999809265137 20.14019775390625 29.88771820068359 24.03258895874023 26.96014785766602 26.96014785766602 C 24.03258895874023 29.88771820068359 20.14019775390625 31.49999809265137 15.99999809265137 31.49999809265137 Z" stroke="none"/>
                      <path d="M 15.99999809265137 0.9999980926513672 C 11.99334716796875 0.9999980926513672 8.226518630981445 2.560268402099609 5.393398284912109 5.393398284912109 C 2.560268402099609 8.226518630981445 0.9999980926513672 11.99334716796875 0.9999980926513672 15.99999809265137 C 0.9999980926513672 20.00663757324219 2.560268402099609 23.77346801757812 5.393398284912109 26.60659790039062 C 8.226518630981445 29.43972778320312 11.99334716796875 30.99999809265137 15.99999809265137 30.99999809265137 C 20.00663757324219 30.99999809265137 23.77346801757812 29.43972778320312 26.60659790039062 26.60659790039062 C 29.43972778320312 23.77346801757812 30.99999809265137 20.00663757324219 30.99999809265137 15.99999809265137 C 30.99999809265137 11.99334716796875 29.43972778320312 8.226518630981445 26.60659790039062 5.393398284912109 C 23.77346801757812 2.560268402099609 20.00663757324219 0.9999980926513672 15.99999809265137 0.9999980926513672 M 15.99999809265137 -1.9073486328125e-06 C 24.8365478515625 -1.9073486328125e-06 31.99999809265137 7.16343879699707 31.99999809265137 15.99999809265137 C 31.99999809265137 24.8365478515625 24.8365478515625 31.99999809265137 15.99999809265137 31.99999809265137 C 7.16343879699707 31.99999809265137 -1.9073486328125e-06 24.8365478515625 -1.9073486328125e-06 15.99999809265137 C -1.9073486328125e-06 7.16343879699707 7.16343879699707 -1.9073486328125e-06 15.99999809265137 -1.9073486328125e-06 Z" stroke="none" fill="#000"/>
                    </g>
                    <path id="Bag" d="M1801.222,30.332a.5.5,0,0,0-.507-.442h-2.543v-.973a3.055,3.055,0,0,0-6.1,0v.973h-2.543a.5.5,0,0,0-.506.442L1788,41.031a.473.473,0,0,0,.131.372.519.519,0,0,0,.375.159h13.224a.519.519,0,0,0,.375-.159.472.472,0,0,0,.131-.372Zm-8.136-1.415a2.037,2.037,0,0,1,4.069,0v.973h-4.069Zm-4.021,11.672.925-9.727h2.079V31.97a.962.962,0,0,0-.509.838,1.018,1.018,0,0,0,2.034,0,.962.962,0,0,0-.509-.838V30.862h4.069V31.97a.962.962,0,0,0-.509.838,1.018,1.018,0,0,0,2.034,0,.962.962,0,0,0-.509-.838V30.862h2.079l.924,9.727Z" transform="translate(-1779.318 -13.781)" fill="#fff"/>
                    <circle id="Ellipse_1" data-name="Ellipse 1" cx="9.5" cy="9.5" r="9.5" transform="translate(21)" fill="#fff"/>
                  </g>
                  <text id="_1" data-name="1" transform="translate(28 14)" font-size="12" 
                  font-family="Montserrat-Regular, Montserrat">
                  <tspan x="0" y="0"><?php echo WC()->cart->get_cart_contents_count(); ?></tspan></text>
                </svg>
              </svg>
              </span></a>
          <?php endif; ?>  
          </div>            
      </div> 
    </nav> 
    
</div>
<?php get_template_part( '/_inc/modal-search');?> 
<?php get_template_part( '/_inc/modal-products');?> 
<?php get_template_part( '/_inc/modal-menu');?> 


</header>

<body>

<script> 
    var menu_button = document.getElementById('menu_button').addEventListener("click", trocaIconesMenu);
    function trocaIconesMenu(){
      if(document.getElementById('productsModal').classList.contains('show')){
        eventFire(document.querySelector('#products_button'), 'click');  
      }
      if(document.getElementById('searchModal').classList.contains('show')){
        eventFire(document.querySelector('#search-button'), 'click');  
      }
      console.log('entrei');
      var icone = document.querySelector('#icon_menu_id').classList.toggle('icon_menu');
      var icone = document.querySelector('#icon_menu_id').classList.toggle('icon_menu--active');
      var changeColor = document.querySelector('#menu_button > span').classList.toggle('active_text');
    }

    var products_button = document.getElementById('products_button').addEventListener("click", trocaIconesProducts);
    function trocaIconesProducts(){
      if(document.getElementById('menuModal').classList.contains('show')){
        eventFire(document.querySelector('#menu_button'), 'click');  
        
      }
      if(document.getElementById('searchModal').classList.contains('show')){
        eventFire(document.querySelector('#search-button'), 'click');  
  
      }
      var icone = document.querySelector('#icon_products_id').classList.toggle('icon_products');
      var icone = document.querySelector('#icon_products_id').classList.toggle('icon_products--active');
      var changeColor = document.querySelector('#products_button > span').classList.toggle('active_text');
    }

    var products_button = document.getElementById('search-button').addEventListener("click", trocaIconesSearch);
    function trocaIconesSearch(){

      if(document.getElementById('menuModal').classList.contains('show')){
        eventFire(document.querySelector('#menu_button'), 'click');  
      }
      if(document.getElementById('productsModal').classList.contains('show')){
        eventFire(document.querySelector('#products_button'), 'click');  
      }

    }


  //simulate click
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


