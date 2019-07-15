<section class="portfolio padding-top--small padding-bottom--big" id="portfolio">
    <div class="portfolio_titles">
        <h3 class="sectionTitle"><?php the_field('section-title'); ?></h3>
        <h1 class="firstTitle"><?php the_field('first-title'); ?></h1>
        <p class="paragraphe"><?php the_field('portfolio_textarea'); ?></p>
    </div>

    <div class="portfolio_flexbox margin-top--medium">
    <?php  while ( have_rows('repeteur') ) : the_row(); ?>
        <div class="flexbox_item">
            <?php $back = get_sub_field('background-image');
            if( !empty($back) ): ?>
                <img class="portfolio_image" src="<?php echo $back['url']; ?>" alt="<?php echo $back['alt']; ?>"">
            <?php endif; ?>
            <div class="btn_circle absolute">></div>
            <div class="hover_box fade-in">
                <div class="hover_text">
                    <h1><?php the_sub_field('project-title'); ?></h1>
                    <h2><?php the_sub_field('project-subtitle'); ?></h2>
                    <?php the_sub_field('project-textarea'); ?>
                    <?php $link = get_sub_field('project-link');
                        if( $link ): ?>
                        <a class="btn btn_white" href="<?php echo $link; ?>" target="_blank"><?php the_sub_field('bouton-text'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile;?>
    <div class="flexbox_item"></div>  
    <div class="flexbox_item"></div>  
    </div>
</section>