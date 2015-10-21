<?php
/**
 * Template Name: Product Display
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */?>



<?php get_header(); ?>

<?php get_template_part('template-part', 'head-products'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">

    <?php //left sidebar ?>
    <?php get_sidebar( 'left' ); ?>

    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">





        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="row">
        <div class="toc-stripe sub-stripe cookware first">
          <img src="<?php bloginfo('template_directory'); ?>/img/products-cookware.jpg" class="img-responsive" alt="" />
          <div class="ttl">Cookware<br>&amp; Bakeware</div>
          <?php wp_nav_menu( 'menu=cookware' ); ?>
        </div>
        <div class="toc-stripe sub-stripe product-box cookware second cookware-light">
          <div class="ttl"><?php the_title(); ?></div>
          <?php the_content(); ?>
        </div>

        <div class="hero-image">
            <?php
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
              the_post_thumbnail('full');
            } ?>
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
