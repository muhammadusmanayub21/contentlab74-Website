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

    <main class="page-wrapper" id="About">
      <section class="about-us-single">
        <div class="container">
          <div class="about-us-single__cards">
            <div class="card__image">
              <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" />
            </div>

            <div class="card__text">
              <h3><?php the_title();?></h3>
              <p>
                <?php the_content();?>
              </p>
              <div class="team__social">

              <?php 
              if( have_rows('team_social_links') ):
                 while( have_rows('team_social_links') ) : the_row();
                 ?>
                 <div class="card-social-link">
                <a href="">
                  <?php the_sub_field('icon');?>
                </a>
                <span><?php the_sub_field('text');?></span>
              </div>
                 
                 <?php
                 endwhile;
                endif;
                
                ?>
              
              </div>
              
            </div>
          </div>
        </div>
      </section>

      <section class="cta-ready cta-about">
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
