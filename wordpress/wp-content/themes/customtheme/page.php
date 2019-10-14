<?php get_header(); ?>
<div class="banner">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content-page', get_post_format() ); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
<?php get_footer(); ?>