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
          <div class="col-md-5 left">
            
            <?php the_content(); ?>

          </div>
          <div class="col-md-7 right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2980.0518330088867!2d-73.35824368461431!3d41.6762239860024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e78c8edc6cb1db%3A0x93ceab5574a49414!2sNew+Preston+Kitchen+Goods!5e0!3m2!1sen!2sus!4v1445649467863" width="563" height="448" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>



        <?php endwhile; ?>
        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>

    </div><!-- end main -->

    <?php //get the right sidebar ?>
    <?php get_sidebar('right'); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
