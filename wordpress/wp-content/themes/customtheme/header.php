<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo home_url() ?>">Trang Chủ</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php 
                        wp_nav_menu( array(
                            'theme_location'  => 'header-menu', // Gọi menu đã đăng ký trong function
                            'depth'           => 2,     // Cấu hình dropdown 2 cấp
                            'container'       => false, // Thẻ div bọc menu
                            'menu_class'      => 'nav navbar-nav', // Class của nav bootstrap
                            'fallback_cb'     => 'WP_Bootstrap_Navlist_Walker::fallback',
                            'walker'          => new WP_Bootstrap_Navlist_Walker()
                        ));
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" value="<?php the_search_query(); ?>" name="s"  >
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">

                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        