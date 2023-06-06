<?php

/* Template Name: About  */

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
      <!-- comm hdn Starts-->
      <div class="comm-section pt0">
        <div class="container">
          <div class="banner-head">
            <!-- <h1>
              Igniting brands with
              <span class="text-gradient yellow">bold</span> ideas and
              <span class="text-gradient blue">unparalleled</span> strategy.
            </h1> -->
            <?php echo get_field('main_title')?>
          </div>
          <!-- comm hdn Ends-->
        </div>
      </div>
      <!-- comm hdn End-->

      <!-- Visio Section Starts-->
      <section class="comm-section vision-sec">
        <div class="container">
          <div class="vision-wrap">
            <div class="vision-gradient">
              <div class="vision-info">
                <span class="content-tag red"><?php echo get_field('vision_title')?></span>
                <div class="comm-para">
                  <p>
                   <?php echo get_field('vision_title_copy')?>
                  </p>
                </div>
              </div>
            </div>
            <div class="vision-gradient">
              <div class="vision-info">
                <span class="content-tag green"><?php echo get_field('mission_title')?></span>
                <div class="comm-para">
                  <p><?php echo get_field('mission_content')?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Visio Section Ends-->

      <!-- dream team Section Starts-->
      <section class="comm-section dream-sec">
        <div class="container">
          <div class="content-tag violet center">dream team</div>

          <div class="team-wrap">
            <div class="f-row f-3 f-990-2 f-640-1">
            <?php if( have_rows('dream_team') ): ?>
                <?php while( have_rows('dream_team') ): the_row();  ?>
                    
            <div class="f-col">
                <div class="team-box">
                  <span><?php the_sub_field('designation'); ?></span>
                  <div class="team-img">
                    <img
                      src="<?php the_sub_field('image'); ?>"
                      alt="Team member"
                      width="100%"
                      height="100%"
                      loading="lazy"
                    />
                  </div>
                  <div class="team-info">
                    <h3 class="team-member"><?php the_sub_field('name'); ?></h3>
                    <p>
                     <?php the_sub_field('content'); ?>
                    </p>
                  </div>
                </div>
              </div>
                <?php endwhile; ?>
            <?php endif; ?>
              
              <!-- <div class="f-col">
                <div class="team-box">
                  <span>Video Editing Lead</span>
                  <div class="team-img">
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/team2.jpg"
                      alt="Team member"
                      width="100%"
                      height="100%"
                      loading="lazy"
                    />
                  </div>
                  <div class="team-info">
                    <h3 class="team-member">Ana howard</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua.
                    </p>
                  </div>
                </div>
              </div>
              <div class="f-col">
                <div class="team-box">
                  <span>Content Curator</span>
                  <div class="team-img">
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/team3.jpg"
                      alt="Team member"
                      width="100%"
                      height="100%"
                      loading="lazy"
                    />
                  </div>
                  <div class="team-info">
                    <h3 class="team-member">mark Twain</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua.
                    </p>
                  </div>
                </div>
              </div>
              <div class="f-col">
                <div class="team-box">
                  <span>Animation Lead</span>
                  <div class="team-img">
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/team4.jpg"
                      alt="Team member"
                      width="100%"
                      height="100%"
                      loading="lazy"
                    />
                  </div>
                  <div class="team-info">
                    <h3 class="team-member">mark Twain</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua.
                    </p>
                  </div>
                </div>
              </div>
              <div class="f-col">
                <div class="team-box">
                  <span>Media Buying Lead</span>
                  <div class="team-img">
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/team5.jpg"
                      alt="Team member"
                      width="100%"
                      height="100%"
                      loading="lazy"
                    />
                  </div>
                  <div class="team-info">
                    <h3 class="team-member">mark Twain</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua.
                    </p>
                  </div>
                </div>
              </div>
              <div class="f-col">
                <div class="team-box">
                  <span>Graphic Design Lead</span>
                  <div class="team-img">
                    <img
                      src="<?php bloginfo('template_url'); ?>/assets/img/team6.jpg"
                      alt="Team member"
                      width="100%"
                      height="100%"
                      loading="lazy"
                    />
                  </div>
                  <div class="team-info">
                    <h3 class="team-member">mark Twain</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua.
                    </p>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </section>
      <!-- dream team Section Ends-->
    </div>
    <!-- Main Container Ends -->

<?php
get_footer(); ?>