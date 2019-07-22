<?php get_header(); ?>

    <section class="article_container padding-top--medium padding-bottom--medium">
        <?php while ( have_posts() ) : the_post();?>
            <div class="article_img">
                <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('medium'); 
                }; ?>
            </div>
           <h1 class="firsyTitle head"><?php the_title();?></h1> 
            <?php the_content();?>
        <?php endwhile;?>
    </section>


<?php get_footer(); ?>