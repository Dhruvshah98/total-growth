<?php

/* Template Name: Landing  */

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
    <?php
                $banner_section_data = get_field('banner_section');
                if( $banner_section_data ): ?>
    <!-- Banner Txt Starts -->
    <div class="comm-section pt0">
        <div class="banner-head">
            <div class="banner-elem-wrap">
                <div class="elem elem-1">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/elem-1.svg" alt="">
                </div>
                <div class="elem elem-2">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/elem-2.svg" alt="">
                </div>
                <div class="elem elem-3">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/elem-3.svg" alt="">
                </div>
                <div class="elem elem-4">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/elem-4.svg" alt="">
                </div>
                <div class="elem elem-5">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/elem-5.svg" alt="">
                </div>
                <div class="elem elem-6">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/elem-3.svg" alt="">
                </div>
                <div class="elem elem-7">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/elem-3.svg" alt="">
                </div>
                <div class="elem elem-8">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/elem-4.svg" alt="">
                </div>
            </div>
            <?php echo $banner_section_data['title']; ?>

            <p>
                <?php echo $banner_section_data['sub_title']; ?>
            </p>

            <div class="button center">book a call</div>
        </div>
    </div>
    <!-- Banner Txt Ends -->


    <div class="comm-section">
        <div class="container">
            <div class="people-wrap">
                <div class="f-row f-3">
                    <?php $i = 1;
              if( have_rows('banner_section') ): while ( have_rows('banner_section') ) : the_row(); 
                if( have_rows('images_cards') ): while ( have_rows('images_cards') ) : the_row();       ?>
                    <div class="f-col">
                        <div class="people-box">
                            <a href="">
                                <div class="people-img">
                                    <img src="<?php  echo get_sub_field('image'); ?>" alt="">
                                </div>
                            </a>
                            <h3><?php  echo get_sub_field('name'); ?></h3>
                            <h5><?php  echo get_sub_field('number'); ?></h5>
                        </div>
                    </div>
                    <?php $i++; endwhile; endif;
                            endwhile; endif;  
                            ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- our 3-step process starts -->
    <?php
                $process_data = get_field('process');
                if( $process_data ): ?>
    <section class="comm-section step-sec">
        <div class="container">
            <div class="content-tag violet center"><?php echo $process_data['title']; ?></div>
            <?php echo $process_data['sub_title']; ?>

            <div class="step-wrap">
                <?php $i = 1;
              if( have_rows('process') ): while ( have_rows('process') ) : the_row(); 
                if( have_rows('process_cards') ): while ( have_rows('process_cards') ) : the_row();       ?>
                <div class="step-box step<?php echo $i?>">
                    <div class="step-img">
                        <video muted playsinline autoplay loop>
                            <source src="<?php  echo get_sub_field('icon_anim'); ?>">
                        </video>
                    </div>
                    <h4 class="step-info"><?php  echo get_sub_field('title'); ?></h4>
                </div>
                <?php $i++; endwhile; endif;
                            endwhile; endif;  
                            ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- our 3-step process ends -->

    <!-- Testimonial starts -->
    <section class="comm-section testi-sec">
        <div class="container">
            <div class="swiper testiSwiper testi-swiper">
                <div class="swiper-wrapper">
                    <?php if( have_rows('testimonial') ): ?>
                    <?php while( have_rows('testimonial') ): the_row();   ?>
                    <div class="swiper-slide">
                        <div class="testi-box">
                            <div class="content-tag green"><?php the_sub_field('name'); ?></div>
                            <p><?php the_sub_field('comment'); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <div class="testi-nav-wrap">
                    <div class="testi-swiper-prev">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/testi-prev.svg" alt="click to previous"
                            width="100%" height="100%" loading="lazy" />
                    </div>
                    <div class="testi-swiper-next">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/testi-next.svg" alt="click to previous"
                            width="100%" height="100%" loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial ends -->

    <!-- Counter starts -->
    <div class="comm-section counter-sec">
        <div class="container">
            <div class="count-wrap">
                <?php if( have_rows('statistics') ): ?>
                <?php while( have_rows('statistics') ): the_row();   ?>

                <div class="count-box">
                    <h4 class="count-text">
                        <span class="counter-value" data-count="<?php the_sub_field('number'); ?>">0</span>
                        <span><?php the_sub_field('unit'); ?></span>
                    </h4>
                    <p><?php the_sub_field('title'); ?></p>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Counter ends -->

    <!-- benefits starts -->
    <?php
        $benefits_data = get_field('benefits');
        if( $benefits_data ): ?>
    <section class="comm-section benefits-sec">
        <div class="container">
            <div class="content-tag red center"><?php echo $benefits_data['small_text']; ?></div>

            <?php echo $benefits_data['title']; ?>

            <div class="flip-wrap">
                <?php $i = 1;
              if( have_rows('benefits') ): while ( have_rows('benefits') ) : the_row(); 
              if( have_rows('benefits_cards') ): while ( have_rows('benefits_cards') ) : the_row();       ?>
                <div class="flip-box">
                    <div class="flip-front">
                        <h3 class="flip-hdn"><?php the_sub_field('front_title'); ?></h3>
                        <div class="flip-img">
                            <img src="<?php the_sub_field('front_icon'); ?>" alt="Attention is currency" width="100%"
                                height="100%" loading="lazy" />
                        </div>
                        <div class="plus-icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/plus-icon.svg" alt="click to flip"
                                width="100%" height="100%" loading="lazy" />
                        </div>
                    </div>
                    <div class="flip-back">
                        <h3 class="flip-hdn"><?php the_sub_field('back_title'); ?></h3>
                        <p>
                            <?php the_sub_field('back_sub_title'); ?>
                        </p>
                        <div class="back-icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/back-icon.svg" alt="click to flip"
                                width="100%" height="100%" loading="lazy" />
                        </div>
                    </div>
                </div>

                <?php $i++; 
              endwhile; endif;
                  endwhile; endif; ?>
                <!-- <div class="flip-box">
            <div class="flip-front">
              <h3 class="flip-hdn">Multiply your content</h3>
              <div class="flip-img">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/flip2.png" alt="Multiply
                    your content" width="100%" height="100%" loading="lazy" />
              </div>
              <div class="plus-icon">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/plus-icon.svg" alt="click to flip" width="100%" height="100%" loading="lazy" />
              </div>
            </div>
            <div class="flip-back">
              <h3 class="flip-hdn">Build a Cult-like- following</h3>
              <p>
                We don’t build you followers, we build you fans. HUGE.
                DIFFERRENCE.
              </p>
              <div class="back-icon">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/back-icon.svg" alt="click to flip" width="100%" height="100%" loading="lazy" />
              </div>
            </div>
          </div>
          <div class="flip-box">
            <div class="flip-front">
              <h3 class="flip-hdn">Expand your following</h3>
              <div class="flip-img">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/flip3.png" alt="Expand
                    your following" width="100%" height="100%" loading="lazy" />
              </div>
              <div class="plus-icon">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/plus-icon.svg" alt="click to flip" width="100%" height="100%" loading="lazy" />
              </div>
            </div>
            <div class="flip-back">
              <h3 class="flip-hdn">Turn Eyeballs into money</h3>
              <p>
                Fans don’t mean anything if we’re broke. Convert people like
                crazy with our Proven Inbound Systems without Spending your
                Life Savings on Ads
              </p>
              <div class="back-icon">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/back-icon.svg" alt="click to flip" width="100%" height="100%" loading="lazy" />
              </div>
            </div>
          </div> -->
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- benefits ends -->

    <!-- Plans Starts -->
    <?php
        $our_offers_data = get_field('our_offers');
        if( $our_offers_data ): ?>
    <div class="comm-section step-sec">
        <div class="container">
            <div class="plan-head">
                <div class="box"></div>
                <div class="content-tag violet center">our offers</div>
                <h4 class="comm-sec-hdn">
                    Choose a plan that <span class="text-gradient yellow">best</span>
                    suits your needs
                </h4>
            </div>
            <div class="plan-wrap">
                <div class="f-row f-3">
                    <?php $i = 1;
              if( have_rows('our_offers') ): while ( have_rows('our_offers') ) : the_row(); 
              if( have_rows('plans_cards') ): while ( have_rows('plans_cards') ) : the_row();       ?>
                    <div class="f-col">
                        <div class="plan-box <?php if($i == 2): ?>popular<?php  endif;?>">
                            <?php if($i == 2): ?>
                            <span class="popular-tag">most popular</span>
                            <?php  endif;?>
                            <!-- <h3>Standard</h3>
                    <p>Best for brands
                      and creators starting out</p>
                    <ul>
                      <li>20 videos per month</li>
                      <li>Community Management</li>
                      <li>Thumbnails & CTAs</li>
                      <li>24x7 Slack Support</li>
                    </ul> -->
                            <?php  echo get_sub_field('plans'); ?>
                            <a href="<?php  echo get_sub_field('cta'); ?>" class="button book-call">Book a call</a>
                        </div>
                    </div>
                    <?php $i++; endwhile; endif;
                  endwhile; endif;
                            ?>
                    <!-- 
            <div class="f-col">
              <div class="plan-box popular">
                <span class="popular-tag">most popular</span>
                <h3>Plus</h3>
                <p>Best for growth</p>
                <ul>
                  <li>30 videos per month</li>
                  <li>4 animations per month</li>
                  <li>Reporting & Analytics</li>
                  <li>24x7 Slack Support</li>
                </ul>
                <a href="" class="button book-call">Book a call</a>
              </div>
            </div>
            <div class="f-col">
              <div class="plan-box">
                <h3>Premium</h3>
                <p>Best for established brands
                  and creators</p>
                <ul>
                  <li>Unlimited videos </li>
                  <li>Expert Project Manager</li>
                  <li>Priority support</li>
                  <li>24x7 Slack Support</li>
                </ul>
                <a href="" class="button book-call">Book a call</a>
              </div>
            </div> -->
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- Plans Ends -->


    <!-- reels Starts -->
    <div class="comm-section">
        <div class="content-tag yellow center">videos</div>
        <div class="reels-wrap">

            <?php $i = 1; if( have_rows('videos') ): ?>
            <?php while( have_rows('videos') ): the_row();   ?>
            <div class="mob-frame mob-frame-<?php echo $i ?>">
                <div class="mob-video">
                    <video muted playsinline autoplay loop>
                        <source src=" <?php  echo get_sub_field('video_file'); ?>">
                    </video>
                </div>
                <div class="mob-bottom">
                    <div class="mob-bottom-name">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/bottom-img.svg" alt="">
                        <p><?php  echo get_sub_field('name'); ?></p>
                    </div>
                    <div class="mob-bottom-likes">
                        <p><?php  echo get_sub_field('number'); ?></p>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/acc-icon.svg" alt="">
                    </div>
                </div>
            </div>
            <?php $i++; endwhile; ?>
            <?php endif; ?>
            <!-- <div class="mob-frame mob-frame-2">
          <div class="mob-video">
            <video muted playsinline autoplay>
              <source src="./video/mob-video-1.mp4" type="video/mp4">
            </video>
          </div>
          <div class="mob-bottom">
            <div class="mob-bottom-name">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/bottom-img.svg" alt="">
              <p>cHESTER ZODA</p>
            </div>
            <div class="mob-bottom-likes">
              <p>105k</p>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/acc-icon.svg" alt="">
            </div>
          </div>
        </div>
        <div class="mob-frame mob-frame-3">
          <div class="mob-video">
            <video muted playsinline autoplay>
              <source src="./video/mob-video-1.mp4" type="video/mp4">
            </video>
          </div>
          <div class="mob-bottom">
            <div class="mob-bottom-name">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/bottom-img.svg" alt="">
              <p>cHESTER ZODA</p>
            </div>
            <div class="mob-bottom-likes">
              <p>105k</p>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/acc-icon.svg" alt="">
            </div>
          </div>
        </div> -->
        </div>
    </div>
    <!-- reels ends -->

    <!-- frequently asked starts -->
    <!-- <?php if($i == 1): ?> active<?php endif;?> -->
    <section class="comm-section faq-sec">
        <div class="container">
            <div class="content-tag red center">frequently asked</div>
            <h3 class="comm-sec-hdn">
                Your questions,
                <span class="text-gradient green">answered</span>
            </h3>

            <!-- faq accordion Starts -->
            <div class="faq-wrap">
                <div class="acc-container">
                    <?php $i = 1; if( have_rows('faq') ): ?>
                    <?php while( have_rows('faq') ): the_row();   ?>
                    <div class="acc-gradient">
                        <div class="acc-item">
                            <div class="faq-btn">
                                <div class="faq-btn-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/faq-btn-img.svg"
                                        alt="click here" width="100%" height="100%" loading="lazy" />
                                </div>
                            </div>
                            <div class="acc-info">
                                <h4 class="faq-hdn">
                                    <?php the_sub_field('question'); ?>
                                </h4>
                                <div class="faq-detail">
                                    <p>
                                        <?php the_sub_field('answer'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
    </section>
    <!-- frequently asked ends -->

</div>
<!-- Main Container Ends -->




<?php
get_footer(); ?>