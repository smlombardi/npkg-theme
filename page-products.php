<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">

    <?php //left sidebar ?>
    <?php get_sidebar( 'left' ); ?>

    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">





        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="row">
        <div class="toc-stripe cookware">
          <img src="<?php bloginfo('template_directory'); ?>/img/products-cookware.jpg" class="img-responsive" alt="" />
          <div class="ttl">Cookware<br>&amp; Bakeware</div>
          <?php wp_nav_menu( 'menu=cookware' ); ?>
        </div>
        <div class="toc-stripe tabletop">
          <img src="<?php bloginfo('template_directory'); ?>/img/products-tabletop.jpg" class="img-responsive" alt="" />
          <div class="ttl">Tabletop</div>

        </div>
        <div class="toc-stripe preparation">
          <img src="<?php bloginfo('template_directory'); ?>/img/products-preparation.jpg" class="img-responsive" alt="" />
          <div class="ttl">Preparation</div>
        </div>
        <div class="toc-stripe cooltools">
          <img src="<?php bloginfo('template_directory'); ?>/img/products-cooltools.jpg" class="img-responsive" alt="" />
          <div class="ttl">Cool Tools</div>
          <?php wp_nav_menu( 'menu=cooltools' ); ?>

        </div>
        <div class="toc-stripe misc last">
          <img src="<?php bloginfo('template_directory'); ?>/img/products-misc.jpg" class="img-responsive" alt="" />
          <div class="ttl">Miscellaneous</div>
        </div>
        </div>



        <?php endwhile; ?>
        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>

    </div><!-- end main -->

    <?php //get the right sidebar ?>
    <?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
