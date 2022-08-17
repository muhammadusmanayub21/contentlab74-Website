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
    <main class="page-wrapper" id="marketing--strategies">
      <section class="hero hero__content-marketing">
        <div class="container-secondary">
          <div class="hero__main">
            <div class="hero__text heading--main">
              <h1 class="heading__medium--text">
              <?php the_field('hero_title');?><span
                  class="heading__big--text"
                  ><?php the_title();?></span
                >
              </h1>
              <p><?php the_field('marketing_description');?></p>
            </div>
          </div>
        </div>
      </section>

      <section class="content-marketing">
        <div class="container-secondary">
          <div class="content__main">
            <div class="content-marketing__content">
              <p class="content-marketing__para--bold">
             <?php the_field('marketing_paragraph_first');?>
              </p>

              <h3> <?php the_field('marketing_title');?></h3>

              <p><?php the_field('marketing_paragraph_two');?></p>

              <p><?php the_field('marketing_paragraph_last');?></p>
            </div>
            <div class="content-page__para">
              <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" />
            </div>
          </div>
        </div>
      </section>

      <section class="cta-ready cta-marketing--small">
        <div class="container">
          <div class="cta-ready__main">
            <h2 class="heading--big__bold"><span>CONTENT IS KEY! That’s why we produce both</span>German and English content!</h2>
        </div>
      </section>

      <section class="content-marketing__formats">
        <div class="container-secondary">
            <div class="content__main">

                <div class="content-marketing__formats__content">
                    <h2 class="content-marketing__formats__heading--medium"><?php the_field('marketing_formats_title');?></h2>

                    <div class="content-marketing__formats__list">
                      <ul class="list__main">

                      <?php 
                      
                      if( have_rows('formats_list') ):
                        while( have_rows('formats_list') ) : the_row();
                        
                        ?>
                        
                        <li>
                          <?php the_sub_field('icon');?>  
                          
                          <span><?php the_sub_field('formats_text');?></span>
                        </li>           
                        
                        <?php
                 endwhile;
                endif;
                
                ?>     


                      </ul>
                </div>
                <a class="services--btn" href="/contact">reach out to us</a>
                
                </div>
  
                <div class="content-page__para">
                    <img src="<?php the_field('format_image');?>" alt="">
                </div>
  
                </div>

        </div>
    </div>
      </section>

      
      <section class="cta-ready cta-marketing">
        <div class="container">
          <div class="cta-ready__main">
            <h2 class="heading--big__bold">
              Ready to kick off your growth journey?
            </h2>

            <p>Feel free to contact us today</p>

            <a href="/contact" class="btn-cta">Lets Talk</a>
          </div>
        </div>
      </section>
    </main>

    <?php
get_footer();
