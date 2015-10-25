<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">

    <?php //left sidebar ?>
    <?php get_sidebar('left'); ?>

    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">


        <?php // theloop
        if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="row">
          <div class="col-md-12 ">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
      <?php else: ?>

          <?php get_404_template(); ?>

      <?php endif; ?>

      <div class="row">
        <div class="col-md-12 indented">
          <!-- now a loop to display all the events -->

            <?php
                // Contruct the loop
                // note: this is apparently key: set paged variable and add to query args
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var('paged') : 1;
                $args = array( 'post_type' => 'vintageitem', 'posts_per_page' => 60 , 'orderby' => 'date', 'order' => 'DESC' ,'paged' => $paged);
                $loop = new WP_Query( $args ); ?>

                <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-5">

                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <li class="vintage-item">
                  <?php
                  if ( has_post_thumbnail() ) { the_post_thumbnail('full', array('class' => 'img-responsive')); }
                    the_title( '<h4 class="vintage-title">', '</h4>' );?>
                    <?php the_content(); ?>
                    <div class="price"><?php the_field('price'); ?></div>
                </li>

                <?php endwhile; ?>
              </ul>

        </div>
      </div>

    </div><!-- end main -->

    <?php //get the right sidebar ?>
    <?php get_sidebar('right'); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
