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
        <div class="col-md-12">
          <!-- now a loop to display all the events -->

            <?php
                // Contruct the loop
                // note: this is apparently key: set paged variable and add to query args
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var('paged') : 1;
                $args = array( 'post_type' => 'vintageitem', 'posts_per_page' => 60 , 'orderby' => 'date', 'order' => 'DESC' ,'paged' => $paged);
                $loop = new WP_Query( $args ); ?>

                <ul class="small-block-grid-2 large-block-grid-5">

                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <?php
                  // process some data from the fields
                  $event_date = get_field('event_date') ;
                  $fancy_date = date('F j, Y',strtotime($event_date));
                  if (get_field('display_date') != '') {
                      $print_date = get_field('display_date');
                  } else {
                      $print_date = $fancy_date;
                  }
                  if (get_field('event_time') != '') {
                      $time = get_field('event_time');
                  } else {
                      $time = 'TBA';
                } ?>

                <li>
                  <?php
                  if ( has_post_thumbnail() ) { the_post_thumbnail('full', array('class' => 'img-responsive')); } 
                    the_title( '<h4 class="vintage-title">', '</h4>' );
                    the_content();
                  ?>
                </li>


                <?php endwhile; ?>






        </div>
      </div>





    </div><!-- end main -->

    <?php //get the right sidebar ?>
    <?php get_sidebar('right'); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
