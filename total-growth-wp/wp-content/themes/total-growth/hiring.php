<?php

/* Template Name: Hiring  */

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
    <!-- Banner Txt Starts -->
    <?php $banner_section_data = get_field('banner_section');
        if( $banner_section_data ): ?>
    <div class="comm-section pt0">
        <div class="banner-head">
            <!-- <h1>
            Join a team of <span class="text-gradient blue">passionate</span>
            <br />
            <span class="text-gradient yellow">video</span> editors.
          </h1> -->
            <?php echo $banner_section_data['main_title']; ?>

        </div>
    </div>
    <!-- Banner Txt Ends -->

    <!-- Hireing detail Starts -->
    <section class="comm-section hiring-sec">
        <div class="container">
            <div class="hire-box-wrap">
                <div class="f-row f-3 f-990-1">
                    <?php $i = 1;
              if( have_rows('banner_section') ): while ( have_rows('banner_section') ) : the_row(); 
                if( have_rows('banner_cards') ): while ( have_rows('banner_cards') ) : the_row();       ?>
                    <div class="f-col">
                        <div class="hire-box">
                            <div
                                class="content-tag <?php if($i == 1): ?>yellow<?php endif;?><?php if($i == 2): ?>violet<?php endif?> <?php if($i == 3): ?>green<?php endif?>">
                                <?php  echo get_sub_field('title'); ?></div>
                            <div class="comm-para">
                                <p>
                                    <?php  echo get_sub_field('sub_title'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile; endif;
                            endwhile; endif;  
                            ?>
                    <!-- <div class="f-col">
                <div class="hire-box">
                  <div class="content-tag violet">test</div>
                  <div class="comm-para">
                    <p>
                      Editors turn raw footage into engaging edits. Only the top
                      1% of animators pass our tests.
                    </p>
                  </div>
                </div>
              </div>
              <div class="f-col">
                <div class="hire-box">
                  <div class="content-tag green">Train</div>
                  <div class="comm-para">
                    <p>Editors train on our viral clips for 6 months</p>
                  </div>
                </div>
              </div> -->
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- Hireing detail ends-->

    <!-- Open positions Starts -->
    <section class="comm-section position-sec">
        <div class="container">
            <h2 class="comm-sec-hdn">
                <span class="text-gradient yellow">Open</span> positions
            </h2>

            <!-- position accordian starts -->
            <div class="position-acc-container acc-container">
                <?php $queryObject = new  Wp_Query(array(
              'posts_per_page'   => '-1',
              'post_type'        => 'jobs',
              'post_status'      => 'publish',
            )); 

            ?>
                <?php
            $cnt = 0;
            if ($queryObject->have_posts()) {
            while ($queryObject->have_posts()) : $queryObject->the_post();
                $title = get_the_title();
            ?>
                <div class="position-gradient acc-gradient">
                    <div class="position-acc-box">
                        <div class="position-info">
                            <div>
                                <span class="content-tag white"><?php echo get_field('experiance') ?></span>
                                <h3 class="acc-hdn"><?php the_title() ?></h3>
                            </div>
                            <div class="detail-btn">view details</div>
                        </div>
                        <div class="position-detail">
                            <div class="position-detail-left">
                                <?php echo get_field('content') ?>
                            </div>
                            <div class="position-application">
                                <form action="">
                                    <?php echo do_shortcode('[contact-form-7 id="135" title="Contact form 1"]')?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php  $cnt++;
            endwhile;   }
           wp_reset_query();  // Restore global post data stomped by the_post().
                            ?>
                <!-- <div class="position-gradient">
              <div class="position-acc-box">
                <div class="position-info">
                  <div>
                    <span class="content-tag white">0 to 2 years</span>
                    <h3 class="acc-hdn">Junior Video Editor</h3>
                  </div>
                  <div class="detail-btn">view details</div>
                </div>
                <div class="position-detail">
                  <div class="position-detail-left">
                    <p>
                      Only 2% of our editors get accepted. That’s lesser than
                      Stanford Uni acceptance rates.
                    </p>
                    <ul>
                      <li>Need to have the Hardworking Character Trait</li>
                      <li>
                        Expert in Premiere/FinalCut/DaVince + AfterEffects
                      </li>
                      <li>Doesn’t play video games</li>
                      <li>Should be fun to work with</li>
                    </ul>
                  </div>
                  <div class="position-application">
                    <form action="">
                      <div class="form-grp">
                        <p class="form-label">Name</p>
                        <input
                          class="form-field"
                          type="text"
                          id="full-name"
                          name="full-name"
                          required
                          placeholder="Enter your name"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">contact number</p>
                        <input
                          class="form-field"
                          type="number"
                          id="phone-no"
                          name="phone-no"
                          required
                          placeholder="Enter your number"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">email</p>
                        <input
                          class="form-field"
                          type="email"
                          id="email"
                          name="email"
                          required
                          placeholder="Enter your email"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">cover letter</p>
                        <input
                          class="form-field"
                          type="text"
                          id="cover-letter"
                          name="cover-letter"
                          required
                          placeholder="Enter your cover letter"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">resume</p>
                        <input
                          class="form-field"
                          type="text"
                          id="full-name"
                          name="full-name"
                          required
                          placeholder="Upload resume here"
                        />
                      </div>

                      <button class="submit-btn">submit application</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="position-gradient">
              <div class="position-acc-box">
                <div class="position-info">
                  <div>
                    <span class="content-tag white">1 to 4 years</span>
                    <h3 class="acc-hdn">Senior Animator</h3>
                  </div>
                  <div class="detail-btn">view details</div>
                </div>
                <div class="position-detail">
                  <div class="position-detail-left">
                    <p>
                      Only 2% of our editors get accepted. That’s lesser than
                      Stanford Uni acceptance rates.
                    </p>
                    <ul>
                      <li>Need to have the Hardworking Character Trait</li>
                      <li>
                        Expert in Premiere/FinalCut/DaVince + AfterEffects
                      </li>
                      <li>Doesn’t play video games</li>
                      <li>Should be fun to work with</li>
                    </ul>
                  </div>
                  <div class="position-application">
                    <form action="">
                      <div class="form-grp">
                        <p class="form-label">Name</p>
                        <input
                          class="form-field"
                          type="text"
                          id="full-name"
                          name="full-name"
                          required
                          placeholder="Enter your name"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">contact number</p>
                        <input
                          class="form-field"
                          type="number"
                          id="phone-no"
                          name="phone-no"
                          required
                          placeholder="Enter your number"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">email</p>
                        <input
                          class="form-field"
                          type="email"
                          id="email"
                          name="email"
                          required
                          placeholder="Enter your email"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">cover letter</p>
                        <input
                          class="form-field"
                          type="text"
                          id="cover-letter"
                          name="cover-letter"
                          required
                          placeholder="Enter your cover letter"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">resume</p>
                        <input
                          class="form-field"
                          type="text"
                          id="full-name"
                          name="full-name"
                          required
                          placeholder="Upload resume here"
                        />
                      </div>

                      <button class="submit-btn">submit application</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="position-gradient">
              <div class="position-acc-box">
                <div class="position-info">
                  <div>
                    <span class="content-tag white">1 to 4 years</span>
                    <h3 class="acc-hdn">Content Curator</h3>
                  </div>
                  <div class="detail-btn">view details</div>
                </div>
                <div class="position-detail">
                  <div class="position-detail-left">
                    <p>
                      Only 2% of our editors get accepted. That’s lesser than
                      Stanford Uni acceptance rates.
                    </p>
                    <ul>
                      <li>Need to have the Hardworking Character Trait</li>
                      <li>
                        Expert in Premiere/FinalCut/DaVince + AfterEffects
                      </li>
                      <li>Doesn’t play video games</li>
                      <li>Should be fun to work with</li>
                    </ul>
                  </div>
                  <div class="position-application">
                    <form action="">
                      <div class="form-grp">
                        <p class="form-label">Name</p>
                        <input
                          class="form-field"
                          type="text"
                          id="full-name"
                          name="full-name"
                          required
                          placeholder="Enter your name"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">contact number</p>
                        <input
                          class="form-field"
                          type="number"
                          id="phone-no"
                          name="phone-no"
                          required
                          placeholder="Enter your number"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">email</p>
                        <input
                          class="form-field"
                          type="email"
                          id="email"
                          name="email"
                          required
                          placeholder="Enter your email"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">cover letter</p>
                        <input
                          class="form-field"
                          type="text"
                          id="cover-letter"
                          name="cover-letter"
                          required
                          placeholder="Enter your cover letter"
                        />
                      </div>
                      <div class="form-grp">
                        <p class="form-label">resume</p>
                        <input
                          class="form-field"
                          type="text"
                          id="full-name"
                          name="full-name"
                          required
                          placeholder="Upload resume here"
                        />
                      </div>

                      <button class="submit-btn">submit application</button>
                    </form>
                  </div>
                </div>
              </div>
            </div> -->
            </div>
            <!-- position accordian ends -->
        </div>
    </section>
    <!-- Open positions Ends -->
</div>
<!-- Main Container Ends -->
<?php
get_footer(); ?>