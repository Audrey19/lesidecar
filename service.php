<section class="wrapper_service margin-bottom--big" id="services">
    <img class="triangle" src="<?php bloginfo('template_url'); ?>/assets/images/mask_triangle.png" alt="logo">
    <div class="service">
        <div class="service_titles">
            <h3 class="sectionTitle"><?php the_field('service-section'); ?></h3>
            <h1 class="firstTitle"><?php the_field('service-title'); ?></h1>
            <?php the_field('service-textarea'); ?>
        </div>

        <div class="service_flexbox padding-top--medium padding-bottom--small">
        <?php  while ( have_rows('repeteur-service') ) : the_row(); ?>   
            <div class="service_item">
                <div class="service_item_content padding-bottom--small">
                <?php $logo = get_sub_field('box-logo');
                    if( !empty($logo) ): ?>
                        <img class="portfolio_image" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"">
                <?php endif; ?>
                    <h2><?php the_sub_field('box-section'); ?></h2>
                    <h1><?php the_sub_field('box-title'); ?></h1>
                    <?php the_sub_field('box-text'); ?>
                    <a href="#contact" class="btn btn_blue margin-top--small">Demander ce service</a>
                </div>
            </div>
        <?php endwhile;?>
            
        </div>
    </div>
</section>
