<section class="page">

<section class="acceuil_wrapper">
    <div class="acceuil_box_left">
        <div class="box_left_width_item">

            <h1 class="hometitle"><?php the_field('home-title'); ?></h1>
            <p class="paragraphe"><?php the_field('home-textarea'); ?></p>

            <a class="btn btn_blue margin-top--small margin-bottom--medium" href="#services">our services</a>
        </div>
    </div>
    <div class="parallax"></div>
    <div class="acceuil_box_right">
    <?php $image = get_field('background-image');
        if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"">
        <?php endif; ?>
        <div class="acceuil_box_middle">
            <img class="acceuil_box_middle_item" src="<?php bloginfo('template_url'); ?>/assets/images/Video2.png" alt="video">
        </div>
    </div>
</section>
