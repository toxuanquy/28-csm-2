<?php
require_once get_template_directory() . '/wp-bootstrap-navlist-walker.php';
function custom_theme_assets() {
    wp_register_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-style');

    wp_register_style('swiper-style', get_template_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_style('swiper-style');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('bootstrap');
    
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/styles.css');
}
    add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

    //pots thumbnail 
    add_theme_support( 'post-thumbnails' );
    add_image_size('blog-thumbnail',700 ,350 , true);
    add_image_size('post-large',250 ,200 , true);

    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Header Menu' )); 
      }
      add_action( 'init', 'register_my_menu' );

      
      function mini_blog_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Sidebar', 'sidebar-mini' ),
            'id'            => 'sidebar-mini',
            'description'   => __( 'Ở đây sẽ chứa những widget của Mini Blog', 'sidebar-mini' ),
            'before_widget' => '<div id="%1$s" class="card my-4 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="card-header">',
            'after_title'   => '</h5>',
        ) );
    }
    add_action( 'widgets_init', 'mini_blog_widgets_init' );
    //wider
    function mini_blog_pagination() {
        global $wp_query;

        $pages = paginate_links( array(
                'format'        => '?paged=%#%',
                'current'       => max( 1, get_query_var('paged') ),
                'total'         => $wp_query->max_num_pages,
                'type'          => 'array',
                'prev_next'     => true,
                'prev_text'     => __('« Trước'),
                'next_text'     => __('Sau »'),
            )
        );

        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            $pagination = '<ul class="pagination justify-content-center mb-4">';
            foreach ( $pages as $page ) {
                $pagination .= "<li class='page-item'>$page</li>";
            }
            $pagination .= '</ul>';
        
            echo $pagination;
            
        }
    }
    //breadcrumbs 
    function mini_blog_breadcrumbs() {
        if(!is_home()) {
            echo '<nav class="breadcrumb">';
                echo '<div class="container">';

                echo '<a class="breadcrumb-item" href="'.home_url('/').'">Trang chủ</a>';
                if (is_category() || is_single()) {

                    $categories = wp_get_post_terms( get_the_id(), 'category' );

                    if ( $categories ):
                        foreach ( $categories as $category ): ?>
                            <a href="<?php echo get_term_link( $category->term_id, 'category' ); ?>"
                                class="breadcrumb-item">/ <?php echo $category->name; ?> /</a>
                        <?php endforeach;
                    endif;

                    if (is_single()) {
                        the_title('<span class="breadcrumb-item active">','</span>');
                    }
                } elseif (is_page()) {
                    the_title('<span class="breadcrumb-item active">','</span>');
                }
                echo '</div>';
            echo '</nav>';
        }
    }
    
