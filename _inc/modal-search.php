<!-- Modal -->
<style>
   input[type^="search"]{
       border: none;
       border-bottom: 1px solid black;
       border-radius: none!important;
       display: inline-flex;
       width: 70%!important;
   }
    #searchModal .input-group{
        align-items: center;
        margin-bottom: 35px;
        width: 90%;
    }
    #searchModal h3.products__tittle {
        font-size:35px;
    }
    .input-group svg {
        position: absolute;
        right: 10px;
    }
    .input-group > .form-control:focus, .input-group > .custom-select:focus, .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
        z-index: 0!important;
        border: none!important;
        border-bottom: 1px solid #bf8175!important;
        box-shadow: none;
    }
    .input-group>.custom-file .custom-file-input:focus~.custom-file-label, .input-group>.custom-select:focus, .input-group>.form-control:focus ~ svg > path{
        fill: #bf8175;
        color: #bf8175;
    }
    #searchModal .modal__links{
        display: flex;
        flex-direction: column;
        align-content: space-between;
        justify-content: space-between;
        align-items: center;
    }
    #searchModal .modal__links a{
        width: 100%;
        text-align: right;
    }
    .modal__links ul{
        list-style: none;
    }
    #searchModal  .modal-body .row {
        max-width: 90%;
        padding-left: 6%;
        min-height: 60vh;
    }
    .modal__links ul li a {
        font-family: Montserrat;
        font-weight: bold;
        font-size: 18px;
        line-height: 28px;
        text-align: left;
        color: #000;
    }
    .modal__links ul li{
        margin-bottom: 20px;
    }
    .modal__links ul li a:hover{
        color: #bf8175;
        text-decoration: none;
    }
    #searchModal .__item{
        text-align: center;
        background: #ebebeb;
        width: 80px;
        height: 86px;
        padding-top: 11px;
    }
    #searchModal .__item img{
        width: 65px;
        height: 65px;       
    }
    #searchModal .__products{
        display: inline-flex;
        align-items: center;
        margin-top: 15px;
        margin-bottom: 15px;
        width: 100%;
    }
    .__item__description{
        margin-left: 30px;
    }
    .__item__description h6, .__item__description p{
        font-family: Montserrat;
        font-weight: bold;
        font-size: 16px;
        line-height: 28px;
        text-align: left;
        color: #000;
    }
    .__item__description p{
        color: #bf8175;
    }
    .__item__description a:hover{
        text-decoration: none;
    }
    #searchModal .form-control:focus{

    }

    .input-group > .form-control:not(:last-child), .input-group > .custom-select:not(:last-child){
        border-radius: 0px!important;
    }
        /* clears the ‘X’ from Internet Explorer */
    input[type=search]::-ms-clear { 
        display: none; width : 0; height: 0; 
    }
    input[type=search]::-ms-reveal { 
        display: none; width : 0; height: 0; 
    }
    /* clears the ‘X’ from Chrome */
    input[type="search"]::-webkit-search-decoration,
    input[type="search"]::-webkit-search-cancel-button,
    input[type="search"]::-webkit-search-results-button,
    input[type="search"]::-webkit-search-results-decoration { 
        display: none; 
    }


    /** !responsivo */
    @media (min-width: 320px) and (max-width: 480px){
        #searchModal .modal__links {
            text-align: left;
        }
        #searchModal ul{
            padding-inline-start: 0px;
        }
        #searchModal .modal__links {
            align-items: flex-start ;
        }
        #searchModal .input-group{
            align-items: center;
            margin-bottom: 35px;
            width: 100%;
        }
        #searchModal .modal-body .row {
            max-width: 100%;
            min-height: 60vh;
            height:100%;
        }
        #searchModal .mb-5{
            margin-bottom: 0px;
        }
        #searchModal .mt-5,  #searchModal .my-5 {
            margin-top: 2rem !important;
        }
        .modal__links ul li {
            margin-bottom: 10px;
        }
        .modal__links ul li a {
            font-size: 15px;
            line-height: 8px;
        }
        #searchModal .modal-body {
                padding-top: 160px;
        }
    }

</style>
<div class="modal  fade modal-fullscreen" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body container-fluid">
            <div class="row">
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                <form action="/" method="get" autocomplete="off">
                    <div class="input-group">
                        <input type="search" name="searchProducts" id="keyword" class="form-control" value="" required="required" onkeyup="fetch()">
                            <svg width="16.396" height="16.983" viewBox="0 0 16.396 16.983">
                                <path id="search" d="M17.131,15.469l-4.042-4.2a6.854,6.854,0,1,0-5.248,2.449,6.783,6.783,0,0,0,3.928-1.241l4.073,4.236a.894.894,0,1,0,1.289-1.24ZM7.841,1.789A5.068,5.068,0,1,1,2.773,6.857,5.074,5.074,0,0,1,7.841,1.789Z" transform="translate(-0.984)"/>
                            </svg>
                        </input>
                    </div>
                    </form>
                    <div class="search_result" id="datafetch">

                    </div>
                </div>
                
                <div class="col-lg-5 modal__links mt-4 mb-5">
                    <ul>
                        <li>
                            <a href="/categoria-produto/composite/">Packs Fondue AOP</a>
                        </li>
                        <li>
                            <a href="/categoria-produto/pack-fondue-et-vins/">Packs Fondue AOP & Vin</a>
                        </li>
                        <li>
                            <a href="/categoria-produto/pack-raclete/"> Packs Raclette AOP</a>
                        </li>
                        <li>
                            <a href="/categoria-produto/pack-raclete/aop-fr-vin/">Packs Raclette AOP & Vin</a>
                        </li>
                    </ul>
                    <a href="#">
                        <div class="d-inline-flex align-items-center ">
                            
                                <h3 class="products__tittle">Tous Nos produits</h3> 
                                <svg class="svg-icon" width="41.134" height="41" viewBox="0 0 41.134 41">
                                    <g id="Component_2_1" data-name="Component 2 – 1" transform="translate(0.5 0.5)">
                                        <rect id="bg" width="40.134" height="40" rx="20" fill="none" stroke="#bf8175" stroke-width="1"/>
                                        <path id="Path_118" data-name="Path 118" d="M473.849,6742.681l7.071-6.928,7.071,6.928" transform="translate(6760.828 -460.92) rotate(90)" fill="none" stroke="#bf8175" stroke-linecap="round" stroke-width="3"/>
                                    </g>
                                </svg>              
                        </div>
                    </a>
                </div>               
        </div>
            
      </div>
    </div>
  </div>
</div>
