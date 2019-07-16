
   <section class="service padding-top--big" id="about">
        <div class="service_titles">
            <h3 class="sectionTitle"><?php the_field('about-section'); ?></h3>
              <h1 class="firstTitle"><?php the_field('about-titre'); ?></h1>
              <?php the_field('about-texte'); ?>
        </div>

      <div class="flex_wrappar margin-bottom--medium margin-top--medium">
        <div class="team_mate_flexbox">
            <div class="box_image">
                <?php $evrard = get_field('evrard-img');
                  if( !empty($evrard) ): ?>
                    <img class="mate_img ev" src="<?php echo $evrard['url']; ?>" alt="<?php echo $evrard['alt']; ?>"">
                <?php endif; ?>
            </div>
            <div class="box_description">
                <div class="mate_description evrard">
                    <?php the_field('evrard-texte'); ?>
                    <h2 class="mate_name"><?php the_field('evrard-name'); ?></h2>
                    <h3 class="mate_job_title"><?php the_field('evrard-statut'); ?></h3>
                    <a href="https://www.linkedin.com/in/evrard-de-visscher-791000b4/"><img src="<?php bloginfo('template_url'); ?>/assets/images/in.png" alt="logo"></a>
                </div>
            </div>
        </div>

        <div class="team_mate_flexbox reverse">
            <div class="box_image">
                <?php $audrey = get_field('audrey-img');
                    if( !empty($audrey) ): ?>
                      <img class="mate_img aud" src="<?php echo $audrey['url']; ?>" alt="<?php echo $audrey['alt']; ?>"">
                <?php endif; ?>
            </div> 
            <div class="box_description">
              <div class="mate_description audrey">
                  <?php the_field('audrey-texte'); ?>
                  <h2 class="mate_name"><?php the_field('audrey-name'); ?></h2>
                  <h3 class="mate_job_title"><?php the_field('audrey-status'); ?></h3>
                  <a href="https://www.linkedin.com/in/audrey-mertens/"><img src="<?php bloginfo('template_url'); ?>/assets/images/in.png" alt="logo"></a>
              </div>
            </div>
        </div>
      </div>
    </section>
