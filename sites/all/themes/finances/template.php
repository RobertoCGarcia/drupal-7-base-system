<?php

/**
 * Add body classes if certain regions have content.
 */
 /**
  * Override or insert variables into the page template for HTML output.
  */
 //Agregar una clase especifica dentro de la etiqueta etiqueta body
function finances_preprocess_html(&$variables) {

  // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));

  $variables['classes_array'][] = 'my-new-body-class';
  //$options = array(
  //  'group' => JS_THEME,
  //  'scope' => 'footer',
  //);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/aos.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/bootstrap-datepicker.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/bootstrap.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/isotope.pkgd.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery-3.3.1.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery-migrate-3.0.1.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery-ui.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.countdown.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.easing.1.3.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.fancybox.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.magnific-popup.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.stellar.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.sticky.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/main.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/mediaelement-and-player.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/owl.carousel.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/popper.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/slick.min.js', $options);
  //drupal_add_js(drupal_get_path('theme', 'finances'). '/js/typed.js', $options);

}


//Agregar una clase especifica dentro de la etiqueta etiqueta body
function finances_preprocess(&$variables, $hook){
    if ($hook == 'page' || $hook == 'html') {
        //  $classes = layout_access_get_class();
        //  $variables['classes_array'] = array_merge($variables['classes_array'], $classes);
        $classes[] = "clase_para_body"; //eluniversal_get_layout_class();
        $variables['classes_array'] = array_merge($variables['classes_array'], $classes);
    }
}

function finances_preprocess_image(&$variables){
  $attributes = &$variables['attributes'];

  foreach (array('width', 'height') as $key) {
    unset($attributes[$key]);
    unset($variables[$key]);
  }
}


function finances_preprocess_node(&$variables) {
  $variables['eluniversal_hook_suggestions'][] = 'node__' . $variables['type'] . '__' . $variables['view_mode'];
}



/**
 * Override or insert variables into the page template.
 */
function finances_preprocess_page(&$variables) {
  // Hook into color.module.
  // Hook into color.module.

  //print "eluniversal_preprocess_html";
  //print_r ($variables['classes_array']);
  //dpm($variables);
  //dpm($hook);
  //print_r($hook);
  $path = drupal_get_path_alias($_GET['q']);
  $aliases = explode('/', $path);
  $arg0 = arg(0); $arg1 = arg(1); $arg2 = arg(2); $arg3 = arg(3);
  $sectionName = " ";
  $displayTitle = " ";

  $seccionesWebsite = array();
  $seccionesWebsite[0] = "nacion";
  $seccionesWebsite[1] = "mundo";
  $seccionesWebsite[2] = "metropoli";
  $seccionesWebsite[3] = "estados";
  $seccionesWebsite[4] = "opinion";
  $seccionesWebsite[5] = "cartera";
  $seccionesWebsite[6] = "deportes";
  $seccionesWebsite[7] = "espectaculos";
  $seccionesWebsite[8] = "cuktura";
  $seccionesWebsite[9] = "ciencia-y-salud";
  $seccionesWebsite[10] = "english";
  $seccionesWebsite[11] = "minuto-x-minuto";
  $seccionesWebsite[12] = "techbit";
  $seccionesWebsite[13] = "menu";
  $seccionesWebsite[14] = "de-ultima";
  $seccionesWebsite[15] = "destinos";
  $seccionesWebsite[16] = "autopistas";
  $seccionesWebsite[17] = "tiempo-de-relojes";




  //print "path: " . $path . "<br/>";
  //print "aliases: " . $aliases. "<br/>";
  //print "arg0: " . $arg0 . "<br/>";
  //print "arg1: " . $arg1 . "<br/>";
  //print "arg2: " . $arg2 . "<br/>";
  //print "arg3: " . $arg3 . "<br/>";
  $direccion = " path: " . $path . " - aliases: " . $aliases . " - arg0: - " . $arg0 . " - arg1: - " . $arg1  . " - arg2: - " . $arg2   . " - arg3: - " . $arg3 ;

  dpm($direccion);

  //Visualizando: Termino de Taxonomia
  if($arg0 == 'taxonomy' && $arg1 == 'term') {
      $term = menu_get_object('taxonomy_term', 2);
      if (is_object($term) && isset($term->name)) {
          $sectionName = transliteration_get($term->name);
          $termNameB = strtolower(transliteration_get($term->name, '?', language_default('language')));
          //print " Section Name: " . $sectionName . "<br/>";
          //print " termNameB: " . $termNameB . "<br/>";
          $displayTitle = "0";
      }
  }

  //Visualizando: Home
  if(drupal_is_front_page()){
    $sectionName = "Home";
    //print " Section Name: " . $sectionName . "<br/>";
    $displayTitle = 0;
  }

  //Visualizando: Nodos - Articulos - Opinión
  if ($arg0 == "node" && is_numeric($arg1)) {
    $sectionName = "Node";
    $node = menu_get_object();
    $displayTitle = 0;
    //dpm($node);
    //print " Section Name: " . $sectionName . "<br/>";
  }


  //print_r($vars);
  $variables['sectionName'] = $sectionName;
  dpm($variables['sectionName']);

}




function finances_css_alter(&$css) {

     // Remove Drupal core css
     $exclude = array(
     'modules/aggregator/aggregator.css' => FALSE,
     'modules/block/block.css' => FALSE,
     'modules/book/book.css' => FALSE,
     'modules/comment/comment.css' => FALSE,
     'modules/dblog/dblog.css' => FALSE,
     'modules/field/theme/field.css' => FALSE,
     'modules/file/file.css' => FALSE,
     'modules/filter/filter.css' => FALSE,
     'modules/forum/forum.css' => FALSE,
     'modules/help/help.css' => FALSE,
     'modules/menu/menu.css' => FALSE,
     'modules/node/node.css' => FALSE,
     'modules/openid/openid.css' => FALSE,
     'modules/poll/poll.css' => FALSE,
     'modules/profile/profile.css' => FALSE,
     'modules/search/search.css' => FALSE,
     'modules/statistics/statistics.css' => FALSE,
     'modules/syslog/syslog.css' => FALSE,
     'modules/system/admin.css' => FALSE,
     'modules/system/maintenance.css' => FALSE,
     'modules/system/system.css' => FALSE,
     'modules/system/system.admin.css' => FALSE,
     'modules/system/system.base.css' => FALSE,
     'modules/system/system.maintenance.css' => FALSE,
     'modules/system/system.messages.css' => FALSE,
     'modules/system/system.menus.css' => FALSE,
     'modules/system/system.theme.css' => FALSE,
     'modules/taxonomy/taxonomy.css' => FALSE,
     'modules/tracker/tracker.css' => FALSE,
     'modules/update/update.css' => FALSE,
     'modules/user/user.css' => FALSE,
     'misc/vertical-tabs.css' => FALSE,
     // Remove contrib module CSS
     drupal_get_path('module', 'views') . '/css/views.css' => FALSE, );
     $css = array_diff_key($css, $exclude);

}
