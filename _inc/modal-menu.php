<!-- Modal -->
<style>
.modal-produits h3{
  /** Title Nos Produits */
  margin:0;
  font-weight: 600;
  text-align: right;
  color: #000;
  font-size:20px;
}
@media screen and (min-width:991px){
  .modal-produits h3{
    font-size:30px;
  }
}

.modal-produits h2 {
  text-align: left;
  padding-top: 0px;
  font-family: 'Montserrat', sans-serif;
  font-weight: bold;
  font-size: 14px;
  line-height: 28px;
  text-align: left;
  color: #000;
}
 
#menuModal .menu__list a{
  font-family: Montserrat;
  font-weight: 500;
  font-size: 13px;
  line-height: 28px;
  text-align: left;
  color: #000;
  opacity: 0.63;

}
.menu__list{
  padding-inline-start: 0px;
  list-style: none;
}
.modal__social{
  justify-content: flex-start;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
}
.modal__social a{
  margin-right:30px;
}
.modal__productsPack__tittle span:nth-child(1){
  font-family: Mirador;
  font-weight: normal;
  font-size: 37px;
  line-height: 48px;
  text-align: left;
  color: #000;
  opacity: 0.36;
  margin-bottom:10px;
}
.modal__productsPack__tittle span:nth-child(2){
  font-family: Montserrat;
  font-weight: bold;
  font-size: 16px;
  line-height: 22px;
  text-align: left;
  color: #000;
  opacity: 0.36;
}
.modal__productsPack__tittle:nth-child(2){
  margin-left:20px;
}
@media (min-width: 1600px) {
  .modal-produits h2 {
    text-align: left;
    padding-top: 0px;
    font-family: Montserrat;
    font-weight: bold;
    font-size: 18px;
    line-height: 28px;
    text-align: left;
    color: #000;
  }
}

/** Row Marques  **/
.row-marques p{
  margin:0;
  font-weight:800;
  font-size:14px;
}
.row-marques span{
  font-size:13px;
}
.row-marques .svg-icon{
  width: 30px;
}

@media screen and (min-width:991px){
  .row-marques .svg-icon{
    width: 45px;
  }
}

.modal-produits #icon_i{
  width: 12px;
  position: relative;
  top: -10px;
}
</style>
<div class="modal modal-produits fade modal-fullscreen" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">

      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-8 col-md-8 col-lg-8">
            <?php get_template_part('_inc/modal-parts/menu-list');?>
          </div>

          <div class="col-12 col-sm-4 col-md-4">
          <?php get_template_part('_inc/modal-parts/social-list');?>
          </div>
        </div> <!-- ROW -->
              
        <div class="row mt-5">
            <div class="col-md-8 col-lg-8 col-xl-7">
                <h4 class="modal__subtittle">
                    Nous sélectionons la haute qualité du terroir suisse
                    et favorisons le savoir-faire artisanal et l’économie locale
                </h4>
            </div>

            <div class="col-md-4 col-lg-4 col-xl-3 offset-xl-1 modal__links">
              <a href="#">
                <div class="d-inline-flex align-items-center ">                          
                    <h3 class="products__tittle">Nos produits</h3> 
                    <svg class="svg-icon" width="41.134" height="41" viewBox="0 0 41.134 41">
                        <g id="Component_2_1" data-name="Component 2 – 1" transform="translate(0.5 0.5)">
                            <rect id="bg" width="40.134" height="40" rx="20" fill="none" stroke="#bf8175" stroke-width="1"/>
                            <path id="Path_118" data-name="Path 118" d="M473.849,6742.681l7.071-6.928,7.071,6.928" transform="translate(6760.828 -460.92) rotate(90)" fill="none" stroke="#bf8175" stroke-linecap="round" stroke-width="3"/>
                        </g>
                    </svg>              
                </div>
              </a>

              <div class="modal__productsPack d-inline-flex">
                <div class="d-flex flex-column modal__productsPack__tittle">
                  <span>01</span>
                  <span>Pack Fondue</span>
                </div>

                <div class="d-flex flex-column modal__productsPack__tittle">
                  <span>02</span>
                  <span>Pack Raclette</span>
                </div>
              </div>        
            </div><!-- modal__links -->
        </div>
      </div>
    </div>
  </div>
</div>
<script>
     function trocaIcones(){
       var icone = document.getElementById('icon_menu').classList.toggle('.icon_menu');
       var icone = document.getElementById('icon_menu').classList.toggle('.icon_menu--active');
     }
     var menu_button = document.getElementById('menu_button').addEventListener("click", trocaIcones);
</script>