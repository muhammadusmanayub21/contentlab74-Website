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

    <main class="page-wrapper" id="employer-Brand">
      <section class="hero hero__employer-Brand">
        <div class="container">
          <div class="hero__main">
            <div class="hero__text heading--main">
              <h1 class="heading__medium--text">
                <?php the_field('hero_title_medium');?><span class="heading__big--text"
                  ><?php the_field('hero_title_bold');?></span
                >
              </h1>
            </div>
          </div>
        </div>
      </section>
      <section class="employer-Brand">
        <div class="container">
          <div class="content__main">
            <div class="employer-Branding">
              <h2 class="employer-Brand heading--medium">
              <?php the_field('jobs_title');?>
              </h2>
              <p>
              <?php the_field('jobs_description');?>
              </p>

              <h2 class="employer-Brand heading--medium">
                <?php the_field('brand_face_title');?>
              </h2>
              <p>
              <?php the_field('brand_face_description');?>
              </p>
            </div>
            <div class="employer-Brand--suitable__para">
              <img src="<?php the_field('jobs_image');?>" alt="" />
            </div>
          </div>
        </div>
      </section>
      <section class="employer-Brand--authencity">
        <div class="container">
          <div class="content__main">
            <div class="employer-Branding">
              <h2 class="employer-Brand heading--medium"> <?php the_field('title');?></h2>
              <p>
              <?php the_field('description');?>
              </p>

              <p>
              <?php the_field('paragraph');?>
              </p>
            </div>
            <div class="employer-Brand--suitable__para">
              <img src="<?php the_field('authencity_image');?>" alt="" />
            </div>
          </div>
        </div>
      </section>

      <section class="cta-ready cta-employer-Branding">
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
