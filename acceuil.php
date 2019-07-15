

<section class="acceuil_wrapper">
    <div class="acceuil_box_left">
        <div class="box_left_item">
            <h1 class="hometitle"><?php the_field('home-title'); ?></h1>
             <?php the_field('home-textarea'); ?>
            <a class="btn btn_blue margin-top--medium margin-bottom--medium" href="#services"><?php the_field('bouton-home'); ?></a>
        </div>
    </div>

    <div class="parallax margin-bottom--medium">
        <?php $responsive = get_field('image-responsive');
        if( !empty($responsive) ): ?>
            <img class="parallax-image" src="<?php echo $responsive['url']; ?>" alt="<?php echo $responsive['alt']; ?>"">
        <?php endif; ?>
    </div>


    <div class="acceuil_box_right">
    <?php $image = get_field('background-image');
        if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"">
        <?php endif; ?>
    </div>

    <div class="acceuil_box_middle">
            <?php $images = get_field('red-image');
            if( !empty($images) ): ?>
                <img class="acceuil_box_middle_item" src="<?php echo $images['url']; ?>" alt="<?php echo $images['alt']; ?>"">
            <?php endif; ?>
    </div>

</section>

<!--<section class="acceuil_wrapper">
    <div class="acceuil_box_left">
        <div class="box_left_width_item">

            <h1 class="hometitle"><?php the_field('home-title'); ?></h1>
            <p class="paragraphe"><?php the_field('home-textarea'); ?></p>

            <a class="btn btn_blue margin-top--small margin-bottom--medium" href="#services"><?php the_field('bouton-home'); ?></a>
        </div>
    </div>
    <div class="parallax margin-bottom--medium"></div>
    <div class="acceuil_box_right">
    <?php $image = get_field('background-image');
        if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"">
        <?php endif; ?>
        <div class="acceuil_box_middle">
            <?php $images = get_field('red-image');
            if( !empty($images) ): ?>
                <img class="acceuil_box_middle_item" src="<?php echo $images['url']; ?>" alt="<?php echo $images['alt']; ?>"">
            <?php endif; ?>
        </div>
    </div>
</section>
-->
