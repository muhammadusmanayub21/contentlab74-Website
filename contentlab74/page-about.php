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
      <section class="hero hero__about">
        <div class="container-secondary">
          <div class="hero__main">
            <div class="hero__text heading--main">
              <h1 class="heading__medium--text">About</h1>
            </div>
          </div>
        </div>
      </section>
      <?php get_template_part( 'template-parts/section', 'about-us' ); ?>

      <section class="cta-ready cta-about">
        <div class="container">
          <div class="cta-ready__main">
            <h2 class="heading--big__bold">
              Ready to kick off your growth journey?
            </h2>

            <p>Feel free to contact us today</p>

            <a href="/Contact.html" class="btn-cta">Lets Talk</a>
          </div>
        </div>
      </section>
    </main>

    <?php
get_footer();
