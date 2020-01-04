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
 * @package Estadão_Alagoas
 */

get_header();
?>

	<div class="container">

        <section class="add-top-margin" style="margin-top:30px">
                <div class="container">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 bg-accent">
                            <div class="topic-box mt-11 mb-11" style="color:#1e477d;">Manchete</div>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8 col-6 bg-accent " style="padding:3px 0px;">

                         <ul id="sample" class="ticker">
                              <li><a href="#"><p>Item 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p></a></li>
                              <li><a href="#"><p>IItem 2. Lorem ipsum doler sit amet.</p></a></li>
                              <li><a href="#"><p>IItem 3. Lorem ipsum doler sit amet.</p></a></li>
                          </ul>

                        </div>
                    </div>
                </div>
            </section>
      <!--  DESTAQUE -->
      <section class="section-space-bottom-less4 mt-40">
                <div class="container">
                    <div class="row tab-space2">

                        <div class="col-md-8 col-sm-12 mb-4">
                            <div class="img-overlay-70 img-scale-animate">
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news1.jpg" alt="news" class="img-fluid width-100">
                                <div class="mask-content-lg">
                                    <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>by</span>
                                                <a href="single-news-1.html">Adams</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>March 22, 2017</li>
                                        </ul>
                                    </div>
                                    <h1 class="title-medium-light d-none d-sm-block">
                                        <a href="single-news-1.html">If Obama Had Governed Like This in 2017 He'd Be they areatin Transformational.</a>
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                              <div class="img-overlay-70 img-scale-animate mb-4">
                                    <div class="mask-content-sm">
                                          <div class="topic-box-sm color-razzmatazz mb-10">Travel</div>
                                          <h3 class="title-medium-light">
                                              <a href="single-news-3.html">Travel ficen Image mar shaper dam bridge taking</a>
                                          </h3>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news2.jpg" alt="news" class="img-fluid width-100">
                              </div>

                              <div class="img-overlay-70 img-scale-animate mb-4">
                                    <div class="mask-content-sm">
                                          <div class="topic-box-sm color-apple mb-10">Business</div>
                                          <h3 class="title-medium-light">
                                              <a href="single-news-1.html">Magnificent Image shaper dam bridge taking</a>
                                          </h3>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news3.jpg" alt="news" class="img-fluid width-100">
                              </div>

                        </div>

                    </div>
                </div>
      </section>

      <section>
            <div class="row">
                  <!-- coluna 1 e 2 -->
                  <div class="col-8">

                              <div class="topic-border color-notic mb-30">
                                    <div class="topic-box-lg color-notic">Mais Notícias</div>
                              </div>

                              <div class="featuredContainer" style="position: relative; height: 429px;">

                                    <div class="row" style="position: absolute; left: 0px; top: 0px;">
                                          <!-- Coluna 1 -->
                                          <div class="col-xl-6 col-lg-7 col-md-12 mb-30">
                                                <div class="img-overlay-70 img-scale-animate">
                                                      <a href="single-news-1.html">
                                                            <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news4.jpg" alt="news" class="img-fluid width-100">
                                                      </a>
                                                      <div class="mask-content-lg">
                                                            <div class="topic-box-sm color-notic mb-20">Notícias</div>
                                                            <div class="post-date-light">
                                                                  <ul>
                                                                        <li>
                                                                            <span>by</span>
                                                                            <a href="single-news-1.html">Adams</a>
                                                                        </li>
                                                                        <li>
                                                                            <span>
                                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                            </span>March 22, 2017</li>
                                                                  </ul>
                                                            </div>

                                                            <h2 class="title-medium-light size-lg">
                                                                  <a href="single-news-1.html">Government launches are inquiry into tainted ...</a>
                                                            </h2>

                                                      </div>
                                                </div>
                                          </div>
                                           <!-- Coluna 2 e 3 -->
                                          <div class="col-xl-6 col-lg-5 col-md-12">
                                                <div class="row">
                                                      <div class="col-12">
                                                            <div class="media bg-body item-shadow-gray mb-30">
                                                                  <a class="img-opacity-hover" href="single-news-1.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news5.jpg" alt="news" class="img-fluid">
                                                                  </a>
                                                                  <div class="media-body media-padding10">
                                                                        <div class="post-date-dark">
                                                                              <ul>
                                                                                   <li>
                                                                                         <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                                         January 14, 2017
                                                                                   </li>
                                                                            </ul>
                                                                        </div>
                                                                        <h3 class="title-medium-dark mb-none">
                                                                               <a href="single-news-2.html">Gloost better they are with a featured</a>
                                                                        </h3>
                                                                  </div>
                                                            </div>

                                                            <div class="media bg-body item-shadow-gray mb-30">
                                                                  <a class="img-opacity-hover" href="single-news-1.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news5.jpg" alt="news" class="img-fluid">
                                                                  </a>
                                                                  <div class="media-body media-padding10">
                                                                        <div class="post-date-dark">
                                                                              <ul>
                                                                                    <li>
                                                                                          <span>
                                                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                          </span>
                                                                                          February 14, 2017
                                                                                    </li>
                                                                              </ul>
                                                                        </div>
                                                                        <h3 class="title-medium-dark mb-none">
                                                                               <a href="single-news-2.html">Banning Winter Holiy Islands Offers</a>
                                                                        </h3>
                                                                  </div>
                                                            </div>

                                                            <div class="media bg-body item-shadow-gray mb-30">
                                                                  <a class="img-opacity-hover" href="single-news-1.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news5.jpg" alt="news" class="img-fluid">
                                                                  </a>
                                                                  <div class="media-body media-padding10">
                                                                        <div class="post-date-dark">
                                                                              <ul>
                                                                                    <li>
                                                                                          <span>
                                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                    </span>April 24, 2017</li>
                                                                            </ul>
                                                                        </div>
                                                                        <h3 class="title-medium-dark mb-none">
                                                                            <a href="single-news-2.html">Gloost better they are with a featured</a>
                                                                        </h3>
                                                                  </div>
                                                            </div>
                                                     </div>
                                               </div>
                                          </div>

                                    </div>
                              </div>
                  </div>

                   <!-- Coluna 3 -->
                   <div class="col-4">

                              <div class="topic-border color-entret mb-30">
                                    <div class="topic-box-lg color-entret">Entretenimento</div>
                              </div>

                              <div class="featuredContainer" style="position: relative; height: 429px;">

                                    <div class="row" style="position: absolute; left: 0px; top: 0px;">

                                           <!-- Coluna 1 -->
                                          <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row">

                                                      <div class="col-12">

                                                            <div class="media bg-body item-shadow-gray mb-30">
                                                                  <a class="img-opacity-hover" href="single-news-1.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news5.jpg" alt="news" class="img-fluid">
                                                                  </a>
                                                                  <div class="media-body media-padding10">
                                                                        <div class="post-date-dark">
                                                                              <ul>
                                                                                   <li>
                                                                                         <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                                         January 14, 2017
                                                                                   </li>
                                                                            </ul>
                                                                        </div>
                                                                        <h3 class="title-medium-dark mb-none">
                                                                               <a href="single-news-2.html">Gloost better they are with a featured</a>
                                                                        </h3>
                                                                  </div>
                                                            </div>

                                                            <div class="media bg-body item-shadow-gray mb-30">
                                                                  <a class="img-opacity-hover" href="single-news-1.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news5.jpg" alt="news" class="img-fluid">
                                                                  </a>
                                                                  <div class="media-body media-padding10">
                                                                        <div class="post-date-dark">
                                                                              <ul>
                                                                                    <li>
                                                                                          <span>
                                                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                          </span>
                                                                                          February 14, 2017
                                                                                    </li>
                                                                              </ul>
                                                                        </div>
                                                                        <h3 class="title-medium-dark mb-none">
                                                                               <a href="single-news-2.html">Banning Winter Holiy Islands Offers</a>
                                                                        </h3>
                                                                  </div>
                                                            </div>

                                                            <div class="media bg-body item-shadow-gray mb-30">
                                                                  <a class="img-opacity-hover" href="single-news-1.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news5.jpg" alt="news" class="img-fluid">
                                                                  </a>
                                                                  <div class="media-body media-padding10">
                                                                        <div class="post-date-dark">
                                                                              <ul>
                                                                                    <li>
                                                                                          <span>
                                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                    </span>April 24, 2017</li>
                                                                            </ul>
                                                                        </div>
                                                                        <h3 class="title-medium-dark mb-none">
                                                                            <a href="single-news-2.html">Gloost better they are with a featured</a>
                                                                        </h3>
                                                                  </div>
                                                            </div>

                                                      </div>

                                                </div>
                                          </div>

                                    </div>

                              </div>
                  </div>
                   <!-- fim coluna 3 -->

            </div>
      </section>

      <!-- ANUNCIO -->
      <section class="section-space-bottom">
            <div class="row">
                        <div class="col-12">
                            <div class="ne-banner-layout1 mt-20-r text-center">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/banner/banner2.jpg" alt="ad" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
      </section>


      <section class="section-space-bottom-less30">
                <div class="container">
                    <div class="row">
                        <!-- esportes -->
                        <div class="col-lg-8 col-md-12">
                            <div class="topic-border color-persian-green mb-30">
                                <div class="topic-box-lg color-persian-green">Esportes</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-30">
                                    <div class="img-overlay-70 img-scale-animate">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news69.jpg" alt="news" class="img-fluid width-100">
                                    </div>
                                    <ul class="item-box-light-mix item-shadow-gray">
                                        <li>
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>February 10, 2017</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark">
                                                <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                            </h3>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="media bg-body item-shadow-gray mb-30">
                                        <a class="img-opacity-hover width34-lg width30-md" href="single-news-1.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news70.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body media-padding15">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>February 10, 2017</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark mb-none">
                                                <a href="single-news-2.html">Can Be Monit roade year with Program.</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media bg-body item-shadow-gray mb-30">
                                        <a class="img-opacity-hover width34-lg width30-md" href="single-news-2.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news70.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body media-padding15">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>June 06, 2017</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark mb-none">
                                                <a href="single-news-3.html">Can Be Monit roade year with Program.</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media bg-body item-shadow-gray mb-30">
                                        <a class="img-opacity-hover width34-lg width30-md" href="single-news-3.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news70.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body media-padding15">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>August 22, 2017</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark mb-none">
                                                <a href="single-news-1.html">Can Be Monit roade year with Program.</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-30">
                                    <div class="topic-box-lg color-cod-gray">TV Web Estadão</div>
                                </div>
                                <div class="ne-banner-layout1 text-center">
                                    <iframe id="ytplayer" type="text/html" width="420" height="305"
