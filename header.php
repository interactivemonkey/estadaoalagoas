<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Estadão_Alagoas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'estadaoalagoas' ); ?></a>

	<header id="masthead" class="site-header">

              <div class=" top-bar-top bg-accent header-style2" style="padding-top:8px; padding-bottom:8px;" >
                            <div class="container">
                                <div class="row justify-content-end">
                                	<div class="col-lg-1 d-none d-lg-block"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/radioestadaoal.png"></div>
                                    <div class="col-lg-2 col-md-2 d-none d-lg-block">
                                            <!-- ////////// Player  ////////////  -->
                                                <div id="small-player">
						                  <div class="hidden-on-collapse" id="small-player-full-bottom">
						                        <div amplitude-song-index="0" class="amplitude-play-pause amplitude-paused pull-right"></div>
						                  </div>
					                  </div>
                                            <!-- ////////// Fim Player //////// -->
                                    </div>
                                    <div class="col  align-self-end">
                                        <ul class="header-social">
                                            <li>
                                                <a href="#" title="facebook">
                                                    <i class="fab fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="twitter">
                                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="google-plus">
                                                    <i class="fab fa-google-plus" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="linkedin">
                                                    <i class="fab fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="pinterest">
                                                    <i class="fab fa-pinterest" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="rss">
                                                    <i class="fa fa-rss" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="vimeo">
                                                    <i class="fab fa-vimeo" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                  </div>


		<div class="site-branding" style="background-color: #1e477d; padding-top:35px; padding-bottom:35px;">
                 <div class="container">
                 	      <div class="row">
                 	      	<div class="col-lg-4 d-none d-lg-block">
					       <?php the_custom_logo(); ?>
				      </div>
				      <div class="col d-flex justify-content-center d-block d-sm-none">
					       <?php the_custom_logo(); ?>
				      </div>
				</div>
			</div>
		</div><!-- .site-branding -->


    	<div class="nav-scroller bg-white shadow-sm">
			<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
				  <div class="container">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
				        <span class="navbar-toggler-icon"> </span>
				    </button>
				 <!--  <a class="navbar-brand" href="#">Navbar</a>  -->
				<?php
				wp_nav_menu( array(
				            'theme_location'    => 'menu-1',
				            'depth'             => 2,
				            'container'         => 'div',
				            'container_class'   => 'collapse navbar-collapse',
				            'container_id'      => 'bs-example-navbar-collapse-1',
				            'menu_class'        => 'nav navbar-nav',
				            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				            'walker'            => new WP_Bootstrap_Navwalker(),

				) );

				?>
			  </div>
             </nav>
      </div>
	</header><!-- #masthead -->