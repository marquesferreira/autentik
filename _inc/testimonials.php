
<section id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1 section-tittle text-left">
                <h2>Leur expérience avec Autentik       
                    <div class="d-inline-flex">
                        <a class="test_prev_slide"> < </a> 
                        <a  class="test_next_slide"> > </a>
                    </div>
                </h2> 
            </div>
        </div><!-- end row -->

        <div class="row space-top">
            
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                <div class="owl-carousel owl-testimonials">
                <?php
                // Row Group
                    if( have_rows('testimonial') ):
                    while( have_rows('testimonial') ) : the_row(); ?>

                    <div class="item tBox"> 
                        <p class="f__montserrat">
                        <?php the_sub_field('testimonial_text'); ?>
                        </p> 
                        <div class="tBox_profilerow">
                            <img class="rounded-circle" src="<?php the_sub_field('avatar_image'); ?>" width="50" height="50" alt="testimonials profile"> 
                            <p class="f__lato"><?php the_sub_field('name'); ?> - <span> <?php the_sub_field('office'); ?></span></p>
                        </div>
                    </div>
                    <!-- end item tBox-->
                    
                    <?php endwhile; 
                    endif; ?>
                </div>
            </div>
            
        </div> <!-- end row -->       
    </div>    
</section>