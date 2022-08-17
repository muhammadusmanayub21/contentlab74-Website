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
<main class="page-wrapper" id="social-media--marketing">
      <section class="hero hero__social">
        <div class="container">
          <div class="hero__main">
            <div class="hero__text heading--main">
              <h1 class="heading__medium--text">
              <?php the_field('hero_title_medium');?><span class="heading__big--text"><?php the_title();?></span>
              </h1>
            </div>
          </div>
        </div>
      </section>

      <section class="social-media-marketing">
        <div class="container">
          <div class="content__main">
            <div class="social-media-marketing">
              <p class="social-media-marketing__para--bold">
              <?php the_field('social_paragraph_one');?>
              </p>
            </div>
            <div class="social-media__para">
                <p class="social-media-marketing__para--bold">
                <?php the_field('social_paragraph_two');?>
                  </p>
            </div>
          </div>
        </div>
      </section>

      <section class="social-media-marketing--suitable">
        <div class="container">
            <div class="content__main">
                <div class="social-media--suitable">
                    <h2 class="social-media-marketing--suitable heading--medium"><?php the_field('suitable_description');?></h2>
        
                    <div class="social-media-marketing--suitable__list">
                      <ul class="social-media__list__main">

                      <?php 
                      if( have_rows('suitable_list') ):
                        while( have_rows('suitable_list') ) : the_row();
                        
                        ?>
                        <li>
                          
                          <?php the_sub_field('icon');?>
                          <span><?php the_sub_field('list_text');?></span>
                        </li>                 
                
                <?php
                 endwhile;
                endif;
                
                ?>     
              </ul>
                </div>
                </div>

                <div class="social-media--suitable__para">
                    <img src="<?php the_field('suitable_image')?>" alt="">
                </div>
              </div>
        </div>
      </section>

      <section class="social-media-benefits">
        <div class="container">
            <div class="content__main">
                <div class="social-media--benefits content-benefits">
                    <h2 class="social-media-marketing heading--medium">   <?php the_field('benefits_description');?></h2>
        
                    <div class="social-media-marketing__list">
                      <ul class="social-media__list__main">
                        
                        <?php 
                        
                        if( have_rows('benefits_list') ):
                          while( have_rows('benefits_list') ) : the_row();
                          ?>
                          
                          <li>
                            <?php the_sub_field('icon');?>
                            <span><?php the_sub_field('list_text');?></span>
                          </li>
                          
                          <?php
                          endwhile;
                        endif;
                        
                        ?>
                      </ul>
                    </div>
                    
                    <a class="services--btn" href="/contact">reach out to us</a>
                  </div>
                  
                  <div class="social-media-benefits__para">
                    <img src="<?php the_field('benefits_image')?>" alt="">
                  
                  </div>
                
                </div>
        </div>
      </section>

      


      <section class="cta-ready cta-social">
            <div class="container">
              <div class="cta-ready__main">
                <h2 class="heading--big__bold">Ready to kick off your growth journey?</h2>
      
                <p>Feel free to contact us today</p>
  
                <a href="/contact" class="btn-cta">Lets Talk</a>
              </div>
            </div>
          </section>
    </main>
    <?php
get_footer();
