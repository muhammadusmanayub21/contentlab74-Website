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
    <main class="page-wrapper" id="event-branding">
      <section class="hero hero__event-branding">
        <div class="container-secondary">
          <div class="hero__main">
            <div class="hero__text heading--main">
              <h1 class="heading__medium--text">
                <?php the_field('hero_title_medium')?><span
                  class="heading__big--text"
                  ><?php the_field('hero_title_bold')?></span
                >
              </h1>
            </div>
          </div>
        </div>
      </section>

      <section class="event-branding">
        <div class="container-secondary">
          <div class="content__main">
            <div class="event-branding__content">
              <h2 class="event-branding heading--medium"><?php the_field('event_title')?></h2>

              <p class="event-branding__para--bold">
              <?php the_field('event_description')?>
              </p>
              <a class="services--btn" href="/contact">reach out to us</a>
            </div>

            <div class="event-branding__para">
              <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" />
            </div>  
          </div>
        </div>
      </section>

      <section class="cta-ready cta-event-branding">
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
