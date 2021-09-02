<section class="nos-fondue">
	<div class="container-fluid py-5 mt-5">

		<div class="row d-flex flex-column-reverse flex-lg-row flex-wrap">
			<div class="col-lg-3 products-hero__textbox">
				<img src="<?php echo get_template_directory_uri(). '/_assets/img/shop-page/icons/01.svg' ?>" class="products-hero__textbox__svg_number">

				<h3>Nos fondue</h3>
				<p class="__descproduct">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Phasellus consequat tellus eu accumsan mollis. Phasellus sit amet bibendum velit. 
					Curabitur suscipit efficitur erat. Pellentesque posuere id massa quis gravida. 
					Aenean 
				</p>
				<div class="d-inline-flex align-items-center ">
					<a href="#"  class="d-inline-flex align-items-center">
						<p class="">NOS PACKS FONDUE</p> 
						<svg class="svg-icon" width="41.134" height="41" viewBox="0 0 41.134 41">
							<g id="Component_2_1" data-name="Component 2 – 1" transform="translate(0.5 0.5)">
								<rect id="bg" width="40.134" height="40" rx="20" fill="none" stroke="#bf8175" stroke-width="1"/>
								<path id="Path_118" data-name="Path 118" d="M473.849,6742.681l7.071-6.928,7.071,6.928" transform="translate(6760.828 -460.92) rotate(90)" fill="none" stroke="#bf8175" stroke-linecap="round" stroke-width="3"/>
							</g>
						</svg>    
					</a>
				</div>
				<p class="red-text">Livré dans votre boîte aux lettres</p>
			</div>
			<div class=" col-lg-9">
				<div id="slider1">
				<div class="MS-controls d-flex ml-auto product__arrows w-100">
						<button class="MS-left ml-auto">						
							<svg class="ml-auto" width="65.676" height="8.038" viewBox="0 0 65.676 8.038">
								<g id="Component_2_1" data-name="Component 2 – 1" transform="translate(1.4 1.414)">
									<path id="Path_121" data-name="Path 121" d="M63,0H0" transform="translate(1.276 2.605)" fill="none" stroke="#020202" stroke-width="2"></path>
									<path id="Path_122" data-name="Path 122" d="M0,2.552,2.6,0l2.6,2.552" transform="translate(0 5.21) rotate(-90)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
								</g>
							</svg>
						</button>
						<button class="MS-right">					
							<svg width="65.676" height="8.038" viewBox="0 0 65.676 8.038">
								<g id="Component_3_1" data-name="Component 3 – 1" transform="translate(0 1.414)">
									<g id="Group_57" data-name="Group 57" transform="translate(64.276 5.21) rotate(180)">
									<path id="Path_121" data-name="Path 121" d="M63,0H0" transform="translate(1.276 2.605)" fill="none" stroke="#020202" stroke-width="2"></path>
									<path id="Path_122" data-name="Path 122" d="M0,2.552,2.6,0l2.6,2.552" transform="translate(0 5.21) rotate(-90)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
									</g>
								</g>
							</svg>
					</button>
				</div>		
					<div class="MS-content">
						<!-- PRODUCT  -->
						<div class=" item">
							<div class="ibox">
								<div class="ibox-content product-box _icon-extra">
								<?php $product_DI = 144; //Product ID
									$proda11 = new WC_Product($product_DI);
									?>
									<div class="product-image">
										<?php echo $proda11->get_image($size = 'shop_thumbnail'); ?>
									</div>
									<div>
										<a href="<?php echo $proda11->get_permalink(); ?>" class="product-name"><?php echo $proda11->get_title(); ?></a>
										<strong>Dès <?php echo $proda11->get_price(); ?>chf</strong> <span>pour 2 pers.</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END PRODUCT -->
						<!-- PRODUCT  -->
						<div class="item">
							<div class="ibox">
								<div class="ibox-content product-box _icon-extra">
								<?php $product_DI = 139; //Product ID
									$proda21 = new WC_Product($product_DI);
									?>
									<div class="product-image">
										<?php echo $proda21->get_image($size = 'shop_thumbnail'); ?>
									</div>
									<div>
										<a href="<?php echo $proda21->get_permalink(); ?>" class="product-name"><?php echo $proda21->get_title(); ?></a>
										<strong>Dès <?php echo $proda21->get_price(); ?>chf</strong> <span>pour 2 pers.</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END PRODUCT -->				
						<!-- PRODUCT  -->
						<div class="item">
							<div class="ibox">
								<div class="ibox-content product-box _icon-extra">
								<?php $product_DI = 136; //Product ID
									$proda31 = new WC_Product($product_DI);
									?>
									<div class="product-image">
										<?php echo $proda31->get_image($size = 'shop_thumbnail'); ?>
									</div>
									<div>
										<a href="<?php echo $proda31->get_permalink(); ?>" class="product-name"><?php echo $proda31->get_title(); ?></a>
										<strong>Dès <?php echo $proda31->get_price(); ?>chf</strong> <span>pour 2 pers.</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END PRODUCT -->		
					</div>		

				</div>
			</div>
		</div>
	</div>
	</div>
</section> 
