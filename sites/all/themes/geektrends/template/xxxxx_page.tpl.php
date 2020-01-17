<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<header id="header" class="header header-hide">
  <div class="container">

    <div id="logo" class="pull-left">
      <h1><a href="#body" class="scrollto"><span>Web </span>& Design</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="#hero">Home</a></li>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#acercade">Acerca de</a></li>

        <li><a href="#portafolios">Portafolios</a></li>
        <li><a href="#pricing">Paquetes</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contact">Contacto</a></li>
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
</header><!-- #header -->

<!--==========================
  Hero Section
============================-->
<section id="hero" class="wow fadeIn">
  <div class="hero-container">
    <div class="mx-auto" style="width: 600px; top: 150px;">
        <!-- <h1>Welcome to eStartups</h1>
        <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2>
        -->
      <!-- <img src="img/geek-robot.jpg" alt="Hero Imgs"> -->
      <p>&nbsp;</p>
      <h1>Welcome to Geek Trends</h1>
      <img src="https://www.geek.com/wp-content/uploads/2014/09/Edison-Humanoid-625x350.jpg" alt="Hero Imgs">
      <a href="#get-started" class="btn-get-started scrollto">Creación Comienza Aquí</a>
    </div>

  </div>
</section><!-- #hero -->

<!--==========================
  Get Started Section
============================-->
<section id="get-started" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">

      <h2>Innovar es vital para tu negocio crea hoy mismo tu sitio web</h2>

      <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->

      <a href="#get-started" class="btn-get-started scrollto">Comienza Aqui</a>
      <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> Windows</a>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-6 col-lg-4">
        <div class="feature-block">

          <img src="/sites/all/themes/geektrends/img/svg/cloud.svg" alt="img" class="img-fluid">
          <h4>introducing whatsapp</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          <a href="#">read more</a>

        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="feature-block">

          <img src="/sites/all/themes/geektrends/img/svg/planet.svg" alt="img" class="img-fluid">
          <h4>user friendly interface</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          <a href="#">read more</a>

        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="feature-block">

          <img src="/sites/all/themes/geektrends/img/svg/asteroid.svg" alt="img" class="img-fluid">
          <h4>build the app everyone love</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          <a href="#">read more</a>

        </div>
      </div>

    </div>
  </div>

</section>

<!--==========================
  Servicios Section
============================-->

<section id="servicios" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">
      <h2>Nuestros Servicios.</h2>
      <p class="separator">Somos especialistas en Programación Web y en Diseño</p>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/paint-palette.svg" alt="img" class="img-fluid">
          <h4>Identidad Corporativa</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/vector.svg" alt="img" class="img-fluid">
          <h4>Edición de vídeo</h4>
          <p>únicamente post producción, no shootings</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/design-tool.svg" alt="img" class="img-fluid">
          <h4>Animaciones 2D y 3D </h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/asteroid.svg" alt="img" class="img-fluid">
          <h4>Diseño digital y retoque de imagen.</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/asteroid.svg" alt="img" class="img-fluid">
          <h4>Desarrollo de Sitios Web</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/cloud-computing.svg" alt="img" class="img-fluid">
          <h4>Editorial web</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/pixel.svg" alt="img" class="img-fluid">
          <h4>Sliders Carruseles</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/code.svg" alt="img" class="img-fluid">
          <h4>Formulario web</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/code.svg" alt="img" class="img-fluid">
          <h4>Sistemas administrativos  web  </h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/code.svg" alt="img" class="img-fluid">
          <h4>Landing pages</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/code.svg" alt="img" class="img-fluid">
          <h4>Administración de web hosting </h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/sites/all/themes/geektrends/img/svg/code.svg" alt="img" class="img-fluid">
          <h4>Administración de servidores Linux</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
      </div>


    </div>
  </div>
