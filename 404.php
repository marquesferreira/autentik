<?php
get_header();?>

<section class="page__intern mr-auto ml-auto mb-100">
    <div class="container text-center">
      <div class="row">
        <div class="d-none d-md-block col-md-6 col-lg-6">
        <?php get_template_part('icons/loading_svg');?>
        </div>

        <div class="col-12 col-md-6 col-lg-6">
          <div class="error-page-content">
            <h1>Oops!</h1>
            <p class="tittle-sub">This page doesn't exist.</p>
          </div>
        </div>
      </div>
  	</div>
</section>

<?php
get_footer();?>