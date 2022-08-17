<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ContentLab74
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>

	<!-- meta --> 
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

	<!-- styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css"/>

    <title>Home</title>
	<?php wp_head( );?>
  <?php 
    global $post;
    $post_slug = $post->post_name;
?>
  </head>

  <body <?php body_class($post_slug); ?>>
  <header class="header">
      <div class="container">
        <div class="header__main">
          <div class="header__logo">
            <a href="/home"><img src="<?php echo get_template_directory_uri()?>./assets/img/logo--foter.png" alt="Logo" /></a>
          </div>

          <div class="header__toggler" id="toggler">
            <div class="hamburger" id="hamburger-1">
              <span class="line"></span>

              <span class="line"></span>

              <span class="line"></span>
            </div>
          </div>

          <div class="header__menu" id="nav">
            <div class="header__nav">
            <?php
            wp_nav_menu(
              
              array(
                'theme_location' => 'menu-1',
                'container' => false,
				'menu_class' => 'nav__menu'
                ));
                
           ?>
            </div>
            <div class="mobile-header__lang">
              <span class="lang">EN|DE</span>
            </div>

            <div class="panel-address">
              <div class="widget">
                <div class="textwidget">
                  <div class="textwidgets__address">
                    <a href="#">Ludwig-Essinger Street 12 <br>
                      74080 Heilbronn <br>
                      Germany</a>
                  </div>
                  <div class="textwidgets__email">
                    <a href="hello@contentlab74.de">hello@contentlab74.de</a>
                  </div>
                  <div class="textwidgets__contact">
                    <a href="+49 160213745">+49 160213745</a>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="header__lang">
            <span class="lang">EN|DE</span>
          </div>
        </div>
      </div> 
    </header>









<!-- smkl -->
	