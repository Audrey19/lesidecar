<section class="wrapper_approach">
            <h3 class="sectionTitle"><?php the_field('partenaire-section'); ?></h3>
</section>

<section class="collabo_flexbox margin-top--medium">
            <div class="image_gauche">
                <img class="logo_black" src="<?php bloginfo('template_url'); ?>/assets/images/placeholder1.png" alt="logo">
                <div class="image_centre">
                    <img class="logo_black" src="<?php bloginfo('template_url'); ?>/assets/images/Placeholder2bis.png" alt="logo">
                </div>
            </div>

            <div class="text_droite">
                <div class="text_titles">
                    <h1 class="firstTitle"><?php the_field('partenaire-titre'); ?></h1>
                    <?php the_field('partenaire-texte'); ?>
                    <div class="partenaire_flexbox margin-top--medium">
                    <?php  while ( have_rows('partenaire-repeteur') ) : the_row(); ?>
                            <div class="image">
                                <?php $pp = get_sub_field('partenaire-image');
                                if( !empty($pp) ): ?>
                                    <img class="absolute" src="<?php echo $pp['url']; ?>" alt="<?php echo $pp['alt']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="partenaire">
                                <h2 class="sectionTitle"><?php the_sub_field('partenaire-title'); ?></h2>
                                <?php $web = get_sub_field('partenaire-website');
                                if( $web ): ?>
                                    <a href=<?php echo $web; ?> target="_blank">
                                        <?php the_sub_field('partenaire-name'); ?>
                                    </a>
                
                                <?php endif; ?>
                            </div>
                    <?php endwhile;?>

                    </div>
                </div>
            </div>
</section>