<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ContentLab74
 */

?>
<footer class="footer">
      <div class="container">
        <div class="footer__main">
          <div class="widget">
          <?php dynamic_sidebar('footer-1' )?>
            </div>
            <div class="widget">
            <?php dynamic_sidebar('footer-2' )?>
          </div>

          <div class="widget">
          <?php dynamic_sidebar('footer-3' )?>
          </div>
          </div>

          
        </div>
      </div>
      <div class="footer__bar bg--gradient-check">
        <div class="container">
          <div class="footer__bar--terms">
            <span>ContentLab74 © 2022</span>
          </div>
          <div class="footer__bar--terms">
            <span><a href="#">General Terms</a></span>
            <span><a href="#"> Data Privacy </a></span>
            <span><a href="#">Imprint</a></span>
          </div>
        </div>
      </div>
    </footer>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/script.js"></script>
  </body>
</html>
