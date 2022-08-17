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

<main class="page-wrapper" id="services">
      <section class="hero hero__about">
        <div class="container-secondary">
          <div class="hero__main">
            <div class="hero__text heading--main">
              <h1 class="heading__medium--text"><?php the_title();?></h1>
            </div>
          </div>
        </div>
      </section>
      <section class="services">
        <div class="container">
            <div class="card-services">
                <div class="card-services__main">           
                  <?php 
                  if( have_rows('card_services') ):
                    while( have_rows('card_services') ) : the_row();
                    ?>
                    
                    <div class="card-services__content">
                      <div class="card-body">
                        <h5 class="card-title"><?php the_sub_field('title');?></h5>
                        <p class="card-text"><?php the_sub_field('description');?></p>
                        <a href="page-content-strategies.php" class="btn btn-primary"><?php the_sub_field('button_text');?></a>
                      
                      </div>
                    </div>
                    <?php
                    
                  endwhile;
                endif;
                ?>
              </div>
            </div>
          </div>
      </section>
  </main>   

<?php
get_footer();
