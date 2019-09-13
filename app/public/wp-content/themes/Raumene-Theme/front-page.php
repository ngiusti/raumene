<?php get_header(); ?>

<div class="body__inner">

    <?php while(have_posts()) {
        the_post(); ?>
        <?php the_content(); ?>
    <?php } ?>

    </div>
<?php
    get_footer(); 
 ?>