  
  
  <section class="about-us">
        <div class="container">
          <div class="about-us__cards">
            <div class="card__content">
              <h2 class="heading--big__bold">
              <?php the_field('about-us_title',40);?>
              </h2>
              <p class="para--white"> <?php the_field('about-us_description',40);?></p>

              <a href="/about-us"> <?php the_field('about-us_button',40);?></a>
            </div>

            <div class="card__img">

            <?php
            $args = array(
              'post_type' => 'team_members',
              'posts_per_page' => 2
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                    <a href="<?php the_permalink();?>">
                    <div class="card__img--one">
                      
                    <img src="<?php echo get_the_post_thumbnail_url(  ) ?>" alt="" />

                    <div class="card__img--content">
                    
                      <span><?php the_title();?></span>
                      
                      <p><?php the_field('member_designation');?></p>
                    </div>
                  </div>
                  </a>
              <?php  }
            } else {
            }
            wp_reset_postdata();
            ?>

            </div>
          </div>
        </div>
      </section>