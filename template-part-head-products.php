<?php global $dm_settings; ?>




<div class="container dmbs-container">

<header>

    <div class="logo-left">
      <a href="<?php echo get_settings('home'); ?>">  
      <img src="<?php bloginfo('template_directory'); ?>/img/logo-left.png" srcset="<?php bloginfo('template_directory'); ?>/img/logo-left.png 1x, <?php bloginfo('template_directory'); ?>/img/logo-left@2x.png 2x" class="img-responsive" alt="New Preston Kitchen Goods">
    </a>

    </div>


    <div class="section-box">
     <?php $img = get_template_directory_uri() . '/img/box-products' ?>
      <img src="<?php echo $img; ?>.png" srcset="<?php echo $img; ?>.png 1x, <?php echo $img; ?>@2x.png 2x" class="img-responsive">
    </div>

</header>
