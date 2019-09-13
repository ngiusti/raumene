<?php get_header(); ?>

<div class="body__inner">

    <?php while(have_posts()) {
        the_post(); ?>
        <h2 class=" blog-header--single"><?php the_title(); ?></h2>
        <div class="blog-content--single">
            <?php the_content(); ?>
        </div>
    <?php } ?>
    </div>
<?php
    get_footer(); 
 ?>