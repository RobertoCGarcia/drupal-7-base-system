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
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['content']: The main content of the current page.
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
<div id="overlayer"></div>
<div class="loader">
  <div class="spinner-border text-primary" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>


<div class="site-wrap">

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 col-xl-2">
          <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">Finances<span class="text-primary">.</span> </a></h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li><a href="#home-section" class="nav-link">Home</a></li>
              <li class="has-children">
                <a href="#about-section" class="nav-link">About Us</a>
                <ul class="dropdown">
                  <li><a href="#team-section" class="nav-link">Team</a></li>
                  <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                  <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                  <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
                  <li><a href="#services-section" class="nav-link">Services</a></li>
                  <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                  <li class="has-children">
                    <a href="#">More Links</a>
                    <ul class="dropdown">
                      <li><a href="#">Menu One</a></li>
                      <li><a href="#">Menu Two</a></li>
                      <li><a href="#">Menu Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#blog-section" class="nav-link">Blog</a></li>
              <li><a href="#contact-section" class="nav-link">Contact</a></li>
              <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
              <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a></li>
              <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li>
            </ul>
          </nav>
        </div>
        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
      </div>
    </div>
  </header>

 <?php print render($page['content']); ?>


  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-5">
              <h2 class="footer-heading mb-4">About Us</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
            </div>
            <div class="col-md-3 ml-auto">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#about-section" class="smoothscroll">Terms</a></li>
                <li><a href="#about-section" class="smoothscroll">Policy</a></li>
                <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                <li><a href="#services-section" class="smoothscroll">Services</a></li>
                <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-social">
              <h2 class="footer-heading mb-4">Follow Us</h2>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
          <form action="#" method="post" class="footer-subscribe">
            <div class="input-group mb-3">
              <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p>Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

          </div>
        </div>

      </div>
    </div>
  </footer>

</div> <!-- .site-wrap -->

<script src="/sites/all/themes/finances/js/jquery-3.3.1.min.js"></script>
<script src="/sites/all/themes/finances/js/jquery-ui.js"></script>
<script src="/sites/all/themes/finances/js/popper.min.js"></script>
<script src="/sites/all/themes/finances/js/bootstrap.min.js"></script>
<script src="/sites/all/themes/finances/js/owl.carousel.min.js"></script>
<script src="/sites/all/themes/finances/js/jquery.countdown.min.js"></script>
<script src="/sites/all/themes/finances/js/jquery.easing.1.3.js"></script>
<script src="/sites/all/themes/finances/js/aos.js"></script>
<script src="/sites/all/themes/finances/js/jquery.fancybox.min.js"></script>
<script src="/sites/all/themes/finances/js/jquery.sticky.js"></script>
<script src="/sites/all/themes/finances/js/isotope.pkgd.min.js"></script>
<script src="/sites/all/themes/finances/js/main.js"></script>
