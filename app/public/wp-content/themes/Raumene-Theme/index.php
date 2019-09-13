<?php get_header(); ?>

<div class="body__inner">
    <h1 class="blog-title">Welcome to our Blog.</h1>

    <div>
        <?php while(have_posts()) {
            the_post(); ?>
            <div class="">
                <h2 class="blog-header"><a href="<?php the_permalink() ?>" class=""><?php the_title(); ?></a></h2>
                <div class="generic-content">
                    <div class="blog-content">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <div class="meta-box">
                    <a href="<?php the_permalink() ?>" class="blog-button">Continue Reading <i class="fas fa-arrow-circle-right"></i> </a>
                </div>
                
            </div>
        <?php }
        ?>
    </div>
    <?php 
        echo paginate_links(); 
    ?>
</div>

<?php
    get_footer(); 
 ?>