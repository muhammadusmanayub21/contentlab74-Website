<section class="Cases">
          <div class="Cases__main">
            <h2 class="heading--big__bold">Cases</h2>
            <a href="./cases.html">View all<span><svg xmlns="http://www.w3.org/2000/svg" width="31.978" height="18.651" viewBox="0 0 31.978 18.651">
              <path id="view_all_arrow" data-name="view all arrow" d="M4,17.327a1.332,1.332,0,0,0,1.332,1.332h26.1l-5.719,5.719a1.332,1.332,0,1,0,1.884,1.884l7.994-7.995a1.319,1.319,0,0,0,.389-.935v-.005a1.3,1.3,0,0,0-.1-.509,1.319,1.319,0,0,0-.288-.432L27.592,8.391a1.332,1.332,0,1,0-1.884,1.884l5.722,5.719H5.332A1.332,1.332,0,0,0,4,17.327Z" transform="translate(-4 -8.001)"/>
            </svg></span></a>
          </div>

        <!-- Swiper -->
        <div #swiperRef="" class="swiper-container mySwiper">
          <div class="swiper-wrapper">
          <?php 
              if( have_rows('swiper_wrapper',40) ):
                 while( have_rows('swiper_wrapper',40) ) : the_row();
                 ?>
                  <div class="swiper-slide">
              <img src="<?php the_sub_field('swiper_image',40);?>"/>
              <span class="swiper--slide--head">
                <h2 class="swiper--heading"><?php the_sub_field('swiper_heading',40);?></h2>
                <p class="para--white">
                <?php the_sub_field('para_white' ,40);?>
                </p>
              </span>
            </div>
                 <?php
                 endwhile;
                endif;
                
                ?>

          </div>
          <div class="swiperfooter swipercases">
            <div class="swiperfooter__inner">
              <div class="swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" width="61.849" height="22.716" viewBox="0 0 61.849 22.716">
                <path id="Layer_1_1_left" d="M62.849,28.955H5.993L14.2,37.164l-1.845,1.845L1,27.651,12.358,16.293,14.2,18.137,5.993,26.346H62.849Z" transform="translate(-1 -16.293)"/>
              </svg></div>
              <div class="swiper-button-next"><svg xmlns="http://www.w3.org/2000/svg" width="61.849" height="22.716" viewBox="0 0 61.849 22.716">
                <path id="Layer_1_1__right" data-name="Layer_1_1_ right" d="M1,28.955H57.856l-8.209,8.209,1.844,1.844L62.849,27.651,51.491,16.293l-1.844,1.844,8.209,8.209H1Z" transform="translate(-1 -16.293)"/>
              </svg></div>
              
            </div> 

          </div>
        </div>
      </section>