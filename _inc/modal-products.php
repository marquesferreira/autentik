<!-- Modal -->
<style>
#productsModal{
    width: 100vw;
    height: 100%;
}


/**  MODAL  **/
@media screen and (min-width:991px){
    /* Nous sélectionos */
    .modal-body .row:nth-child(2) {
        display: flex;
        align-items: baseline;
        align-content: center;
        flex-direction: row;
        flex-wrap: nowrap;
    }
}

.modal-body{
    padding-top: 130px;
}

.modal.modal-fullscreen .modal-dialog {
  width: 100vw;
  height: 100vh;
  margin: 0;
  padding: 0;
  max-width: none; 
}

.modal.modal-fullscreen .modal-content {
  height: auto;
  height: 100vh;
  border-radius: 0;
  border: none; 
}

.modal.modal-fullscreen .modal-body {
  overflow-y: auto; 
}

.modal__subtittle {
    color: #bf8175;
    letter-spacing: 0.05em;
    font-size: 16px;
    line-height: 30px;
    width: 100%;
    max-width: 100%;
    text-align: center;
    margin-bottom:30px;
    font-weight:600;
}

@media screen and (min-width:768px){
    .modal__subtittle{
        text-align: left;
        font-size: 19px;
    }
}

@media screen and (min-width:1400px){
    .modal__subtittle{
        padding-top: 80px;
    }
}

@media screen and (min-width:1200px){
    .modal__subtittle{
        font-size: 24px;
        line-height: 40px;
    }
}

/************* CONTEUDO INTERNO MODAL *************/

/** Tous nos produits */
.modal__links h3{
    margin: 0 0 0 30px;
    padding-right: 29px;
    font-weight: 600;
    text-align: right;
    color: #000;
    font-size:17px;
}

.svg-icon{
    width: 30px;        
}

/** Link do Modal */
.modal__links p {
    font-family: 'Montserrat', sans-serif;
    font-weight:700;
    margin: 0 0 0 20px;
    display: flex;
    font-size:14px;
}

@media screen and (max-width:320px){
    .modal__links p{
        font-size:13px;
    }
}

@media screen and (min-width:768px){
    .modal__links p{
        margin: 0 0 0 10px;
        font-size: 15px;
    }
    .modal__links h3{
        margin: 0 0 0 35px;
        padding-right: 30px;
        font-size:18px;
        text-align:left;
    }
}

/** 4K */
@media screen and (min-width:2560px){
    .modal__links h3{
        font-size:35px;
    }
    .modal__links p{
        font-size:20px;       
    }
    .modal__subtittle {
        font-size: 35px;
        line-height: 60px;
    }  
}


.nav-menu-total{
    position: relative;
    z-index: 99999999;
}
#Component_3_1{
    margin-left: 6px;
}
 
@media screen and (min-width:1300px){
    .modal-body{
        padding-top: 160px;
    }
}

@media (min-width: 320px) and (max-width: 480px) {
    .modal__links{
        text-align: center;
    }
}


/** overlay image */
.middle {
  background: #BF8175;
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  width:100%;
  height:100%;
  display: flex;
  align-items: flex-end;
  padding: 0 0 15px 15px;
}
.product-image-modal:hover img{
  opacity: 0.8;
  filter: grayscale(100%);
}
.product-image-modal:hover .middle {
  opacity: 0.8;
}
 
.product-image-modal{
    position:relative;
    font-family: Mirador;
    font-weight: normal;
    font-size: 42px;
    line-height: 54px;
    text-align: left;
    color: #fff;
    margin-bottom: 20px;
    height: 240px;
    background-color:#eeeeee;
    overflow: hidden;
} 

@media screen and (min-width:991px){
    .product-image-modal{
        height:180px;
    }
}

@media screen and (min-width:1200px){
    .product-image-modal{
        height:210px;
    }
}

.product-image-modal img{
    width: 100%;
}

.modal .product-desc{
    padding:0;
}

.modal .product-name{
    text-align:center;
    color:#000;
    font-size:12px;
}

/*** Pack no modal ***/
@media screen and (min-width: 991px){
    .modal .product-name{
        text-align:left;
    }
}
</style>


<div class="modal fade modal-fullscreen" id="productsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <!-- inicio do modal -->
            <div class="modal-body">
            <!-- CONTAINER -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xl-8">
                            <div class="row">
                                <?php get_template_part('_inc/modal-parts/products-list');?>
                            </div>
                        </div>

                        <div class="col-lg-4 col-xl-4">
                        <!-- empty -->
                        </div>
                    </div><!-- row -->

                    <div class="row mt-5">
                        <div class="col-sm-7 col-lg-8 col-xl-8">
                            <div class="row">
                               <h3 class="modal__subtittle"> Nous sélectionons la haute qualité du terroir suisse
                                    et favorisons le savoir-faire artisanal et l’économie locale</h3>
                            </div>
                        </div>

                        <div class="col-sm-5 col-lg-4 col-xl-4 modal__links">
                            <a href="#">
                                <div class="d-inline-flex align-items-center">
                                    <h3>Tous nos produits</h3> 
                                    <svg class="svg-icon" width="41.134" height="41" viewBox="0 0 41.134 41">
                                        <g id="Component_2_1" data-name="Component 2 – 1" transform="translate(0.5 0.5)">
                                            <rect id="bg" width="40.134" height="40" rx="20" fill="none" stroke="#bf8175" stroke-width="1"/>
                                            <path id="Path_118" data-name="Path 118" d="M473.849,6742.681l7.071-6.928,7.071,6.928" transform="translate(6760.828 -460.92) rotate(90)" fill="none" stroke="#bf8175" stroke-linecap="round" stroke-width="3"/>
                                        </g>
                                    </svg>              
                                </div>
                            </a>

                            <a href="#">
                                <div class="d-inline-flex align-items-center modal__links">
                                <?php get_template_part( '_inc/svg/icon_produits' ); ?>

                                    <p>
                                        Livré dans votre boite à lait
                                        <?php get_template_part( '_inc/svg/icon_i' ); ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
           <!-- CONTAINER -->
            </div>
        </div>
    </div>
</div>       