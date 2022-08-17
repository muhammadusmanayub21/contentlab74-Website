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

      <main class="page-wrapper" id="content--strategies">
        <section class="hero strategies__content">
          <div class="container-secondary">
            <div class="hero__main">
              <div class="hero__text heading--main">
                  <h1 class="heading__medium--text"><span class="heading__big--text"><?php the_field('hero_heading_main');?></span><?php the_field('hero_heading_span');?></h1>
              </div>

              </div>
            </div>
        </section>
          <section class="content-page">
            <div class="container-secondary">
                <div class="content__main">

                    <div class="content-page__content">
                        <h2 class="content-page__heading--medium"></span><?php the_field('content_title');?></h2>
                        <p class="content-page__para--bold"><?php the_content()?></p>
  
                        <h3><?php the_field('content_title_second');?><span class="bold"><?php the_field('content_title_second_bold');?></span></h3>
  
                        <div class="content-page__list">
                          <ul class="list__main">
                          <?php 
                          
                          if( have_rows('content_list') ):
                            while( have_rows('content_list') ) : the_row();
                            
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
      
                    <div class="content-page__para">
                        <img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
      
                     
                    </div>
      
                    </div>

            </div>
        </div>
          </section>

          <section class="cta-ready cta-content">
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
