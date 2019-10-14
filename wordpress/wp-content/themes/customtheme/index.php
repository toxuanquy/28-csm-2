<?php get_header(); ?>
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/img/image2.jpg" alt="" class="img-responsive">

        </div>
        <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/img/image4.jpg" alt="" class="img-responsive">

        </div>
        <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/img/image3.jpg" alt="" class="img-responsive">
        </div>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
<?php mini_blog_breadcrumbs() ?>
<div class="row">
    <div class="col-md-8">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php mini_blog_pagination() ?>
    </div>
    
    <?php get_sidebar() ?>
</div>
<?php get_footer(); ?>