</section>


  <!--==========================
    About Us Section
  ============================-->
  <section id="acercade" class="acercade padd-section wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-5 col-lg-3">
          <img src="img/about-img.png" alt="Acerca de">
        </div>

        <div class="col-md-7 col-lg-5">
          <div class="about-content">
            <h2><span>Acerca de</span>  </h2>
            <p> Somos Geeks que comparten la pasión por las tendencias de Desarrollo Web y Diseño. Con nuestros talentos combinados buscamos crear soluciones digitales innovadoras con base
              a las necesidades de tu proyecto.
              <br/>
              Queremos desarrollar una relación de confianza con nuestros clientes basados en los siguientes puntos:
            </p>
            <ul class="list-unstyled">
              <li>
                <div class="head_text_title">
                   <i class="fa fa-angle-right"></i>CONSTRUIR CONFIANZA
                </div>
                <div class="head_text">
                   <p>Establecer y mantener una trayectoria de comportamiento ético y legal en el mercado.</p>
                </div>
              </li>

              <li>
                <div class="head_text_title">
                   <i class="fa fa-angle-right"></i>ANUNCIARSE HONESTAMENTE
                </div>
                <div class="head_text" >
                   <p>Respetar las reglas en materia de publicidad y promociones.</p>
                </div>
              </li>


              <li>
                <div class="head_text_title">
                   <i class="fa fa-angle-right"></i>DECIR LA VERDAD
                </div>
                <div class="head_text">
                   <p>Presentar honestamente los productos y servicios, incluyendo información clara y adecuada sobre los términos y condiciones ligados a los mismos.</p>
                </div>
              </li>


              <li>
                <div class="head_text_title">
                   <i class="fa fa-angle-right"></i>SER TRANSPARENTE
                </div>
                <div class="head_text">
                   <p> Divulgar claramente todas las políticas, garantías y procedimientos que influyen en la decisión de compra de los clientes.</p>
                </div>
              </li>



              <li>
                <div class="head_text_title">
                   <i class="fa fa-angle-right"></i>HONRAR LAS PROMESAS
                </div>
                <div class="head_text">
                   <p>Cumplir con todos los acuerdos escritos y verbales establecidos con nuestros clientes.</p>
                </div>
              </li>



              <li>
                <div class="head_text_title">
                   <i class="fa fa-angle-right"></i>RESPONDER OPORTUNAMENTE
                </div>
                <div class="head_text">
                   <p>Atender las quejas de nuestros clientes de forma rápida, profesional y oportuna.</p>
                </div>
              </li>


              <li>
                <div class="head_text_title">
                   <i class="fa fa-angle-right"></i>PROTEGER DATOS PERSONALES
                </div>
                <div class="head_text">
                   <p> Obtenemos solo la información personal de nuestros clientes necesaria para la operación y protegerla.</p>
                </div>
              </li>


              <li>
                <div class="head_text_title">
                   <i class="fa fa-angle-right"></i>SER ÍNTEGROS
                </div>
                <div class="head_text">
                   <p>Ser honorable en las relaciones de tu negocio con nuestros clientes y el mercado.</p>
                </div>
              </li>



            </ul>

          </div>
        </div>

      </div>
    </div>
  </section>



<!--==========================
  portafolios Section
============================-->
<section id="portafolios" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">
      <h2>App Gallery</h2>
      <p class="separator">Integer cursus bibendum augue ac cursus .</p>
    </div>
  </div>

  <div class="container">
    <div class="owl-carousel owl-theme">

      <div><img src="img/screen/1.jpg" alt="img"></div>
      <div><img src="img/screen/2.jpg" alt="img"></div>
      <div><img src="img/screen/3.jpg" alt="img"></div>
      <div><img src="img/screen/4.jpg" alt="img"></div>
      <div><img src="img/screen/5.jpg" alt="img"></div>
      <div><img src="img/screen/6.jpg" alt="img"></div>
      <div><img src="img/screen/7.jpg" alt="img"></div>
      <div><img src="img/screen/8.jpg" alt="img"></div>
      <div><img src="img/screen/9.jpg" alt="img"></div>

    </div>
  </div>

</section>

<!--==========================
  Video Section
============================-->

<section id="video" class="text-center wow fadeInUp">
  <div class="overlay">
    <div class="container-fluid container-full">

      <div class="row">
        <a href="#" class="js-modal-btn play-btn" data-video-id="s22ViV7tBKE"></a>
      </div>

    </div>
  </div>
</section>

<!--==========================
  Testimonials Section
============================-->

<section id="testimonials" class="padd-section text-center wow fadeInUp">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-8">

        <div class="testimonials-content">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

              <div class="carousel-item  active">
                <div class="top-top">

                  <h2>Our Users Speack volumes us</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries.</p>
                  <h4>Kimberly Tran<span>manager</span></h4>

                </div>
              </div>

              <div class="carousel-item ">
                <div class="top-top">

                  <h2>Our Users Speack volumes us</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries.</p>
                  <h4>Henderson<span>manager</span></h4>

                </div>
              </div>

              <div class="carousel-item ">
                <div class="top-top">

                  <h2>Our Users Speack volumes us</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries.</p>
                  <h4>David Spark<span>manager</span></h4>

                </div>
              </div>

            </div>

            <div class="btm-btm">

              <ul class="list-unstyled carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ul>

            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!--==========================
  Pricing Table Section
