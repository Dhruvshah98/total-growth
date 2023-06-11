<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header">
        <!-- <div id="branding">
    <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <?php
            if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
            echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url">
                <span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
            if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
        ?>
    </div> -->
        <!-- <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>>
        <?php bloginfo( 'description' ); ?></div>
    </div>
    <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
    

    </nav> -->
        <div class="header-box">
            <div class="container">
                <div class="head-left">
                    <div class="logoBox">
                        <a class="logo" href="<?php echo get_site_url().'/'; ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="Logo" />
                        </a>
                    </div>
                </div>
                <!-- <ul class="header-list">
      <li><a href="./index.html" class="active">Home</a></li>
      <li><a href="<?php echo get_site_url().'/about/'; ?>">about us</a></li>
      <li><a href="<?php echo get_site_url().'/hiring/'; ?>">hiring</a></li>
    </ul> -->
                <div class="head-right">
                    <div class="menuBtn">
                        <a href="" class="button">book a call</a>
                        <div class="menu side-menu">
                            <a href="javascript:void(0)" class="js-nav-toggle">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Side Menu -->
        <!-- Side Menu -->
        <div class="menuOverlay"></div>
        <div class="nav-wrapper">
            <nav role="mob-navigation" class="mob-navigation">
                <div class="nav-toggle">
                    <span class="nav-back"></span>
                    <span class="nav-title">
                        <!-- <img src="./img/logo.svg" alt=""> -->
                    </span>
                    <span class="nav-close"></span>
                </div>

                <ul>
                    <li class="has-dropdown">
                        <a href="javascript:void(0)">Services</a>
                        <ul>
                            <li>
                                <!-- <a href="#"><img src="./img/dd-1.svg" alt="" />Sales Presentation</a> -->
                            </li>
                            <li>
                                <!-- <a href="#"><img src="./img/dd-2.svg" alt="" />Slides clean-up and redesign</a> -->
                            </li>
                        </ul>
                    </li>

                    <li><a href="#">Solutions</a></li>

                    <li class="has-dropdown">
                        <a href="javascript:void(0)">Other Services</a>
                        <ul>
                            <li>
                                <!-- <a href="#"><img src="./img/dd-10.svg" alt="" />Website design and development </a> -->
                            </li>
                            <li>
                                <!-- <a href="#"><img src="./img/dd-11.svg" alt="" />SEO services </a> -->
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

    </header>