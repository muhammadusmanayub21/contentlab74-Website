<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ContentLab74
 */

get_header();
?>
<main class="page-wrapper" id="home">
      <section class="hero">
        <div class="container">
          <div class="hero__main">
            <div class="hero__text heading--main">
              <h1 class="heading__medium--text">
              <?php the_field('hero_main-heading');?>
                <span class="heading__big--text"> <?php the_field('hero_span');?>
              </span>
              </h1>
            </div>

            <div class="hero__text bottom__main">
              <div class="bottom__content">
                <h2 class="bottom__heading--medium">
               <?php the_field('hero_left-heading');?>
                </h2>
                <p class="bottom__para--bold">
                <?php the_field('hero_paragraph');?>
                </p>
              </div>

              <div class="bottom__para">
                <p class="para--light">
                <?php the_field('bottom__para');?>
                </p>

                <a class="services--btn" href="services.html">Services</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="success-dna">
        <div class="container">
          <div class="success-dna__main">
            <h2 class="heading--big__bold">
              Our <span>DNA</span> for Your Success
            </h2>
          </div>

          <div class="success-dna__image">
            <div class="success-dna__text-left">
              
              <?php 
              if( have_rows('dna_text-span') ):
                 while( have_rows('dna_text-span') ) : the_row();
                 ?>
                 <span> <?php the_sub_field('text1');?></span>
                 <span> <?php the_sub_field('text_2');?></span>
                 <span> <?php the_sub_field('text_3');?></span>
                 
                 <?php
                 endwhile;
                endif;
                
                ?>
            </div>

            <div class="success-dna__content">
              <div class="blueprint">
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
                <div class="bar">
                  <div class="dot1"></div>
                  <div class="dot2"></div>
                </div>
              </div>
            </div>

            <div class="success-dna__text-right">
               
            <?php 
              if( have_rows('dna_txt_spans') ):
                 while( have_rows('dna_txt_spans') ) : the_row();
                 ?>
                 <span> <?php the_sub_field('txt_1');?></span>
                 <span> <?php the_sub_field('text_2');?></span>
                 <span> <?php the_sub_field('text_3');?></span>
                 
                 <?php
                 endwhile;
                endif;
                
                ?>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part( 'template-parts/section', 'cases' ); ?>

      <section class="testimonials">
        <div class="container">
          <div class="testimonials__main">
            <h2 class="heading--big__bold">
              Real <span>words</span> by Real <span>people</span>
            </h2>
            <p class="para--white">
              It's great to get a pat on your back for a job well done. See what
              our clients have to say about us
            </p>

            <div class="swiper testimonials__slider">
              <div class="swiper-wrapper">

              <?php 
              if( have_rows('testimonials__slider') ):
                 while( have_rows('testimonials__slider') ) : the_row();
                 ?>
                 <div class="swiper-slide">
                  <div class="testimonials__card">
                  <img src="<?php the_sub_field('testimonial_image');?>"/>

                    <div class="text">
                    <?php the_sub_field('content');?>
                    </div>
                    <h3><?php the_sub_field('testimonial_name');?></h3>
                    <span
                      ><?php the_sub_field('designation');?></span
                    >
                  </div>
                </div>
                 <?php
                 endwhile;
                endif;
                
                ?>
              </div>
              
              <div class="swiperfooter">
                <div class="swiperfooter__inner">
                  <div class="swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" width="61.849" height="22.716" viewBox="0 0 61.849 22.716">
                    <path id="leftarrow" d="M62.849,28.955H5.993L14.2,37.164l-1.845,1.845L1,27.651,12.358,16.293,14.2,18.137,5.993,26.346H62.849Z" transform="translate(-1 -16.293)" fill="#fff"/>
                  </svg></div>
                  <div class="swiper-button-next"><svg xmlns="http://www.w3.org/2000/svg" width="61.849" height="22.716" viewBox="0 0 61.849 22.716">
                    <path id="rightarrow" d="M1,28.955H57.856l-8.209,8.209,1.844,1.844L62.849,27.651,51.491,16.293l-1.844,1.844,8.209,8.209H1Z" transform="translate(-1 -16.293)" fill="#fff"/>
                  </svg></div>
                  
                </div> 
                <div class="swiper-pagination"></div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta-card">
        <div class="container">
          <div class="cta-card__main">
            <h2 class="heading--big__bold">
              Trusted by some of the world's best companies
            </h2>

            <?php 
              if( have_rows('cta_card') ):
                 while( have_rows('cta_card') ) : the_row();
                 ?>
                  <div class="cta-card__logos">
              <div class="logo--one">
              <?php the_sub_field('svg_one');?>
              </div>
              <div class="logo--two">
              <?php the_sub_field('svg_two');?>
              </div>

              <div class="logo--three">
              <?php the_sub_field('svg_three');?>
              </div>

              <div class="logo--four">
              <?php the_sub_field('svg_four');?>
              </div>
            </div>
                 <?php
                 endwhile;
                endif;
                
                ?>
           
          </div>
        </div>
      </section>

      <?php get_template_part( 'template-parts/section', 'about-us' ); ?>

      <section class="cta-ready">
        <div class="container">
          <div class="cta-ready__main">
            <h2 class="heading--big__bold">Ready to Talk?</h2>

            <p>Feel free to contact us today</p>

            <a href="/contact" class="btn-cta">Lets Talk</a>
          </div>
        </div>
      </section>

      <section class="cta-small">
        <marquee>
          <span>WE ARE LOOKING FOR REMOTE TALENT</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="10"
            height="10"
            viewBox="0 0 10 10"
          >
            <circle
              id="Ellipse_21"
              data-name="Ellipse 21"
              cx="5"
              cy="5"
              r="5"
              fill="#fff"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="10"
            height="10"
            viewBox="0 0 10 10"
          >
            <circle
              id="Ellipse_21"
              data-name="Ellipse 21"
              cx="5"
              cy="5"
              r="5"
              fill="#fff"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="10"
            height="10"
            viewBox="0 0 10 10"
          >
            <circle
              id="Ellipse_21"
              data-name="Ellipse 21"
              cx="5"
              cy="5"
              r="5"
              fill="#fff"
            />
          </svg>
          <span>CONTENT CREATOR</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="10"
            height="10"
            viewBox="0 0 10 10"
          >
            <circle
              id="Ellipse_21"
              data-name="Ellipse 21"
              cx="5"
              cy="5"
              r="5"
              fill="#fff"
            />
          </svg>
          <span>DIGITAL MARKETER</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="10"
            height="10"
            viewBox="0 0 10 10"
          >
            <circle
              id="Ellipse_21"
              data-name="Ellipse 21"
              cx="5"
              cy="5"
              r="5"
              fill="#fff"
            />
          </svg>
          <span>WEB DESIGNERS</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="10"
            height="10"
            viewBox="0 0 10 10"
          >
            <circle
              id="Ellipse_21"
              data-name="Ellipse 21"
              cx="5"
              cy="5"
              r="5"
              fill="#fff"
            />
          </svg>
          <span>CLICK FOR MORE INFORMATION</span>
        </marquee>
      </section>
    </main>


<?php
get_footer();