============================-->
<section id="pricing" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">

      <h2>Meet With Price</h2>
      <p class="separator">Integer cursus bibendum augue ac cursus .</p>

    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-6 col-lg-3">
        <div class="block-pricing">
          <div class="table">
            <h4>basic</h4>
            <h2>$29</h2>
            <ul class="list-unstyled">
              <li><b>4 GB</b> Ram</li>
              <li><b>7/24</b> Tech Support</li>
              <li><b>40 GB</b> SSD Cloud Storage</li>
              <li>Monthly Backups</li>
              <li>Palo Protection</li>
            </ul>
            <div class="table_btn">
              <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="block-pricing">
          <div class="table">
            <h4>PERSONAL</h4>
            <h2>$29</h2>
            <ul class="list-unstyled">
              <li><b>4 GB</b> Ram</li>
              <li><b>7/24</b> Tech Support</li>
              <li><b>40 GB</b> SSD Cloud Storage</li>
              <li>Monthly Backups</li>
              <li>Palo Protection</li>
            </ul>
            <div class="table_btn">
              <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="block-pricing">
          <div class="table">
            <h4>BUSINESS</h4>
            <h2>$29</h2>
            <ul class="list-unstyled">
              <li><b>4 GB</b> Ram</li>
              <li><b>7/24</b> Tech Support</li>
              <li><b>40 GB</b> SSD Cloud Storage</li>
              <li>Monthly Backups</li>
              <li>Palo Protection</li>
            </ul>
            <div class="table_btn">
              <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="block-pricing">
          <div class="table">
            <h4>profeesional</h4>
            <h2>$29</h2>
            <ul class="list-unstyled">
              <li><b>4 GB</b> Ram</li>
              <li><b>7/24</b> Tech Support</li>
              <li><b>40 GB</b> SSD Cloud Storage</li>
              <li>Monthly Backups</li>
              <li>Palo Protection</li>
            </ul>
            <div class="table_btn">
              <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--==========================
  Blog Section
============================-->
<section id="blog" class="padd-section wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">

      <h2>Latest posts</h2>
      <p class="separator">Integer cursus bibendum augue ac cursus .</p>

    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-6 col-lg-4">
        <div class="block-blog text-left">
          <a href="#"><img src="img/blog/blog-image-1.jpg" alt="img"></a>
          <div class="content-blog">
            <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
            <span>05, juin 2017</span>
            <a class="pull-right readmore" href="#">read more</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="block-blog text-left">
          <a href="#"><img src="img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
          <div class="content-blog">
            <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
            <span>05, juin 2017</span>
            <a class="pull-right readmore" href="#">read more</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="block-blog text-left">
          <a href="#"><img src="img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
          <div class="content-blog">
            <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
            <span>05, juin 2017</span>
            <a class="pull-right readmore" href="#">read more</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!--==========================
  Newsletter Section
============================-->
<section id="newsletter" class="newsletter text-center wow fadeInUp">
  <div class="overlay padd-section">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-6">
          <form class="form-inline" method="POST" action="#">

            <input type="email" class="form-control " placeholder="Email Adress" name="email">
            <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>

          </form>

        </div>
      </div>

        <ul class="list-unstyled">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>


    </div>
  </div>
</section>

<!--==========================
  Contact Section
============================-->
<section id="contact" class="padd-section wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">
      <h2>Contacto</h2>
      <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-3 col-md-4">

        <div class="info">
          <div>
            <i class="fa fa-map-marker"></i>
            <p>A108 Adam Street<br>New York, NY 535022</p>
          </div>

          <div class="email">
            <i class="fa fa-envelope"></i>
            <p>info@example.com</p>
          </div>

          <div>
            <i class="fa fa-phone"></i>
            <p>+1 5589 55488 55s</p>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>

      </div>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section><!-- #contact -->

<!--==========================
  Footer
============================-->
<footer class="footer">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-lg-4">
        <div class="footer-logo">

          <a class="navbar-brand" href="#">eStartup</a>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>

        </div>
      </div>

      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Abou Us</h4>

          <ul class="list-unstyled">
            <li><a href="#">About us</a></li>
            <li><a href="#">Features item</a></li>
            <li><a href="#">Live streaming</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>

        </div>
      </div>

      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Abou Us</h4>

          <ul class="list-unstyled">
            <li><a href="#">About us</a></li>
            <li><a href="#">Features item</a></li>
            <li><a href="#">Live streaming</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>

        </div>
      </div>

      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Support</h4>

          <ul class="list-unstyled">
            <li><a href="#">faq</a></li>
            <li><a href="#">Editor help</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>

        </div>
      </div>

      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Abou Us</h4>

          <ul class="list-unstyled">
            <li><a href="#">About us</a></li>
            <li><a href="#">Features item</a></li>
            <li><a href="#">Live streaming</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>

        </div>
      </div>

    </div>
  </div>

  <div class="copyrights">
    <div class="container">
      <p>&copy; Copyrights eStartup. All rights reserved.</p>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </div>

</footer>



<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="/sites/all/themes/geektrends/lib/jquery/jquery.min.js"></script>
<script src="/sites/all/themes/geektrends/lib/jquery/jquery-migrate.min.js"></script>
<script src="/sites/all/themes/geektrends/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/sites/all/themes/geektrends/lib/superfish/hoverIntent.js"></script>
<script src="/sites/all/themes/geektrends/lib/superfish/superfish.min.js"></script>
<script src="/sites/all/themes/geektrends/lib/easing/easing.min.js"></script>
<script src="/sites/all/themes/geektrends/lib/modal-video/js/modal-video.js"></script>
<script src="/sites/all/themes/geektrends/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/sites/all/themes/geektrends/lib/wow/wow.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="/sites/all/themes/geektrends/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="/sites/all/themes/geektrends/js/main.js"></script>