src="https://www.youtube.com/embed/2hYdclXpTW8"
frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>

</div> <!-- container -->



<section class="bg-secondary-accent section-space-less30">
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <div class="topic-border color-scampi mb-30 width-100">
                              <div class="topic-box-lg color-scampi">Colunistas</div>
                        </div>
                  </div>
            </div>

            <div class="ne-carousel nav-control-top2 color-scampi owl-carousel owl-theme owl-responsive-1200 owl-loaded">





                              <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;">
                                    <div class="hover-show-play-btn item-shadow-gray mb-30">
                                          <div class="img-overlay-70">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news83.jpg" alt="news" class="img-fluid width-100">
                                                <div class="text-center">
                                                      <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                                            <img src="img/banner/play.png" alt="play" class="img-fluid">
                                                      </a>
                                                </div>
                                         </div>

                                         <div class="box-padding30 bg-body item-shadow-gray">
                                                <div class="post-date-dark">
                                                     <ul>
                                                           <li>
                                                                  <span>
                                                                         <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                  </span>February 10, 2017</li>
                                                      </ul>
                                                </div>
                                                <h3 class="title-medium-dark">
                                                       <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                                </h3>
                                          </div>
                                   </div>
                             </div>

                              <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;">
                                    <div class="hover-show-play-btn item-shadow-gray mb-30">
                                          <div class="img-overlay-70">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news83.jpg" alt="news" class="img-fluid width-100">
                                                <div class="text-center">
                                                      <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                                             <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news83.jpg" alt="play" class="img-fluid">
                                                      </a>
                                                </div>
                                         </div>
                                         <div class="box-padding30 bg-body item-shadow-gray">
                                               <div class="post-date-dark">
                                                      <ul>
                                                            <li>
                                                                  <span>
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                   </span>February 10, 2017
                                                             </li>
                                                     </ul>
                                          </div>

                                          <h3 class="title-medium-dark">
                                                <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                          </h3>
                                   </div>
                              </div>
                        </div>

                        <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="hover-show-play-btn item-shadow-gray mb-30">
                             <div class="img-overlay-70">
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news83.jpg" alt="news" class="img-fluid width-100">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="box-padding30 bg-body item-shadow-gray">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                </h3>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="hover-show-play-btn item-shadow-gray mb-30">
                            <div class="img-overlay-70">
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news83.jpg" alt="news" class="img-fluid width-100">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="box-padding30 bg-body item-shadow-gray">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                </h3>
                            </div>
                        </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="hover-show-play-btn item-shadow-gray mb-30">
                            <div class="img-overlay-70">
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news83.jpg" alt="news" class="img-fluid width-100">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="box-padding30 bg-body item-shadow-gray">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                </h3>
                            </div>
                        </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="hover-show-play-btn item-shadow-gray mb-30">
                            <div class="img-overlay-70">
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news83.jpg" alt="news" class="img-fluid width-100">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="box-padding30 bg-body item-shadow-gray">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                </h3>
                            </div>
                        </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="hover-show-play-btn item-shadow-gray mb-30">
                            <div class="img-overlay-70">
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news83.jpg" alt="news" class="img-fluid width-100">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="box-padding30 bg-body item-shadow-gray">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                </h3>
                            </div>
                        </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 20px;"><div class="hover-show-play-btn item-shadow-gray mb-30">
                            <div class="img-overlay-70">
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news83.jpg" alt="news" class="img-fluid width-100">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="box-padding30 bg-body item-shadow-gray">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                </h3>
                            </div>
                        </div></div>

                        <div class="owl-item active" style="width: 262.5px; margin-right: 20px;"><div class="hover-show-play-btn item-shadow-gray mb-30">
                            <div class="img-overlay-70">
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news83.jpg" alt="news" class="img-fluid width-100">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="box-padding30 bg-body item-shadow-gray">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                </h3>
                            </div>
                        </div></div>


                        <div class="owl-item cloned active" style="width: 262.5px; margin-right: 20px;"><div class="hover-show-play-btn item-shadow-gray mb-30">
                            <div class="img-overlay-70">
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news83.jpg" alt="news" class="img-fluid width-100">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="box-padding30 bg-body item-shadow-gray">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                </h3>
                            </div>
                        </div></div>

                        <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="hover-show-play-btn item-shadow-gray mb-30">
                            <div class="img-overlay-70">
                                <img src="img/news/news85.jpg" alt="news" class="img-fluid width-100">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="box-padding30 bg-body item-shadow-gray">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Erik Jones has day he won’t soon forget Denny backup at Bristol</a>
                                </h3>
                            </div>

                </div>
            </section>



            <section class="bg-accent section-space-default">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 mb-30">
                            <div class="topic-border color-apple mb-30 width-100">
                                <div class="topic-box-lg color-apple">Cultura</div>
                            </div>
                            <div class="img-overlay-70 img-scale-animate">
                                <div class="mask-content-sm">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>by</span>
                                                <a href="single-news-1.html">Adams</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>March 22, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-3.html">Not who has much is rich, but who gives much</a>
                                    </h3>
                                </div>
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news66.jpg" alt="news" class="img-fluid width-100">
                            </div>
                            <ul class="border-bottom-child p-20-r h3-mb-none-child bg-body item-shadow-gray">
                                <li>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="single-news-3.html">Not who has much is rich, but who gives much</a>
                                    </h3>
                                </li>
                                <li>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="single-news-3.html">Success is not a good teacher failure makes you humble</a>
                                    </h3>
                                </li>
                                <li>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="single-news-3.html">Yearsimpl textey and typesetting industry</a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-12 mb-30">
                            <div class="topic-border color-cutty-sark mb-30 width-100">
                                <div class="topic-box-lg color-cutty-sark">Olho vivo</div>
                            </div>
                            <div class="img-overlay-70 img-scale-animate">
                                <div class="mask-content-sm">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>by</span>
                                                <a href="single-news-1.html">Adams</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>March 22, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-3.html">Oppo Find 7 is the world need first phone that can take</a>
                                    </h3>
                                </div>
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news66.jpg" alt="news" class="img-fluid width-100">
                            </div>
                            <ul class="border-bottom-child p-20-r h3-mb-none-child bg-body item-shadow-gray">
                                <li>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="single-news-3.html">Amazon’s Apple Watch killer will be free and sell you</a>
                                    </h3>
                                </li>
                                <li>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="single-news-3.html">Can Mont rade yearsimpl textey and typesetting industry </a>
                                    </h3>
                                </li>
                                <li>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="single-news-3.html">Flir FX Camera Does Sports a new camera</a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-12 mb-30">
                            <div class="topic-border color-web-orange mb-30 width-100">
                                <div class="topic-box-lg color-web-orange">Polícia</div>
                            </div>
                            <div class="img-overlay-70 img-scale-animate">
                                <div class="mask-content-sm">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>by</span>
                                                <a href="single-news-1.html">Adams</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>March 22, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-3.html">Tacos ditched the naked chicken here's how to make …</a>
                                    </h3>
                                </div>
                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news66.jpg" alt="news" class="img-fluid width-100">
                            </div>
                            <ul class="border-bottom-child p-20-r h3-mb-none-child bg-body item-shadow-gray">
                                <li>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="single-news-3.html">Here's how to make Kevin's famous fish cutlet…</a>
                                    </h3>
                                </li>
                                <li>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="single-news-3.html">Can Mont rade yearsimpl textey and typesetting industry </a>
                                    </h3>
                                </li>
                                <li>
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="single-news-3.html">Mont rade yearsimpl textey typesetting</a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="ne-banner-layout1 mt-20-r text-center">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/banner/banner2.jpg" alt="ad" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="bg-secondary-accent section-space-less4">
                <div class="container">
                    <div class="row tab-space2">
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="img-overlay-70">
                                <div class="mask-content-sm">
                                    <div class="topic-box-sm color-pomegranate mb-20">Fitness</div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-3.html">Fitness area coverded they Governed this in 2017</a>
                                    </h3>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news61.jpg" alt="news" class="img-fluid width-100">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="row tab-space2">
                                <div class="col-sm-6 col-12 mb-4">
                                    <div class="img-overlay-70">
                                        <div class="mask-content-sm">
                                            <div class="topic-box-sm color-web-orange mb-20">Food</div>
                                            <h3 class="title-medium-light">
                                                <a href="single-news-3.html">Patricia Urquiola transparent area furney Italia with iridescent</a>
                                            </h3>
                                        </div>

                                        <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news64.jpg" alt="news" class="img-fluid width-100">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12 mb-4">
                                    <div class="img-overlay-70">
                                        <div class="mask-content-sm">
                                            <div class="topic-box-sm color-azure-radiance mb-20">Sports</div>
                                            <h3 class="title-medium-light">
                                                <a href="single-news-3.html">Patricia Urquiola transparent area furney Italia with iridescent</a>
                                            </h3>
                                        </div>

                                        <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news64.jpg" alt="news" class="img-fluid width-100">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12 mb-4">
                                    <div class="img-overlay-70">
                                        <div class="mask-content-sm">
                                            <div class="topic-box-sm color-persian-green mb-20">Business</div>
                                            <h3 class="title-medium-light">
                                                <a href="single-news-3.html">Patricia Urquiola transparent area furney Italia with iridescent</a>
                                            </h3>
                                        </div>

                                        <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news64.jpg" alt="news" class="img-fluid width-100">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12 mb-4">
                                    <div class="img-overlay-70">
                                        <div class="mask-content-sm">
                                            <div class="topic-box-sm color-hollywood-cerise mb-20">Music</div>
                                            <h3 class="title-medium-light">
                                                <a href="single-news-3.html">Patricia Urquiola transparent area furney Italia with iridescent</a>
                                            </h3>
                                        </div>

                                        <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news64.jpg" alt="news" class="img-fluid width-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>





