<?php get_header(); ?>

<section class="header_blog padding-top--medium padding-bottom--medium">
    <h3 class="sectionTitle">Quoi de neuf?</h3>
<?php if ( have_posts() ) :?>
        <h1 class="firstTitl">Le Sidecar te souhaite une bonne lecture</h1>
    <div class="blog_titles">
        <div class="search_container">
        <?php get_search_form();?>
        <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
        </div>
        <a class="btn btn_blue filter">FILTER</a> 
    </div>
    <ul class="article_menu">
        <?php $categories = get_categories(); ?>
        <?php foreach ($categories as $object){?>
            <li class="btn2" data-filtre=".category-<?php echo $object->slug; ?>"><?php echo $object->slug;?></li>
        <?php }?>
    </ul>

    <div class="blog_articles margin-top--medium">
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