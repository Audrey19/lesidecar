<?php get_header(); ?>

    <section class="projet_container padding-top--big padding-bottom--medium">
        <?php while ( have_posts() ) : the_post();?>
        <div class="projet_flex">
            <div class="projet_img">
                <div class="img">
                <picture>
                    <source srcset="<?php the_post_thumbnail_url('large'); ?>" media="(min-width: 1040px)">
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
                </picture>
                </div>
            </div>
            <div class="projet_content">
                <h1 class="firsyTitle"><?php the_title();?></h1> 
                <?php the_content();?>
            </div>
        </div>
        <?php endwhile;?>
    </section>


<?php get_footer(); ?>