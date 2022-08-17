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

    <main class="page-wrapper" id="Web-Design">  
      <section class="hero hero__web-design">
        <div class="container-secondary">
          <div class="hero__main">
            <div class="hero__text heading--main">
              <h1 class="heading__medium--text">
              <?php the_field('hero_title_medium');?><span
                  class="heading__big--text"
                  ><?php the_title();?></span
                >
              </h1>
            </div>
          </div>
        </div>
      </section>
      <section class="Web-Design">
        <div class="container-secondary">
          <div class="content__main">
            <div class="Web-Design__content">
              <p class="Web-Design__para--bold">
                <?php the_field('web_paragraph');?>
              </p>

              <h2>  <?php the_field('title');?></h2>
              <h3><?php the_field('description');?></h3>

              <p>
                <?php the_field('paragraph');?>
              </p>
            </div>

            <div class="web-design__para">
              <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" />
            </div>
          </div>

          <div class="dna__cards">
            <h2><?php the_field('title');?></h2>

            <div class="card__main">
            <?php 
            if( have_rows('web_cards') ):
              while( have_rows('web_cards') ) : the_row();
              ?>
              
              <div class="card-one">
                <div class="card-head">
                  <a href="#"><img src="<?php the_sub_field('card_icon')?>" alt=""></a>
              </div>

                <span class="card-text">
                  <h3><?php the_sub_field('card_title')?></h3>
                  <p><?php the_sub_field('card_description');?></p>
                </span>
              </div>   
              
              <?php
              endwhile;
            endif;
            
            ?>     
            
          </div>
          </div>
        </div>
      </section>

      <section class="cta-ready cta-Web-Design">
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