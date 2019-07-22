<?php get_header(); ?>

<section class="header_blog padding-top--medium padding-bottom--medium">
    <h3 class="sectionTitle">Quoi de neuf?</h3>
<?php if ( have_posts() ) :?>
    <div class="blog_titles">
        <h1 class="firstTitl">Le Sidecar te souhaite une bonne lecture</h1>
        <a class="btn btn_blue filter">FILTER</a> 
    </div>
    <div class="article_menu">
            <p class="btn2" data-filtre=".category-e-commerce">E-commerce</p>
            <p class="btn2" data-filtre=".category-site-vitrine">site-vitrine</p>
    </div>

    <div class="blog_articles margin-top--small">
        <?php while ( have_posts() ) : the_post();?>
             <div id="<?php the_ID(); ?>" <?php post_class('article'); ?>>      
                <a href="<?php echo get_permalink(); ?>">   
                  <div class="blog_image">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('medium', array('class' => 'box-fit')); 
                        } ?>
                    </div>
                    <h1 class="blogTitle"><?php the_title();?></h1> 
                    <?php the_excerpt(); ?>
                </a>
            </div>
           
        <?php endwhile;?>
        </div>

<?php else :?>
    <p>oops no article!</p>

<?php endif;?>
</section>

<?php get_footer(); ?>