<?php

/* Template Name: Landing copy Page */

/**

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.

 *

 *

 * @package blank

 */

get_header();

?>
    <!-- Main Container Starts -->
    <div class="main-container">
        <div class="main-container-wrap">
            <!-- hero starts -->
            <?php
                $banner_section_data = get_field('banner_section');
                if( $banner_section_data ): ?>
            <div class="hero-section">
                <div class="container">
                    <div class="hero-wrap">
                        <div class="hero-head">
                            <p data-aos="fade-up"><?php echo $banner_section_data['title']; ?></p>
                            <h2 data-aos="fade-up" data-aos-delay="100"><?php echo $banner_section_data['sub_title']; ?></h2>
                            <h2 class="white-outline" data-aos="fade-up" data-aos-delay="200"><?php echo $banner_section_data['sub_title_2']; ?></h2>
                        </div>
                        <a href="#process" class="button home-btn"><span>Explore <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-right.svg" alt=""></span>
                        </a>
                        <div class="learn-more" data-aos="fade-down">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/learn-more.svg" alt="">
                        </div>
                        <div class="hero-img-wrap">
                            <div class="hero-img" data-aos="zoom-in-up">
                                <img src="<?php echo $banner_section_data['image']; ?>" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="hero-stickers">
                    <div class="sticker sticker-1" data-aos="zoom-in">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/sticker-1.svg" alt="">
                    </div>
                    <div class="sticker sticker-2" data-aos="zoom-in">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/sticker-2.svg" alt="">
                    </div>
                    <div class="sticker sticker-3" data-aos="zoom-in">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/sticker-3.svg" alt="">
                    </div>
                    <div class="sticker sticker-4" data-aos="zoom-in">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/sticker-4.svg" alt="">
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- hero ends -->

            <!-- work starts -->
            <?php
                $work_section_data = get_field('work_section');
                if( $work_section_data ): ?>
            <div class="work-client-wrap">
                <div class="work-wrap">
                    <div class="work-tags">
                        <div class="work-tag work-tag-1"><?php echo $work_section_data['work_1']; ?></div>
                        <div class="work-tag work-tag-2"><?php echo $work_section_data['work_2']; ?></div>
                        <div class="work-tag work-tag-3"><?php echo $work_section_data['work_3']; ?></div>
                        <div class="work-tag work-tag-4"><?php echo $work_section_data['work_4']; ?></div>
                        <div class="work-tag work-tag-5"><?php echo $work_section_data['work_5']; ?></div>
                    </div>
                    <div class="work-bg"></div>
                    <div class="container">
                        <div class="work-container">
                            <div class="comm-head" >
                                <h2  data-aos="fade-up"><?php echo $work_section_data['title']; ?></h2>
                                <p  data-aos="fade-up"><?php echo $work_section_data['content']; ?></p>
                            </div>
                            <div class="work-txt-img" >
                                <div class="work-img" data-aos="fade-right" >
                                    <img src="<?php echo $work_section_data['work_image_1']; ?>" alt="">
                                    <div class="work-sticker work-sticker-1 sticker" >
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/ws-1.svg" alt="">
                                    </div>
                                </div>
                                <div class="txt-2"  data-aos="fade-up">
                                    <p><?php echo $work_section_data['work_title']; ?></p>
                                </div>
                                <div class="work-img"  data-aos="fade-left">
                                    <img src="<?php echo $work_section_data['work_image_2']; ?>" alt="">
                                    <div class="work-sticker work-sticker-2 sticker">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/ws-2.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="work-sticker work-sticker-3 sticker">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/ws-3.svg" alt="">
                                    </div>
                                    <div class="work-sticker work-sticker-4 sticker">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/ws-4.svg" alt="">
                                    </div>
                <div class="work-swiper-wrap">
                <div class="work-sticker work-sticker-5 sticker">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/ws-5.svg" alt="">
                                    </div>
                                    <div class="work-sticker work-sticker-6 sticker">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/ws-6.svg" alt="">
                                    </div>
                    <div class="work-swiper">
                        <div class="swiper swiper-work">
                            <div class="swiper-wrapper">
                            <?php
                                if( have_rows('work_section') ): while ( have_rows('work_section') ) : the_row(); 
                                    if( have_rows('slider_work') ): while ( have_rows('slider_work') ) : the_row();   ?>  
                                <div class="swiper-slide">
                                    <div class="client-box">
                                        <div class="client-head">
                                            <div class="client-stars">
                                                <div class="stars-wrap">
                                                    <?php  $x = get_sub_field('number_of_star');
                                                    for($i = 1; $i <= $x ; $i++) { ?>
                                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <?php } ?>
                                                </div>
                                                <h5><?php echo get_sub_field('name');?></h5>
                                            </div>
                                            <h3 class="client-head-txt">
                                            <?php echo get_sub_field('title');?>
                                            </h3>
                                        </div>
                                        <div class="client-content">
                                            <p><?php echo get_sub_field('content');?></p>
                                        </div>
                                    </div>
                                </div>
                          <?php  endwhile; endif;
                        endwhile; endif; ?>
                                <!-- <div class="swiper-slide">
                                    <div class="client-box">
                                        <div class="client-head">
                                            <div class="client-stars">
                                                <div class="stars-wrap">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                </div>
                                                <h5>Sophia Luangrath</h5>
                                            </div>
                                            <h3 class="client-head-txt">
                                                Incredible
                                            </h3>
                                        </div>
                                        <div class="client-content">
                                            <p>Ryelle took the time to walk me through my resume, experience and
                                                interview process. Even after I got hired she checked in with me! Gave
                                                me awesome piece of advice and different angles on certain processes.
                                                She super amazing and personal, would recommend her to anyone!.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-box">
                                        <div class="client-head">
                                            <div class="client-stars">
                                                <div class="stars-wrap">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                </div>
                                                <h5>Rachael</h5>
                                            </div>
                                            <h3 class="client-head-txt">
                                                “Life-Changing”
                                            </h3>
                                        </div>
                                        <div class="client-content">
                                            <p>Ryelle helped me with my modeling career she took my photos and I was
                                                able to
                                                submit into a Louisiana based magazine and my portfolio to enhance my
                                                career.</p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-box">
                                        <div class="client-head">
                                            <div class="client-stars">
                                                <div class="stars-wrap">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                </div>
                                                <h5>Cardijah Green</h5>
                                            </div>
                                            <h3 class="client-head-txt">
                                                Extremely Supportive”
                                            </h3>
                                        </div>
                                        <div class="client-content">
                                            <p>Ryelle helped me with my modeling career she took my photos and I was
                                                able to
                                                submit into a Louisiana based magazine and my portfolio to enhance my
                                                career.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-box">
                                        <div class="client-head">
                                            <div class="client-stars">
                                                <div class="stars-wrap">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                </div>
                                                <h5>Rachael</h5>
                                            </div>
                                            <h3 class="client-head-txt">
                                                “Life-Changing”
                                            </h3>
                                        </div>
                                        <div class="client-content">
                                            <p>Ryelle helped me with my modeling career she took my photos and I was
                                                able to
                                                submit into a Louisiana based magazine and my portfolio to enhance my
                                                career.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-box">
                                        <div class="client-head">
                                            <div class="client-stars">
                                                <div class="stars-wrap">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
                                                </div>
                                                <h5>Cardijah Green</h5>
                                            </div>
                                            <h3 class="client-head-txt">
                                                Extremely Supportive”
                                            </h3>
                                        </div>
                                        <div class="client-content">
                                            <p>Ryelle helped me with my modeling career she took my photos and I was
                                                able to
                                                submit into a Louisiana based magazine and my portfolio to enhance my
                                                career.</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work-sticker work-sticker-7 sticker">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/ws-7.svg" alt="">
                                    </div>
            </div>
            <?php endif; ?>
            <!-- work ends -->

            <!-- blog starts -->
            <div class="blog-wrap">
                <div class="container">
                    <div class="blog-boxes-wrap">
                        <div class="blog-btn">
                            <a href="" class="button blue"> <span>Read All<img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-right.svg"
                                        alt=""></span></a>
                        </div>
                        <div class="f-row">
                            <div class="w50 w-990-100">
                            <?php