<section class="bg-accent section-space-less30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="ne-isotope">
                                <div class="topic-border color-azure-radiance mb-30">
                                    <div class="topic-box-lg color-azure-radiance">Mais Notícias</div>

                                    <div class="more-info-link">
                                        <a href="post-style-1.html">Mais
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="featuredContainer" style="position: relative; height: 942.125px;">
                                    <div class="football" style="position: absolute; left: 0px; top: 0px;">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-6 col-12 mb-30">
                                                <div class="media item-shadow-gray bg-body media-none--sm">
                                                    <div class="position-relative width-36 width43-lg">
                                                        <a href="single-news-1.html" class="img-opacity-hover img-overlay-70">
                                                            <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news55.jpg" alt="news" class="img-fluid">
                                                        </a>
                                                        <div class="topic-box-top-xs">
                                                            <div class="topic-box-sm color-cod-gray mb-20">Football</div>
                                                        </div>
                                                    </div>
                                                    <div class="media-body media-padding30 p-mb-none-child">
                                                        <div class="post-date-dark">
                                                            <ul>
                                                                <li>
                                                                    <span>by</span>
                                                                    <a href="single-news-1.html">Jacob</a>
                                                                </li>
                                                                <li>
                                                                    <span>
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                    </span>May 27, 2017</li>
                                                            </ul>
                                                        </div>
                                                        <h3 class="title-semibold-dark size-lg mb-15">
                                                            <a href="single-news-1.html">Football meras on the back SepatheyTG G6 will have theytics.</a>
                                                        </h3>
                                                        <p>Separated they right at the coast a large ocean. A small river named
                                                            Duden flows by their place and ...
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-12 mb-30">
                                                <div class="media item-shadow-gray bg-body media-none--sm">
                                                    <div class="position-relative width-36 width43-lg">
                                                        <a href="single-news-1.html" class="img-opacity-hover img-overlay-70">
                                                            <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news55.jpg" alt="news" class="img-fluid">
                                                        </a>
                                                        <div class="topic-box-top-xs">
                                                            <div class="topic-box-sm color-cod-gray mb-20">Diving</div>
                                                        </div>
                                                    </div>
                                                    <div class="media-body media-padding30 p-mb-none-child">
                                                        <div class="post-date-dark">
                                                            <ul>
                                                                <li>
                                                                    <span>by</span>
                                                                    <a href="single-news-1.html">Jacob</a>
                                                                </li>
                                                                <li>
                                                                    <span>
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                    </span>May 27, 2017</li>
                                                            </ul>
                                                        </div>
                                                        <h3 class="title-semibold-dark size-lg mb-15">
                                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                                        </h3>
                                                        <p>Separated they right at the coast a large ocean. A small river named
                                                            Duden flows by their place and ...
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-12 mb-30">
                                                <div class="media item-shadow-gray bg-body media-none--sm">
                                                    <div class="position-relative width-36 width43-lg">
                                                        <a href="single-news-1.html" class="img-opacity-hover img-overlay-70">
                                                            <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news55.jpg" alt="news" class="img-fluid">
                                                        </a>
                                                        <div class="topic-box-top-xs">
                                                            <div class="topic-box-sm color-cod-gray mb-20">Cycling</div>
                                                        </div>
                                                    </div>
                                                    <div class="media-body media-padding30 p-mb-none-child">
                                                        <div class="post-date-dark">
                                                            <ul>
                                                                <li>
                                                                    <span>by</span>
                                                                    <a href="single-news-1.html">Jacob</a>
                                                                </li>
                                                                <li>
                                                                    <span>
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                    </span>May 27, 2017</li>
                                                            </ul>
                                                        </div>
                                                        <h3 class="title-semibold-dark size-lg mb-15">
                                                            <a href="single-news-1.html">A taste of what we like this week at CookA like this current
                                                                week
                                                            </a>
                                                        </h3>
                                                        <p>Separatede in the coast of the a ocean. A small river named Duden
                                                            flows by their place and ...
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-12 mb-30">
                                                <div class="media item-shadow-gray bg-body media-none--sm">
                                                    <div class="position-relative width-36 width43-lg">
                                                        <a href="single-news-1.html" class="img-opacity-hover img-overlay-70">
                                                            <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news55.jpg" alt="news" class="img-fluid">
                                                        </a>
                                                        <div class="topic-box-top-xs">
                                                            <div class="topic-box-sm color-cod-gray mb-20">Football</div>
                                                        </div>
                                                    </div>
                                                    <div class="media-body media-padding30 p-mb-none-child">
                                                        <div class="post-date-dark">
                                                            <ul>
                                                                <li>
                                                                    <span>by</span>
                                                                    <a href="single-news-1.html">Jacob</a>
                                                                </li>
                                                                <li>
                                                                    <span>
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                    </span>May 27, 2017</li>
                                                            </ul>
                                                        </div>
                                                        <h3 class="title-semibold-dark size-lg mb-15">
                                                            <a href="single-news-1.html">Football meras on the back SepatheyTG G6 will have theytics.</a>
                                                        </h3>
                                                        <p>Separated they right at the coast a large ocean. A small river named
                                                            Duden flows by their place and ...
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-30">
                                    <div class="topic-box-lg color-cod-gray">Latest Reviews</div>
                                </div>
                                <div class="d-inline-block">
                                    <div class="media mb30-list bg-body">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news72.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body media-padding15">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>February 10, 2017</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark mb-none">
                                                <a href="single-news-2.html">Can Be Monit roade year with Program.</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb30-list bg-body">
                                        <a class="img-opacity-hover" href="single-news-2.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news72.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body media-padding15">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>June 06, 2017</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark mb-none">
                                                <a href="single-news-3.html">Can Be Monit roade year with Program.</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb30-list bg-body">
                                        <a class="img-opacity-hover" href="single-news-3.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/noticias/news72.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body media-padding15">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>August 22, 2017</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark mb-none">
                                                <a href="single-news-1.html">Can Be Monit roade year with Program.</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-30">
                                    <div class="topic-box-lg color-cod-gray">Newsletter</div>
                                </div>
                                <div class="newsletter-area bg-primary">
                                    <h2 class="title-medium-light size-xl line-height-custom">Subscribe to our mailing list to get the new updates!</h2>
                                    <img src="img/banner/newsletter.png" alt="newsletter" class="img-fluid mb-10">
                                    <p>Subscribe our newsletter to stay updated</p>
                                    <div class="input-group stylish-input-group">
                                        <input type="text" placeholder="Enter your mail" class="form-control">
                                        <span class="input-group-addon">
                                            <button type="submit">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


<?php
get_footer();
