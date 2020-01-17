<?php

/**
 * Plugins are described by creating a $plugin array which will be used
 * by the system that includes this file.
 */
$plugin = array(
  'title' => 'Bloque Videos Home 12 columnas',
  'description' => t('Bloques Opinión Videos - Home 12 columnas con tema configurable'),

  // 'single' => TRUE means has no subtypes.
  'single' => TRUE,
  // Constructor.
  'content_types' => array('bloques_videos_opinion_pane_home12c'),
  // Name of a function which will render the block.
  'render callback' => 'bloques_videos_opinion_pane_home12c_render',
  // The default context.
  'defaults' => array(),

  // This explicitly declares the config form. Without this line, the func would be
  // ctools_plugin_example_no_context_content_type_edit_form.
  'edit form' => 'bloques_videos_opinion_pane_home12c_edit_form',

  // Icon goes in the directory with the content type.
  'icon' => 'icon_example.png',
  #'icon' => '../layouts/imagen-grande.png',
  'category' => 'HOME',

  // This example does not provide 'admin info', which would populate the
  // panels builder page preview.
  'admin info' => 'bloques_videos_opinion_pane_home12c_info',
);


/**
 * 'Edit form' callback for the content type.
 * This example just returns a form; validation and submission are standard drupal
 * Note that if we had not provided an entry for this in hook_content_types,
 * this could have had the default name
 * ctools_plugin_example_no_context_content_type_edit_form.
 */
function bloques_videos_opinion_pane_home12c_edit_form($form, &$form_state) {
  global $base_url;
  $conf = $form_state['conf'];

  drupal_add_css(drupal_get_path('module', 'bloques_videos_opinion') . '/css/videos_info.css');

  $path = $base_url .'/'. drupal_get_path('module', 'bloques_videos_opinion');
  $image = '<img src="'.$path.'/plugins/layouts/imagen_videos12c.png" />';

  $form['video_title'] = array(
    '#type' => 'textfield',
    '#title' => 'Título del bloque',
    '#description' => "Escriba el nombre del encabezado",
    '#default_value' => !empty($conf['video_title']) ? $conf['video_title'] : '',
    '#prefix' => '<div class="clear-block no-float">',
    '#suffix' => '</div>',
  );
  $form['video_url'] = array(
    '#type' => 'textfield',
    '#title' => 'Liga para título del bloque',
    '#description' => "Escriba la dirección URL a la que enviará el título del bloque",
    '#default_value' => !empty($conf['video_url']) ? $conf['video_url'] : '',
    '#prefix' => '<div class="clear-block no-float">',
    '#suffix' => '<div class="videos-info">' . $image . '</div></div>',
  );

  return $form;
}

function bloques_videos_opinion_pane_home12c_edit_form_submit($form, &$form_state) {
  foreach (array('video_title', 'video_url') as $index) {
    $form_state['conf'][$index] = $form_state['values'][$index];
  }
}

/**
 * Run-time rendering of the body of the block.
 *
 * @param $subtype
 * @param $conf
 *   Configuration as done at admin time.
 * @param $args
 * @param $context
 *   Context - in this case we don't have any.
 *
 * @return
 *   An object with at least title and content members.
 */
function bloques_videos_opinion_pane_home12c_render($subtype, $conf, $args, $context) {
  #dpm($subtype);
  #dpm($conf['video_template']);
  #dpm($args);
  #dpm($context);
  $info = array(
    'title' => $conf['video_title'],
    'url'   => $conf['video_url'],
  );
  $content = theme('bloques_videos_opinion_home12c', $info);
  #var_dump($content);die();
  $block = new stdClass();

  // The title actually used in rendering.
  $block->title = '<none>';
  $block->content = $content;

  return $block;

}

/**
 * For admin info attribute of plugin bloques_videos_pane_home12c.
 */
function bloques_videos_opinion_pane_home12c_info($subtype, $conf, $contexts) {
  if (!empty($conf['video_title'])) {
    $info = array(
      'title' => $conf['video_title'],
      'url'   => $conf['video_url'],
    );
    $content = theme('bloques_videos_opinion_home12c', $info);

    $block = new stdClass;
    $block->title = 'Bloque Opinión de videos Home a 12 columnas';
    $block->content = $content;

    return $block;
  }
}
