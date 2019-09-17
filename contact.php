<section class="wrapper_approach padding-top--big padding-bottom--medium" id="contact">
        <div class="approach_titles">
            <h3 class="sectionTitle"><?php the_field('contact-section'); ?></h3>
            <h1 class="firstTitle"><?php the_field('contact-titre'); ?></h1>
        </div>
        <div class="contact_flexbox">
            <div class="box_right">
                <div class="texte margin-top--medium">
                <?php the_field('contact-texte'); ?>
                    <div class="partenaire_flexbox margin-top--medium">
                                    <img class="partenaire" src="<?php bloginfo('template_url'); ?>/assets/images/phone.png" alt="partenaire">
                                    <h2 class="sectionTitle"><?php the_field('phone'); ?></h2>           
                    </div>
                    <div class="partenaire_flexbox margin-top--small margin-bottom--medium">
                                    <img class="partenaire" src="<?php bloginfo('template_url'); ?>/assets/images/lettre.png" alt="partenaire">
                                    <h2 class="sectionTitle"><?php the_field('mail'); ?></h2>           
                    </div>
                </div>
               
            </div>
            <div class="box_left box-shadow">
                <div class="box_margin">
                    <h1 class="firstTitle padding-top--small padding-bottom--small"><?php the_field('contact-form-title'); ?></h1>
                    <?php echo do_shortcode( '[contact-form-7 id="17" title="Formulaire de contact 1"]' ); ?>
                </div>
            </div>
        </div>
</section>