<section class="wrapper_approach padding-top--big" id="approach">
        <div class="approach_titles">
            <h3 class="sectionTitle"><?php the_field('methode-section'); ?></h3>
            <h1 class="firstTitle"><?php the_field('methode-titre'); ?></h1>
            <?php the_field('metode-texte'); ?>
        </div>

    <section class="timeline">
    <div class="container">
    
    <?php  while ( have_rows('methode-repeteur') ) : the_row(); ?>
        <div class="timeline-item">
        <div class="timeline-img"></div>
        <div class="timeline-content timeline-card js--fadeInRight">
            <div class="timeline-img-header ">
                <?php $methodo = get_sub_field('methodo-image');
                    if( !empty($methodo) ): ?>
                    <img class="landscape" src="<?php echo $methodo['url']; ?>" alt="<?php echo $methodo['alt']; ?>"">
                <?php endif; ?>
            <h2 class="firstTitle small"><?php the_sub_field('methodo-titre'); ?></h2>
            </div>
            <div class="date sectionTitleSmall"><?php the_sub_field('methodo-etape'); ?></div>
            <?php the_sub_field('methodo-texte'); ?>
        </div>
        </div>      
    <?php endwhile;?>

<!--
        <div class="timeline-item">
        <div class="timeline-img"></div>
        <div class="timeline-content timeline-card js--fadeInLeft">
            <div class="timeline-img-header">
            <img class="landscape" src="<?php bloginfo('template_url'); ?>/assets/images/devis.jpg" alt="audrey_picture">
            <h2 class="firstTitle small">L'Offre</h2>
            </div>
            <div class="date sectionTitleSmall">ETAPE 2</div>
            <p class="smallparagraphe">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
        </div>
        </div>   

        <div class="timeline-item">
        <div class="timeline-img"></div>
        <div class="timeline-content timeline-card js--fadeInRight">
            <div class="timeline-img-header">
            <img class="landscape" src="<?php bloginfo('template_url'); ?>/assets/images/design.jpg" alt="audrey_picture">
            <h2 class="firstTitle small">Le Design</h2>
            </div>
            <div class="date sectionTitleSmall">ETAPE3</div>
            <p class="smallparagraphe">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
        </div>
        </div>  

        <div class="timeline-item">
        <div class="timeline-img"></div>
        <div class="timeline-content timeline-card js--fadeInRight">
            <div class="timeline-img-header">
            <img class="landscape" src="<?php bloginfo('template_url'); ?>/assets/images/code.jpg" alt="audrey_picture">
            <h2 class="firstTitle small">Le Développement Web</h2>
            </div>
            <div class="date sectionTitleSmall">ETAPE 4</div>
            <p class="smallparagraphe">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
        </div>
        </div>  

        <div class="timeline-item">
        <div class="timeline-img"></div>
        <div class="timeline-content timeline-card js--fadeInRight">
            <div class="timeline-img-header">
            <img class="landscape" src="<?php bloginfo('template_url'); ?>/assets/images/onboarding.jpg" alt="audrey_picture">
            <h2 class="firstTitle small">Onboarding</h2>
            </div>
            <div class="date sectionTitleSmall">ETAPE 5</div>
            <p class="smallparagraphe">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
        </div>
        </div> 
     -->

        <div class="timeline-item margin-bottom--small padding-top--medium">
        <div class="timeline-center timeline-card js--fadeInRight">
            <div class="padding-top--small padding-bottom--small">
            <img class="logo_black" src="<?php bloginfo('template_url'); ?>/assets/images/logo_black.png" alt="logo">
            <h2 class="firstTitle small"><?php the_field('rdv-texte'); ?></h2>
            <a href="#contact" class="btn btn_white margin-top--small"><?php the_field('bouton'); ?></a>
            </div>
        </div>
        </div>

    </div>
    </section>
   
   
</section>

