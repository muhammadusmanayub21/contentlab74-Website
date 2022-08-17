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

<main class="page-wrapper" id="contact">
      <section class="contact">
        <div class="container">
          <div class="card-contact__main">
            <div class="card-contact__content">
              <div class="card-contact-body">
                <h5 class="card-contact-title"><?php the_title(); ?></h5>
                <div class="textcontact__email">
                  <a href="hello@contentlab74.de"><?php the_field('email');?></a>
                </div>
                <div class="textcontact__contact">
                  <img src="/img/carbon_phone.png" alt="" />
                  <a href="+49 160213745"><?php the_field('phone_number');?></a>
                </div>
              </div>

              <div class="card-contact-body">
                <h5 class="card-contact-title">Address</h5>
                <div class="textcontact__address">
                  <a href="#"
                    ><?php the_field('address');?></a
                  >
                </div>
              </div>

              <div class="card-contact-body">
                <h5 class="card-contact-title">Social Media</h5>
                <div class="contact--social">
                  <a href="#" class="contact--social__insta">
                    <?php the_field('instagram');?>
                  </a>
                  <a href="#" class="contact--social__linkdin">
                  <?php the_field('linkdin');?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php
get_footer();
