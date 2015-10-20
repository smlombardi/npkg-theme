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
        <div class="toc-stripe cookware">&nbsp;</div>
        <div class="toc-stripe tabletop">&nbsp;</div>
        <div class="toc-stripe preparation">&nbsp;</div>
        <div class="toc-stripe cooltools">&nbsp;</div>
        <div class="toc-stripe misc last">&nbsp;</div>
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