if( have_rows('blogs') ):
    while( have_rows('blogs') ) : the_row(); ?>
                                <a href="" class="blog-box" data-aos="fade-up">
                                    <div class="blog-img">
                                        <img src="<?php echo get_sub_field('banner_image');?>" alt="">
                                    </div>
                                    <div class="blog-txt">
                                        <p><?php echo get_sub_field('title');?></p>
                                    </div>
                                </a>

                                <?php // End loop.
    endwhile;
endif; ?>
                                <!-- <a href="" class="blog-box">
                                    <div class="blog-img">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-2.png" alt="">
                                    </div>
                                    <div class="blog-txt">
                                        <p>The Evening of The Holiday</p>
                                    </div>
                                </a> -->
                            </div>
                            <div class="w50 w-990-100">
                                <div class="f-row">
                                    <div class="w100">
                                        <div class="blog-head">
                                            <h6 data-aos="fade-up">Blogs & News</h6>
                                            <h2 data-aos="fade-up">What’s hot on the blog</h2>
                                        </div>
                                    </div>
                                    <div class="w50  w-640-100">
                                        <a href="" class="blog-box" data-aos="fade-up">
                                            <div class="blog-img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-3.png" alt="">
                                            </div>
                                            <div class="blog-txt">
                                                <p>Sales Management</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w50  w-640-100">
                                        <a href="" class="blog-box" data-aos="fade-up">
                                            <div class="blog-img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-4.png" alt="">
                                            </div>
                                            <div class="blog-txt">
                                                <p>Branding</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w50  w-640-100">
                                        <a href="" class="blog-box" data-aos="fade-up">
                                            <div class="blog-img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-5.png" alt="">
                                            </div>
                                            <div class="blog-txt">
                                                <p>The Future</p>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="" class="w50  w-640-100">
                                        <div class="blog-box border-round" data-aos="fade-up">
                                            <div class="blog-img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-6.png" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog ends -->


            <div id="clients" class="hdr-link"></div>
            <!-- clients-starts -->
            <div class="clients-wrap">
                <div class="container">
                    <div class="swiper-logo-nav">
                        <div class="swiper-button-prev-logo"></div>
                        <div class="swiper-button-next-logo"></div>
                    </div>
                    <div class="comm-head" data-aos="fade-up">
                        <h2><?php echo get_field('clients')?></h2>
                        <!-- If we need navigation buttons -->
                    </div>
                    <div class="clients-logo-swiper swiper">
                        <div class="swiper-wrapper">
                        <?php 
                                 if( have_rows('clients_slider') ):
                                    while( have_rows('clients_slider') ): the_row(); ?>
                            <div class="swiper-slide">
                                <div class="clients-logo-wrap">
                                    <div class="f-row f-4 f-990-3 f-640-2">
                                        <?php if( have_rows('logos') ): 
                                                while( have_rows('logos') ): the_row(); ?>
                                        <div class="f-col">
                                            <div class="clients-logo-box">
                                                <img src="<?php the_sub_field('logo'); ?>" alt="">
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    <?php endif; //if( get_sub_field('items') ): ?>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                                    <?php endif; //if( get_sub_field('items') ): ?>
                            <!-- <div class="swiper-slide">
                                <div class="clients-logo-wrap">
                                    <div class="f-row f-4">
                                        <div class="f-col">
                                            <div class="clients-logo-box">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-logo-1.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="f-col">
                                            <div class="clients-logo-box">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-logo-2.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="f-col">
                                            <div class="clients-logo-box">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-logo-3.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="f-col">
                                            <div class="clients-logo-box">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-logo-4.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="f-col">
                                            <div class="clients-logo-box">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-logo-5.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="f-col">
                                            <div class="clients-logo-box">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-logo-6.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="f-col">
                                            <div class="clients-logo-box">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/clients-logo-7.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->


                        </div>
                    </div>
                </div>
                <div class="clouds-wrap">
                    <div class="cloud cloud-1 sticker">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cloud.svg" alt="">
                    </div>
                    <div class="cloud cloud-2 sticker">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cloud.svg" alt="">
                    </div>
                </div>
            </div>
            <!-- clients-ends -->

            <!-- rates-starts -->
            <?php
                $offer_slider_data = get_field('offer_slider');
                if( $offer_slider_data ): ?>
            <div class="rates-wrap">
                <div class="scrolling-rates">
                    <section class="rates-message">
                        <p><span class="rate"><?php echo $offer_slider_data['discount_1']; ?></span> <?php echo $offer_slider_data['title_1']; ?></p>
                        <p><span class="rate"><?php echo $offer_slider_data['discount_2']; ?></span> <?php echo $offer_slider_data['title_2']; ?></p>
                        <p><span class="rate"><?php echo $offer_slider_data['discount_1']; ?></span> <?php echo $offer_slider_data['title_1']; ?></p>
                        <p><span class="rate"><?php echo $offer_slider_data['discount_2']; ?></span> <?php echo $offer_slider_data['title_2']; ?></p>
                        <p><span class="rate"><?php echo $offer_slider_data['discount_1']; ?></span> <?php echo $offer_slider_data['title_1']; ?></p>
                        <p><span class="rate"><?php echo $offer_slider_data['discount_2']; ?></span> <?php echo $offer_slider_data['title_2']; ?></p>
                    </section>
                    <section class="rates-message">
                        <p><span class="rate"><?php echo $offer_slider_data['discount_1']; ?></span> <?php echo $offer_slider_data['title_1']; ?></p>
                        <p><span class="rate"><?php echo $offer_slider_data['discount_2']; ?></span> <?php echo $offer_slider_data['title_2']; ?></p>
                        <p><span class="rate"><?php echo $offer_slider_data['discount_1']; ?></span> <?php echo $offer_slider_data['title_1']; ?></p>
                        <p><span class="rate"><?php echo $offer_slider_data['discount_2']; ?></span> <?php echo $offer_slider_data['title_2']; ?></p>
                        <p><span class="rate"><?php echo $offer_slider_data['discount_1']; ?></span> <?php echo $offer_slider_data['title_1']; ?></p>
                        <p><span class="rate"><?php echo $offer_slider_data['discount_2']; ?></span> <?php echo $offer_slider_data['title_2']; ?></p>
                    </section>
                </div>
            </div>
            <?php endif; ?>
            <!-- rates-ends -->


            <div id="industries" class="hdr-link"></div>
            <!-- industry-starts -->
            <?php
                $industries_data = get_field('industries');
                if( $industries_data ): ?>
            <div class="industries-wrap">
                <div class="container">
                    <div class="comm-head" >
                        <h2 data-aos="fade-up"><?php echo $industries_data['title']; ?></h2>
                        <p data-aos="fade-up"><?php echo $industries_data['sub_title']; ?></p>
                    </div>
                    <div class="industries-boxes">
                        <div class="f-row f-4 f-1440-3 f-990-2 f-640-1">
                        <?php
                            if( have_rows('industries') ): while ( have_rows('industries') ) : the_row(); 
                                if( have_rows('industries_cards') ): while ( have_rows('industries_cards') ) : the_row();       ?>
                            <div class="f-col">
                                <div class="industry-box" data-aos="fade-up">
                                    <div class="industry-img-box" >
                                        <div class="industry-img">
                                            <img src="<?php  echo get_sub_field('banner_image'); ?>" alt="">
                                        </div>
                                        <div class="industry-hover-txt">
                                            <p><?php  echo get_sub_field('content'); ?></p>
                                        </div>
                                    </div>
                                    <div class="industry-txt">
                                        <p><?php  echo get_sub_field('title'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php  endwhile; endif;
                            endwhile; endif;
                            ?>


                        </div>
                    </div>
                    <div class="industry-btn">
                        <a href="" class="button blue">
                            <span>Contact Us <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-right.svg" alt=""></span>
                        </a>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <!-- industry-ends -->

            <!-- wave-starts -->
            <div class="sticker wave-sticker" data-aos="fade-up-right">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/sun.svg" alt="">
                                </div>
            <div class="wave-wrap" id="process">
           
            </div>
            <!-- wave-ends -->

            <!-- steps-starts -->
            <?php
                $hiring_process_data = get_field('hiring_process');
                if( $hiring_process_data ): ?>
            <div class="steps-wrap">
            <div class="clouds-wrap">
                    <div class="cloud cloud-1 sticker">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cloud.svg" alt="">
                    </div>
                    <div class="cloud cloud-2 sticker">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cloud.svg" alt="">
                    </div>
                </div>
                <div class="container">
                    <div class="comm-head">
                        <h2><?php echo $hiring_process_data['title']; ?></h2>
                    </div>
                    <div class="steps-container">
                        <div class="steps-bg">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/steps-bg.svg" alt="">
                        </div>
                        <?php $i = 1;
                            if( have_rows('hiring_process') ): while ( have_rows('hiring_process') ) : the_row(); 
                                if( have_rows('steps_cards') ): while ( have_rows('steps_cards') ) : the_row();       ?>
                        <?php if($i == 1):?>
                        <div class="step-box" data-aos="fade-up">
                            <div class="step-btn">
                                <div class="button"><span>Step <?php echo $i ?></span></div>
                            </div>
                            <h4><?php  echo get_sub_field('title'); ?></h4>
                            <p><?php  echo get_sub_field('title'); ?></p>
                        </div>
                        <?php else: ?>
                        <div class="step-box" data-aos="fade-up">
                            <div class="step-btn">
                                <div class="button"><span>Step <?php echo $i ?></span></div>
                            </div>
                            <div class="step-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/steps-illus-<?php echo $i ?>.svg" alt="">
                            </div>
                            <h4><?php  echo get_sub_field('title'); ?></h4>
                            <p><?php  echo get_sub_field('sub_title'); ?></p>
                        </div>
                        <?php endif;?>
                        <?php $i++; endwhile; endif;
                            endwhile; endif;
                            ?>
                    </div>

                </div>
            </div>
            <?php endif; ?>
            <!-- steps-ends -->


            <div id="about" class="hdr-link"></div>
            <!-- About Starts -->
            <?php
                $about_data = get_field('about');
                if( $about_data ): ?>
            <div class="about-wrap">
            <div class="sticker about-sticker-3" data-aos="fade-up-right">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/about-sticker-3.svg" alt="">
                                </div>
                <div class="about-bg"></div>
                <div class="about-container">
                    
                    <div class="container">
                        <div class="comm-head" >
                            <h2 data-aos="fade-up"><?php echo $about_data['title']; ?> </h2>
                        </div>
                        <div class="about-wrap-inner">
                       
                            <div class="f-row f-2 f-990-1">
                                <div class="f-col">
                                    <div class="about-box" data-aos="fade-up">
                                        <div class="about-box-bg">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/about-box-bg-1.svg" alt="">
                                        </div>
                                        <div class="about-img">
                                            <img src="<?php echo $about_data['image_1']; ?>" alt="">
                                        </div>
                                        <div class="about-txt">
                                            <h4><img src="<?php bloginfo('template_url'); ?>/assets/img/about-icon-1.svg" alt=""><?php echo $about_data['name_1']; ?></h4>
                                            <h6><?php echo $about_data['designation_1']; ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="f-col">
                                    <div class="about-box" data-aos="fade-up">
                                        <div class="about-box-bg about-box-bg-2">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/about-box-bg-2.svg" alt="">
                                        </div>
                                        <div class="about-img">
                                            <img src="<?php echo $about_data['image_2']; ?>" alt="">
                                        </div>
                                        <div class="about-txt">
                                            <h4><img src="<?php bloginfo('template_url'); ?>/assets/img/about-icon-2.svg" alt=""><?php echo $about_data['name_2']; ?></h4>
                                            <h6><?php echo $about_data['designation_2']; ?></h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="about-btm-txt" >
                                <div class="sticker about-sticker-1" data-aos="fade-up-right">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/about-sticker-1.svg" alt="">
                                </div>
                                <div class="sticker about-sticker-2" data-aos="fade-up-right">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/about-sticker-2.svg" alt="">
                                </div>
                                <p data-aos="fade-up" class="about-btm-txt-1"><?php echo $about_data['content_1']; ?> </p>
                                <p data-aos="fade-up" class="about-btm-txt-2"><?php echo $about_data['content_2']; ?></p>
                                <p data-aos="fade-up" class="about-btm-txt-3"><?php echo $about_data['content_3']; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- About Ends -->


            <!-- candidate-starts -->
            <?php $candidate_data = get_field('candidate');
                if( $candidate_data ): ?>
            <div class="candidate-wrap">
                <div class="container">
                    <div class="candidate-head">
                        <div class="comm-head">
                            <h6 data-aos="fade-up"><?php echo $candidate_data['title']; ?></h6>
                            <h2 data-aos="fade-up"><?php echo $candidate_data['main_title']; ?></h2>
                            <p data-aos="fade-up"><?php echo $candidate_data['sub_title']; ?></p>
                        </div>
                    </div>
                    <div class="candidate-form-box" data-aos="fade-up">
                        <div class="sticker candidate-sticker">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/candidate-sticker.png" alt="">
                        </div>
                        <div class="candidate-form">
                            <!-- <form action=""> -->
                                <!-- <div class="form-grp">
                                    <input class="form-field" placeholder="Your Name" type="text">
                                </div>
                                <div class="form-grp">
                                    <input class="form-field" placeholder="Your Email id" type="email">
                                </div>
                                <div class="form-grp">
                                    <input class="form-field" placeholder="Your Phone number" type="number">
                                </div>
                                <div class="upload-wrap">
                                    <h4>Upload your Resume</h4>
                                    <p>Max. File size 20Mb</p>
                                    <div class="profile-image-wrap">
                                        <div id="img-preview">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/folder.svg" alt="">
                                        </div>
                                        <input type="file" id="choose-file" name="choose-file"
                                            accept="application/msword, application/vnd.ms-excel,text/plain, application/pdf/*">
                                        <label for="choose-file">
                                        </label>
                                    </div>
                                </div>
                                <button class="submit-btn">Submit Resume</button> -->
                                <?php  echo do_shortcode('[contact-form-7 id="117" title="Contact"]')?>
                            <!-- </form> -->
                        </div>
                        <div class="candidate-form-txt">
                            <!-- <h4>Get Clarity, purpose &
                                career fulfilment</h4>
                            <p>Craving career clarity? </p>
                            <p>Want to strategically and intentionally
                                design your career on purpose? </p>
                            <p>And then follow a proven system to
                                take that dream and turn it into a reality? </p>
                            <p>Sounds like you need a full-blown
                                Career Glow Up</p> -->
                            <?php echo $candidate_data['form_title']; ?>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-big.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- candidate-ends -->


            <!-- partner starts -->
            <?php $partnership_data = get_field('partnership');
                if( $partnership_data ): ?>
            <div class="partner-wrap" >
                <div class="partner-img"data-aos="zoom-in" >
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/bottom-star.png" alt="">
                </div>
                <div class="container" data-aos="zoom-in">
                    <div class="partner-box">
                        <h3><?php echo $partnership_data['title']; ?></h3>
                        <a href="" class="button blue"><span>Partner with us <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-right.svg"
                                    alt=""></span></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- partner ends -->


        </div>
    </div>
    <!-- Main Container Ends -->
<?php
get_footer(); ?>